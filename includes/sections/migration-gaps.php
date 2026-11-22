<?php
/**
 * Migration agent page: "What a good migration agent website gets right"
 * Reuses the .rto-gaps layout and styles (public/css/services/rto-gaps.css).
 */
$migTick = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5" /></svg>';
?>
<section class="sk-container rto-gaps" id="migration-agent-website-checklist" aria-labelledby="mig-gaps-title">
    <div class="rto-gaps__grid">

        <!-- Left: the problem -->
        <div class="rto-gaps__main">
            <span class="sk-statement-eyebrow">/ What clients check first</span>
            <h2 class="rto-gaps__title" id="mig-gaps-title">
                What a good migration agent website gets right
            </h2>
            <p class="rto-gaps__intro">
                Most people compare two or three agents before they book a consultation. They're looking for proof
                that you're registered, that you handle their kind of visa, and that you'll be easy to deal with.
                When a website makes them hunt for any of that, they quietly move on to the next agent.
            </p>

            <div class="rto-gaps__cards">
                <article class="rto-gaps__card">
                    <div class="rto-gaps__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3>Registration is hard to check</h3>
                    <p>
                        The MARN is missing, buried in a footer image, or not linked to the official register.
                        For someone who has been warned about visa scams, that's enough doubt to call someone else.
                    </p>
                </article>

                <article class="rto-gaps__card">
                    <div class="rto-gaps__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.35-4.35" />
                        </svg>
                    </div>
                    <h3>Every visa is squeezed onto one page</h3>
                    <p>
                        A single &ldquo;Services&rdquo; list doesn't tell a partner visa applicant you can help them,
                        and it gives Google nothing to match searches like &ldquo;partner visa migration agent
                        Melbourne&rdquo; or &ldquo;skilled visa agent&rdquo;.
                    </p>
                </article>

                <article class="rto-gaps__card">
                    <div class="rto-gaps__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="7" y="2" width="10" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12" y2="18.01" />
                        </svg>
                    </div>
                    <h3>Booking a consultation takes too much effort</h3>
                    <p>
                        Slow pages, long forms and no quick way to call or message mean enquiries are lost, especially
                        from clients searching on their phone or from another time zone.
                    </p>
                </article>
            </div>
        </div>

        <!-- Right: the checklist -->
        <aside class="rto-gaps__panel" aria-labelledby="mig-checklist-title">
            <h3 id="mig-checklist-title">Migration agent website checklist</h3>
            <p class="rto-gaps__panel-sub">
                What I plan into every migration agent website, so clients can find it before they book:
            </p>

            <ul class="rto-gaps__list">
                <li><?php echo $migTick; ?>
                    Your MARN on the website, which the Code of Conduct requires
                </li>
                <li><?php echo $migTick; ?>
                    A link to your entry on the OMARA Register of Migration Agents
                </li>
                <li><?php echo $migTick; ?>
                    Agent names, photos and experience
                </li>
                <li><?php echo $migTick; ?>
                    A separate page for each visa type you handle
                </li>
                <li><?php echo $migTick; ?>
                    Consultation fees and how booking works
                </li>
                <li><?php echo $migTick; ?>
                    The languages you speak
                </li>
                <li><?php echo $migTick; ?>
                    Office address, map, phone, email and WhatsApp
                </li>
                <li><?php echo $migTick; ?>
                    A privacy policy covering the personal information you collect
                </li>
                <li><?php echo $migTick; ?>
                    Wording that never promises a visa outcome
                </li>
            </ul>

            <p class="rto-gaps__disclaimer">
                This is a website checklist, not legal or compliance advice. You stay responsible for meeting the
                Code of Conduct and for the accuracy of your content. My job is to give each item a clear,
                easy-to-find home on your site.
            </p>
        </aside>

    </div>
</section>
<?php unset($migTick); ?>
