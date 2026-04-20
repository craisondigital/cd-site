<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Craison Digital – Smart Garage Door Control Pricing</title>
  <meta name="description" content="Smart garage door control pricing for residential properties. Phone control, open/close status, alerts, and auto-close — per door pricing with no monthly fees."/>
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

    /* ── PRICING CARDS ── */
    #packages { background: var(--dark); padding-top: 70px; position: relative; overflow: hidden; }
    #packages .section-inner { padding-top: 3rem; }
    .pricing-grid {
      display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;
      align-items: start; max-width: 800px; margin: 0 auto;
    }
    .pkg-card {
      background: var(--card); border: 1px solid var(--border); border-radius: 16px;
      padding: 2.4rem; position: relative; overflow: hidden; transition: all 0.3s;
      display: flex; flex-direction: column;
    }
    .pkg-card:hover { background: var(--card-hover); border-color: rgba(47,128,237,0.15); transform: translateY(-2px); }
    .pkg-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, var(--blue), transparent); opacity: 0; transition: opacity 0.3s; }
    .pkg-card:hover::before { opacity: 1; }
    .pkg-card.featured { border-color: rgba(0,212,255,0.2); box-shadow: 0 0 50px rgba(47,128,237,0.08); }
    .pkg-card.featured::before { opacity: 1; background: linear-gradient(90deg, transparent, var(--cyan), transparent); }
    .pkg-badge {
      display: inline-block; background: rgba(0,212,255,0.08); border: 1px solid rgba(0,212,255,0.2);
      color: var(--cyan); font-size: 0.6rem; font-weight: 600; letter-spacing: 0.1em;
      text-transform: uppercase; padding: 0.15rem 0.55rem; border-radius: 4px; margin-bottom: 0.8rem;
      align-self: flex-start;
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
    .pkg-cta { margin-top: 1.8rem; }
    .pkg-cta .btn-primary { display: block; text-align: center; justify-content: center; width: 100%; }
    .pkg-note { font-size: 0.72rem; color: var(--muted); margin-top: 1rem; line-height: 1.5; text-align: center; }
    .packages-footnote { text-align: center; margin-top: 2.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border); }
    .packages-footnote p { font-size: 0.82rem; color: var(--muted); line-height: 1.65; }

    /* ── HOW IT WORKS / ADD-ONS ── */
    #addons { background: var(--black); }
    .how-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; }
    .how-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.5rem; }
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
    .status-closed{background:rgba(40,200,100,0.1);color:#4ade80;border:1px solid rgba(40,200,100,0.18)}
    .status-open{background:rgba(251,113,133,0.08);color:#f87171;border:1px solid rgba(251,113,133,0.18)}
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
      .how-grid { grid-template-columns: 1fr 1fr; }
      .how-grid-3 { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
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
      .pkg-card.featured { grid-template-columns: 1fr !important; }
      .pricing-grid { grid-template-columns: 1fr; }
      .how-grid { grid-template-columns: 1fr; }
      .how-grid-3 { grid-template-columns: 1fr; }
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
  </style>
</head>
<body>

  <!-- ── NAV v5 ── -->
  <?php $activePage = 'garage-pricing'; ?>
<?php include 'nav.php'; ?>

  <!-- ── PACKAGES ── -->
  <section id="packages">
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="section-inner">
    <div class="section-tag" style="color:var(--white);">Garage Control Pricing</div>
    <h2 class="section-title">Did you leave the garage <em style="font-style:normal;background:linear-gradient(135deg,var(--blue-bright),var(--cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">open?</em></h2>

    <!-- Notification toast - cycles through garage scenarios -->
    <div style="margin-bottom:2rem;text-align:center;">
      <div class="notif-toast" id="pricingToast" style="opacity:1;transform:none;position:relative;display:inline-flex;transition:opacity 0.4s ease, border-color 0.6s ease, box-shadow 0.6s ease;">
        <div class="notif-dot"></div>
        <div class="notif-icon" id="toastIcon">🚗</div>
        <div class="notif-body">
          <div class="notif-title" id="toastTitle">Main Garage Closed</div>
          <div class="notif-sub" id="toastSub">Auto-close · Left open 10 min · 9:42 PM</div>
        </div>
        <div class="notif-badge" id="toastBadge">✓ Closed</div>
      </div>
    </div>

    <div class="pkg-card featured" style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;max-width:900px;margin:0 auto;">
      <div style="display:flex;flex-direction:column;justify-content:center;">
        <ul class="pkg-features">
          <li>Open &amp; close from your phone — anywhere</li>
          <li>Real-time open/closed status</li>
          <li>Control the garage light from your phone</li>
          <li>Instant alerts when the door opens or closes</li>
          <li>Obstruction sensor alerts</li>
          <li>Auto-close if left open too long</li>
          <li>Set schedules to close at night automatically</li>
          <li>Works with Siri, Alexa &amp; Google Home</li>
          <li>Share access with family members &amp; guests</li>
          <li>No monthly fees</li>
        </ul>
      </div>
      <div>
        <div class="pkg-icon-large"><svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 16L20 6l16 10" stroke="var(--cyan)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="8" y="16" width="24" height="20" stroke="var(--cyan)" stroke-width="2"/><line x1="8" y1="21" x2="32" y2="21" stroke="var(--cyan)" stroke-width="1.5"/><line x1="8" y1="26" x2="32" y2="26" stroke="var(--cyan)" stroke-width="1.5"/><line x1="8" y1="31" x2="32" y2="31" stroke="var(--cyan)" stroke-width="1.5"/><rect x="13" y="16.5" width="3.5" height="4" rx="0.5" stroke="var(--cyan)" stroke-width="1"/><rect x="18.25" y="16.5" width="3.5" height="4" rx="0.5" stroke="var(--cyan)" stroke-width="1"/><rect x="23.5" y="16.5" width="3.5" height="4" rx="0.5" stroke="var(--cyan)" stroke-width="1"/></svg></div>
        <div class="pkg-name">Smart Garage Control</div>
        <div class="pkg-tagline">Full smart garage control — open, close, monitor, and automate any garage or rollup door from your phone.</div>
        <div class="pkg-price-block">
          <div class="pkg-price">$395</div>
          <div class="pkg-price-sub">Per door · Installed · No monthly fees</div>
        </div>
        <div class="pkg-cta"><a href="#contact" class="btn-primary">Get Started →</a></div>
      </div>
      <div class="pkg-note" style="grid-column:1/-1;text-align:center;">Works with your existing garage door opener. Requires WiFi at the garage.</div>
    </div>

    <div class="packages-footnote">
      <p>Every installation includes hardware, professional setup, full system configuration, and a walkthrough so you know exactly how everything works. Pricing assumes a standard garage door with an existing opener — we'll confirm your quote after a free property assessment.</p>
    </div>
  </div></section>

  <!-- ── PHOTO BANNER ── -->
  <div class="photo-banner">
    <img src="img/rollup_home.png" alt="Rollup garage doors on property" loading="lazy"/>
    <div class="photo-banner-overlay">
      <div class="photo-banner-text">
        <h2>Your garage just closed itself.</h2>
        <p>Auto-close. Schedules. Alerts. <span style="color:var(--blue-bright);font-weight:500;">Never wonder again.</span></p>
        <p style="margin-top:0.8rem;font-family:var(--font-display);font-weight:800;font-size:1rem;color:var(--white);">Craison<span style="color:var(--cyan);">Digital</span></p>
      </div>
    </div>
  </div>

  <!-- ── WHAT'S INCLUDED ── -->
  <section id="included"><div class="section-inner">
    <div class="section-tag">How It Works</div>
    <h2 class="section-title"><em style="font-style:normal;background:linear-gradient(135deg,var(--blue-bright),var(--cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">What's included</em> with every door.</h2>
    <p class="section-sub">Every door gets full smart control out of the box.</p>

    <div class="how-grid-3">
      <div class="how-card">
        <img class="how-card-img" src="img/garage_phone.png" alt="Garage door phone control" loading="lazy"/>
        <div class="how-card-body">
        <h3>Phone Control &amp; Status</h3>
        <p>A compact smart controller integrates directly with your existing garage door opener. Open and close from your phone — from the house, at work, or on vacation. See real-time door position, toggle the garage light, and get obstruction sensor alerts — all from the app.</p>
        </div>
      </div>
      <div class="how-card">
        <img class="how-card-img" src="img/garage_voice.png" alt="Voice control for garage doors" loading="lazy"/>
        <div class="how-card-body">
        <h3>Voice &amp; Automation</h3>
        <p>Works with Siri, Alexa, and Google Home out of the box. Say "close all garage doors" and it's done. Set up automations — close everything at sunset, open the workshop at 7 AM on weekdays, or trigger the garage when you arrive home.</p>
        </div>
      </div>
      <div class="how-card">
        <div style="height:180px;overflow:hidden;border-bottom:1px solid var(--border);padding:0.8rem;display:flex;align-items:flex-start;">
          <div class="dashboard-mockup" style="transform:scale(0.82);transform-origin:top center;width:122%;margin-left:-11%;box-shadow:none;">
            <div class="mockup-bar"><div class="dot dot-r"></div><div class="dot dot-y"></div><div class="dot dot-g"></div><div class="mockup-title">Garage Door Status</div></div>
            <div class="mockup-body">
              <div class="mockup-row"><div><div class="tag-name">Main Garage</div><div class="tag-time">Closed · 8:14 AM</div></div><div class="tag-status status-closed">Closed</div></div>
              <div class="mockup-row"><div><div class="tag-name">Workshop</div><div class="tag-time">Open · 10:30 AM</div></div><div class="tag-status status-open">Open</div></div>
              <div class="mockup-row"><div><div class="tag-name">Barn Rollup</div><div class="tag-time">Closed · Yesterday</div></div><div class="tag-status status-closed">Closed</div></div>
              <div class="mockup-notif">🔔 &nbsp;<span><strong>Workshop open 10 min</strong> — auto-close in 5 min</span></div>
            </div>
          </div>
        </div>
        <div class="how-card-body">
        <h3>Alerts &amp; Auto-Close</h3>
        <p>Get instant notifications when any door opens or closes. Set a timer so doors automatically close if left open too long — 5 minutes, 15 minutes, whatever you want. Schedule all doors to close at a specific time every night so nothing gets missed.</p>
        </div>
      </div>
    </div>
  </div></section>

  <!-- ── ADD-ONS ── -->
  <section id="addons"><div class="section-inner">
    <div class="section-tag">Add-Ons</div>
    <h2 class="section-title"><em style="font-style:normal;background:linear-gradient(135deg,var(--blue-bright),var(--cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Enhance</em> your setup.</h2>
    <p class="section-sub">Add to any installation now or later.</p>

    <div class="how-grid-3">
      <div class="how-card">
        <img class="how-card-img" src="img/garage_camera.png" alt="Garage security camera" loading="lazy" style="object-position:top;"/>
        <div class="how-card-body">
        <h3>Garage Camera</h3>
        <p>See inside the garage before you open it — or check who just opened it. Live video, motion detection, and recording. Pairs with your door alerts so you get a snapshot every time a door opens. Great for detached garages and workshops.</p>
        <div style="margin-top:0.8rem;font-size:0.7rem;color:var(--muted);">Contact for pricing</div>
        </div>
      </div>
      <div class="how-card" id="wireless-bridge">
        <img class="how-card-img" src="img/wifi_bridge.png" alt="Point-to-point wireless bridge" loading="lazy"/>
        <div class="how-card-body">
        <h3>Point-to-Point Wireless Bridge</h3>
        <p>Detached garage with no WiFi? Our wireless bridge extends your home network up to 3,280 feet away. Two weatherproof antennas are mounted with line of sight — one at the house, one at the garage. Required for remote control, alerts, and voice assistant integration.</p>
        <div style="margin-top:0.8rem;font-size:0.7rem;color:var(--muted);">Contact for pricing</div>
        </div>
      </div>
      <div class="how-card">
        <img class="how-card-img" src="img/ha_integration.png" alt="Home Assistant dashboard integration" loading="lazy"/>
        <div class="how-card-body">
        <h3>Home Assistant Integration</h3>
        <p>Your garage doors are just one piece of your property. Home Assistant brings everything — gates, pool, fountains, lights, cameras — into a single app on your phone. One dashboard, one system. See all your doors alongside every other smart device on the property.</p>
        <div style="margin-top:0.8rem;font-size:0.7rem;color:var(--muted);">Contact for pricing · Includes HA server hardware</div>
        </div>
      </div>
    </div>

    <div style="text-align:center;margin-top:2rem;">
      <p style="color:var(--muted);font-size:0.82rem;line-height:1.6;">We'll quote add-ons alongside your installation during your free property assessment.</p>
    </div>
  </div></section>

  <!-- ── FAQ ── -->
  <section id="faq"><div class="section-inner">
    <div class="section-tag">FAQ</div>
    <h2 class="section-title">Frequently asked questions.</h2>
    <p class="section-sub">Everything you need to know before getting started.</p>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Will this work with my existing garage door opener? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Yes — our system works with virtually every garage door opener on the market, including LiftMaster, Chamberlain, Genie, Craftsman, Linear, and more. LiftMaster and Chamberlain Security+ 2.0 openers get the deepest integration — real-time position tracking, light control, and obstruction sensor monitoring. No need to replace your opener. We also work with commercial rollup doors and barn door openers. We'll confirm full compatibility during your free property assessment.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Do I need WiFi at the garage? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Yes — WiFi is required for remote control, notifications, and voice assistant integration. If your garage is detached and doesn't have WiFi, our <a href="#wireless-bridge" style="color:var(--blue-bright);text-decoration:none;">wireless bridge</a> add-on extends your home network up to 3,280 feet.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">What's included in the installed price? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Everything. Hardware, professional installation, system configuration, testing, and a full walkthrough. The price we quote is the price you pay — no surprise labor charges or hidden fees.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">How does auto-close work? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>It's fully customizable. Set a timer so the door closes after a certain number of minutes, schedule it to close at a specific time every night, or trigger it based on other events — whatever makes sense for how you use your garage. We'll configure it to work exactly the way you want during installation.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">What if something is blocking the door when it tries to auto-close? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>It won't close. Your garage door's built-in safety sensors are always active — if something is in the way, the door won't move. Our system monitors those sensors and will send you an alert so you know the obstruction is there and the door is still open. Nothing overrides your safety sensors.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Are there any monthly fees? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>No. Every installation is a one-time purchase with no subscriptions, no cloud fees, and no recurring charges. Everything runs locally on your property.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">Can I control rollup doors and barn doors too? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Yes. If the door has an electric opener, we can make it smart. Standard garage doors, commercial rollups, barn doors — they all work the same way in the app. Each door gets its own status, alerts, and auto-close settings.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">What happens during a power outage? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>The smart controller remembers its settings and reconnects automatically when power is restored. Your schedules and auto-close rules resume on their own — no reconfiguration needed. The garage door opener itself determines manual release behavior during an outage.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">What if I want to control more than just the garage? <svg width="14" height="8" viewBox="0 0 14 8"><path d="M1 1l6 6 6-6" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round"/></svg></button>
        <div class="faq-a"><p>Add our <a href="#addons" style="color:var(--blue-bright);text-decoration:none;">Home Assistant integration</a> to tie your garage doors into a single dashboard alongside your gate, pool, fountains, lights, cameras, and anything else on your property. One app for everything. <a href="#contact" style="color:var(--blue-bright);text-decoration:none;">Let's talk about what's possible.</a></p></div>
      </div>
    </div>
  </div></section>

  <!-- ── CONTACT ── -->
  <section id="contact"><div class="section-inner">
    <div class="cta-box">
      <div class="section-tag">Get Started</div>
      <h2 class="section-title">Ready to upgrade your garage?</h2>
      <p class="section-sub" style="margin-bottom:0;">Tell us about your property and we'll get back to you with a custom quote.</p>
      <p style="font-size:0.78rem;color:var(--muted);margin-top:0.6rem;">Trusted by property owners across Sarasota — 10+ years of smart home experience.</p>
      <form class="contact-form" action="https://formspree.io/f/xaqabrdo" method="POST">
        <input type="hidden" name="_next" value="https://craisondigital.com/thank-you.html"/><input type="hidden" name="_subject" value="New inquiry — Garage Pricing"/>
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
            <label>Number of Doors</label>
            <select name="num_doors">
              <option value="" disabled selected>How many doors?</option>
              <option>1 door</option>
              <option>2 doors</option>
              <option>3 doors</option>
              <option>4 doors</option>
              <option>5+ doors</option>
            </select>
          </div>
        </div>
        <div class="form-group"><label>Tell us about your garage and property</label><textarea name="message" placeholder="What kind of doors do you have? How many garages? Are any detached? Any other details about your setup..."></textarea></div>
        <div class="form-submit-row">
          <button type="submit" class="btn-primary">Send My Request →</button>
          <span class="form-note">We typically respond within 24 hours.</span>
        </div>
      </form>
    </div>
  </div></section>

  <!-- ── FOOTER ── -->
  <?php include 'footer.php'; ?>

  <script>
  (function() {
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
    document.querySelectorAll('.faq-a').forEach(function(a){ a.classList.remove('open'); });
    document.querySelectorAll('.faq-q').forEach(function(q){ q.classList.remove('active'); });
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
    var dot = toast ? toast.querySelector('.notif-dot') : null;
    var iconEl = toast ? toast.querySelector('.notif-icon') : null;
    if (!toast) return;

    dot.style.transition = 'background 0.6s ease, box-shadow 0.6s ease';
    iconEl.style.transition = 'background 0.6s ease, border-color 0.6s ease';
    badge.style.transition = 'background 0.6s ease, border-color 0.6s ease, color 0.6s ease';

    function setGreen() {
      toast.style.borderColor = 'rgba(74,222,128,0.35)';
      toast.style.boxShadow = '0 0 40px rgba(74,222,128,0.15), 0 8px 40px rgba(0,0,0,0.5)';
      dot.style.background = '#4ade80';
      dot.style.boxShadow = '0 0 8px #4ade80';
      iconEl.style.background = 'linear-gradient(135deg,#1a4a2a,#0d2a1a)';
      iconEl.style.borderColor = 'rgba(74,222,128,0.35)';
      badge.style.background = 'rgba(74,222,128,0.1)';
      badge.style.borderColor = 'rgba(74,222,128,0.25)';
      badge.style.color = '#4ade80';
    }

    function setRed() {
      toast.style.borderColor = 'rgba(251,113,133,0.4)';
      toast.style.boxShadow = '0 0 40px rgba(251,113,133,0.15), 0 8px 40px rgba(0,0,0,0.5)';
      dot.style.background = '#f87171';
      dot.style.boxShadow = '0 0 8px #f87171';
      iconEl.style.background = 'linear-gradient(135deg,#4a1a1a,#2a0d0d)';
      iconEl.style.borderColor = 'rgba(251,113,133,0.4)';
      badge.style.background = 'rgba(251,113,133,0.08)';
      badge.style.borderColor = 'rgba(251,113,133,0.25)';
      badge.style.color = '#f87171';
    }

    var notifications = [
      { icon: '🚗', title: 'Main Garage Closed', sub: 'Auto-close · Left open 10 min · 9:42 PM', badge: '✓ Closed', color: 'green' },
      { icon: '🚪', title: 'Workshop Door Opened', sub: 'Craig · Phone · 7:15 AM', badge: '✓ Opened', color: 'green' },
      { icon: '⚠️', title: 'Barn Rollup Left Open', sub: 'Auto-close disabled · 3:30 PM', badge: '⚠ Open', color: 'red' },
      { icon: '🔒', title: 'All Doors Closed', sub: 'Nightly schedule · 10:00 PM', badge: '✓ Secured', color: 'green' }
    ];

    var current = 0;
    setGreen();

    function cycle() {
      toast.style.opacity = '0';
      setTimeout(function() {
        current = (current + 1) % notifications.length;
        var n = notifications[current];
        icon.textContent = n.icon;
        title.textContent = n.title;
        sub.textContent = n.sub;
        badge.textContent = n.badge;
        if (n.color === 'red') { setRed(); } else { setGreen(); }
        toast.style.opacity = '1';
      }, 400);
    }

    setInterval(cycle, 5000);
  })();
  </script>

</body>
</html>
