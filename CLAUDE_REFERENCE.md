# CLAUDE_REFERENCE.md
> **Purpose:** Read this file FIRST every session to understand the codebase before making changes.
> Last updated: 2026-03-25

---

## REPO OVERVIEW
- **Owner:** craisondigital
- **Repo:** cd-site
- **Branch:** main
- **Business:** Craison Digital — Smart Home / Smart Property consulting (Sarasota area)
- **Hosting:** Bluehost (static HTML, deployed via cPanel Git Version Control)
- **Domain:** craisondigital.com

---

## FILE INVENTORY (root directory)

| File | Purpose | Size | Deployed |
|---|---|---|---|
| `index.html` | **Homepage** — Animated estate SVG hero with full property automation showcase | ~103KB | ✓ |
| `gate.html` | **Gate product page** — Smart Gate Access for Large Properties (SVG animation hero) | ~78KB | ✓ |
| `fountains.html` | **Fountain product page** — Smart Lake Fountain Control | ~77KB | ✓ |
| `pool.html` | **Pool product page** — Smart Pool Automation (any brand, or no automation at all) | ~83KB | ✓ |
| `pricing.html` | **Gate pricing/packages page** — 3-tier installed pricing, add-on cards, FAQ, contact | ~42KB | ✓ |
| `404.html` | **Custom 404 page** — Branded error page matching site design | ~5KB | ✓ |
| `.htaccess` | **Apache config** — Custom 404, GZIP, caching, security headers | ~1KB | ✓ |
| `nav.html` | **Nav prototype** — Working standalone nav test page (reference for nav pattern) | ~10KB | ✓ |
| `img/` | **Images directory** — Product photos and assets | varies | ✓ |
| `.cpanel.yml` | **Deployment config** — Auto-deploys all *.html + .htaccess + img/ to public_html | <1KB | No |
| `CLAUDE_REFERENCE.md` | **This file** — Codebase reference for Claude sessions | ~20KB | No |

### Images in `img/`
| File | Used On | Description |
|---|---|---|
| `Gate_rfid_animation.png` | pricing.html, gate.html | RFID reader/gate product shot |
| `PhoneControl.png` | pricing.html | Phone controlling gate |
| `keypad.png` | pricing.html | Weatherproof keypad |
| `wifi_bridge.png` | pricing.html | Point-to-point wireless bridge antennas |
| `gate_alarm.png` | pricing.html | Gate alarm/siren — also used as photo banner background |
| `door_cam.png` | pricing.html | Doorbell camera |

---

## DEPLOYMENT (Bluehost + cPanel Git Version Control)

### How it works:
1. Repo is cloned to `/home4/craisond/repositories/cd-site` on Bluehost
2. `.cpanel.yml` uses wildcard `*.html` — auto-deploys ALL HTML files + .htaccess + img/ to `/home4/craisond/public_html/`
3. Push changes to GitHub → go to cPanel → Git Version Control → click **Update from Remote** → click **Deploy HEAD Commit**

### .cpanel.yml auto-deploys:
- **All `*.html` files** in the repo root
- `.htaccess`
- `img/` directory (recursive copy)

### NOT deployed:
- CLAUDE_REFERENCE.md, .cpanel.yml itself

### Bluehost details:
- Home directory: `/home4/craisond/` (NOT `/home/`)
- Deploy path: `/home4/craisond/public_html/`
- Repo path: `/home4/craisond/repositories/cd-site`

---

## TECH STACK
- **Pure static HTML** — no build system, no framework, no bundler
- **Single-file architecture** — each page has HTML + CSS + JS all inline in one `.html` file
- **Fonts:** Google Fonts — `Syne` (display/headings, weight 400-800) + `DM Sans` (body, weight 300-600)
- **No external CSS or JS libraries** — everything is custom
- **SVG illustrations** — complex inline SVGs with JavaScript animations
- **No backend / no form handling** — forms use `onsubmit="return false;"` (placeholder)

---

## ⚠️ NAVIGATION — ONE PATTERN FOR ALL PAGES

The nav uses v5 pattern with **separate mobile-menu div inside the nav element**. DO NOT use position:fixed overlays for the mobile menu. **All pages use the same simplified nav — NO page-specific section links.**

```
Home | Services ▾ | Pricing ▾ | [Get a Quote]
```

### Active states:
- **index.html:** `Home` gets `class="nav-active"`, Services and Pricing `<a>` have NO `nav-active` or `href`
- **Product pages (gate, pool, fountains):** Services `<a>` gets `class="nav-active"`, set `class="dropdown-active"` on the current product in the Services dropdown
- **Pricing pages (pricing, fountain-pricing):** Pricing `<a>` gets `class="nav-active"`, set `class="dropdown-active"` on the current pricing page in the Pricing dropdown. Services `<a>` also gets `class="nav-active"` with `dropdown-active` on the parent product.
- **404.html:** No active state, CTA links to `index.html#contact` instead of `#contact`

### Desktop:
```html
<ul class="nav-links">
  <li><a href="index.html">Home</a></li>
  <li class="nav-dropdown">
    <a class="nav-active">Services <svg>...chevron...</svg></a>
    <div class="dropdown-panel">
      <ul class="dropdown-inner">
        <li><a href="gate.html" class="dropdown-active"><span class="dd-icon">🚪</span> Smart Gate Access</a></li>
        <li><a href="pool.html"><span class="dd-icon">🌊</span> Pool &amp; Spa Automation</a></li>
        <li><a href="fountains.html"><span class="dd-icon">⛲</span> Lake &amp; Fountain Control</a></li>
      </ul>
    </div>
  </li>
  <li class="nav-dropdown">
    <a>Pricing <svg>...chevron...</svg></a>
    <div class="dropdown-panel">
      <ul class="dropdown-inner">
        <li><a href="pricing.html"><span class="dd-icon">🚪</span> Gate Control</a></li>
        <li><a href="fountain-pricing.html"><span class="dd-icon">⛲</span> Fountain Control</a></li>
      </ul>
    </div>
  </li>
  <li><a href="#contact" class="nav-cta">Get a Quote</a></li>
</ul>
```

### Mobile:
```html
<div class="mobile-menu" id="mobileMenu">
  <a href="index.html">Home</a>
  <div class="mm-label">Services</div>
  <div class="mm-sub">
    <a href="gate.html" class="dropdown-active">Smart Gate Access</a>
    <a href="pool.html">Pool &amp; Spa Automation</a>
    <a href="fountains.html">Lake &amp; Fountain Control</a>
  </div>
  <div class="mm-label">Pricing</div>
  <div class="mm-sub">
    <a href="pricing.html">Gate Control</a>
    <a href="fountain-pricing.html">Fountain Control</a>
  </div>
  <div class="mm-divider"></div>
  <a href="#contact" class="nav-cta">Get a Quote</a>
</div>
```

Set `class="dropdown-active"` on the current page's link in both desktop and mobile dropdowns.

---

## FOOTER (consistent across all pages)

```html
<footer>
  <div class="footer-top">
    <div class="footer-logo"><a href="index.html">Craison<span>Digital</span></a></div>
    <div class="footer-nav">
      <a href="index.html">Home</a><a href="gate.html">Gate</a>
      <a href="pool.html">Pool</a><a href="fountains.html">Fountains</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
  <div class="footer-bottom">
    <div>© 2026 Craison Digital. All rights reserved.</div>
    <div>Smart Property Consulting · Estates &amp; Compounds · Sarasota</div>
  </div>
</footer>
```

---

## DESIGN SYSTEM

### CSS Variables
```css
--black: #060a10; --dark: #0b1018; --card: #0f1724;
--card-hover: #141d2e; --border: rgba(255,255,255,0.06);
--blue: #2f80ed; --blue-bright: #5ba4f5;
--blue-glow: rgba(47,128,237,0.15); --cyan: #00d4ff;
--green: #4ade80; --text: #e4e9f2; --muted: #6b7a8d; --white: #f4f7fb;
--font-display: 'Syne', sans-serif; --font-body: 'DM Sans', sans-serif;
```

### Visual Patterns
- Dark theme only, noise texture overlay, section alternation (--black / --dark)
- Border: 1px solid rgba(255,255,255,0.06), border-radius: cards 14-16px, buttons 8px, badges 100px
- Glow effects on CTAs and SVG elements
- fadeUp animation with staggered delays

### Typography
- **h1:** Syne 800, clamp(2.2rem, 5.2vw, 4.2rem)
- **Section titles:** Syne 800, clamp(1.7rem, 3.2vw, 2.6rem)
- **Card titles:** Syne 700, ~1rem
- **Body:** DM Sans 300, 0.85-0.9rem
- **Tags/labels:** 0.7rem, weight 600, letter-spacing 0.16em, uppercase

### Responsive Breakpoints
- **960px:** grids to 2-col, featured card spans full width centered
- **768px:** hamburger menu, grids to 1-col, footer stacks, toast compact styles, photo banner auto height
- **480px:** add-on grids to 1-col

---

## ⭐ PRICING PAGE TEMPLATE (pricing.html) — REPLICATE FOR NEW PRODUCTS

### Page Flow
```
Nav (standard site-wide nav — Home | Services | Get a Quote)
 → Packages Section (#packages) — section tag + gradient h2 + cycling notification toast + 3-col pricing cards + footnote
 → Photo Banner — emotional hook (full-width image, dark overlay, bold text)
 → Add-Ons Section (#addons) — section tag + h2 + 2-col image cards (how-card pattern) + footnote
 → FAQ Section (#faq) — accordion
 → Contact Form (#contact)
 → Footer
```

### Packages Section
- **Section tag** in WHITE (not blue): `style="color:var(--white);"`
- **H2** with blue-to-cyan gradient on key phrase
- **Cycling notification toast** — centered, static-positioned, JS cycles through 3-4 product scenarios every 3.5s with fade transition. Green badge for entries, red for exits.
- **3-column pricing cards** — each has: emoji icon → name → tagline → LARGE price (2.4rem white) → "Installed · One-time · No monthly fees" → divider → feature list with cyan checkmarks → muted features (gray dashes showing what's NOT included) → full-width CTA button → footnote
- **Featured card**: `class="pkg-card featured"` — cyan border glow, badge, always-visible gradient line
- **Footnote**: centered, mentions existing equipment assumption, free property assessment

### Pricing Philosophy
- Show INSTALLED prices (hardware + labor bundled) — never show component costs to customer
- "Contact" for variable-complexity items
- Bundle vs standalone pricing for simple add-ons
- No "starting at" on cards — footnote handles the disclaimer

### Photo Banner
- Full-width image with `brightness(0.35) saturate(0.7)` filter
- Dark gradient overlay, centered text
- Height: 280px desktop, auto/min-height 220px mobile
- Can include large emoji on its own line between heading and subtitle

### Add-On Cards (how-card pattern)
- 2-column grid, product photo at top (180px), card body with h3 + description
- **NO emoji icons** — photos only in this section
- Optional pricing line at bottom
- Cards can have IDs for deep linking: `id="wireless-bridge"`
- Dashboard mockup card uses inline HTML scaled to 180px instead of photo

### FAQ Accordion
- Click-to-expand, max-height animation, chevron rotation
- Answers can contain inline links as soft CTAs
- Cover: requirements, pricing inclusions, specs, modularity, power outages, upgradability

### Gate Pricing Reference
| Package | Installed Price | Hardware | Labor |
|---|---|---|---|
| Phone Control | $295 | ~$19 | $276 |
| Hands-Free RFID | $650 | ~$238 | $412 |
| Full Access Control | $995 | ~$400+ | $595 |

| Add-On | With Package | Standalone |
|---|---|---|
| PIN Code Keypad | $95 | $195 |
| Wireless Bridge | $195 | $295 |
| Gate Camera | Contact | Contact |
| Gate Alarm | Contact | Contact |

---

## IMPORTANT NOTES
1. Each file is self-contained — CSS and JS inline
2. **New pricing pages:** copy `pricing.html` as template. Nav is already correct.
3. **New product pages:** copy `gate.html` as template for SVG hero pages. Nav is already correct.
4. DO NOT add page-specific section links to nav on ANY page — all pages use the simplified nav (Home | Services | Get a Quote)
5. DO NOT use position:fixed overlays for mobile nav
6. Forms are non-functional — `onsubmit="return false;"`
7. Footer must say **Sarasota** (not Miami)
8. Images go in `img/` directory

---

## TODO
- [ ] Wire up contact forms (Formspree or PHP mail())
- [ ] Open Graph meta tags for social sharing
- [ ] robots.txt and sitemap.xml for SEO
- [ ] HTTPS redirect in .htaccess
- [ ] Footer Miami → Sarasota still needed in: index.html, pool.html, fountains.html, 404.html
