<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About – Craison Digital | Smart Property Integration, Sarasota</title>
  <meta name="description" content="Craison Digital is a Sarasota-based smart property integration company. Fifteen years of experience building systems that are local, reliable, and built to last."/>
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
      --text: #e4e9f2; --muted: #6b7a8d; --white: #f4f7fb;
      --font-display: 'Syne', sans-serif;
      --font-body: 'DM Sans', sans-serif;
    }
    html { scroll-behavior: smooth; }
    body { background: var(--black); color: var(--text); font-family: var(--font-body); font-weight: 300; line-height: 1.75; overflow-x: hidden; -webkit-font-smoothing: antialiased; }
    body::before { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E"); pointer-events: none; z-index: 0; opacity: 0.5; }

    /* ── NAV ── */
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
    .nav-cta { background: var(--blue); color: var(--white) !important; padding: 0.5rem 1.4rem; border-radius: 6px; font-weight: 500 !important; transition: background 0.2s, transform 0.15s; }
    .nav-cta:hover { background: var(--blue-bright) !important; transform: translateY(-1px); }
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

    /* ── HERO ── */
    .hero { position: relative; width: 100%; min-height: 72vh; display: flex; flex-direction: column; align-items: center; justify-content: center; overflow: hidden; padding-top: 70px; text-align: center; }
    .hero-bg { position: absolute; inset: 0; background: linear-gradient(180deg, #040710 0%, #081525 50%, #0a1a30 100%); }
    .hero-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(47,128,237,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(47,128,237,0.04) 1px, transparent 1px); background-size: 56px 56px; mask-image: radial-gradient(ellipse 85% 75% at 50% 55%, black 15%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 85% 75% at 50% 55%, black 15%, transparent 100%); }
    .hero-glow { position: absolute; top: 20%; left: 50%; transform: translateX(-50%); width: 700px; height: 400px; background: radial-gradient(ellipse, rgba(47,128,237,0.09) 0%, transparent 70%); pointer-events: none; }
    .hero-inner { position: relative; z-index: 3; max-width: 820px; padding: 4rem 2rem 5rem; }
    .hero-eyebrow { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(47,128,237,0.08); border: 1px solid rgba(47,128,237,0.2); color: var(--blue-bright); font-size: 0.72rem; font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase; padding: 0.35rem 0.9rem; border-radius: 100px; margin-bottom: 1.5rem; animation: fadeUp 0.6s ease both; }
    .hero-eyebrow::before { content: ''; width: 5px; height: 5px; background: var(--cyan); border-radius: 50%; box-shadow: 0 0 8px var(--cyan); animation: pulse 2s infinite; }
    @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.3} }
    .hero-inner h1 { font-family: var(--font-display); font-size: clamp(2.2rem, 5.2vw, 4rem); font-weight: 800; line-height: 1.06; letter-spacing: -0.025em; color: var(--white); margin-bottom: 1.4rem; animation: fadeUp 0.6s 0.1s ease both; }
    .hero-inner h1 em { font-style: normal; background: linear-gradient(135deg, var(--blue-bright), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .hero-sub { font-size: 1.1rem; color: var(--muted); line-height: 1.7; max-width: 660px; margin: 0 auto; animation: fadeUp 0.6s 0.2s ease both; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(18px)} to{opacity:1;transform:translateY(0)} }

    /* ── SHARED SECTION ── */
    section { position: relative; z-index: 1; }
    .section-inner { max-width: 1100px; margin: 0 auto; padding: 6rem 4rem; }
    .section-tag { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase; color: var(--blue-bright); margin-bottom: 0.7rem; }
    .section-title { font-family: var(--font-display); font-size: clamp(1.7rem, 3.2vw, 2.6rem); font-weight: 800; line-height: 1.12; letter-spacing: -0.02em; margin-bottom: 1rem; color: var(--white); }
    .section-sub { color: var(--muted); font-size: 1rem; max-width: 540px; line-height: 1.7; }
    .prose { color: var(--muted); font-size: 0.95rem; line-height: 1.8; }
    .prose p { margin-bottom: 1.3rem; }
    .prose p:last-child { margin-bottom: 0; }

    /* ── BUTTONS ── */
    .btn-primary { background: var(--blue); color: var(--white); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 500; text-decoration: none; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 0 20px rgba(47,128,237,0.25); display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-primary:hover { background: var(--blue-bright); transform: translateY(-1px); box-shadow: 0 0 32px rgba(47,128,237,0.4); }
    .btn-secondary { background: transparent; color: var(--text); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 400; text-decoration: none; border: 1px solid var(--border); cursor: pointer; transition: all 0.2s; }
    .btn-secondary:hover { border-color: rgba(255,255,255,0.15); color: var(--white); }

    /* ── PROSE SECTIONS ── */
    #story { background: var(--black); }
    #open-home { background: var(--dark); }
    #sarasota { background: var(--black); }
    .prose-section { max-width: 760px; margin: 0 auto; }
    .prose-section .section-tag { margin-bottom: 1rem; }
    .prose-section .section-title { margin-bottom: 2rem; }
    .prose { color: var(--muted); font-size: 0.97rem; line-height: 1.85; }
    .prose p { margin-bottom: 1.4rem; }
    .prose p:last-child { margin-bottom: 0; }
    .prose strong { color: var(--text); font-weight: 500; }
    .owner-note { margin: 2.5rem 0; padding: 1.6rem 2rem; background: var(--card); border: 1px solid var(--border); border-left: 3px solid var(--cyan); border-radius: 0 12px 12px 0; }
    .owner-note-label { font-size: 0.68rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--cyan); margin-bottom: 0.7rem; }
    .owner-note p { margin: 0; font-size: 0.95rem; color: var(--text); line-height: 1.75; }
    .pull-quote { font-family: var(--font-display); font-size: clamp(1.2rem, 2.2vw, 1.6rem); font-weight: 700; color: var(--white); line-height: 1.3; letter-spacing: -0.015em; border-left: 3px solid var(--blue); padding-left: 1.5rem; margin: 2.8rem 0; }
    .oh-principles { display: flex; flex-direction: column; gap: 0; margin: 2.5rem 0; border: 1px solid var(--border); border-radius: 14px; overflow: hidden; }
    .oh-principle { display: flex; align-items: flex-start; gap: 1.1rem; padding: 1.2rem 1.5rem; border-bottom: 1px solid var(--border); background: var(--card); transition: background 0.2s; }
    .oh-principle:last-child { border-bottom: none; }
    .oh-principle:hover { background: var(--card-hover); }
    .oh-check { color: var(--cyan); font-size: 0.75rem; margin-top: 3px; flex-shrink: 0; }
    .oh-principle-text strong { display: block; font-size: 0.9rem; font-weight: 500; color: var(--text); margin-bottom: 0.2rem; }
    .oh-principle-text span { font-size: 0.83rem; color: var(--muted); line-height: 1.55; }
    .ha-callout { margin-top: 2.5rem; background: linear-gradient(135deg, rgba(47,128,237,0.07) 0%, rgba(0,212,255,0.04) 100%); border: 1px solid rgba(47,128,237,0.18); border-radius: 14px; padding: 2rem 2.2rem; }
    .ha-callout-label { font-size: 0.68rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--cyan); margin-bottom: 0.8rem; }
    .ha-callout p { font-size: 0.9rem; color: var(--muted); line-height: 1.7; margin: 0; }
    .ha-callout p strong { color: var(--text); font-weight: 500; }

    /* ── CLOSING / CTA ── */
    #closing { background: var(--dark); text-align: center; }
    .closing-inner { max-width: 680px; margin: 0 auto; padding: 6rem 2rem; }
    .closing-inner .section-tag { display: block; margin-bottom: 1rem; }
    .closing-inner .section-title { margin-bottom: 1.4rem; }
    .closing-prose { color: var(--muted); font-size: 0.98rem; line-height: 1.8; margin-bottom: 2.5rem; }
    .closing-prose p { margin-bottom: 1rem; }
    .closing-prose p:last-child { margin-bottom: 0; }
    .closing-actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }

    /* ── CONTACT ── */
    #contact { background: var(--black); }
    .contact-layout { max-width: 600px; margin: 0 auto; text-align: center; }
    .contact-layout .section-title { margin-bottom: 0.6rem; }
    .contact-layout .section-sub { margin: 0 auto 2.5rem; }
    .contact-form { display: flex; flex-direction: column; gap: 0.9rem; text-align: left; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.9rem; }
    .form-group { display: flex; flex-direction: column; gap: 0.35rem; }
    label { font-size: 0.75rem; color: var(--muted); letter-spacing: 0.04em; font-weight: 400; }
    input, textarea, select { background: var(--card); border: 1px solid var(--border); border-radius: 8px; padding: 0.7rem 0.9rem; color: var(--text); font-family: var(--font-body); font-size: 0.88rem; outline: none; transition: border-color 0.2s; width: 100%; }
    input:focus, textarea:focus, select:focus { border-color: rgba(47,128,237,0.4); }
    textarea { resize: vertical; min-height: 110px; }
    select { appearance: none; cursor: pointer; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%236b7a8d' fill='none' stroke-width='1.5'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 0.9rem center; padding-right: 2.2rem; }
    select option { background: var(--card); color: var(--text); }
    .form-submit-row { display: flex; align-items: center; gap: 1rem; margin-top: 0.5rem; }
    .form-submit-row .btn-primary { flex-shrink: 0; }
    .form-note { font-size: 0.72rem; color: var(--muted); }

    /* ── FOOTER ── */
    footer { border-top: 1px solid var(--border); background: var(--black); padding: 2.5rem 4rem; font-size: 0.78rem; color: var(--muted); }
    .footer-logo { font-family: var(--font-display); font-weight: 800; font-size: 0.95rem; color: var(--white); text-decoration: none; }
    .footer-logo span { color: var(--cyan); }
    .footer-top { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem; }
    .footer-nav { display: flex; gap: 1.8rem; }
    .footer-nav a { color: var(--muted); text-decoration: none; font-size: 0.8rem; transition: color 0.2s; }
    .footer-nav a:hover { color: var(--text); }
    .footer-bottom { display: flex; align-items: center; justify-content: space-between; padding-top: 1.2rem; border-top: 1px solid var(--border); }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      .nav-bar { padding: 0.9rem 1.5rem; }
      .nav-toggle { display: block; }
      .nav-links { display: none !important; }
      .mobile-menu {
        display: none; flex-direction: column; align-items: center;
        padding: 1.2rem 2rem 1.8rem; border-top: 1px solid var(--border);
        background: var(--black);
      }
      .mobile-menu.open { display: flex; }
      .mobile-menu a { display: block; width: 100%; text-align: center; padding: 0.55rem 0; font-size: 1rem; color: var(--text); text-decoration: none; transition: color 0.15s; }
      .mobile-menu a:active { color: var(--blue-bright); }
      .mobile-menu .mm-label { display: block; width: 100%; text-align: center; padding: 0.6rem 0 0.15rem; font-size: 0.62rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--blue-bright); }
      .mobile-menu .mm-sub a { color: var(--muted); font-size: 1rem; padding: 0.45rem 0; }
      .mobile-menu .mm-sub a:active { color: var(--text); }
      .mobile-menu .mm-sub a.dropdown-active { color: var(--blue-bright); }
      .mobile-menu .mm-divider { width: 32px; height: 1px; background: var(--border); margin: 0.4rem auto; }
      .mobile-menu .nav-cta { display: inline-block; margin-top: 0.4rem; padding: 0.6rem 1.8rem; font-size: 1rem; }
      .section-inner { padding: 4rem 1.5rem; }
      .form-row { grid-template-columns: 1fr; }
      .form-submit-row { flex-direction: column; align-items: stretch; }
      footer { padding: 2rem 1.5rem; }
      .footer-top { flex-direction: column; gap: 0.8rem; }
      .footer-nav { justify-content: center; flex-wrap: wrap; gap: 1rem; }
      .footer-bottom { flex-direction: column; gap: 0.4rem; text-align: center; }
      .hero-inner { padding: 3rem 1.5rem 4rem; }
      .pull-quote { font-size: 1.15rem; }
    }
  </style>
</head>
<body>

  <!-- NAV -->
  <?php $activePage = 'about'; ?>
<?php include 'nav.php'; ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="hero-inner">
      
      <h1>Built Different.<br><em>On Purpose.</em></h1>
      <div class="hero-eyebrow">Sarasota, FL &nbsp;·&nbsp; Est. 2025</div>
      <p class="hero-sub">Your property should work locally, respect your privacy, and belong to you completely. That's not a feature list. It's the foundation we build everything on.</p>
    </div>
  </section>

  <!-- STORY -->
  <section id="story">
    <div class="section-inner">
      <div class="prose-section">
        <div class="section-tag" style="color:var(--white);margin-bottom:0.5rem;">How This Started</div>
        <div class="section-tag" style="margin-bottom:2rem;">A note from Craig, our owner</div>
        <div class="prose">
          <p>Long before smart home technology became a mainstream conversation, I was already deep in it — and already frustrated by the same problems that still exist today.</p>
        </div>

        <div class="prose">
          <p>Every manufacturer wanted to be their own ecosystem. Every device needed its own app. Every system worked great in isolation and fell apart the moment you tried to connect it to anything else. You'd invest real money in a gate controller, a lighting system, a pool automation setup — and none of them would talk to each other. If your internet went down, half of it stopped working. If the company behind the software changed direction or shut down, you were starting over.</p>
          <p>And underneath all of it, a more uncomfortable truth: most of these systems were designed to keep you dependent. Monthly fees, locked hardware, proprietary apps that only worked with their brand. The homeowner owned the devices, but the company controlled the experience.</p>

          <div class="pull-quote">The vision wasn't complicated. A system that worked locally. That you actually owned. That didn't require a dozen apps or a cloud server staying online just to open your gate.</div>

          <p>The problem back then wasn't the idea — it was that the tools weren't ready to deliver it properly. Not at the level a real property deserved. Not in a way that was maintainable, reliable, and genuinely easy to use for everyone in the household.</p>
          <p>That's changed. The platform and the tooling have caught up to the vision. CraisonDigital exists to put that to work — for properties here in Sarasota that deserve better than what most of the industry has been offering.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OPEN HOME -->
  <section id="open-home">
    <div class="section-inner">
      <div class="prose-section">
        <div class="section-tag">The Open Home</div>
        <h2 class="section-title">Why we build around Home Assistant.</h2>
        <div class="prose">
          <p>Home Assistant is the platform I build on, and I want to be direct about why — because it isn't just a technical choice. It's an alignment of values.</p>
          <p>Home Assistant is built around what its community calls the <strong>Open Home philosophy</strong>: the belief that a smart home should respect your privacy, give you real control, work across brands, and keep working without depending on any company's continued existence or goodwill. It's the platform that finally made it possible to build the kind of system I'd been trying to build for fifteen years.</p>
          <p>For a homeowner, what that actually means in practice:</p>
        </div>

        <div class="oh-principles">
          <div class="oh-principle">
            <span class="oh-check">✓</span>
            <div class="oh-principle-text">
              <strong>Your system runs locally</strong>
              <span>Automations, access control, and device logic live on hardware at your property — not on a server somewhere. Your internet goes out, your property still works.</span>
            </div>
          </div>
          <div class="oh-principle">
            <span class="oh-check">✓</span>
            <div class="oh-principle-text">
              <strong>Your data stays yours</strong>
              <span>No cloud company is logging when your gate opens, who's on camera, or when you're home. What happens on your property stays on your property.</span>
            </div>
          </div>
          <div class="oh-principle">
            <span class="oh-check">✓</span>
            <div class="oh-principle-text">
              <strong>No unnecessary subscriptions</strong>
              <span>You're not paying a monthly fee to keep your own gate working. The system I build for you belongs to you — not to a service contract.</span>
            </div>
          </div>
          <div class="oh-principle">
            <span class="oh-check">✓</span>
            <div class="oh-principle-text">
              <strong>Works across brands</strong>
              <span>Your pool automation doesn't need to be the same brand as your cameras. Your lighting doesn't care who made your gate controller. The whole property connects regardless.</span>
            </div>
          </div>
          <div class="oh-principle">
            <span class="oh-check">✓</span>
            <div class="oh-principle-text">
              <strong>Built to last</strong>
              <span>Open platforms don't get discontinued. If I'm unavailable for any reason, your system keeps running exactly as I left it — and another qualified integrator can pick it up.</span>
            </div>
          </div>
        </div>

        <div class="ha-callout">
          <div class="ha-callout-label">Worth saying clearly</div>
          <p>I'm not affiliated with Home Assistant or its parent company Nabu Casa. I just genuinely believe it's the right foundation for this kind of work — and I've believed something like it since long before it existed in its current form. When a platform finally arrives that matches what you've been trying to build for fifteen years, you use it.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SARASOTA -->
  <section id="sarasota">
    <div class="section-inner">
      <div class="prose-section">
        <div class="section-tag">Rooted Here</div>
        <h2 class="section-title">I've lived in Sarasota my whole life.<br>This is my home.</h2>
        <div class="prose">
          <p>That matters for a reason that has nothing to do with geography.</p>
          <p>When someone trusts me with their property — their gate access, their security cameras, the systems that run their outbuildings — they're not just hiring a vendor. They're letting someone into how their home actually operates. That requires a different kind of accountability than you get from a national installer or a remote service team.</p>
          <p>I'm not a franchise. I'm not a satellite office someone set up to cover the market. I don't close a ticket and move on to the next city. The people I work with here are neighbors. I'll know their property the way a good contractor knows a building — because I designed it, I built it, and I'm still twenty minutes away when something needs attention years later.</p>

          <div class="pull-quote">I'm not interested in one-time installs. I'm interested in knowing your property well and being the person you call when something needs to change.</div>

          <p>That's the kind of relationship worth building. It's also the only kind that makes sense for this type of work — where the system I leave behind needs to hold up, grow with you, and be supported by someone who actually knows what they built.</p>
          <p>CraisonDigital is built around serving this community well, for the long term. That's not a positioning statement. It's just the only way I know how to do this kind of work right.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING -->
  <section id="closing">
    <div class="closing-inner">
      <span class="section-tag">Ready to Start</span>
      <h2 class="section-title">If this sounds like the right fit,<br>let's talk.</h2>
      <div class="closing-prose">
        <p>I'm not the right choice for every project. If you're looking for the lowest quote or the fastest turnaround, there are easier options out there.</p>
        <p>But if you want a system built on technology you actually own, designed by someone who has been thinking about this for fifteen years, and supported by someone who is still going to be here — that's what CraisonDigital is.</p>
        <p>Tell me about your property. We'll figure out what makes sense together.</p>
      </div>
      <div class="closing-actions">
        <a href="#contact" class="btn-primary">Schedule a Conversation</a>
        <a href="index.php" class="btn-secondary">See Our Services</a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="section-inner">
      <div class="contact-layout">
        <div class="section-tag">Get in Touch</div>
        <h2 class="section-title">Let's talk about your property.</h2>
        <p class="section-sub">Tell us what you're working with and what you'd like it to do. We'll take it from there.</p>
        <form class="contact-form" action="https://formspree.io/f/xaqabrdo" method="POST">
          <input type="hidden" name="_next" value="https://craisondigital.com/thank-you.html"/><input type="hidden" name="_subject" value="New inquiry — About Page"/>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="name" placeholder="Craig Scuilla" />
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="(941) 555-0100" />
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="_replyto" placeholder="you@example.com" />
          </div>
          <div class="form-group">
            <label for="interest">What are you interested in?</label>
            <select id="interest" name="interest">
              <option value="">Select a service...</option>
              <option>Full Property Integration</option>
              <option>Smart Gate Access</option>
              <option>Pool &amp; Spa Automation</option>
              <option>Lake &amp; Fountain Control</option>
              <option>Something else</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Tell us about your property</label>
            <textarea id="message" name="message" placeholder="Describe your property, what systems you currently have, and what you'd like to improve..."></textarea>
          </div>
          <div class="form-submit-row">
            <button type="submit" class="btn-primary">Send Message</button>
            <span class="form-note">We typically respond within one business day.</span>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <a href="index.php" class="footer-logo">Craison<span>Digital</span></a>
      <div class="footer-nav">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="gate.php">Gate</a>
        <a href="pool.php">Pool</a>
        <a href="fountains.php">Fountains</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
    <div class="footer-bottom">
      <div>© 2026 Craison Digital. All rights reserved.</div>
      <div>Smart Property Consulting · Estates &amp; Compounds · Sarasota</div>
    </div>
  </footer>

  <script>
    // Mobile nav toggle
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('mobileMenu');
    toggle.addEventListener('click', () => {
      menu.classList.toggle('open');
    });
    // Close mobile menu on link click
    menu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => menu.classList.remove('open'));
    });
  </script>

</body>
</html>
