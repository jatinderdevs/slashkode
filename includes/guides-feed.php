<?php
/**
 * Slashkode: blog feed helper for the "Guides" section.
 *
 * Reads the htmly RSS feed on the server, keeps a small cache file, and never
 * breaks the page: if the feed is down it uses the last good copy, and if there
 * is no copy it uses the fallback list passed in by the section.
 *
 * Needs PHP 7.0+ with SimpleXML (standard). Uses cURL if present, otherwise
 * file_get_contents.
 */

if (!function_exists('sk_guides_load')) {

    /** Decode feed text (htmly double-escapes some categories) and strip tags. */
    function sk_guides_clean($s)
    {
        $s = (string) $s;
        for ($i = 0; $i < 2; $i++) {
            $s = html_entity_decode($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        return trim(strip_tags($s));
    }

    /** Download the feed body, or null on any failure. */
    function sk_guides_fetch($url, $timeout = 3)
    {
        if (!preg_match('#^https?://#i', $url)) {
            return null;
        }
        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT        => $timeout,
                CURLOPT_CONNECTTIMEOUT => 2,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_MAXREDIRS      => 2,
                CURLOPT_USERAGENT      => 'Slashkode-GuidesFeed/1.0',
                CURLOPT_PROTOCOLS      => CURLPROTO_HTTP | CURLPROTO_HTTPS,
            ]);
            $body = curl_exec($ch);
            $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
            return ($body !== false && $code === 200) ? $body : null;
        }
        $ctx  = stream_context_create(['http' => ['timeout' => $timeout, 'user_agent' => 'Slashkode-GuidesFeed/1.0']]);
        $body = @file_get_contents($url, false, $ctx);
        return $body === false ? null : $body;
    }

    /** Turn RSS XML into a clean list of posts (newest first). */
    function sk_guides_parse($xml, $feedUrl)
    {
        $prev = libxml_use_internal_errors(true);
        $feed = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NONET);
        libxml_clear_errors();
        libxml_use_internal_errors($prev);
        if (!$feed || !isset($feed->channel->item)) {
            return [];
        }

        $host  = strtolower((string) parse_url($feedUrl, PHP_URL_HOST));
        $posts = [];
        foreach ($feed->channel->item as $it) {
            $url   = trim((string) $it->link);
            $title = sk_guides_clean($it->title);
            // Only accept links that stay on our own site.
            if ($title === '' || strtolower((string) parse_url($url, PHP_URL_HOST)) !== $host) {
                continue;
            }
            $image = isset($it->enclosure['url']) ? trim((string) $it->enclosure['url']) : '';
            if ($image !== '' && strtolower((string) parse_url($image, PHP_URL_HOST)) !== $host) {
                $image = '';
            }
            $path = (string) parse_url($url, PHP_URL_PATH);
            $ts   = strtotime((string) $it->pubDate);
            $posts[] = [
                'title'    => $title,
                'url'      => $url,
                'slug'     => basename(rtrim($path, '/')),
                'category' => sk_guides_clean($it->category),
                'ts'       => $ts ? (int) $ts : null,
                'image'    => $image,
            ];
        }
        usort($posts, function ($a, $b) {
            return (int) $b['ts'] - (int) $a['ts'];
        });
        return $posts;
    }

    /**
     * Get posts from cache, feed or fallback (in that order of preference).
     *
     * @param string $feedUrl   full address of the RSS feed
     * @param array  $fallback  posts to show if nothing else is available
     * @param int    $ttl       seconds a good copy stays fresh (default 1 hour)
     * @param int    $retry     seconds before trying again after a failure (default 5 min)
     * @param string $cacheFile writable path; default is the system temp folder
     */
    function sk_guides_load($feedUrl, array $fallback = [], $ttl = 3600, $retry = 300, $cacheFile = null)
    {
        if ($cacheFile === null) {
            $cacheFile = sys_get_temp_dir() . '/slashkode-guides-' . md5($feedUrl) . '.json';
        }

        $cached = null;
        if (is_file($cacheFile)) {
            $data = json_decode((string) @file_get_contents($cacheFile), true);
            if (is_array($data) && $data) {
                $cached = $data;
                if (time() - (int) @filemtime($cacheFile) < $ttl) {
                    return $cached; // fresh enough
                }
            }
        }

        $body  = sk_guides_fetch($feedUrl);
        $posts = $body !== null ? sk_guides_parse($body, $feedUrl) : [];
        $ok    = !empty($posts);

        if (!$ok) {
            $posts = $cached ?: $fallback; // last good copy, else the hand-written list
        }

        if ($posts) {
            $tmp = $cacheFile . '.' . getmypid() . '.tmp';
            if (@file_put_contents($tmp, json_encode($posts)) !== false) {
                @rename($tmp, $cacheFile);
                if (!$ok) {
                    // Looks "old" so we retry soon, without hammering a broken feed.
                    @touch($cacheFile, time() - $ttl + $retry);
                }
            }
        }
        return $posts;
    }

    /**
     * Choose which posts to show: pinned slugs first, then the newest posts in
     * the category, up to $limit.
     */
    function sk_guides_pick(array $posts, $category, array $pin, $limit)
    {
        $out = [];
        $used = [];
        foreach ($pin as $slug) {
            foreach ($posts as $p) {
                if ($p['slug'] === $slug) {
                    $out[]  = $p;
                    $used[] = $slug;
                    break;
                }
            }
        }
        foreach ($posts as $p) { // already newest first
            if (in_array($p['slug'], $used, true)) {
                continue;
            }
            if (strcasecmp($p['category'], $category) === 0) {
                $out[] = $p;
            }
        }
        return array_slice($out, 0, (int) $limit);
    }
}