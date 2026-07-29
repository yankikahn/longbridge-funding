<?php
/**
 * Front page - Woodland Financial Group landing page.
 *
 * @package Longbridge
 */
get_header();
?>
<?php
$lb_phone = get_theme_mod( 'longbridge_phone', '(800) 771-4330' );
$lb_email = get_theme_mod( 'longbridge_email', 'processing@WoodlandFG.com' );
?>
<!-- ================= HEADER ================= -->
<header class="site-header" id="header">
  <div class="wrap nav">
    <a class="brand" href="#top" aria-label="Woodland Financial Group home">
      <svg class="brand-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
        <rect width="40" height="40" rx="8" fill="var(--emerald)"/>
        <!-- Fire Island Inlet (Robert Moses) through-arch bridge -->
        <path d="M6 26 C5 4 35 4 34 26" stroke="var(--gold-soft)" stroke-width="1.8" fill="none" stroke-linecap="round"/>
        <path d="M4 26 H36" stroke="var(--gold-soft)" stroke-width="1.6" stroke-linecap="round"/>
        <path d="M10 14 V26 M15 10.5 V26 M20 9.5 V26 M25 10.5 V26 M30 14 V26" stroke="var(--gold-soft)" stroke-width="1" stroke-linecap="round"/>
        <path d="M9 26 V32 M31 26 V32" stroke="var(--gold-soft)" stroke-width="1.6" stroke-linecap="round"/>
        <path d="M4 32 H36" stroke="var(--gold-soft)" stroke-width="1.2" opacity="0.5" stroke-linecap="round"/>
      </svg>
      <span class="brand-name">Woodland Financial Group</span>
    </a>
    <nav class="nav-links" aria-label="Primary">
      <a href="#products">Financing</a>
      <a href="#how">How it works</a>
      <a href="#why">Why Woodland</a>
      <a href="#apply">Contact</a>
    </nav>
    <div class="nav-cta">
      <button class="theme-toggle" id="themeToggle" aria-label="Toggle color theme" title="Toggle theme">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="4.5"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M5 5l1.5 1.5M17.5 17.5L19 19M5 19l1.5-1.5M17.5 6.5L19 5"/></svg>
      </button>
      <a href="https://yankikahn.github.io/longbridge-funding/apply.html" class="btn btn-primary">Get funded</a>
    </div>
  </div>
</header>

<main id="top">

<!-- ================= HERO ================= -->
<section class="hero">
  <div class="wrap hero-grid">
    <span class="eyebrow">Business capital, done right</span>
    <h1>The <em>bridge</em> between your business and the capital it needs.</h1>
    <p class="hero-sub">One short application. A dedicated funding advisor. Real offers from SBA loans to lines of credit — matched to where your business actually is, not where a form says it should be.</p>
    <div class="hero-actions">
      <a href="https://yankikahn.github.io/longbridge-funding/apply.html" class="btn btn-on-dark">See your options
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="#products" class="btn btn-ghost" style="color:#F1F5F1;border-color:rgba(214,181,122,.4)">Explore financing</a>
    </div>
    <p class="hero-note">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
      Checking your options won't affect your credit score.
    </p>
  </div>

  <!-- bridge motif — smooth S-curve: one arch up, one arch down, edge to edge -->
  <svg class="bridge" viewBox="0 0 1440 160" preserveAspectRatio="none" aria-hidden="true">
    <path class="cable draw" style="--len:1700" d="M0 88 Q360 20 720 88 Q1080 156 1440 88"/>
    <path class="deck draw" style="--len:1440" d="M0 150 H1440"/>
    <g class="posts">
      <path d="M120 69 V150"/><path d="M240 58 V150"/><path d="M360 54 V150"/>
      <path d="M480 58 V150"/><path d="M600 69 V150"/><path d="M720 88 V150"/>
      <path d="M840 107 V150"/><path d="M960 118 V150"/><path d="M1080 122 V150"/>
      <path d="M1200 118 V150"/><path d="M1320 107 V150"/>
    </g>
  </svg>
</section>

<!-- ================= TRUST BAR ================= -->
<section class="trust">
  <div class="wrap trust-inner">
    <span class="trust-label">Financing you can build on</span>
    <div class="trust-items">
      <span class="trust-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l7 4v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6z"/></svg>Bank-level security</span>
      <span class="trust-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="9"/></svg>Decisions in 24 hours</span>
      <span class="trust-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7L9 18l-5-5"/></svg>One application, many lenders</span>
      <span class="trust-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V9l7-5 7 5v12M9 21v-6h6v6"/></svg>Approved SBA partner network</span>
    </div>
  </div>
</section>

<!-- ================= PRODUCTS ================= -->
<section class="section products" id="products">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Financing options</span>
      <h2>The right capital for the moment you're in.</h2>
      <p>Whether you're covering payroll, buying equipment, or funding your next location — we'll match you to the option that fits, then handle the paperwork.</p>
    </div>

    <div class="product-grid">
      <article class="product reveal">
        <svg class="product-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V8l7-4 7 4v13M9 21v-5h6v5"/><path d="M9 11h.01M15 11h.01"/></svg>
        <h3>SBA Loans</h3>
        <p>Government-backed 7(a) and 504 loans with long terms and low rates — the gold standard for established businesses ready to grow.</p>
        <div class="product-meta"><span class="amt"><small>Up to</small>$5M</span><span class="term">Terms to 25 yrs</span></div>
      </article>

      <article class="product reveal">
        <svg class="product-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6" width="18" height="12" rx="2"/><path d="M3 10h18"/><circle cx="8" cy="14" r="1.2"/></svg>
        <h3>Business Term Loans</h3>
        <p>A single lump sum with predictable payments. Ideal for expansion, hiring, or a defined project with a clear return.</p>
        <div class="product-meta"><span class="amt"><small>Up to</small>$5M</span><span class="term">6 mo – 5 yrs</span></div>
      </article>

      <article class="product reveal">
        <svg class="product-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16v10H4z"/><path d="M4 11h16"/><path d="M8 15h4"/></svg>
        <h3>Lines of Credit</h3>
        <p>Draw what you need, when you need it, and only pay for what you use. Cash-flow insurance for the unexpected.</p>
        <div class="product-meta"><span class="amt"><small>Up to</small>$350K</span><span class="term">Revolving</span></div>
      </article>

      <article class="product reveal">
        <svg class="product-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"/><path d="M17 7h4v4"/></svg>
        <h3>Revenue-Based Financing</h3>
        <p>Funding that flexes with your sales. Repay as a small share of daily revenue — lighter in slow weeks, faster in busy ones.</p>
        <div class="product-meta"><span class="amt"><small>Up to</small>$10M</span><span class="term">Flexible</span></div>
      </article>

      <article class="product reveal">
        <svg class="product-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M7 8h10M7 12h10M7 16h6"/><rect x="3" y="4" width="18" height="16" rx="2"/></svg>
        <h3>Equipment Financing</h3>
        <p>Finance the machinery, vehicles, or tech that runs your business — the equipment itself secures the loan.</p>
        <div class="product-meta"><span class="amt"><small>Up to</small>$5M</span><span class="term">Asset-secured</span></div>
      </article>

      <article class="product reveal">
        <svg class="product-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h9l3 3v15H6z"/><path d="M9 8h6M9 12h6M9 16h4"/></svg>
        <h3>Invoice Factoring</h3>
        <p>Turn unpaid invoices into working capital today. Advance up to 90% now instead of waiting 30, 60, or 90 days.</p>
        <div class="product-meta"><span class="amt"><small>Advance</small>90%</span><span class="term">On receivables</span></div>
      </article>
    </div>
  </div>
</section>

<!-- ================= HOW IT WORKS ================= -->
<section class="section how" id="how">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">How it works</span>
      <h2>From application to funded — usually within a week.</h2>
    </div>
    <div class="steps">
      <div class="step reveal">
        <div class="step-num">01</div>
        <h3>Tell us about your business</h3>
        <p>A three-minute application. No stacks of paperwork, and a soft credit check that never touches your score.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">02</div>
        <h3>Get matched with an advisor</h3>
        <p>A dedicated funding specialist reviews your profile and shops your file across our lender network to find real offers.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">03</div>
        <h3>Review options and fund</h3>
        <p>Compare terms side by side with a person who explains the trade-offs. Accept the one that fits — funds can land in days.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= WHY ================= -->
<section class="section why" id="why">
  <div class="wrap why-grid">
    <div class="reveal">
      <span class="eyebrow">Why Woodland</span>
      <h2 class="section-head" style="margin:16px 0 0;font-size:var(--step-3)">Advisors, not order-takers.</h2>
      <div class="why-list">
        <div class="why-item">
          <span class="dot"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg></span>
          <div><h3>One advisor, start to finish</h3><p>The same specialist who takes your call sees your deal through to funding. No call-center handoffs.</p></div>
        </div>
        <div class="why-item">
          <span class="dot"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l3 8 4-16 3 8h4"/></svg></span>
          <div><h3>One application, many lenders</h3><p>We shop your file across banks, SBA partners, and specialty lenders — so you compare, not chase.</p></div>
        </div>
        <div class="why-item">
          <span class="dot"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg></span>
          <div><h3>Transparent terms, no surprises</h3><p>Rates, fees, and payments explained in plain language before you sign anything. What you see is what you get.</p></div>
        </div>
        <div class="why-item">
          <span class="dot"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h7l-1 8 10-12h-7z"/></svg></span>
          <div><h3>Built for speed</h3><p>Same-day pre-qualification and decisions within 24 hours, because opportunities don't wait on underwriting.</p></div>
        </div>
      </div>
    </div>

    <aside class="why-panel reveal">
      <span class="eyebrow">By the numbers</span>
      <h3>Capital that meets you where you are.</h3>
      <div class="stat-grid">
        <div class="stat"><div class="n">$10M</div><div class="l">Maximum funding available</div></div>
        <div class="stat"><div class="n">24 hrs</div><div class="l">Typical decision turnaround</div></div>
        <div class="stat"><div class="n">6+</div><div class="l">Financing products under one roof</div></div>
        <div class="stat"><div class="n">$0</div><div class="l">Cost &amp; no credit impact to apply</div></div>
      </div>
    </aside>
  </div>
</section>

<!-- ================= TESTIMONIAL ================= -->
<section class="section quote-sec">
  <div class="wrap quote reveal">
    <span class="mark">&ldquo;</span>
    <blockquote>They didn't just hand me a loan — they walked me through three options, told me which one they'd pick and why, and had the funds in my account before the end of the week.</blockquote>
    <p class="quote-by"><strong>Marcus Reyes</strong> &nbsp;·&nbsp; Owner, Reyes Fabrication &amp; Welding</p>
  </div>
</section>

<!-- ================= APPLY / CONTACT ================= -->
<section class="section apply" id="apply">
  <div class="wrap apply-grid">
    <div class="reveal">
      <span class="eyebrow">Get started</span>
      <h2>See what your business qualifies for.</h2>
      <p class="apply-lead">Start your secure application and a dedicated advisor will review it — usually the same day.</p>
      <ul class="apply-points">
        <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>Takes about 10 minutes</li>
        <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>No obligation, no cost</li>
        <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>Bank-level encryption &amp; security</li>
      </ul>
    </div>

    <div class="form-card reveal" style="display:flex; flex-direction:column; gap:18px; text-align:center; align-items:center; justify-content:center;">
      <span style="width:58px; height:58px; border-radius:50%; background:color-mix(in srgb, var(--brand) 14%, transparent); color:var(--brand); display:grid; place-items:center;">
        <svg width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h9l3 3v15H6z"/><path d="M9 9h6M9 13h6M9 17h4"/></svg>
      </span>
      <h3>Business Funding Application</h3>
      <p class="sub">Secure and straightforward — about 10 minutes. A Woodland advisor personally reviews every application.</p>
      <a href="https://yankikahn.github.io/longbridge-funding/apply.html" class="btn btn-primary" style="width:100%; justify-content:center;">Start your application
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <p class="form-fine">Bank-level encryption. Have your last 4 months of business bank statements handy.</p>
    </div>
  </div>
</section>

</main>

<!-- ================= FOOTER ================= -->
<footer class="site-footer">
  <div class="wrap">
    <div class="foot-top">
      <div class="foot-brand">
        <a class="brand" href="#top">
          <svg class="brand-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <rect width="40" height="40" rx="8" fill="var(--emerald)"/>
            <!-- Fire Island Inlet (Robert Moses) through-arch bridge -->
            <path d="M6 26 C5 4 35 4 34 26" stroke="var(--gold-soft)" stroke-width="1.8" fill="none" stroke-linecap="round"/>
            <path d="M4 26 H36" stroke="var(--gold-soft)" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M10 14 V26 M15 10.5 V26 M20 9.5 V26 M25 10.5 V26 M30 14 V26" stroke="var(--gold-soft)" stroke-width="1" stroke-linecap="round"/>
            <path d="M9 26 V32 M31 26 V32" stroke="var(--gold-soft)" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M4 32 H36" stroke="var(--gold-soft)" stroke-width="1.2" opacity="0.5" stroke-linecap="round"/>
          </svg>
          <span class="brand-name">Woodland Financial Group</span>
        </a>
        <p>Connecting growing businesses with the capital to build what's next.</p>
        <p style="margin-top:10px">1120 Old Country Road, Suite 204<br>Plainview, NY 11803</p>
      </div>
      <div class="foot-cols">
        <div class="foot-col">
          <h4>Financing</h4>
          <a href="#products">SBA loans</a>
          <a href="#products">Term loans</a>
          <a href="#products">Lines of credit</a>
          <a href="#products">Revenue-based</a>
          <a href="#products">Equipment</a>
          <a href="#products">Invoice factoring</a>
        </div>
        <div class="foot-col">
          <h4>Company</h4>
          <a href="#why">Why Woodland</a>
          <a href="#how">How it works</a>
          <a href="#apply">Contact</a>
        </div>
        <div class="foot-col">
          <h4>Get in touch</h4>
          <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', $lb_phone) ); ?>"><?php echo esc_html( $lb_phone ); ?></a>
          <a href="mailto:<?php echo esc_attr( $lb_email ); ?>"><?php echo esc_html( $lb_email ); ?></a>
          <a href="https://yankikahn.github.io/longbridge-funding/apply.html">Apply now</a>
        </div>
      </div>
    </div>
    <div class="foot-bottom">
      <p>© 2026 Woodland Financial Group. All rights reserved.</p>
      <p><a href="<?php echo esc_url( get_privacy_policy_url() ? get_privacy_policy_url() : '#' ); ?>">Privacy Policy</a> · Terms of Service</p>
    </div>
    <p class="disclaimer">Woodland Financial Group is a business financing advisory and does not lend directly. All financing is provided by third-party lending partners and is subject to credit approval, underwriting, and lender terms. Rates, amounts, and terms shown are illustrative and vary by qualification. Woodland Financial Group offers business-purpose financing only.</p>
  </div>
</footer>
<?php get_footer(); ?>
