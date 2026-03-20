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
| `index.html` | **Homepage** — Animated estate SVG hero with full property automation showcase | ~99KB | ✓ |
| `gate.html` | **Gate product page** — Smart Gate Access for Large Properties | ~74KB | ✓ |
| `fountains.html` | **Fountain product page** — Smart Lake Fountain Control | ~72KB | ✓ |
| `pool.html` | **Pool product page** — Smart Pool Automation (any brand, or no automation at all) | ~79KB | ✓ |
| `404.html` | **Custom 404 page** — Branded error page matching site design | ~5KB | ✓ |
| `.htaccess` | **Apache config** — Custom 404, GZIP, caching, security headers | ~1KB | ✓ |
| `.cpanel.yml` | **Deployment config** — Tells cPanel which files to copy to public_html | <1KB | No (used by cPanel only) |
| `CLAUDE_REFERENCE.md` | **This file** — Codebase reference for Claude sessions | ~14KB | No |

---

## DEPLOYMENT (Bluehost + cPanel Git Version Control)

### How it works:
1. Repo is cloned to `~/repositories/cd-site` on Bluehost (NOT directly in public_html)
2. `.cpanel.yml` defines deployment tasks — copies HTML files + .htaccess to `public_html`
3. Push changes to GitHub → go to cPanel → Git Version Control → click **Update** → click **Deploy HEAD Commit**

### .cpanel.yml deploys these files:
- index.html, gate.html, pool.html, fountains.html, 404.html, .htaccess

### NOT deployed (stays in repo only):
- CLAUDE_REFERENCE.md, .cpanel.yml itself

---

## TECH STACK
- **Pure static HTML** — no build system, no framework, no bundler
- **Single-file architecture** — each page has HTML + CSS + JS all inline in one `.html` file
- **Fonts:** Google Fonts — `Syne` (display/headings, weight 400-800) + `DM Sans` (body, weight 300-600)
- **No external CSS or JS libraries** — everything is custom
- **SVG illustrations** — complex inline SVGs with JavaScript animations (gate scene, fountain scene, pool+spa scene, estate overview scene)
- **No backend / no form handling** — forms use `onsubmit="return false;"` (placeholder — needs to be wired up)

---

## SITE-WIDE NAVIGATION (updated 2026-03-20)

### Cross-page navigation is now connected:
- **Logo** on every page links to `index.html`
- **Product pages** (gate, pool, fountains) have: Home link + in-page section links + divider + links to other two product pages + CTA
- **Homepage** nav has in-page section anchors only (What We Do, Solutions, Why Us, Plans, Get Started)
- **Mobile:** nav becomes full-screen overlay on hamburger click, nav-divider hidden on mobile

### Footer (consistent across all pages):
- Top row: Logo (links home) + nav links (Home, Gate, Pool, Fountains, Contact)
- Bottom row: Copyright + "Smart Property Consulting · Estates & Compounds · Miami"
- Mobile: stacks vertically, nav links wrap and center

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

### Core Messaging (updated 2026-03-20)
The homepage copy emphasizes these key messages:
1. **"We make smart homes work — and fix the ones that don't."** — Lead message. Not selling new systems.
2. **"We automate what others won't."** — Killer differentiator. Mixed brands, legacy, the "impossible."
3. **One app, one relationship, one system** — No more app graveyard. Ongoing partner, not a contractor.
4. **Built for how you live, not how a manufacturer thinks you should** — Bespoke, not templated.
5. **Large acre properties, estates, compounds** — The niche. Not condos, not starter homes.
6. **We work with what you have** — No rip-and-replace. No $200K Crestron overhauls.

### Section Structure
1. **Hero** — Animated estate SVG + headline "Your smart home should actually be smart."
2. **The Problem** — App graveyard (12 disconnected apps visual) — "Half of it barely works"
3. **What We Do** — "We fix what's broken. We connect what's not." 4-step narrative
4. **What We Automate** — Card grid (Gate/Pool/Fountains = Live, Lighting/Cameras/HVAC = Coming Soon)
5. **Why We're Different** — "Built for properties other integrators won't touch." 3 bold statements
6. **Day in the Life** — Timeline 6AM-11PM showing automated estate scenarios
7. **Monthly Plans** — Ongoing partnership section
8. **Contact** — Form with dropdown including "Fix my existing smart home" option

### Animated Estate SVG (viewBox 0 0 1100 440)

#### Layout (left to right):
- **Gate pillars** (x≈98-122): Two pillars on opposite sides of the driveway
- **Driveway**: Curved path from x=0 to x=480
- **Pool** (trapezoid, x=100-325, y=155-230): LEFT of house, with brick paver deck
- **House** (x=360-640, y=140-280): Main house with 4 windows + front door
- **Garage wing** (x=640-740, y=180-280): To the right of house
- **Oak tree** (x=640, canopy center y=262): Large spreading oak with 3 spotlights
- **Palm trees** (3): Behind fountain/garage at x=750,890,1010 with spotlights
- **Lake/fountain** (centered ~(900,300) after translate): Large elliptical lake with enhanced fountain spray
- **Car** (84×28 body): Drives from gate to house during animation
- **Landscape lights**: 4 lights along driveway edge

#### Animation Cycle (20 seconds):
- 0.00-0.15: Dark estate, everything off
- 0.15-0.24: Car approaches, pillar lights detect
- 0.24-0.27: Car stops at gate, LED amber→green
- 0.27-0.33: Gate opens, ALL lights come on simultaneously
- 0.33-0.50: Car drives through to house
- 0.48-0.58: Gate closes
- 0.51-0.61: Toast "Gate: Vehicle Arrived"
- 0.72-0.82: Toast "Pool Night Activated"
- 0.88-0.96: Everything fades to dark
- 0.97-1.00: Reset

#### Responsive:
- **Tablet (≤960px):** CSS filter `brightness(1.3) contrast(1.1)` on SVG, viewBox `0 80 1100 380`
- **Mobile (≤768px):** CSS filter `brightness(1.6) contrast(1.15)` on SVG, viewBox crops
- **Phone (≤480px):** viewBox `30 90 1080 360` (tight crop)

---

## PRODUCT PAGE STRUCTURE

### Gate & Fountain Pages (shared pattern)
1. Nav → 2. Hero (SVG animation) → 3. Stats Bar → 4. Problem/Solution → 5. Experience (3-col) → 6. What's Included → 7. How It Works → 8. Features/Dashboard → 9. Beyond Section → 10. Pricing → 11. Contact Form → 12. Footer

### Pool Page (pool.html) — different section order
1. Nav → 2. Hero (SVG) → 3. Stats Bar → 4. Problem/Solution → 5. Experience (4-col 2×2) → 6. Compatibility (3 cards) → 7. Whole-House Integration → 8. What's Included → 9. How It Works → 10. Features/Dashboard → 11. Beyond → 12. Pricing → 13. Contact → 14. Footer

---

## SVG ANIMATIONS

### Estate Animation (index.html) — 20s cycle
Key IDs: `carGroup`, `gateLeft`, `gateRight`, `gateLed`, `pillarLight1/2`, `porchLight/2`, `windowAmbient`, `winGlow1-6`, `lLight1-4`, `oakSpotBeams`, `oakCanopyLit`, `palmSpot1-3`, `poolCaustics`, `poolRipples`, `poolGlowOverlay`, `poolLightsGroup`, `fountainSpray`, `ftnLedGroup`, `ftnRipple1-4`, `splashCenter`, `ftnDroplets`, `waterGlowEl`, `waterGlowInner`, `lakeCaustics`, `lakeRipples`, `estateToast`, `toastTitle`, `toastSub`

### Gate Animation (gate.html) — 10s cycle
Key IDs: `truckGroup`, `gateLeft`, `gateRight`, `readerLed`, `rfidRings`, `hudMode`, `hudTag`, `notifToast`

### Fountain Animation (fountains.html) — 14s cycle
Key IDs: `sprayGroup`, `waterGlowEl`, `phoneGroup`, `anemometer`, `notifToast2`, `hudStatus`, `hudWind`

### Pool + Spa Animation (pool.html) — 14s cycle
Key IDs: `poolSVG`, `phoneGroup`, `phoneTemp`, `phoneStatus`, `spaJets`, `spaRipples`, `spaCaustics`, `spaWaterOverlay`, `spaLight1-3`

---

## RESPONSIVE BREAKPOINTS
- **960px:** grids collapse to 2-col, estate SVG gets brightness boost
- **768px:** nav becomes hamburger, grids to 1-col, nav-divider hidden, footer stacks
- **480px:** beyond/compat grids to 1-col, estate SVG tight crop

---

## IMPORTANT NOTES FOR EDITING
1. **Each file is self-contained** — CSS and JS are inline, not shared across files
2. **When creating a new page**, copy `gate.html` as the template (most polished structure)
3. **SVG animations are handcrafted** — raw `requestAnimationFrame` loops with normalized time fractions (0.0-1.0)
4. **Cross-page navigation exists** — nav links on product pages include Home + other products; footer has site-wide links
5. **Forms are non-functional** — `onsubmit="return false;"` — needs Formspree, PHP mail(), or similar
6. **Copyright year:** all pages show © 2026
7. **Favicon:** SVG inline data URI — dark rounded rect with cyan "C"
8. **The logo** is text-based: "Craison" in white + "Digital" in cyan (`var(--cyan)`)
9. **Homepage SVG draw order matters** — pool → garage → house → gate (bottom pillar) → car → gate (top pillar) → oak tree → palm trees → fountain → landscape lights
10. **Fountain in index.html** uses enhanced spray adapted from fountains.html
11. **Deployment:** Push to GitHub → cPanel Git Version Control → Update → Deploy HEAD Commit
12. **index_m.html was deleted** — it was an old draft, removed 2026-03-20

---

## TODO / KNOWN ISSUES
- [ ] Wire up contact forms (Bluehost supports PHP — Formspree or `mail()` script)
- [ ] Add Open Graph meta tags for social sharing (og:title, og:description, og:image)
- [ ] Add robots.txt and sitemap.xml for SEO
- [ ] Consider HTTPS redirect in .htaccess once SSL confirmed active
- [ ] "Beyond" sections on product pages could link directly to other product pages (currently just cards with no hrefs)
