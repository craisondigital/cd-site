<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>How a Smart Home Should Work – Craison Digital</title>
  <meta name="description" content="Most smart homes are built around features, not around how people live. Here's what actually makes a smart home good — and what most of the industry keeps getting wrong."/>
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
    .hero-sub { font-size: 1.1rem; color: var(--muted); line-height: 1.75; max-width: 640px; margin: 0 auto; animation: fadeUp 0.6s 0.2s ease both; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(18px)} to{opacity:1;transform:translateY(0)} }

    /* ── SHARED ── */
    section { position: relative; z-index: 1; }
    .section-inner { max-width: 1100px; margin: 0 auto; padding: 6rem 4rem; }
    .section-tag { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase; color: var(--blue-bright); margin-bottom: 0.7rem; }
    .section-title { font-family: var(--font-display); font-size: clamp(1.7rem, 3.2vw, 2.6rem); font-weight: 800; line-height: 1.12; letter-spacing: -0.02em; margin-bottom: 1rem; color: var(--white); }
    .prose-section { max-width: 760px; margin: 0 auto; }
    .prose-section .section-tag { margin-bottom: 0.6rem; }
    .prose-section .section-title { margin-bottom: 2rem; }
    .prose { color: var(--muted); font-size: 0.97rem; line-height: 1.85; }
    .prose p { margin-bottom: 1.4rem; }
    .prose p:last-child { margin-bottom: 0; }
    .prose strong { color: var(--text); font-weight: 500; }
    .pull-quote { font-family: var(--font-display); font-size: clamp(1.15rem, 2.2vw, 1.55rem); font-weight: 700; color: var(--white); line-height: 1.3; letter-spacing: -0.015em; border-left: 3px solid var(--blue); padding-left: 1.5rem; margin: 2.8rem 0; }
    .callout { margin: 2.5rem 0; padding: 1.6rem 2rem; background: var(--card); border: 1px solid var(--border); border-left: 3px solid var(--cyan); border-radius: 0 12px 12px 0; }
    .callout-label { font-size: 0.68rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--cyan); margin-bottom: 0.7rem; }
    .callout p { margin: 0; font-size: 0.95rem; color: var(--text); line-height: 1.75; }

    /* ── REAL WORLD EXAMPLES ── */
    .examples-grid { display: flex; flex-direction: column; gap: 0; margin: 2.5rem 0; border: 1px solid var(--border); border-radius: 14px; overflow: hidden; }
    .example-item { display: grid; grid-template-columns: 48px 1fr; gap: 1.2rem; padding: 1.4rem 1.6rem; border-bottom: 1px solid var(--border); background: var(--card); transition: background 0.2s; align-items: start; }
    .example-item:last-child { border-bottom: none; }
    .example-item:hover { background: var(--card-hover); }
    .example-icon { font-size: 1.4rem; padding-top: 2px; }
    .example-text strong { display: block; font-size: 0.92rem; font-weight: 500; color: var(--text); margin-bottom: 0.3rem; }
    .example-text span { font-size: 0.84rem; color: var(--muted); line-height: 1.6; }

    /* ── BUTTONS ── */
    .btn-primary { background: var(--blue); color: var(--white); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 500; text-decoration: none; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 0 20px rgba(47,128,237,0.25); display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-primary:hover { background: var(--blue-bright); transform: translateY(-1px); box-shadow: 0 0 32px rgba(47,128,237,0.4); }
    .btn-secondary { background: transparent; color: var(--text); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 400; text-decoration: none; border: 1px solid var(--border); cursor: pointer; transition: all 0.2s; }
    .btn-secondary:hover { border-color: rgba(255,255,255,0.15); color: var(--white); }

    /* ── CLOSING ── */
    #closing { text-align: center; }
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
    .contact-layout .section-sub { color: var(--muted); font-size: 1rem; line-height: 1.7; margin: 0 auto 2.5rem; }
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

    /* ── SECTION BACKGROUNDS ── */
    #wrong { background: var(--black); }
    #fit { background: var(--dark); }
    #everyone { background: var(--black); }
    #reliability { background: var(--dark); }
    #no-app { background: var(--black); }
    #no-internet { background: var(--dark); }
    #real-world { background: var(--black); }
    #closing { background: var(--dark); }

    /* ── REVEAL ── */
    .reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.7s ease, transform 0.7s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
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
      .section-inner { padding: 4rem 1.5rem; }
      .hero-inner { padding: 3rem 1.5rem 4rem; }
      .pull-quote { font-size: 1.15rem; }
      .form-row { grid-template-columns: 1fr; }
      .form-submit-row { flex-direction: column; align-items: stretch; }
      footer { padding: 2rem 1.5rem; }
      .footer-top { flex-direction: column; gap: 0.8rem; }
      .footer-nav { justify-content: center; flex-wrap: wrap; gap: 1rem; }
      .footer-bottom { flex-direction: column; gap: 0.4rem; text-align: center; }
      .closing-inner { padding: 4rem 1.5rem; }
    }
  </style>
</head>
<body>

  <?php $activePage = ''; ?>
  <?php include 'nav.php'; ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="hero-inner">
      <div class="hero-eyebrow">The Guide</div>
      <h1>How a Smart Home<br><em>Should Work</em></h1>
      <p class="hero-sub">Most smart homes are built around features, not around how people live. Here's what the industry keeps getting wrong — and what good actually looks like.</p>
    </div>
  </section>

  <!-- MOST GET THIS WRONG -->
  <section id="wrong">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">The Problem</div>
        <h2 class="section-title">Most Smart Homes Get This Wrong</h2>
        <div class="prose">
          <p>Walk into a home with a "smart" lighting system and try to use it like a normal person. Half the time, the switches don't work anymore. The app takes five seconds to respond. The voice assistant mishears you. And if you don't know which scene does what, you're just standing in a dim room hoping something happens.</p>
          <p>That's not automation. That's inconvenience with extra steps.</p>
          <p>The problem isn't the devices — it's the approach. Most smart home installations are built around features, not around how people actually live. The result is a system that impresses people for a week and frustrates them for years.</p>

          <div class="pull-quote">Good automation starts with a different question: not what can we control, but what should we make effortless.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FIT YOUR LIFE -->
  <section id="fit">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">Principle 01</div>
        <h2 class="section-title">A Smart Home Should Fit Your Life</h2>
        <div class="prose">
          <p>Technology should adapt to you. Not the other way around.</p>
          <p>If your lights were simple before, they should still be simple. The switch on the wall should still work exactly the way it always did. Automation should be an enhancement — something that makes things better — not a replacement for behavior that already worked fine.</p>
          <p>When you walk into a room, the light should come on. When you leave, it should go off. When you sit down to watch a movie, the lights should adjust without you thinking about it. These things should happen because the system has learned how you live — not because you remembered to tap the right button in the right app at the right time.</p>
          <p>The goal isn't to give you more control. The goal is to make control unnecessary.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- EVERYONE -->
  <section id="everyone">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">Principle 02</div>
        <h2 class="section-title">It Has to Work for Everyone</h2>
        <div class="prose">
          <p>You are not the only person in your home.</p>
          <p>A smart home that only works for the person who set it up isn't a smart home — it's a technical burden on everyone else. Your partner, your kids, your guests, the house sitter: they all need to be able to use your home without a tutorial.</p>
          <p>That means the lights work when you flip the switch. The thermostat is readable. The gate opens when it's supposed to. Nothing requires an app nobody has installed.</p>

          <div class="pull-quote">If someone has to call you to figure out how to turn on the porch light, something went wrong during the design phase.</div>

          <p>A well-built system is transparent. People use it without knowing it's there.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RELIABILITY -->
  <section id="reliability">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">Principle 03</div>
        <h2 class="section-title">Reliability Isn't Optional</h2>
        <div class="prose">
          <p>A smart home that works 90% of the time is a problem.</p>
          <p>That other 10% — that's the morning you're late and the gate won't open. That's the night the lights don't respond and someone's fumbling in the dark. That's the house guest who can't figure out how to make anything work and stops trying.</p>
          <p>Reliability means the system behaves predictably, every time. It means that when something does fail, it fails gracefully — the switch still works, the door still opens manually, the lights don't just stay off. The automation layer should sit on top of normal behavior, not replace it.</p>

          <div class="callout">
            <div class="callout-label">The right way to think about it</div>
            <p>A good system has no single points of failure. It degrades quietly rather than breaking loudly. If the automation goes down, the home still functions — just without the smart layer on top. That's the floor, not the ceiling.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NO APP -->
  <section id="no-app">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">Principle 04</div>
        <h2 class="section-title">The Best App Is No App</h2>
        <div class="prose">
          <p>There's a version of a smart home where you control everything from your phone. Lights, locks, temperature, blinds, music — all managed from a dashboard you carry everywhere.</p>
          <p>That sounds good until you realize: you already have switches on the wall. You already have a thermostat. You already have muscle memory for how your home works. Adding an app doesn't make any of that better. It just adds a step.</p>
          <p>Apps have a place. Remote access matters. Being able to check whether the gate is closed when you're halfway to the airport — that's genuinely useful. But apps should be backup, not primary. The house should work without your phone. Walking in the front door shouldn't require you to open anything.</p>

          <div class="pull-quote">The best smart home interaction is the one that doesn't happen.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- NO INTERNET -->
  <section id="no-internet">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">Principle 05</div>
        <h2 class="section-title">Your Home Should Work Without the Internet</h2>
        <div class="prose">
          <p>If your internet goes down, your front door should still unlock. Your lights should still work. Your thermostat should still respond.</p>
          <p>This sounds obvious. It isn't how most systems are built.</p>
          <p>A surprising number of smart home products route every command through a cloud server — even when you're standing three feet from the device you're trying to control. Your light switch asks a server in another state for permission to turn on. When that server is slow, your light is slow. When that server is down, your light doesn't work at all.</p>

          <div class="callout">
            <div class="callout-label">How it should be built</div>
            <p>A well-designed system runs locally. Your home's automation happens on your property, on hardware you control. The cloud is an extension — a way to access your home from a distance — not the foundation everything else depends on. Internet outages shouldn't be a home emergency.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- REAL WORLD -->
  <section id="real-world">
    <div class="section-inner">
      <div class="prose-section reveal">
        <div class="section-tag">In Practice</div>
        <h2 class="section-title">What This Looks Like in the Real World</h2>
        <div class="prose">
          <p>None of this is abstract. Here's what these principles look like when a system is built the right way.</p>
        </div>

        <div class="examples-grid reveal">
          <div class="example-item">
            <div class="example-icon">🚪</div>
            <div class="example-text">
              <strong>Your gate opens when you pull up the driveway</strong>
              <span>No button. No app. You just drive in. When a service worker arrives, they use their own code. You get a notification. The gate closes behind them. You didn't touch anything.</span>
            </div>
          </div>
          <div class="example-item">
            <div class="example-icon">💡</div>
            <div class="example-text">
              <strong>Your lights come on when you walk in at night</strong>
              <span>And turn off when you leave. During the day they stay off. The switches on the wall still work exactly as they always did. Nothing changed except it now also just handles itself.</span>
            </div>
          </div>
          <div class="example-item">
            <div class="example-icon">🏊</div>
            <div class="example-text">
              <strong>Your pool heats up before you get home on Friday</strong>
              <span>You didn't schedule it — the system learned your patterns. When the temperature hits where you like it, it stops. You get in the spa. You didn't open an app once.</span>
            </div>
          </div>
          <div class="example-item">
            <div class="example-icon">⛲</div>
            <div class="example-text">
              <strong>Your fountain runs on a schedule and shuts off in high wind</strong>
              <span>No water blowing across the dock, no mess. When the wind drops, it turns back on. You never think about it. It just works.</span>
            </div>
          </div>
          <div class="example-item">
            <div class="example-icon">✈️</div>
            <div class="example-text">
              <strong>You leave for two weeks and the house runs normally</strong>
              <span>Lights follow schedules. Cameras watch the perimeter. Doors stay locked. You can check in from your phone if you want. But you don't have to.</span>
            </div>
          </div>
        </div>

        <div class="prose" style="margin-top:2rem;">
          <p>None of this is complicated. It just requires building the system the right way from the start.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING -->
  <section id="closing">
    <div class="closing-inner reveal">
      <span class="section-tag">This Is How We Build</span>
      <h2 class="section-title">We think about these things<br>before we install anything.</h2>
      <div class="closing-prose">
        <p>Before we choose a single device, we ask how you live. Who else uses this home. What's already working. What's breaking. What you've given up on. We build around your answers — not around a product catalogue.</p>
        <p>We prioritize local control. We make sure switches still work. We design for the people who don't want to think about technology, not just the one who does. We stay involved after the install, because a home is a living thing and systems need to evolve with it.</p>
        <p>We're not selling smart home features. We're building homes that work the way they should have all along.</p>
      </div>
      <div class="closing-actions">
        <a href="#contact" class="btn-primary">Talk to Us About Your Property →</a>
        <a href="index.php" class="btn-secondary">See What We Automate</a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="section-inner">
      <div class="contact-layout">
        <div class="section-tag">Get Started</div>
        <h2 class="section-title">Let's talk about your property.</h2>
        <p class="section-sub">Whether you're starting from scratch or have a system that stopped working years ago — tell us what's going on. We'll figure out the rest.</p>
        <form class="contact-form" action="https://formspree.io/f/xaqabrdo" method="POST">
          <input type="hidden" name="_next" value="https://craisondigital.com/thank-you.php"/>
          <input type="hidden" name="_subject" value="New inquiry — How a Smart Home Should Work"/>
          <div class="form-row">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="first_name" placeholder="John"/>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="last_name" placeholder="Smith"/>
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="_replyto" placeholder="john@example.com"/>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="tel" name="phone" placeholder="(941) 000-0000"/>
          </div>
          <div class="form-group">
            <label>What are you looking to do?</label>
            <select name="interest">
              <option value="" disabled selected>Select one</option>
              <option>Fix my existing smart home — it doesn't work right</option>
              <option>Connect everything I already have into one app</option>
              <option>Gate / Access Control</option>
              <option>Pool &amp; Spa</option>
              <option>Lighting &amp; Scenes</option>
              <option>Cameras &amp; Security</option>
              <option>Full property — everything across all buildings</option>
              <option>Not sure yet — I just want it to work</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tell us about your property</label>
            <textarea name="message" placeholder="How big is your property? What systems do you have? What's broken or frustrating? What would make your life easier?"></textarea>
          </div>
          <div class="form-submit-row">
            <button type="submit" class="btn-primary">Send My Request →</button>
            <span class="form-note">We typically respond within 24 hours.</span>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script>
  (function(){
    var toggle = document.getElementById('navToggle');
    var menu = document.getElementById('mobileMenu');
    if (toggle && menu) {
      toggle.addEventListener('click', function(){ menu.classList.toggle('open'); });
      menu.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', function(){ menu.classList.remove('open'); }); });
    }
    var els = document.querySelectorAll('.reveal');
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('visible'); obs.unobserve(e.target); } });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function(el){ obs.observe(el); });
  })();
  </script>

</body>
</html>
