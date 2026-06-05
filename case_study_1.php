<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Case Study: Estate-Wide Automation & Network Upgrade – Craison Digital</title>
  <meta name="description" content="How Craison Digital unified a 5-acre Sarasota estate — property-wide WiFi, gate access, fountain automation, irrigation, lighting, and security into one platform."/>
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
    .section-sub { color: var(--muted); font-size: 1rem; max-width: 700px; line-height: 1.7; margin-bottom: 2.5rem; }

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
    .cs-block-label { font-size: 2rem; color: var(--white); font-style: italic; font-family: var(--font-display); font-weight: 800; margin-bottom: 0.75rem; letter-spacing: -0.02em; }
    .cs-block p { font-size: 0.95rem; color: var(--muted); line-height: 1.8; }
    .cs-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem; }
    .cs-list li { font-size: 0.92rem; color: var(--muted); line-height: 1.6; padding-left: 1.1rem; position: relative; }
    .cs-list li::before { content: '—'; position: absolute; left: 0; color: var(--blue-bright); font-weight: 700; }

    .cs-before-after { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 3rem; }
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
    @media (max-width: 768px) { .cs-before-after { grid-template-columns: 1fr; } }
    .cs-result-label { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--cyan); margin-bottom: 0.5rem; }
    .cs-result p { font-size: 1rem; color: var(--white); font-weight: 600; line-height: 1.7; margin: 0; }

    #contact { background: var(--dark); text-align: center; }
    .contact-inner { max-width: 600px; margin: 0 auto; }
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
    }
  </style>
</head>
<body>
  <?php $activePage = 'case_study_1'; ?>
<?php include 'nav.php'; ?>

  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="hero-inner">
      <div class="hero-eyebrow">Case Study</div>
      <h1>Simplifying a<br><em>5-Acre Sarasota Estate</em></h1>
      <p class="hero-sub">Estate-Wide Automation & Network Upgrade</p>
    </div>
  </section>

  <section style="background:var(--black);"><div class="section-inner">

    <div class="cs-meta reveal">
      <div class="cs-meta-item"><span class="cs-meta-label">Location</span><span class="cs-meta-value">Sarasota, FL</span></div>
      <div class="cs-meta-item"><span class="cs-meta-label">Property Size</span><span class="cs-meta-value">5 Acres</span></div>
      <div class="cs-meta-item"><span class="cs-meta-label">Project Type</span><span class="cs-meta-value">Whole Property Integration</span></div>
    </div>

    <p style="font-size:1.05rem;color:var(--muted);line-height:1.75;max-width:860px;margin-bottom:1.2rem;" class="reveal">A large Sarasota property with multiple buildings, disconnected systems, weak coverage, and too many apps was transformed into one reliable, easy-to-manage property experience.</p>
    <div class="cs-placeholder reveal">Photo Coming Soon</div>

    <div class="cs-block reveal">
      <p class="cs-block-label">The Property</p>
      <p>This 5-acre Sarasota estate included multiple buildings, a gated entrance, irrigation, fountains, outdoor lighting, garage and rollup doors, security devices, thermostats, televisions, pumps, and a growing collection of smart home products.</p>
      <p style="margin-top:1rem;">Over time, different systems had been added by different people for different reasons. Some devices were smart. Some were not. Some used apps. Some used remotes. Some required manual switches. The result was a property with a lot of useful technology, but no simple way to manage it all.</p>
    </div>

    <div class="cs-block reveal">
      <p class="cs-block-label">The Challenge</p>
      <p>The homeowner was dealing with the same problem many large properties eventually face: every improvement added another layer of complexity.</p>
      <p style="margin-top:1rem;">The property had multiple buildings, disconnected WiFi networks, and originally relied on separate internet connections. Coverage was inconsistent, devices dropped offline, and systems throughout the property did not reliably communicate with each other.</p>
      <p style="margin-top:1rem;">At the same time, the homeowner had to remember which app controlled which system. Irrigation had one app. Lights had another. Smart devices had their own controls. Other systems, like fountains, pumps, and certain outdoor lighting, were not connected at all.</p>
      <p style="margin-top:1rem;">Simple tasks became frustrating because the property required too many apps, too many remotes, and too many different ways of doing things.</p>
    </div>

    <div class="cs-block reveal">
      <p class="cs-block-label">The Solution</p>
      <ul class="cs-list">
        <li>Property-wide WiFi from gate to backyard</li>
        <li>Unified smart home platform</li>
        <li>Gate access control</li>
        <li>Garage and Rollup Door Controls</li>
        <li>Fountain automation</li>
        <li>Weather-aware irrigation</li>
        <li>Automated lighting and security notifications</li>
      </ul>
      <p style="margin-top:1.2rem;">Craison Digital started by looking at the property as a whole, not as a collection of separate devices.</p>
      <p style="margin-top:1rem;">The first step was building a reliable foundation. A new property-wide network was installed to provide seamless WiFi coverage from the front gate to the back of the property and across multiple buildings. This eliminated the need for separate internet connections and gave the property one reliable network backbone.</p>
      <p style="margin-top:1rem;">From there, existing smart devices were integrated into a single platform. Legacy equipment and non-smart systems were also brought into the system where possible, including lighting, fountains, pumps, irrigation, doors, security devices, and other property controls.</p>
      <p style="margin-top:1rem;">Instead of forcing the homeowner to adapt to a product, the system was built around how the property was actually used.</p>
    </div>

    <div class="cs-block reveal">
      <p class="cs-block-label">What Changed</p>

      <div class="cs-before-after">
        <div class="cs-ba-col">
          <div class="cs-ba-label">Before</div>
          <ul class="cs-ba-list">
            <li>Multiple apps for different systems</li>
            <li>Separate internet connections</li>
            <li>Disconnected WiFi networks</li>
            <li>Weak coverage across the property</li>
            <li>Smart and non-smart devices operating independently</li>
            <li>Manual control for important systems</li>
            <li>Limited visibility into what was happening around the property</li>
          </ul>
        </div>
        <div class="cs-ba-col after">
          <div class="cs-ba-label">After</div>
          <ul class="cs-ba-list">
            <li>One property-wide network</li>
            <li>Reliable WiFi from the gate to the back of the property</li>
            <li>One platform for the entire estate</li>
            <li>Smart and legacy systems working together</li>
            <li>Automated lighting, irrigation, fountain, access, and security functions</li>
            <li>Proactive notifications for important property activity</li>
            <li>A system that can grow as the property changes</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cs-result reveal">
      <div class="cs-result-label">The Result</div>
      <p>The property went from a collection of disconnected systems to one unified experience.</p>
      <p style="margin-top:0.9rem;font-weight:400;">The homeowner no longer has to remember which app controls which part of the property. Gates, lighting, irrigation, fountains, doors, thermostats, and other systems can now be monitored and controlled from one simple platform.</p>
      <p style="margin-top:0.9rem;font-weight:400;">Most importantly, the technology became easier to live with.</p>
      <p style="margin-top:0.9rem;">One property. One app. One simple experience.</p>
    </div>

  </div></section>

  <section id="contact"><div class="section-inner"><div class="contact-inner">
    <div class="section-tag">Get Started</div>
    <h2 class="section-title">Thinking About Simplifying Your Property?</h2>
    <p class="section-sub">Large properties are complicated, but managing them does not have to be.</p>
    <p style="font-size:0.95rem;color:var(--muted);line-height:1.75;margin-bottom:2rem;">If your property has multiple apps, weak WiFi, disconnected systems, or equipment that never quite worked the way it should, Craison Digital can help create a plan around what you already own.</p>
    <div style="margin-bottom:2.5rem;"><a href="#contact-form" class="btn-primary">Schedule a Property Assessment →</a></div>
    <form class="contact-form" id="contact-form" action="https://formspree.io/f/xaqabrdo" method="POST">
      <input type="hidden" name="_next" value="https://craisondigital.com/thank-you.php"/>
      <input type="hidden" name="_subject" value="New inquiry — Case Study 1"/>
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
