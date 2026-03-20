# CLAUDE_REFERENCE.md
> **Purpose:** Read this file FIRST every session to understand the codebase before making changes.
> Last updated: 2026-03-20

---

## REPO OVERVIEW
- **Owner:** craisondigital
- **Repo:** cd-site
- **Branch:** main
- **Business:** Craison Digital — Smart Home / Smart Property consulting (Miami area)
- **Hosting:** Bluehost (static HTML, deployed via cPanel Git Version Control)
- **Domain:** craisondigital.com

---

## FILE INVENTORY (root directory)

| File | Purpose | Size | Deployed |
|---|---|---|---|
| `index.html` | **Homepage** — Animated estate SVG hero with full property automation showcase | ~103KB | ✓ |
| `gate.html` | **Gate product page** — Smart Gate Access for Large Properties | ~78KB | ✓ |
| `fountains.html` | **Fountain product page** — Smart Lake Fountain Control | ~77KB | ✓ |
| `pool.html` | **Pool product page** — Smart Pool Automation (any brand, or no automation at all) | ~83KB | ✓ |
| `404.html` | **Custom 404 page** — Branded error page matching site design | ~5KB | ✓ |
| `.htaccess` | **Apache config** — Custom 404, GZIP, caching, security headers | ~1KB | ✓ |
| `nav.html` | **Nav prototype** — Working standalone nav test page (reference for nav pattern) | ~10KB | ✓ |
| `.cpanel.yml` | **Deployment config** — Auto-deploys all *.html + .htaccess to public_html | <1KB | No |
| `CLAUDE_REFERENCE.md` | **This file** — Codebase reference for Claude sessions | ~16KB | No |

---

## DEPLOYMENT (Bluehost + cPanel Git Version Control)

### How it works:
1. Repo is cloned to `/home4/craisond/repositories/cd-site` on Bluehost
2. `.cpanel.yml` uses wildcard `*.html` — auto-deploys ALL HTML files + .htaccess to `/home4/craisond/public_html/`
3. Push changes to GitHub → go to cPanel → Git Version Control → click **Update from Remote** → click **Deploy HEAD Commit**

### .cpanel.yml auto-deploys:
- **All `*.html` files** in the repo root (no need to list them individually)
- `.htaccess`

### NOT deployed (stays in repo only):
- CLAUDE_REFERENCE.md, .cpanel.yml itself

### Adding new pages:
New `.html` files are automatically deployed — no changes to `.cpanel.yml` needed. If you add non-HTML files (CSS, JS, images), you MUST add a `/bin/cp` line for them in `.cpanel.yml`.

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

## ⚠️ NAVIGATION — CRITICAL: READ THIS BEFORE TOUCHING THE NAV ⚠️

The nav went through 5 iterations to get right. The working pattern (v5) is documented below. **DO NOT** attempt to use position:fixed overlays for the mobile menu — they consistently broke across devices. The working approach uses a **separate mobile-menu div inside the nav element** that drops down below the nav bar.

### Architecture (two separate elements inside `<nav>`)

The nav uses **two separate HTML structures**: one for desktop, one for mobile. They live side by side inside the `<nav>` element. CSS media queries show/hide the appropriate one.

```html
<nav>
  <div class="nav-bar">
    <a href="index.html" class="nav-logo">Craison<span>Digital</span></a>
    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
    <!-- DESKTOP NAV — hidden on mobile via display:none !important -->
    <ul class="nav-links">
      <!-- ... desktop links with hover dropdown ... -->
    </ul>
  </div>
  <!-- MOBILE MENU — hidden on desktop, separate div inside nav -->
  <div class="mobile-menu" id="mobileMenu">
    <!-- ... mobile links, flat list, no dropdown hover ... -->
  </div>
</nav>
```

### Why this works:
- The `<nav>` is `position: fixed` at top of page
- The `.mobile-menu` lives INSIDE the fixed `<nav>`, so it inherits the fixed positioning
- When toggled open, it simply expands the nav's height downward — no overlay, no z-index fights
- Background is solid `var(--black)` — no transparency issues
- No padding-top guesswork needed since the menu drops below the nav bar naturally

### Desktop nav: hover dropdown with bridge

The Services dropdown uses a `<div class="dropdown-panel">` wrapper with `padding-top: 0.75rem` that creates an invisible hover bridge between the trigger text and the dropdown menu. This prevents the dropdown from closing as the mouse travels from the trigger down to the menu items.

```css
.dropdown-panel {
  visibility: hidden; opacity: 0;
  position: absolute; top: 100%; left: 50%;
  transform: translateX(-50%);
  padding-top: 0.75rem; /* hover bridge */
  z-index: 110;
  transition: visibility 0.15s, opacity 0.15s;
}
.nav-dropdown:hover .dropdown-panel { visibility: visible; opacity: 1; }
```

### Mobile nav: dropdown panel inside fixed nav

The mobile menu is a `<div class="mobile-menu">` that:
- Is `display: none` by default
- Gets `display: flex` when `.open` class is toggled
- Lives inside the `<nav>` so it inherits fixed positioning
- Has `border-top: 1px solid var(--border)` to separate from the nav bar
- Has `background: var(--black)` — fully opaque
- Uses compact padding (`0.55rem` per link, `0.45rem` for sub-links)
- "Services" is rendered as a small uppercase label (`.mm-label`), not a link

### Mobile menu link sizes (all uniform at 1rem):
- Regular links: `font-size: 1rem; padding: 0.55rem 0; color: var(--text);`
- Sub-links (services): `font-size: 1rem; padding: 0.45rem 0; color: var(--muted);`
- CTA button: `font-size: 1rem; padding: 0.6rem 1.8rem;`
- Services label: `font-size: 0.62rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--blue-bright);`

### JS for mobile toggle:
```javascript
var navToggle = document.getElementById('navToggle');
var mobileMenu = document.getElementById('mobileMenu');
if(navToggle && mobileMenu){
  navToggle.addEventListener('click', function(){ mobileMenu.classList.toggle('open'); });
  mobileMenu.querySelectorAll('a').forEach(function(a){
    a.addEventListener('click', function(){ mobileMenu.classList.remove('open'); });
  });
}
```

### Customizing per page:

**Homepage** desktop nav links:
```
Home (nav-active) | Services ▾ (Gate, Pool, Fountains) | Why Us | Plans | [Get Started]
```

**Product page** desktop nav links (example: gate.html):
```
Home | Services ▾ (Gate=active, Pool, Fountains) | divider | The Experience | What's Included | How It Works | Pricing | [Get a Quote]
```

For each product page, set `class="dropdown-active"` on the current page's link in both the desktop dropdown-inner and the mobile mm-sub.

### Reference file: `nav.html`
The working nav prototype is `nav.html` in the repo root. Use it as the definitive reference when integrating the nav into site pages.

---

## FOOTER (consistent across all pages)

### Structure:
```html
<footer>
  <div class="footer-top">
    <div class="footer-logo"><a href="index.html">Craison<span>Digital</span></a></div>
    <div class="footer-nav">
      <a href="index.html">Home</a>
      <a href="gate.html">Gate</a>
      <a href="pool.html">Pool</a>
      <a href="fountains.html">Fountains</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
  <div class="footer-bottom">
    <div>© 2026 Craison Digital. All rights reserved.</div>
    <div>Smart Property Consulting · Estates &amp; Compounds · Miami</div>
  </div>
</footer>
```

---

## DESIGN SYSTEM (consistent across all pages)

### CSS Variables (`:root`)
```css
--black: #060a10;        /* page background */
--dark: #0b1018;         /* alternating section bg */
--card: #0f1724;         /* card backgrounds */
--card-hover: #141d2e;   /* card hover state */
--border: rgba(255,255,255,0.06);
--blue: #2f80ed;         /* primary accent / CTAs */
--blue-bright: #5ba4f5;  /* hover states, highlights */
--blue-glow: rgba(47,128,237,0.15);
--cyan: #00d4ff;         /* secondary accent (logo, badges) */
--green: #4ade80;        /* success states */
--text: #e4e9f2;         /* primary text */
--muted: #6b7a8d;        /* secondary text */
--white: #f4f7fb;        /* brightest text */
--font-display: 'Syne', sans-serif;
--font-body: 'DM Sans', sans-serif;
```

### Visual Patterns
- **Dark theme only** — deep navy/black backgrounds
- **Noise texture overlay** — `body::before` with SVG fractalNoise filter, fixed position
- **Subtle grid background** on hero sections (thin blue lines, radial mask)
- **Glow effects** — `box-shadow` with blue rgba for CTAs, `filter: url(#glow)` for SVG elements
- **Section alternation** — sections alternate between `--black` and `--dark` backgrounds
- **Border style** — 1px solid with very low opacity white (`rgba(255,255,255,0.06)`)
- **Border-radius:** cards = 14-16px, buttons = 8px, badges = 100px (pill shape)
- **Animation:** `fadeUp` keyframe (opacity 0→1, translateY 18px→0) with staggered delays

### Typography Hierarchy
- **h1 (hero):** Syne, weight 800, `clamp(2.2rem, 5.2vw, 4.2rem)`, tracking -0.025em
- **Section titles:** Syne, weight 800, `clamp(1.7rem, 3.2vw, 2.6rem)`
- **Card titles:** Syne, weight 700, ~1rem
- **Body text:** DM Sans, weight 300, 0.85-0.9rem
- **Tags/labels:** 0.7rem, weight 600, letter-spacing 0.16em, uppercase, blue-bright color
- **Muted text:** color `--muted` (#6b7a8d)

### Button Styles
- **Primary:** `background: var(--blue)`, white text, 8px radius, `box-shadow: 0 0 20px rgba(47,128,237,0.25)`, hover lifts 1px + brighter shadow
- **Secondary:** transparent bg, 1px border `var(--border)`, hover brightens border

---

## HOMEPAGE (index.html)

### Core Messaging
1. **"We make smart homes work — and fix the ones that don't."** — Lead message.
2. **"We automate what others won't."** — Killer differentiator.
3. **One app, one relationship, one system** — No more app graveyard.
4. **Built for how you live, not how a manufacturer thinks you should** — Bespoke.
5. **Large acre properties, estates, compounds** — The niche.
6. **We work with what you have** — No rip-and-replace.

### Section Structure
1. Hero → 2. App Graveyard → 3. What We Do → 4. What We Automate → 5. Why Different → 6. Day in the Life → 7. Monthly Plans → 8. Contact

### Animated Estate SVG — 20-second cycle
Key IDs: `carGroup`, `gateLeft`, `gateRight`, `gateLed`, `pillarLight1/2`, `porchLight/2`, `windowAmbient`, `winGlow1-6`, `lLight1-4`, `oakSpotBeams`, `oakCanopyLit`, `palmSpot1-3`, `poolCaustics`, `poolRipples`, `poolGlowOverlay`, `poolLightsGroup`, `fountainSpray`, `ftnLedGroup`, `ftnRipple1-4`, `splashCenter`, `ftnDroplets`, `waterGlowEl`, `waterGlowInner`, `lakeCaustics`, `lakeRipples`, `estateToast`, `toastTitle`, `toastSub`

---

## PRODUCT PAGE STRUCTURE

### Gate & Fountain Pages
Nav → Hero (SVG) → Stats Bar → Problem/Solution → Experience → What's Included → How It Works → Features/Dashboard → Beyond → Pricing → Contact → Footer

### Pool Page (different order)
Nav → Hero (SVG) → Stats Bar → Problem/Solution → Experience (2×2) → Compatibility → Whole-House → What's Included → How It Works → Features/Dashboard → Beyond → Pricing → Contact → Footer

### SVG Animations
- **Gate** — 10s. IDs: `truckGroup`, `gateLeft`, `gateRight`, `readerLed`, `rfidRings`, `hudMode`, `hudTag`, `notifToast`
- **Fountain** — 14s. IDs: `sprayGroup`, `waterGlowEl`, `phoneGroup`, `anemometer`, `notifToast2`, `hudStatus`, `hudWind`
- **Pool** — 14s. IDs: `poolSVG`, `phoneGroup`, `phoneTemp`, `phoneStatus`, `spaJets`, `spaRipples`, `spaCaustics`, `spaWaterOverlay`, `spaLight1-3`

---

## RESPONSIVE BREAKPOINTS
- **960px:** grids to 2-col, SVG brightness boost
- **768px:** hamburger + mobile-menu panel, grids to 1-col, footer stacks
- **480px:** beyond/compat to 1-col, SVG tight crop

---

## IMPORTANT NOTES FOR EDITING
1. **Each file is self-contained** — CSS and JS inline, not shared
2. **New pages:** copy `gate.html` as template. New `.html` files auto-deploy via `*.html` wildcard in `.cpanel.yml`
3. **Nav uses v5 pattern** — see ⚠️ NAVIGATION section. Reference: `nav.html`
4. **DO NOT use position:fixed overlays for mobile nav** — use mobile-menu-inside-nav pattern
5. **Forms are non-functional** — `onsubmit="return false;"`
6. **Deployment:** Push to GitHub → cPanel → Update from Remote → Deploy HEAD Commit
7. **Bluehost home dir:** `/home4/craisond/` (not `/home/`)

---

## TODO / KNOWN ISSUES
- [ ] Wire up contact forms (Formspree or PHP `mail()`)
- [ ] Add Open Graph meta tags for social sharing
- [ ] Add robots.txt and sitemap.xml for SEO
- [ ] HTTPS redirect in .htaccess once SSL confirmed
- [ ] "Beyond" sections could link to other product pages
