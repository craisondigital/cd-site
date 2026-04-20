<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Thank You – Craison Digital</title>
  <meta name="robots" content="noindex"/>
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='6' fill='%230d1320'/><text x='4' y='24' font-size='22' font-weight='bold' fill='%2300d4ff'>C</text></svg>"/>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --black: #060a10; --dark: #0b1018; --card: #0f1724;
      --border: rgba(255,255,255,0.06);
      --blue: #2f80ed; --blue-bright: #5ba4f5;
      --blue-glow: rgba(47,128,237,0.15); --cyan: #00d4ff;
      --green: #4ade80;
      --text: #e4e9f2; --muted: #6b7a8d; --white: #f4f7fb;
      --font-display: 'Syne', sans-serif;
      --font-body: 'DM Sans', sans-serif;
    }
    html { scroll-behavior: smooth; }
    body { background: var(--black); color: var(--text); font-family: var(--font-body); font-weight: 300; line-height: 1.75; overflow-x: hidden; -webkit-font-smoothing: antialiased; min-height: 100vh; display: flex; flex-direction: column; }
    body::before { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E"); pointer-events: none; z-index: 0; opacity: 0.5; }

    /* NAV */
    nav { position: fixed; top: 0; left: 0; right: 0; z-index: 100; background: rgba(6,10,16,0.92); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-bottom: 1px solid var(--border); }
    .nav-bar { display: flex; align-items: center; justify-content: space-between; padding: 1rem 4rem; }
    .nav-logo { font-family: var(--font-display); font-weight: 800; font-size: 1.1rem; color: var(--white); text-decoration: none; }
    .nav-logo span { color: var(--cyan); }

    /* MAIN */
    main { flex: 1; display: flex; align-items: center; justify-content: center; padding: 100px 2rem 4rem; position: relative; z-index: 1; }
    .ty-card { max-width: 560px; width: 100%; text-align: center; }
    .ty-icon { width: 72px; height: 72px; background: rgba(74,222,128,0.08); border: 1px solid rgba(74,222,128,0.25); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 1.8rem; position: relative; }
    .ty-icon::after { content: ''; position: absolute; inset: -6px; border-radius: 50%; border: 1px solid rgba(74,222,128,0.1); }
    .ty-tag { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase; color: var(--green); margin-bottom: 1rem; }
    .ty-title { font-family: var(--font-display); font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; line-height: 1.1; letter-spacing: -0.02em; color: var(--white); margin-bottom: 1.2rem; animation: fadeUp 0.6s ease both; }
    .ty-sub { font-size: 1rem; color: var(--muted); line-height: 1.75; max-width: 440px; margin: 0 auto 2.5rem; animation: fadeUp 0.6s 0.1s ease both; }
    .ty-actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; animation: fadeUp 0.6s 0.2s ease both; }
    .btn-primary { background: var(--blue); color: var(--white); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 500; text-decoration: none; transition: all 0.2s; box-shadow: 0 0 20px rgba(47,128,237,0.25); display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-primary:hover { background: var(--blue-bright); transform: translateY(-1px); box-shadow: 0 0 32px rgba(47,128,237,0.4); }
    .btn-secondary { background: transparent; color: var(--text); padding: 0.8rem 2rem; border-radius: 8px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 400; text-decoration: none; border: 1px solid var(--border); transition: all 0.2s; }
    .btn-secondary:hover { border-color: rgba(255,255,255,0.15); color: var(--white); }
    .ty-note { margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border); font-size: 0.8rem; color: var(--muted); }

    @keyframes fadeUp { from{opacity:0;transform:translateY(18px)} to{opacity:1;transform:translateY(0)} }

    /* FOOTER */
    footer { border-top: 1px solid var(--border); background: var(--black); padding: 2rem 4rem; font-size: 0.78rem; color: var(--muted); position: relative; z-index: 1; }
    .footer-bottom { display: flex; align-items: center; justify-content: space-between; }
    @media (max-width: 768px) {
      .nav-bar { padding: 0.9rem 1.5rem; }
      footer { padding: 1.5rem; }
      .footer-bottom { flex-direction: column; gap: 0.4rem; text-align: center; }
    }
  </style>
</head>
<body>

  <?php include 'nav.php'; ?>

  <main>
    <div class="ty-card">
      <div class="ty-icon">✓</div>
      <div class="ty-tag">Message Received</div>
      <h1 class="ty-title">We'll be in touch soon.</h1>
      <p class="ty-sub">Thanks for reaching out. Craig typically responds within one business day — usually faster. Keep an eye on your inbox.</p>
      <div class="ty-actions">
        <a href="javascript:history.back()" class="btn-primary">← Go Back</a>
        <a href="index.php" class="btn-secondary">Back to Home</a>
      </div>
      <p class="ty-note">In the meantime, feel free to explore the site to learn more about our services.</p>
    </div>
  </main>

  <footer>
    <div class="footer-bottom">
      <div>© 2026 Craison Digital. All rights reserved.</div>
      <div>Smart Property Consulting · Estates &amp; Compounds · Sarasota</div>
    </div>
  </footer>

</body>
</html>
