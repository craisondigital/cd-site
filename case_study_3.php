<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Case Study: Intelligent Gate Access & Security – Craison Digital</title>
  <meta name="description" content="How Craison Digital transformed gate access at a Siesta Key waterfront property — automatic entry, centralized access management, and proactive security."/>
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='6' fill='%230d1320'/><text x='4' y='24' font-size='22' font-weight='bold' fill='%2300d4ff'>C</text></svg>"/>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --black: #060a10; --dark: #0b1018; --card: #0f1724;
      --card-hover: #141d2e; --border: rgba(255,255,255,0.06);
      --blue: #2f80ed; --blue-bright: #5ba4f5;
      --blue-glow: rgba(47,128,237,0.15); --cyan: #00d4ff;
      --green: #4ade80; --green-glow: rgba(74,222,128,0.15);
      --text: #e4e9f2; --muted: #E5E7EB; --white: #f4f7fb;
      --font-display: 'Syne', sans-serif;
      --font-body: 'DM Sans', sans-serif;
    }
    html { scroll-behavior: smooth; overflow-x: hidden; }
    body { background: var(--black); color: var(--text); font-family: var(--font-body); font-weight: 300; line-height: 1.75; overflow-x: hidden; -webkit-font-smoothing: antialiased; }
    body::before { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E"); pointer-events: none; z-index: 0; opacity: 0.5; }

    nav { position: fixed; top: 0; left: 0; right: 0; z-index: 100; background: rgba(6,10,16,0.92); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-bottom: 1px solid var(--border); }
    .nav-bar { display: flex; align-items: center; justify-content: space-between; padding: 1rem 4rem; }
    .nav-logo { font-family: var(--font-display); font-weight: 800; font-size: 1.1rem; color: var(--white); text-decoration: none; }
    .nav-logo span { color: var(--cyan); }
    .nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: 0.5rem; }
    .nav-toggle span { display: block; width: 22px; height: 2px; background: var(--text); margin: 5px 0; border-radius: 2px; }
    .nav-links { display: flex; align-items: center; gap: 2.2rem; list-style: none; }
    .nav-links a { color: var(--muted); text-decoration: none; font-size: 0.85rem; font-weight: 400; transition: color 0.2s; }
    .nav-links a:hover { color: var(--text); }
    .nav-links a.nav-active { color: var(--text); }
    .nav-divider { width: 1px; height: 14px; background: var(--border); }
    .nav-cta { background: #A16207; color: var(--white) !important; padding: 0.5rem 1.4rem; border-radius: 6px; font-weight: 500 !important; border: 2px solid rgba(255,255,255,0.6); transition: background 0.2s, transform 0.15s; }
    .nav-cta:hover { background: #854D0E !important; transform: translateY(-1px); }
    .nav-dropdown { position: relative; }
    .nav-dropdown > a { display: inline-flex; align-items: center; gap: 0.3rem; cursor: default; }
    .nav-dropdown > a svg { transition: transform 0.2s; }
    .dropdown-panel { visibility: hidden; opacity: 0; position: absolute; top: 100%; left: 50%; transform: translateX(-50%); padding-top: 0.75rem; z-index: 110; transition: visibility 0.15s, opacity 0.15s; }
    .nav-dropdown:hover .dropdown-panel { visibility: visible; opacity: 1; }
    .nav-dropdown:hover > a svg { transform: rotate(180deg); }
    .dropdown-inner { background: rgba(11,16,24,0.97); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 0.5rem 0; min-width: 240px; box-shadow: 0 16px 48px rgba(0,0,0,0.6); list-style: none; }
    .dropdown-inner li a { display: flex; align-items: center; gap: 0.65rem; padding: 0.65rem 1.2rem; font-size: 0.84rem; color: var(--muted); transition: all 0.15s; white-space: nowrap; }
    .dropdown-inner li a:hover { color: var(--white); background: rgba(47,128,237,0.08); }
    .dropdown-inner li a.dropdown-active { color: var(--blue-bright); }
    .dropdown-inner li a .dd-icon { font-size: 1rem; width: 1.2rem; text-align: center; flex-shrink: 0; }
    .mobile-menu { display: none; }

    .hero { position: relative; width: 100%; min-height: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; overflow: hidden; padding-top: 70px; text-align: center; }
    .hero-bg { position: absolute; inset: 0; background: linear-gradient(180deg, #040710 0%, #081525 50%, #0a1a30 100%); }
    .hero-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(47,128,237,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(47,128,237,0.04) 1px, transparent 1px); background-size: 56px 56px; mask-image: radial-gradient(ellipse 85% 75% at 50% 55%, black 15%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 85% 75% at 50% 55%, black 15%, transparent 100%); }
    .hero-glow { position: absolute; top: 20%; left: 50%; transform: translateX(-50%); width: 700px; height: 400px; background: radial-gradient(ellipse, rgba(47,128,237,0.09) 0%, transparent 70%); pointer-events: none; }
    .hero-inner { position: relative; z-index: 3; width: 100%; padding: 2rem 4rem 2.5rem; }
    .hero-eyebrow { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(47,128,237,0.08); border: 1px solid rgba(47,128,237,0.2); color: var(--blue-bright); font-size: 0.72rem; font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase; padding: 0.35rem 0.9rem; border-radius: 100px; margin-bottom: 1.5rem; animation: fadeUp 0.6s ease both; }
    .hero-eyebrow::before { content: ''; width: 5px; height: 5px; background: var(--cyan); border-radius: 50%; box-shadow: 0 0 8px var(--cyan); animation: pulse 2s infinite; }
    @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.3} }
    .hero-inner h1 { font-family: var(--font-display); font-size: clamp(2rem, 4.8vw, 3.6rem); font-weight: 800; line-height: 1.06; letter-spacing: -0.025em; color: var(--white); margin-bottom: 1.2rem; animation: fadeUp 0.6s 0.1s ease both; }
    .hero-inner h1 em { font-style: normal; background: linear-gradient(135deg, var(--blue-bright), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .hero-sub { font-size: 1.05rem; color: var(--muted); line-height: 1.7; max-width: 680px; margin: 0 auto; animation: fadeUp 0.6s 0.2s ease both; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(18px)} to{opacity:1;transform:translateY(0)} }

    section { position: relative; z-index: 1; }
    .section-inner { max-width: 1100px; margin: 0 auto; padding: 2.5rem 4rem; }
    .section-tag { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase; color: var(--blue-bright); margin-bottom: 0.7rem; }
    .section-title { font-family: var(--font-display); font-size: clamp(1.7rem, 3.2vw, 2.6rem); font-weight: 800; line-height: 1.12; letter-spacing: -0.02em; margin-bottom: 1rem; color: var(--white); }
    .section-sub { color: var(--muted); font-size: 1rem; max-width: 700px; line-height: 1.7; margin-bottom: 2.5rem; margin-left: auto; margin-right: auto; }

    .btn-primary { background: #A16207; color: var(--white); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 500; text-decoration: none; border: 2px solid rgba(255,255,255,0.6); cursor: pointer; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-primary:hover { background: #854D0E; transform: translateY(-2px); }
    .btn-secondary { background: transparent; color: var(--text); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 400; text-decoration: none; border: 1px solid var(--border); cursor: pointer; transition: all 0.2s; }
    .btn-secondary:hover { border-color: rgba(255,255,255,0.15); color: var(--white); }

    .cs-meta { display: flex; gap: 2rem; flex-wrap: wrap; margin-bottom: 1rem; }
    .cs-meta-item { display: flex; flex-direction: column; gap: 0.2rem; }
    .cs-meta-label { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--blue-bright); }
    .cs-meta-value { font-size: 0.92rem; color: var(--white); font-weight: 500; }

    .cs-placeholder { width: 100%; height: 360px; background: linear-gradient(135deg, #0d1826 0%, #111f30 100%); border: 1px solid var(--border); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: var(--muted); font-size: 0.72rem; letter-spacing: 0.1em; text-transform: uppercase; font-weight: 500; margin-bottom: 4rem; }

    .cs-block { margin-bottom: 3rem; }
    .cs-block-label { font-size: 2rem; font-style: normal; font-family: var(--font-display); font-weight: 800; margin-bottom: 0.75rem; letter-spacing: -0.02em; display: inline-block; background: linear-gradient(135deg, var(--blue-bright), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .cs-block p { font-size: 0.95rem; color: var(--muted); line-height: 1.8; }

    .cs-before-after { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 0.75rem; }
    .cs-ba-col { background: var(--card); border: 1px solid var(--border); border-radius: 14px; padding: 1.8rem; }
    .cs-ba-col.after { border-color: rgba(0,212,255,0.2); background: rgba(0,212,255,0.04); }
    .cs-ba-label { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; margin-bottom: 1rem; }
    .cs-ba-col:not(.after) .cs-ba-label { color: var(--muted); }
    .cs-ba-col.after .cs-ba-label { color: var(--cyan); }
    .cs-ba-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.6rem; }
    .cs-ba-list li { font-size: 0.88rem; color: var(--muted); line-height: 1.55; padding-left: 1.1rem; position: relative; }
    .cs-ba-list li::before { position: absolute; left: 0; font-weight: 700; }
    .cs-ba-col:not(.after) .cs-ba-list li::before { content: '✕'; color: rgba(239,68,68,0.6); font-size: 0.7rem; top: 0.2rem; }
    .cs-ba-col.after .cs-ba-list li { color: var(--text); }
    .cs-ba-col.after .cs-ba-list li::before { content: '✓'; color: var(--cyan); }
    .cs-result { padding: 1.2rem 1.5rem; background: rgba(0,212,255,0.06); border: 1px solid rgba(0,212,255,0.2); border-left: 3px solid var(--cyan); border-radius: 8px; margin-top: 3rem; }
    .cs-result-label { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--cyan); margin-bottom: 0.5rem; }
    .cs-result p { font-size: 1rem; color: var(--white); font-weight: 600; line-height: 1.7; margin: 0; }

    #contact { background: var(--dark); text-align: center; }
    .contact-inner { margin: 0 auto; }
    .contact-form { display: flex; flex-direction: column; gap: 0.9rem; margin-top: 2rem; text-align: left; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.9rem; }
    .form-group { display: flex; flex-direction: column; gap: 0.35rem; }
    label { font-size: 0.75rem; color: var(--muted); letter-spacing: 0.04em; font-weight: 400; }
    input, textarea, select { background: var(--card); border: 1px solid var(--border); border-radius: 8px; padding: 0.7rem 0.9rem; color: var(--text); font-family: var(--font-body); font-size: 0.88rem; outline: none; transition: border-color 0.2s; width: 100%; }
    input:focus, textarea:focus, select:focus { border-color: rgba(47,128,237,0.4); }
    textarea { resize: vertical; min-height: 100px; }
    .form-submit-row { display: flex; align-items: center; gap: 1rem; margin-top: 0.5rem; }
    .form-note { font-size: 0.72rem; color: var(--muted); }

    footer { border-top: 1px solid var(--border); background: var(--black); padding: 2.5rem 4rem; font-size: 0.78rem; color: var(--muted); }
    .footer-logo { font-family: var(--font-display); font-weight: 800; font-size: 0.95rem; color: var(--white); text-decoration: none; }
    .footer-logo span { color: var(--cyan); }
    .footer-top { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem; }
    .footer-nav { display: flex; gap: 1.8rem; }
    .footer-nav a { color: var(--muted); text-decoration: none; font-size: 0.8rem; transition: color 0.2s; }
    .footer-nav a:hover { color: var(--text); }
    .footer-bottom { display: flex; align-items: center; justify-content: space-between; padding-top: 1.2rem; border-top: 1px solid var(--border); }

    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    @media (max-width: 1000px) {
      .nav-bar { padding: 0.9rem 1.5rem; }
      .nav-toggle { display: block; }
      .nav-links { display: none !important; }
      .mobile-menu { display: none; flex-direction: column; align-items: center; padding: 1.2rem 2rem 1.8rem; border-top: 1px solid var(--border); background: var(--black); }
      .mobile-menu.open { display: flex; }
      .mobile-menu a { display: block; width: 100%; text-align: center; padding: 0.55rem 0; font-size: 1rem; color: var(--text); text-decoration: none; transition: color 0.15s; }
      .mobile-menu a:active { color: var(--blue-bright); }
      .mobile-menu .mm-label { display: block; width: 100%; text-align: center; padding: 0.6rem 0 0.15rem; font-size: 0.62rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--blue-bright); }
      .mobile-menu .mm-sub a { color: var(--muted); font-size: 1rem; padding: 0.45rem 0; }
      .mobile-menu .mm-sub a:active { color: var(--text); }
      .mobile-menu .mm-sub a.dropdown-active { color: var(--blue-bright); }
      .mobile-menu .mm-divider { width: 32px; height: 1px; background: var(--border); margin: 0.4rem auto; }
      .mobile-menu .nav-cta { display: inline-block; margin-top: 0.4rem; padding: 0.6rem 1.8rem; font-size: 1rem; }
    }
    @media (max-width: 768px) {
      .section-inner { padding: 2rem 1.5rem; }
      .form-row { grid-template-columns: 1fr; }
      .form-submit-row { flex-direction: column; align-items: stretch; }
      footer { padding: 2rem 1.5rem; }
      .footer-top { flex-direction: column; gap: 0.8rem; }
      .footer-nav { justify-content: center; flex-wrap: wrap; gap: 1rem; }
      .footer-bottom { flex-direction: column; gap: 0.4rem; text-align: center; }
      .cs-meta { gap: 1.2rem; }
      .cs-placeholder { height: 220px; }
      .cs-before-after { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <?php $activePage = 'case_study_3'; ?>
<?php include 'nav.php'; ?>

  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="hero-inner">
      <div class="hero-eyebrow">Case Study</div>
      <h1>Simplifying Access to a<br><em>Gated Property</em></h1>
      <p class="hero-sub">Intelligent Gate Access & Security</p>
      <p style="font-size:0.88rem;color:var(--muted);margin-top:0.5rem;opacity:0.7;">Siesta Key, Florida</p>
    </div>
  </section>

  <section style="background:var(--black);"><div class="section-inner">

    <div class="cs-meta reveal">
      <div class="cs-meta-item"><span class="cs-meta-label">Location</span><span class="cs-meta-value">Siesta Key, FL</span></div>
      <div class="cs-meta-item"><span class="cs-meta-label">Project Type</span><span class="cs-meta-value">Gate Access & Security</span></div>
    </div>

    <p style="font-size:1.05rem;color:var(--muted);line-height:1.75;max-width:860px;margin-bottom:1.2rem;" class="reveal">Convenience, security, and visibility were transformed through a smarter approach to property access.</p>
    <div class="cs-placeholder reveal">Photo Coming Soon</div>

    <div class="cs-block reveal">
      <p class="cs-block-label">The Property</p>
      <p>This waterfront property relied on an automated gate to control access for residents, family members, workers, vendors, guests, and delivery drivers.</p>
      <p style="margin-top:1rem;">Like many gated properties, the gate itself worked.</p>
      <p style="margin-top:1rem;">The challenge was everything that happened around it.</p>
      <p style="margin-top:1.5rem;margin-bottom:1.5rem;font-family:var(--font-display);font-size:clamp(0.95rem,1.6vw,1.15rem);font-weight:800;color:var(--white);line-height:1.35;letter-spacing:-0.015em;border-left:3px solid var(--cyan);padding-left:1.2rem;">The gate was automated.<br>The experience was lacking.</p>
      <p>Residents often needed remotes, apps, or access codes to enter the property. Vendors and service providers required special instructions. Delivery drivers had limited options. Shared access codes had accumulated over time, making it difficult to know who still had access and who did not.</p>
    </div>

    <div class="cs-block reveal">
      <p class="cs-block-label">The Challenge</p>
      <p>Managing access had become inconvenient and difficult to control.</p>
      <p style="margin-top:1rem;">Residents frequently had to search for remotes or open an app just to enter the property. Workers, vendors, guests, and delivery drivers all required different methods of access, creating unnecessary complexity for both visitors and the homeowner.</p>
      <p style="margin-top:1rem;">Over time, access codes had been shared with numerous people. There was no simple way to determine who still had access, no meaningful activity history, and limited visibility into who was entering the property throughout the day.</p>
      <p style="margin-top:1rem;">The property also lacked meaningful after-hours security awareness. If the gate remained open late at night or unexpected activity occurred, there was little to immediately draw attention to it.</p>
      <p style="margin-top:1rem;">The homeowner didn't need a new gate.</p>
      <p style="margin-top:0.5rem;">They needed a better way to manage access.</p>
    </div>

    <div class="cs-block reveal">
      <p class="cs-block-label">The Solution</p>
      <p>Craison Digital focused on making property access easier for authorized users while improving visibility and control for the homeowner.</p>
      <p style="margin-top:1rem;">Authorized vehicles were equipped with long-range identification tags, allowing the gate to open automatically as vehicles approached. Residents no longer needed remotes, apps, or access codes for everyday entry.</p>
      <p style="margin-top:1rem;">At the same time, access management was simplified. New vehicles could be added in minutes, access codes could be created or removed as needed, and different access methods could be provided for guests, vendors, and delivery drivers.</p>
      <p style="margin-top:1rem;">To improve visibility, all gate activity was logged, providing a complete history of property access and helping the homeowner understand who entered the property and when.</p>
      <p style="margin-top:1rem;">Additional security automations were also introduced. After-hours gate activity could trigger alerts, activate floodlights, and initiate audible warnings when appropriate, creating a more proactive approach to property security.</p>
    </div>

    <div class="cs-block reveal">
      <p class="cs-block-label">What Changed</p>
      <div class="cs-before-after">
        <div class="cs-ba-col">
          <div class="cs-ba-label">Before</div>
          <ul class="cs-ba-list">
            <li>Residents relied on remotes, apps, or gate codes</li>
            <li>Shared access codes with limited accountability</li>
            <li>Difficult access management for workers and vendors</li>
            <li>No simple solution for deliveries and guests</li>
            <li>Limited visibility into gate activity</li>
            <li>No proactive after-hours security response</li>
            <li>Access control that felt inconvenient and outdated</li>
          </ul>
        </div>
        <div class="cs-ba-col after">
          <div class="cs-ba-label">After</div>
          <ul class="cs-ba-list">
            <li>Automatic gate access for authorized vehicles</li>
            <li>Simple management of vehicles, codes, and permissions</li>
            <li>Convenient access options for guests, vendors, and deliveries</li>
            <li>Complete access logging and activity history</li>
            <li>Real-time visibility into property access</li>
            <li>Integrated security alerts and monitoring</li>
            <li>Automated floodlight and security responses after hours</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cs-result reveal">
      <div class="cs-result-label">The Result</div>
      <p>The gate became easier to use while becoming more secure.</p>
      <p style="margin-top:0.9rem;font-weight:400;">Residents no longer think about entering the property. Guests, vendors, and delivery drivers have appropriate access without creating unnecessary friction. The homeowner can quickly add or remove access permissions while maintaining complete visibility into property activity.</p>
      <p style="margin-top:0.9rem;font-weight:400;">Most importantly, the property gained something it never had before: true access control.</p>
      <p style="margin-top:0.9rem;font-weight:400;">The gate still opens automatically.</p>
      <p style="margin-top:0.5rem;font-weight:400;">Now the homeowner knows exactly who it opens for.</p>
      <p style="margin-top:0.9rem;font-weight:700;">Better access. Better visibility. Better security.</p>
    </div>

  </div></section>

  <section id="contact"><div class="section-inner"><div class="contact-inner">
    <div class="section-tag">Get Started</div>
    <h2 class="section-title">Thinking About Simplifying Your Property?</h2>
    <p class="section-sub">Many gated properties already have automation. What they often lack is convenience, visibility, and meaningful control.</p>
    <p style="font-size:0.95rem;color:var(--muted);line-height:1.75;margin-bottom:2rem;">If you're tired of remotes, shared gate codes, limited access management, or wondering who still has access to your property, Craison Digital can help create a simpler and more secure experience.</p>
    <div style="margin-bottom:2.5rem;"><a href="#contact-form" class="btn-primary">Schedule a Property Assessment →</a></div>
    <form class="contact-form" id="contact-form" action="https://formspree.io/f/xaqabrdo" method="POST">
      <input type="hidden" name="_next" value="https://craisondigital.com/thank-you.php"/>
      <input type="hidden" name="_subject" value="New inquiry — Case Study 3"/>
      <div class="form-row">
        <div class="form-group"><label>First Name</label><input type="text" name="first_name" placeholder="John"/></div>
        <div class="form-group"><label>Last Name</label><input type="text" name="last_name" placeholder="Smith"/></div>
      </div>
      <div class="form-group"><label>Email</label><input type="email" name="_replyto" placeholder="john@example.com"/></div>
      <div class="form-group"><label>Phone</label><input type="tel" name="phone" placeholder="(941) 000-0000"/></div>
      <div class="form-group"><label>Tell us about your property</label><textarea name="message" placeholder="How big is your property? What systems do you have? What's broken or frustrating?"></textarea></div>
      <div class="form-submit-row">
        <button type="submit" class="btn-primary">Send My Request →</button>
        <span class="form-note">We typically respond within 24 hours.</span>
      </div>
    </form>
  </div></div></section>

  <?php include 'footer.php'; ?>

  <script>
  (function(){
    var els = document.querySelectorAll('.reveal');
    var obs = new IntersectionObserver(function(entries){ entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('visible'); obs.unobserve(e.target); } }); }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function(el){ obs.observe(el); });
    var navToggle = document.getElementById('navToggle');
    var mobileMenu = document.getElementById('mobileMenu');
    if(navToggle && mobileMenu){ navToggle.addEventListener('click', function(){ mobileMenu.classList.toggle('open'); }); mobileMenu.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', function(){ mobileMenu.classList.remove('open'); }); }); }
  })();
  </script>
</body>
</html>
