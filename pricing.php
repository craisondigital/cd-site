<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Craison Digital – Smart Gate Access Packages & Pricing</title>
  <meta name="description" content="Modular gate access control packages for residential and commercial properties. Hands-free drive-up, keypad, phone control, and full smart access — choose what you need."/>
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

    /* ── NAV (v5 pattern) ── */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      background: rgba(6,10,16,0.92);
      backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
    }
    .nav-bar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 1rem 4rem;
    }
    .nav-logo {
      font-family: var(--font-display); font-weight: 800; font-size: 1.1rem;
      color: var(--white); text-decoration: none;
    }
    .nav-logo span { color: var(--cyan); }
    .nav-toggle {
      display: none; background: none; border: none;
      cursor: pointer; padding: 0.5rem;
    }
    .nav-toggle span {
      display: block; width: 22px; height: 2px; background: var(--text);
      margin: 5px 0; border-radius: 2px;
    }
    .nav-links {
      display: flex; align-items: center; gap: 2.2rem; list-style: none;
    }
    .nav-links a {
      color: var(--muted); text-decoration: none; font-size: 0.85rem;
      font-weight: 400; transition: color 0.2s;
    }
    .nav-links a:hover { color: var(--text); }
    .nav-links a.nav-active { color: var(--text); }
    .nav-divider { width: 1px; height: 14px; background: var(--border); }
    .nav-cta {
      background: var(--blue); color: var(--white) !important;
      padding: 0.5rem 1.4rem; border-radius: 6px; font-weight: 500 !important;
      transition: background 0.2s, transform 0.15s;
    }
    .nav-cta:hover { background: var(--blue-bright) !important; transform: translateY(-1px); }
    .nav-dropdown { position: relative; }
    .nav-dropdown > a {
      display: inline-flex; align-items: center; gap: 0.3rem; cursor: default;
    }
    .nav-dropdown > a svg { transition: transform 0.2s; }
    .dropdown-panel {
      visibility: hidden; opacity: 0;
      position: absolute; top: 100%; left: 50%;
      transform: translateX(-50%);
      padding-top: 0.75rem; z-index: 110;
      transition: visibility 0.15s, opacity 0.15s;
    }
    .nav-dropdown:hover .dropdown-panel { visibility: visible; opacity: 1; }
    .nav-dropdown:hover > a svg { transform: rotate(180deg); }
    .dropdown-inner {
      background: rgba(11,16,24,0.97);
      backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 12px; padding: 0.5rem 0; min-width: 240px;
      box-shadow: 0 16px 48px rgba(0,0,0,0.6);
      list-style: none;
    }
    .dropdown-inner li a {
      display: flex; align-items: center; gap: 0.65rem;
      padding: 0.65rem 1.2rem; font-size: 0.84rem; color: var(--muted);
      transition: all 0.15s; white-space: nowrap;
    }
    .dropdown-inner li a:hover { color: var(--white); background: rgba(47,128,237,0.08); }
    .dropdown-inner li a.dropdown-active { color: var(--blue-bright); }
    .dropdown-inner li a .dd-icon { font-size: 1rem; width: 1.2rem; text-align: center; flex-shrink: 0; }
    .mobile-menu { display: none; }

    @keyframes fadeUp { from{opacity:0;transform:translateY(18px)} to{opacity:1;transform:translateY(0)} }

    /* ── BUTTONS ── */
    .btn-primary { background: var(--blue); color: var(--white); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 500; text-decoration: none; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 0 20px rgba(47,128,237,0.25); display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-primary:hover { background: var(--blue-bright); transform: translateY(-1px); box-shadow: 0 0 32px rgba(47,128,237,0.4); }
    .btn-secondary { background: transparent; color: var(--text); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 400; text-decoration: none; border: 1px solid var(--border); cursor: pointer; transition: all 0.2s; }
    .btn-secondary:hover { border-color: rgba(255,255,255,0.15); color: var(--white); }

    /* ── SECTIONS ── */
    section { position: relative; z-index: 1; }
    .section-inner { max-width: 1100px; margin: 0 auto; padding: 6rem 4rem; }
    .section-tag { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase; color: var(--blue-bright); margin-bottom: 0.7rem; }
    .section-title { font-family: var(--font-display); font-size: clamp(1.7rem,3.2vw,2.6rem); font-weight: 800; line-height: 1.12; letter-spacing: -0.02em; margin-bottom: 1rem; color: var(--white); }
    .section-sub { color: var(--muted); font-size: 1rem; max-width: 580px; margin-bottom: 3rem; line-height: 1.7; }

    /* ── HERO GRID & GLOW ── */
    .hero-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(47,128,237,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(47,128,237,0.04) 1px, transparent 1px); background-size: 56px 56px; mask-image: radial-gradient(ellipse 85% 75% at 50% 55%, black 15%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 85% 75% at 50% 55%, black 15%, transparent 100%); pointer-events: none; }
    .hero-glow { position: absolute; top: 15%; left: 50%; transform: translateX(-50%); width: 700px; height: 400px; background: radial-gradient(ellipse, rgba(47,128,237,0.08) 0%, transparent 70%); pointer-events: none; }

    /* ── PACKAGES GRID ── */
    #packages { background: var(--dark); padding-top: 70px; position: relative; overflow: hidden; }
    #packages .section-inner { padding-top: 3rem; }
    .packages-grid {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;
      align-items: start;
    }
    .pkg-card {
      background: var(--card); border: 1px solid var(--border); border-radius: 16px;
      padding: 2.4rem; position: relative; overflow: hidden; transition: all 0.3s;
      display: flex; flex-direction: column;
    }
    .pkg-card:hover { background: var(--card-hover); border-color: rgba(47,128,237,0.15); transform: translateY(-2px); }
    .pkg-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, var(--blue), transparent); opacity: 0; transition: opacity 0.3s; }
    .pkg-card:hover::before { opacity: 1; }
    .pkg-card:not(.featured) { opacity: 0.75; }
    .pkg-card:not(.featured):hover { opacity: 1; }
    .pkg-card.featured { border-color: rgba(0,212,255,0.2); box-shadow: 0 0 50px rgba(47,128,237,0.08); transform: scale(1.04); transform-origin: top center; z-index: 2; }
    .pkg-card.featured:hover { transform: scale(1.04) translateY(-2px); }
    .pkg-card.featured::before { opacity: 1; background: linear-gradient(90deg, transparent, var(--cyan), transparent); }
    .pkg-badge {
      position: absolute; top: 1.2rem; right: 1.2rem;
      background: rgba(0,212,255,0.08); border: 1px solid rgba(0,212,255,0.2);
      color: var(--cyan); font-size: 0.6rem; font-weight: 600; letter-spacing: 0.1em;
      text-transform: uppercase; padding: 0.15rem 0.55rem; border-radius: 4px;
    }
    .pkg-icon-large { margin-bottom: 1rem; display: block; }
    .pkg-icon-large svg { width: 40px; height: 40px; }
    .pkg-name { font-family: var(--font-display); font-size: 1.15rem; font-weight: 700; color: var(--white); margin-bottom: 0.4rem; }
    .pkg-tagline { font-size: 0.85rem; color: var(--muted); line-height: 1.6; margin-bottom: 1.6rem; }
    .pkg-price-block { margin-bottom: 1.6rem; }
    .pkg-price { font-family: var(--font-display); font-size: 2.4rem; font-weight: 800; color: var(--white); line-height: 1; }
    .pkg-price-sub { font-size: 0.72rem; color: var(--muted); margin-top: 0.3rem; }

    .pkg-divider { width: 100%; height: 1px; background: var(--border); margin-bottom: 1.4rem; }
    .pkg-features { list-style: none; display: flex; flex-direction: column; gap: 0.6rem; flex: 1; }
    .pkg-features li { font-size: 0.83rem; color: var(--text); display: flex; align-items: flex-start; gap: 0.6rem; line-height: 1.55; }
    .pkg-features li::before { content: '✓'; color: var(--cyan); font-weight: 700; flex-shrink: 0; margin-top: 1px; }
    .pkg-features li.muted-feature { color: var(--muted); }
    .pkg-features li.muted-feature::before { content: '—'; color: rgba(255,255,255,0.12); }
    .pkg-cta { margin-top: 1.8rem; }
    .pkg-cta .btn-primary { display: block; text-align: center; justify-content: center; width: 100%; }
    .pkg-note { font-size: 0.72rem; color: var(--muted); margin-top: 1rem; line-height: 1.5; text-align: center; }
    .packages-footnote { text-align: center; margin-top: 2.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border); }
    .packages-footnote p { font-size: 0.82rem; color: var(--muted); line-height: 1.65; }

    /* ── ADD-ONS ── */
    #addons { background: var(--black); }
    .addons-grid {
      display: grid; grid-template-columns: repeat(2, 1fr);
      gap: 1.5px; background: var(--border); border: 1px solid var(--border);
      border-radius: 16px; overflow: hidden;
    }
    .addon-item {
      background: var(--card); padding: 1.8rem; transition: background 0.2s;
    }
    .addon-item:hover { background: var(--card-hover); }
    .addon-icon { width: 42px; height: 42px; background: var(--blue-glow); border: 1px solid rgba(47,128,237,0.18); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 0.9rem; font-size: 1.2rem; }
    .addon-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; }
    .addon-name { font-family: var(--font-display); font-size: 0.95rem; font-weight: 700; color: var(--white); }
    .addon-price { font-family: var(--font-display); font-size: 0.88rem; font-weight: 700; color: var(--blue-bright); }
    .addon-desc { font-size: 0.83rem; color: var(--muted); line-height: 1.6; }

    /* ── HOW IT WORKS ── */
    #how { background: var(--dark); }
    .how-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; }
    .how-card {
      background: var(--card); border: 1px solid var(--border); border-radius: 14px;
      overflow: hidden; transition: all 0.3s;
    }
    .how-card:hover { background: var(--card-hover); border-color: rgba(47,128,237,0.15); }
    .how-card-img {
      width: 100%; height: 180px; object-fit: cover; display: block;
      border-bottom: 1px solid var(--border);
      filter: brightness(0.7) saturate(0.8);
      transition: filter 0.3s;
    }
    .how-card:hover .how-card-img { filter: brightness(0.85) saturate(1); }
    .how-card-body { padding: 1.6rem 2rem 2rem; }
    .how-icon { font-size: 1.6rem; margin-bottom: 0.8rem; display: block; }
    .how-card h3 { font-family: var(--font-display); font-size: 1rem; font-weight: 700; color: var(--white); margin-bottom: 0.5rem; }
    .how-card p { font-size: 0.85rem; color: var(--muted); line-height: 1.65; }

    /* ── NOTIFICATION TOAST ── */
    .notif-toast { background: rgba(8,18,32,0.96); border: 1px solid rgba(74,222,128,0.35); border-radius: 14px; padding: 1rem 1.4rem; display: flex; align-items: center; gap: 0.9rem; box-shadow: 0 0 40px rgba(74,222,128,0.15), 0 8px 40px rgba(0,0,0,0.5); max-width: 420px; }
    .notif-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--green); box-shadow: 0 0 8px var(--green); flex-shrink: 0; animation: blink 1s infinite; }
    @keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.3} }
    .notif-icon { width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg,#1a4a2a,#0d2a1a); border: 1.5px solid rgba(74,222,128,0.35); display: flex; align-items: center; justify-content: center; font-size: 1.15rem; flex-shrink: 0; }
    .notif-body { flex: 1; }
    .notif-title { font-family: var(--font-display); font-size: 0.88rem; font-weight: 700; color: var(--text); margin-bottom: 0.1rem; }
    .notif-sub { font-size: 0.72rem; color: var(--muted); }
    .notif-badge { background: rgba(74,222,128,0.1); border: 1px solid rgba(74,222,128,0.25); color: var(--green); font-size: 0.65rem; font-weight: 600; padding: 0.2rem 0.55rem; border-radius: 100px; white-space: nowrap; }

    /* ── DASHBOARD MOCKUP ── */
    .dashboard-mockup { background: var(--card); border: 1px solid var(--border); border-radius: 14px; overflow: hidden; box-shadow: 0 20px 70px rgba(0,0,0,0.5), 0 0 0 1px rgba(47,128,237,0.08); }
    .mockup-bar { background: #0a0f18; border-bottom: 1px solid var(--border); padding: 0.7rem 1rem; display: flex; align-items: center; gap: 0.45rem; }
    .dot { width: 9px; height: 9px; border-radius: 50%; }
    .dot-r{background:#ff5f57} .dot-y{background:#febc2e} .dot-g{background:#28c840}
    .mockup-title { margin-left: auto; margin-right: auto; font-size: 0.7rem; color: var(--muted); letter-spacing: 0.03em; }
    .mockup-body { padding: 1.2rem; }
    .mockup-row { display: flex; justify-content: space-between; align-items: center; padding: 0.65rem 0.9rem; background: rgba(255,255,255,0.02); border-radius: 8px; margin-bottom: 0.5rem; font-size: 0.78rem; }
    .mockup-row:last-child { margin-bottom: 0; }
    .tag-name { font-weight: 500; color: var(--text); font-size: 0.8rem; }
    .tag-time { color: var(--muted); font-size: 0.68rem; }
    .tag-status { font-size: 0.68rem; padding: 0.15rem 0.6rem; border-radius: 100px; font-weight: 500; white-space: nowrap; }
    .status-in{background:rgba(40,200,100,0.1);color:#4ade80;border:1px solid rgba(40,200,100,0.18)}
    .status-out{background:rgba(251,113,133,0.08);color:#f87171;border:1px solid rgba(251,113,133,0.18)}
    .mockup-notif { margin-top: 0.8rem; background: rgba(47,128,237,0.06); border: 1px solid rgba(47,128,237,0.12); border-radius: 8px; padding: 0.65rem 0.9rem; font-size: 0.72rem; color: var(--blue-bright); display: flex; gap: 0.5rem; align-items: center; }

    /* ── PHOTO BANNER ── */
    .photo-banner {
      position: relative; z-index: 1; width: 100%; height: 280px; overflow: hidden;
    }
    .photo-banner img {
      width: 100%; height: 100%; object-fit: cover;
      filter: brightness(0.35) saturate(0.7);
    }
    .photo-banner-overlay {
      position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;
      background: linear-gradient(180deg, rgba(6,10,16,0.5) 0%, rgba(6,10,16,0.7) 100%);
    }
    .photo-banner-text {
      text-align: center; padding: 2rem;
    }
    .photo-banner-text h2 {
      font-family: var(--font-display); font-size: clamp(1.4rem, 2.8vw, 2rem);
      font-weight: 800; color: var(--white); margin-bottom: 0.5rem;
    }
    .photo-banner-text p { font-size: 0.92rem; color: var(--muted); }

    /* ── FAQ ── */
    #faq { background: var(--black); }
    .faq-list { max-width: 780px; }
    .faq-item { border-bottom: 1px solid var(--border); }
    .faq-q {
      display: flex; align-items: center; justify-content: space-between; gap: 1rem;
      padding: 1.4rem 0; cursor: pointer; width: 100%; background: none; border: none;
      font-family: var(--font-display); font-size: 0.98rem; font-weight: 600;
      color: var(--white); text-align: left; transition: color 0.2s;
    }
    .faq-q:hover { color: var(--blue-bright); }
    .faq-q svg { flex-shrink: 0; transition: transform 0.3s; color: var(--muted); }
    .faq-q.active svg { transform: rotate(180deg); color: var(--blue-bright); }
    .faq-a {
      max-height: 0; overflow: hidden; transition: max-height 0.35s ease, padding 0.35s ease;
      padding: 0 0 0 0;
    }
    .faq-a.open { max-height: 300px; padding: 0 0 1.4rem 0; }
    .faq-a p { font-size: 0.88rem; color: var(--muted); line-height: 1.7; }

    /* ── CONTACT ── */
    #contact { background: var(--dark); text-align: center; }
    .cta-box { max-width: 600px; margin: 0 auto; }
    .contact-form { display: flex; flex-direction: column; gap: 0.9rem; margin-top: 2rem; text-align: left; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.9rem; }
    .form-group { display: flex; flex-direction: column; gap: 0.35rem; }
    label { font-size: 0.75rem; color: var(--muted); letter-spacing: 0.04em; font-weight: 400; }
    input, textarea, select { background: var(--card); border: 1px solid var(--border); border-radius: 8px; padding: 0.7rem 0.9rem; color: var(--text); font-family: var(--font-body); font-size: 0.88rem; outline: none; transition: border-color 0.2s; width: 100%; }
    input:focus, textarea:focus, select:focus { border-color: rgba(47,128,237,0.4); }
    textarea { resize: vertical; min-height: 100px; }
    select { appearance: none; cursor: pointer; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%236b7a8d' fill='none' stroke-width='1.5'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 0.9rem center; padding-right: 2.2rem; }
    select option { background: var(--card); color: var(--text); }
    .form-submit-row { display: flex; align-items: center; gap: 1rem; margin-top: 0.5rem; }
    .form-submit-row .btn-primary { flex-shrink: 0; }
    .form-note { font-size: 0.72rem; color: var(--muted); }

    /* ── FOOTER ── */
    footer { border-top: 1px solid var(--border); background: var(--black); padding: 2.5rem 4rem; font-size: 0.78rem; color: var(--muted); }
    .footer-logo { font-family: var(--font-display); font-weight: 800; font-size: 0.95rem; color: var(--white); }
    .footer-logo span { color: var(--cyan); }
    .footer-top { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem; }
    .footer-nav { display: flex; gap: 1.8rem; }
    .footer-nav a { color: var(--muted); text-decoration: none; font-size: 0.8rem; transition: color 0.2s; }
    .footer-nav a:hover { color: var(--text); }
    .footer-bottom { display: flex; align-items: center; justify-content: space-between; padding-top: 1.2rem; border-top: 1px solid var(--border); }

    /* ── RESPONSIVE ── */
    @media (max-width: 960px) {
      .packages-grid { grid-template-columns: 1fr 1fr; }
      .packages-grid .pkg-card:last-child { grid-column: 1 / -1; max-width: 480px; justify-self: center; }
      .how-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      #packages .section-title { white-space: normal; }
      .nav-bar { padding: 0.9rem 1.5rem; }
      .nav-toggle { display: block; }
      .nav-links { display: none !important; }
      .mobile-menu {
        display: none;
        flex-direction: column;
        align-items: center;
        padding: 1.2rem 2rem 1.8rem;
        border-top: 1px solid var(--border);
        background: var(--black);
      }
      .mobile-menu.open { display: flex; }
      .mobile-menu a {
        display: block; width: 100%; text-align: center;
        padding: 0.55rem 0;
        font-size: 1rem; color: var(--text);
        text-decoration: none;
        transition: color 0.15s;
      }
      .mobile-menu a:active { color: var(--blue-bright); }
      .mobile-menu .mm-label {
        display: block; width: 100%; text-align: center;
        padding: 0.6rem 0 0.15rem;
        font-size: 0.62rem; font-weight: 600;
        letter-spacing: 0.14em; text-transform: uppercase;
        color: var(--blue-bright);
      }
      .mobile-menu .mm-sub a {
        color: var(--muted); font-size: 1rem;
        padding: 0.45rem 0;
      }
      .mobile-menu .mm-sub a:active { color: var(--text); }
      .mobile-menu .mm-sub a.dropdown-active { color: var(--blue-bright); }
      .mobile-menu .mm-divider {
        width: 32px; height: 1px; background: var(--border);
        margin: 0.4rem auto;
      }
      .mobile-menu .nav-cta {
        display: inline-block; margin-top: 0.4rem;
        padding: 0.6rem 1.8rem; font-size: 1rem;
      }
      .section-inner { padding: 4rem 1.5rem; }
      .packages-grid { grid-template-columns: 1fr; }
      .how-grid { grid-template-columns: 1fr; }
      .how-card-img { height: 160px; }
      .photo-banner { height: auto; min-height: 220px; }
      .photo-banner-text { padding: 1.5rem; }
      .photo-banner-text h2 { font-size: clamp(1.2rem, 5vw, 1.6rem); }
      .notif-toast { padding: 0.6rem 0.7rem; gap: 0.4rem; max-width: 320px; border-radius: 10px; }
      .notif-icon { width: 30px; height: 30px; font-size: 0.9rem; }
      .notif-title { font-size: 0.74rem; }
      .notif-sub { font-size: 0.6rem; }
      .notif-badge { font-size: 0.55rem; padding: 0.12rem 0.4rem; }
      .notif-dot { width: 5px; height: 5px; }
      .form-row { grid-template-columns: 1fr; }
      footer { flex-direction: column; gap: 0.8rem; text-align: center; padding: 2rem 1.5rem; }
      .footer-top { flex-direction: column; gap: 0.8rem; }
      .footer-nav { justify-content: center; flex-wrap: wrap; gap: 1rem; }
      .footer-bottom { flex-direction: column; gap: 0.4rem; text-align: center; }
      .form-submit-row { flex-direction: column; align-items: stretch; }
    }
    @media (max-width: 480px) {
      .addons-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

  <!-- ── NAV v5 ── -->
  <?php $activePage = 'pricing'; ?>
<?php include 'nav.php'; ?>

  <!-- ── PACKAGES ── -->
  <section id="packages">
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="section-inner">
    <div class="section-tag" style="color:var(--white);">Our Packages</div>
    <h2 class="section-title" style="white-space:nowrap;"><em style="font-style:normal;background:linear-gradient(135deg,var(--blue-bright),var(--cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Who opened</em> your gate today?</h2>

    <!-- Notification toast - cycles through different access types -->
    <div style="margin-bottom:1rem;text-align:center;">
      <div class="notif-toast" id="pricingToast" style="opacity:1;transform:none;position:relative;display:inline-flex;transition:opacity 0.4s ease;">
        <div class="notif-dot"></div>
        <div class="notif-icon" id="toastIcon">🏊</div>
        <div class="notif-body">
          <div class="notif-title" id="toastTitle">Pool Service Arrived</div>
          <div class="notif-sub" id="toastSub">Drive-up Tag · 10:24 AM</div>
        </div>
        <div class="notif-badge" id="toastBadge">✓ Authorized</div>
      </div>
    </div>

    <p class="section-sub" style="text-align:center;max-width:100%;margin-bottom:3rem;">No logs? No alerts? No idea? <span style="color:var(--blue-bright);font-weight:500;">There's a better way.</span></p>

    <div class="packages-grid">
      <!-- PHONE CONTROL -->
      <div class="pkg-card">
        <div class="pkg-icon-large"><svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="4" width="20" height="32" rx="4" stroke="var(--blue-bright)" stroke-width="2"/><circle cx="20" cy="30" r="2" fill="var(--blue-bright)"/><line x1="16" y1="8" x2="24" y2="8" stroke="var(--blue-bright)" stroke-width="1.5" stroke-linecap="round"/></svg></div>
        <div class="pkg-name">Phone Control</div>
        <div class="pkg-tagline">Open your gate from anywhere in the world using your iPhone or Android.</div>
        <div class="pkg-price-block">
          <div class="pkg-price">$395</div>
          <div class="pkg-price-sub">Installed · One-time · No monthly fees</div>
        </div>
        <div class="pkg-divider"></div>
        <ul class="pkg-features">
          <li>Gate control from iOS &amp; Android</li>
          <li>Works with Alexa, Google &amp; Siri</li>
          <li>Share with family members &amp; guests</li>
          <li>Set schedules, or leave gate open for events</li>
          <li>No monthly fees</li>
          <li class="muted-feature">No hands-free drive-up entry</li>
          <li class="muted-feature">No access logging or dashboard</li>
        </ul>
        <div class="pkg-cta"><a href="#contact" class="btn-primary">Get Started →</a></div>
        <div class="pkg-note">Requires WiFi at the gate — add our <a href="#wireless-bridge" style="color:var(--blue-bright);text-decoration:none;">wireless bridge</a> if needed.</div>
      </div>

      <!-- HANDS-FREE ACCESS -->
      <div class="pkg-card">
        <div class="pkg-icon-large"><svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 28V36" stroke="var(--blue-bright)" stroke-width="2" stroke-linecap="round"/><circle cx="20" cy="24" r="3" fill="var(--blue-bright)"/><path d="M12 20a10 10 0 0 1 16 0" stroke="var(--blue-bright)" stroke-width="2" stroke-linecap="round"/><path d="M7 15a16 16 0 0 1 26 0" stroke="var(--blue-bright)" stroke-width="2" stroke-linecap="round"/><line x1="14" y1="36" x2="26" y2="36" stroke="var(--blue-bright)" stroke-width="2" stroke-linecap="round"/></svg></div>
        <div class="pkg-name">Hands-Free Access</div>
        <div class="pkg-tagline">The gate opens automatically as your vehicle approaches — no phone, no remote, no stopping.</div>
        <div class="pkg-price-block">
          <div class="pkg-price">$895</div>
          <div class="pkg-price-sub">Installed · One-time · No monthly fees</div>
        </div>
        <div class="pkg-divider"></div>
        <ul class="pkg-features">
          <li>Long-range vehicle detection (20+ feet)</li>
          <li>Gate opens as you approach — completely hands-free</li>
          <li>No network or internet required</li>
          <li>5 pre-programmed windshield tags included</li>
          <li>Weatherproof installation with junction box</li>
          <li class="muted-feature">No phone control or remote access</li>
          <li class="muted-feature">No access logging or dashboard</li>
        </ul>
        <div class="pkg-cta"><a href="#contact" class="btn-primary">Get Started →</a></div>
        <div class="pkg-note">Works completely offline. No internet needed.</div>
      </div>

      <!-- FULL ACCESS CONTROL -->
      <div class="pkg-card featured">
        <div class="pkg-badge">Most Popular</div>
        <div class="pkg-icon-large"><svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 18L20 6l14 12" stroke="var(--cyan)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 16v16h20V16" stroke="var(--cyan)" stroke-width="2" stroke-linejoin="round"/><path d="M20 20v6" stroke="var(--cyan)" stroke-width="2" stroke-linecap="round"/><path d="M17 23h6" stroke="var(--cyan)" stroke-width="2" stroke-linecap="round"/><circle cx="20" cy="23" r="7" stroke="var(--cyan)" stroke-width="1.5"/></svg></div>
        <div class="pkg-name">Full Access Control</div>
        <div class="pkg-tagline">The complete smart gate — hands-free drive-up, phone control, logging, alerts, and a dashboard to manage it all.</div>
        <div class="pkg-price-block">
          <div class="pkg-price">$1,295</div>
          <div class="pkg-price-sub">Installed · One-time · No monthly fees</div>
        </div>
        <div class="pkg-divider"></div>
        <ul class="pkg-features">
          <li>Everything in Phone Control &amp; Hands-Free Access Packages, plus:</li>
          <li>Home Assistant server included</li>
          <li>Add &amp; remove access tags from your phone or computer</li>
          <li>Real-time notifications on every entry &amp; exit</li>
          <li>Expandable — connects to your entire smart home</li>
          <li>Full access log with timestamps and names</li>
          <li>Doorbell camera &amp; gate alarm integration ready</li>
        </ul>
        <div class="pkg-cta"><a href="#contact" class="btn-primary">Get Started →</a></div>
        <div class="pkg-note">Includes HA server hardware. Requires internet at the gate — add our <a href="#wireless-bridge" style="color:var(--blue-bright);text-decoration:none;">wireless bridge</a> if needed.</div>
      </div>
    </div>

    <div class="packages-footnote">
      <p>Every package includes hardware, professional installation, full system configuration, and a walkthrough so you know exactly how everything works. Prices are for a standard single-gate setup with an existing opener. We'll provide a custom quote during a free property assessment.</p>
    </div>
  </div></section>

  <!-- ── ADD-ONS / HOW IT WORKS (merged) ── -->
  <section id="addons"><div class="section-inner">
    <div class="section-tag">Add-On Options</div>
    <h2 class="section-title"><em style="font-style:normal;background:linear-gradient(135deg,var(--blue-bright),var(--cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Enhance</em> any package.</h2>
    <p class="section-sub">Add to any package now or later. Priced add-ons include standard installation — we'll confirm everything during your free property assessment.</p>

    <div class="how-grid">
      <div class="how-card">
        <img class="how-card-img" src="img/Gate_rfid_animation.png" alt="Smart gate drive-up access system" loading="lazy"/>
        <div class="how-card-body">
        <h3>Hands-Free Drive-Up Access</h3>
        <p>A discreet reader is mounted at your gate entrance. Each authorized vehicle has a small windshield tag. As you approach, the reader detects the tag from up to 20 feet away and opens the gate automatically — no stopping, no buttons, no phone needed. Drive in seamlessly, every time.</p>
        </div>
      </div>
      <div class="how-card">
        <img class="how-card-img" src="img/PhoneControl.png" alt="Phone control gate access" loading="lazy"/>
        <div class="how-card-body">
        <h3>Phone Control</h3>
        <p>A compact smart relay at the gate connects to your WiFi. Using the free Shelly app on your iPhone or Android, you can open the gate from anywhere — whether you're in the house, at work, or on vacation. Share access with family members through the app. Works with Alexa and Google Home for voice control.</p>
        </div>
      </div>
      <div class="how-card">
        <img class="how-card-img" src="img/keypad.png" alt="Weatherproof PIN code keypad" loading="lazy"/>
        <div class="how-card-body">
        <h3>PIN Code Keypad</h3>
        <p>A rugged, weatherproof keypad is mounted at the gate for visitors, contractors, delivery drivers, or anyone who needs temporary access. Each person gets their own unique PIN code. You can add or remove codes in seconds. The keypad works independently — no internet, no phone, no app required.</p>
        <div style="margin-top:0.8rem;font-size:0.7rem;color:var(--muted);">$195 standalone · $95 when added to any package</div>
        </div>
      </div>
      <div class="how-card">
        <div style="height:180px;overflow:hidden;border-bottom:1px solid var(--border);padding:0.8rem;display:flex;align-items:flex-start;">
          <div class="dashboard-mockup" style="transform:scale(0.82);transform-origin:top center;width:122%;margin-left:-11%;box-shadow:none;">
            <div class="mockup-bar"><div class="dot dot-r"></div><div class="dot dot-y"></div><div class="dot dot-g"></div><div class="mockup-title">Gate Access Log</div></div>
            <div class="mockup-body">
              <div class="mockup-row"><div><div class="tag-name">John (Tag #1)</div><div class="tag-time">Today, 8:14 AM · Drive-up</div></div><div class="tag-status status-in">Entered</div></div>
              <div class="mockup-row"><div><div class="tag-name">FedEx Delivery</div><div class="tag-time">Today, 11:30 AM · PIN</div></div><div class="tag-status status-in">Entered</div></div>
              <div class="mockup-row"><div><div class="tag-name">Pool Service</div><div class="tag-time">Today, 1:45 PM · Drive-up</div></div><div class="tag-status status-out">Exited</div></div>
              <div class="mockup-notif">🔔 &nbsp;<span><strong>Gate opened</strong> — John arrived via vehicle tag</span></div>
            </div>
          </div>
        </div>
        <div class="how-card-body">
        <h3>Full Access Control</h3>
        <p>For complete control, we install a Home Assistant smart home hub at your property. This gives you a beautiful dashboard on your phone where you can add and remove access tags, manage keypad PINs, view a full log of who entered and when, receive real-time notifications, and set up automations like an after-hours gate alarm.</p>
        </div>
      </div>
      <div class="how-card">
        <img class="how-card-img" src="img/door_cam.png" alt="Gate doorbell camera" loading="lazy"/>
        <div class="how-card-body">
        <h3>Gate Camera &amp; Doorbell</h3>
        <p>See who's at the gate before you open it. Live video, two-way audio, and motion-triggered recording — all from your phone. Integrates with your Full Access Control dashboard for instant alerts, playback, and automated responses like turning on flood lights.</p>
        </div>
      </div>
      <div class="how-card">
        <img class="how-card-img" src="img/gate_alarm.png" alt="Gate alarm and siren" loading="lazy"/>
        <div class="how-card-body">
        <h3>Gate Alarm</h3>
        <p>An outdoor-rated sensor detects when the gate opens without authorization. Triggers a loud siren and strobe, sends an instant alert to your phone with a camera snapshot. Arm manually or on a schedule.</p>
        </div>
      </div>
      <div class="how-card" id="wireless-bridge">
        <img class="how-card-img" src="img/wifi_bridge.png" alt="Point-to-point wireless bridge" loading="lazy"/>
        <div class="how-card-body">
        <h3>Point-to-Point Wireless Bridge</h3>
        <p>Don't have internet at the gate? Our wireless bridge creates an invisible network link between your house and gate, up to 3,280 feet away. Two weatherproof antennas are mounted with line of sight to each other — one at the house, one at the gate. Your home WiFi and internet are now available at the gate.</p>
        <div style="margin-top:0.8rem;font-size:0.7rem;color:var(--muted);">$295 standalone · $195 when added to any package</div>
        </div>
      </div>
    </div>

    <div style="text-align:center;margin-top:2rem;">
      <p style="color:var(--muted);font-size:0.82rem;line-height:1.6;">We'll quote add-ons alongside your package during your free property assessment.</p>
    </div>
  </div></section>

  <!-- ── FAQ ── -->
  <section id="faq"><div class="section-inner">
    <div class="section-tag">FAQ</div>
    <h2 class="section-title">Frequently asked questions.</h2>
    <p class="section-sub">Everything you need to know before getting started.</p>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Will this work with my existing gate opener? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Yes — our system works with virtually every automatic gate opener on the market, including LiftMaster, FAAC, Viking, DoorKing, Linear, US Automatic, and more. We tap into the existing control board, so there's no need to replace your opener. We'll confirm full compatibility during your free property assessment.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Do I need internet at my gate? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>No — it can be set up to work completely offline. You only need internet for Phone Control or notifications. If you don't have WiFi at the gate, our <a href="#wireless-bridge" style="color:var(--blue-bright);text-decoration:none;">wireless bridge</a> add-on solves this for most properties.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">What's included in the installed price? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Everything. Hardware, professional installation, system configuration, testing, and a full walkthrough. The price we quote is the price you pay — no surprise labor charges or hidden fees.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">How far away can the reader detect my vehicle? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>We use the best long-range UHF reader on the market — 20+ feet of detection range, minimum. You'll never have to slow down, back up, or reposition your car. The gate starts opening as you approach, every time.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Can I add more vehicle tags later? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>With the Full Access Control package, it's instant — add or remove tags right from your phone in seconds. No service call, no waiting. With the Hands-Free Access package, we'll come out and program new tags for a small service fee.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Are there any monthly fees? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>No. Every package is a one-time purchase with no subscriptions, no cloud fees, and no recurring charges. Everything runs locally on your property.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Can I start with one package and upgrade later? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Yes. Start with Phone Control today and add hands-free drive-up or the full dashboard later. Start with drive-up access and add phone control down the road. The system is modular — we build on what's already there.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">What happens during a power outage? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>The gate operator itself determines behavior during a power outage (most default to locked or manual release). Our system will resume normal operation automatically once power is restored — all settings and approved tags are saved in permanent memory.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Can I control multiple gates? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Yes. You can control everything on your entire property from a single dashboard and app. <a href="#contact" style="color:var(--blue-bright);text-decoration:none;">Let's talk about what's possible.</a></p></div>
      </div>
    </div>
  </div></section>

  <!-- ── CONTACT ── -->
  <section id="contact"><div class="section-inner">
    <div class="cta-box">
      <div class="section-tag">Ready to Secure Your Gate?</div>
      <h2 class="section-title">Get a free property assessment.</h2>
      <p class="section-sub" style="margin-bottom:0;">Contact us for a free property assessment and custom quote.</p>
      <p style="font-size:0.78rem;color:var(--muted);margin-top:0.6rem;">Trusted by property owners across Sarasota — 10+ years of smart home experience.</p>
      <form class="contact-form" action="https://formspree.io/f/xaqabrdo" method="POST">
        <input type="hidden" name="_next" value="https://craisondigital.com/thank-you.html"/><input type="hidden" name="_subject" value="New inquiry — Gate Pricing"/>
        <div class="form-row">
          <div class="form-group"><label>First Name</label><input type="text" name="first_name" placeholder="John"/></div>
          <div class="form-group"><label>Last Name</label><input type="text" name="last_name" placeholder="Smith"/></div>
        </div>
        <div class="form-group"><label>Email</label><input type="email" name="_replyto" placeholder="john@example.com"/></div>
        <div class="form-group"><label>Phone</label><input type="tel" name="phone" placeholder="(555) 000-0000"/></div>
        <div class="form-row">
          <div class="form-group">
            <label>Property Type</label>
            <select name="property_type">
              <option value="" disabled selected>Select your property type</option>
              <option>Ranch / Farm</option>
              <option>Estate / Residential Acreage</option>
              <option>Equestrian Property</option>
              <option>Commercial / Multi-Building</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label>Package Interested In</label>
            <select name="package">
              <option value="" disabled selected>Select a package</option>
              <option>Phone Control — $395</option>
              <option>Hands-Free Access — $895</option>
              <option>Full Access Control — $1,295</option>
              <option>Not sure yet</option>
            </select>
          </div>
        </div>
        <div class="form-group"><label>Tell us about your gate and property</label><textarea name="message" placeholder="What gate opener do you have? How many acres? Any other details about your setup..."></textarea></div>
        <div class="form-submit-row">
          <button type="submit" class="btn-primary">Send My Request →</button>
          <span class="form-note">We typically respond within 24 hours.</span>
        </div>
      </form>
    </div>
  </div></section>

  <!-- ── FOOTER ── -->
  <footer>
    <div class="footer-top">
      <div class="footer-logo"><a href="index.php" style="color:inherit;text-decoration:none;">Craison<span>Digital</span></a></div>
      <div class="footer-nav"><a href="index.php">Home</a><a href="about.php">About</a><a href="gate.php">Gate</a><a href="pool.php">Pool</a><a href="fountains.php">Fountains</a><a href="garage.php">Garage</a><a href="#contact">Contact</a></div>
    </div>
    <div class="footer-bottom">
      <div>© 2026 Craison Digital. All rights reserved.</div>
      <div>Smart Property Consulting · Estates &amp; Compounds · Sarasota</div>
    </div>
  </footer>

  <script>
  (function() {
    // Mobile nav toggle (v5 pattern)
    var navToggle = document.getElementById('navToggle');
    var mobileMenu = document.getElementById('mobileMenu');
    if(navToggle && mobileMenu){
      navToggle.addEventListener('click', function(){ mobileMenu.classList.toggle('open'); });
      mobileMenu.querySelectorAll('a').forEach(function(a){
        a.addEventListener('click', function(){ mobileMenu.classList.remove('open'); });
      });
    }
  })();

  // FAQ accordion
  function toggleFaq(btn) {
    var answer = btn.nextElementSibling;
    var isOpen = answer.classList.contains('open');
    // Close all
    document.querySelectorAll('.faq-a').forEach(function(a){ a.classList.remove('open'); });
    document.querySelectorAll('.faq-q').forEach(function(q){ q.classList.remove('active'); });
    // Open clicked if it wasn't already open
    if (!isOpen) {
      answer.classList.add('open');
      btn.classList.add('active');
    }
  }

  // Cycling notification toast
  (function() {
    var toast = document.getElementById('pricingToast');
    var icon = document.getElementById('toastIcon');
    var title = document.getElementById('toastTitle');
    var sub = document.getElementById('toastSub');
    var badge = document.getElementById('toastBadge');
    if (!toast) return;

    var notifications = [
      { icon: '🏊', title: 'Pool Service Arrived', sub: 'Drive-up Tag · 10:24 AM', badge: '✓ Authorized', badgeClass: '' },
      { icon: '🚗', title: 'Craig — Kia Arrived', sub: 'Drive-up Tag · 3:12 PM', badge: '✓ Authorized', badgeClass: '' },
      { icon: '🏊', title: 'Pool Service Exited', sub: 'Drive-up Tag · 1:45 PM', badge: 'Exited', badgeClass: 'exit' },
      { icon: '📦', title: 'FedEx Delivery', sub: 'PIN · 11:30 AM', badge: '✓ PIN Entry', badgeClass: '' }
    ];

    var current = 0;
    var INTERVAL = 5000;

    function cycle() {
      toast.style.opacity = '0';
      setTimeout(function() {
        current = (current + 1) % notifications.length;
        var n = notifications[current];
        icon.textContent = n.icon;
        title.textContent = n.title;
        sub.textContent = n.sub;
        badge.textContent = n.badge;
        if (n.badgeClass === 'exit') {
          badge.style.background = 'rgba(251,113,133,0.08)';
          badge.style.borderColor = 'rgba(251,113,133,0.25)';
          badge.style.color = '#f87171';
        } else {
          badge.style.background = 'rgba(74,222,128,0.1)';
          badge.style.borderColor = 'rgba(74,222,128,0.25)';
          badge.style.color = 'var(--green)';
        }
        toast.style.opacity = '1';
      }, 400);
    }

    setInterval(cycle, INTERVAL);
  })();
  </script>

</body>
</html>
