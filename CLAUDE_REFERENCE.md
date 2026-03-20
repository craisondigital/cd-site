# CLAUDE_REFERENCE.md
> **Purpose:** Read this file FIRST every session to understand the codebase before making changes.
> Last updated: 2026-03-19

---

## REPO OVERVIEW
- **Owner:** craisondigital
- **Repo:** cd-site
- **Branch:** main
- **Business:** Craison Digital — Smart Home / Smart Property consulting (Miami area)
- **Hosting:** Static HTML files (likely GitHub Pages or similar)

---

## FILE INVENTORY (3 files, all in root)

| File | Purpose | Size |
|---|---|---|
| `gate.html` | **Primary gate product page** — Smart Gate Access for Large Properties | ~73KB |
| `fountains.html` | **Lake fountain control product page** — Smart Lake Fountain Control | ~71KB |
| `pool.html` | **Pool automation product page** — Smart Pool Automation (any brand, or no automation at all) | ~77KB |

> **Note:** `index.html` was removed on 2026-03-18. No homepage/landing page currently exists.

---

## TECH STACK
- **Pure static HTML** — no build system, no framework, no bundler
- **Single-file architecture** — each page has HTML + CSS + JS all inline in one `.html` file
- **Fonts:** Google Fonts — `Syne` (display/headings, weight 400-800) + `DM Sans` (body, weight 300-600)
- **No external CSS or JS libraries** — everything is custom
- **SVG illustrations** — complex inline SVGs with JavaScript animations (gate scene, fountain scene, pool+spa scene)
- **No backend / no form handling** — forms use `onsubmit="return false;"` (placeholder)

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

## PAGE STRUCTURES

### Gate & Fountain Pages (shared pattern)
1. Nav → 2. Hero (SVG animation) → 3. Stats Bar → 4. Problem/Solution → 5. Experience (3-col) → 6. What's Included → 7. How It Works → 8. Features/Dashboard → 9. Beyond Section → 10. Pricing → 11. Contact Form → 12. Footer

### Pool Page (pool.html) — different section order
1. **Nav** — fixed top, blur backdrop, logo left, links right, CTA button, mobile hamburger
2. **Hero** — headline "Your pool, finally simple." + centered pool/spa SVG animation + phone mockup
3. **Stats Bar** — 1 APP / 4 WAYS / 24/7 / 100%
4. **Problem/Solution** — brand-agnostic: "Your pool works. Using it shouldn't be this hard."
5. **Experience** — **4-column (2×2) grid**: Phone, Voice, Automation, Physical Buttons
6. **Compatibility** — 3 cards: Existing Automation / No Automation / Mixed Equipment (brand-agnostic)
7. **Whole-House Integration** — 6-card grid showing pool+home automations (porch lights, speaker announcements, Pool Night scene, camera auto-shutoff spa, safety alerts, kid detection)
8. **What's Included** — 6-item package grid (Equipment Integration, Custom App Dashboard, Voice Setup, Automations Built for You, Temp & Chemistry, Smart Home Integration)
9. **How It Works** — 4 steps: assess → learn how you use it → build system → enjoy
10. **Features/Dashboard** — "Built for you. Not a template." + dashboard mockup
11. **Beyond the Pool** — cross-sell grid (gate, cameras, lighting, HVAC, fountains, irrigation)
12. **Pricing** — contact for pricing card + single add-on: Pool Camera & Smart Sensing
13. **Contact Form** — dropdown: "What best describes your setup?" (has automation / no automation / pool+spa / mixed / not sure)
14. **Footer**

---

## SVG ANIMATIONS

### Gate Animation (gate.html)
- **10-second cycle** looping via `requestAnimationFrame`
- Truck approaches → RFID reader detects → LED changes red→amber→green → gate opens (scale transform on hinge points) → truck passes through → notification toast appears → gate closes → reset
- Key element IDs: `truckGroup`, `gateLeft`, `gateRight`, `readerLed`, `rfidRings`, `hudMode`, `hudTag`, `notifToast`
- Gate hinge points: left=375, right=725 (transform-origin for scale)

### Fountain Animation (fountains.html)
- **14-second cycle** looping via `requestAnimationFrame`
- Phone slides in → tap animation → fountain turns on (spray opacity fades in) → wind picks up (anemometer spins faster, HUD wind speed increases) → fountain auto-shutoffs → amber toast appears → cycle resets
- Key element IDs: `sprayGroup`, `waterGlowEl`, `phoneGroup`, `anemometer`, `notifToast2`, `hudStatus`, `hudWind`
- LED lights around fountain base shimmer when running

### Pool + Spa Animation (pool.html)
- **14-second cycle** looping via `requestAnimationFrame`
- **Scene:** Centered pool (large rectangular) + circular spa/hot tub connected on the right, luxury paver deck (SVG pattern with staggered stone pavers and grout lines), stone coping borders around both pool and spa
- **Pool lights:** Bright green (#4ade80) with `glowStrong` double-blur filter, 3 lights along pool bottom with large glow halos. Green-tinted water (overlay + caustics + ripple lines all green)
- **Spa lights:** Start green (matching pool) → transition to red during heating → back to green when ready. Water color overlay matches light color throughout
- **Phone:** Large, centered vertically and horizontally over the scene. Shows only temperature (96°→102°F) and "START SPA" button. Button changes state: purple "START SPA" → red "HEATING..." → green "SPA ON". Phone stays on screen entire cycle, fades in/out at start/end only
- **Animation flow:** Phone fades in → tap indicator pulses on SPA button → jets turn on (prominent bubble clusters with foam/turbulence, 3 nozzle positions + center) → spa lights/water go red → temp rises 96→102 → lights/water transition red→green → in-phone notification slides down from top ("Spa Heated · 102°F") → phone fades out → jets wind down → reset
- **Key element IDs:** `poolSVG`, `phoneGroup`, `phoneTemp`, `phoneTempLabel`, `phoneStatus`, `phoneNotif`, `spaBtnBg`, `spaBtnText`, `tapIndicator`, `spaJets`, `spaRipples`, `spaCaustics`, `spaWaterOverlay`, `spaCaustic1`, `spaCaustic2`, `spaLight1-3`, `spaLightGlow1-3`, `caustics`, `ripples`, `poolLights`, `poolWaterOverlay`
- **No HUD panels, no equipment pad** — clean scene with just pool, spa, deck, and phone

---

## NOTIFICATION TOAST COMPONENT
- Default (green) — for authorized/success events
- Amber variant (class `.amber`) — for weather alerts or automation events
- Structure: dot + icon + body (title + sub) + badge
- Controlled by adding/removing `.visible` class in JS animation loop
- **Pool page uses in-SVG notification** inside the phone mockup instead of HTML overlay

---

## POOL PAGE COPY NOTES
- **Brand-agnostic:** Not focused on Pentair/Hayward/Jandy — emphasizes "any system or no system at all"
- **Custom-built messaging:** "We build around how you actually use your pool" / "Built for you. Not a template."
- **4 control methods:** Phone, Voice, Smart Automation, Physical Buttons
- **Compatibility section:** 3 approaches — Existing Automation (any brand), No Automation (just pump & switches), Mixed Equipment
- **Whole-House Integration section:** Shows pool talking to lights, speakers, cameras, locks (porch lights turn red while spa heats, speaker announcements, camera auto-shutoff spa, kid detection alerts)
- **Single add-on:** Pool Camera & Smart Sensing (camera as automation sensor, not just recording)

---

## RESPONSIVE BREAKPOINTS
- **960px:** grids collapse to 2-col
- **768px:** nav becomes hamburger, grids to 1-col, stats wrap, form rows stack
- **480px:** beyond/compat grids to 1-col, stats to 1-col

---

## NAMING CONVENTIONS
- CSS classes use kebab-case: `.section-inner`, `.btn-primary`, `.exp-card`
- Section IDs match nav anchors: `#package`, `#how`, `#pricing`, `#contact`, `#experience`, `#features`, `#beyond`
- Pool page adds: `#compat` (compatibility), `#integration` (whole-house integration)
- Package grid items: `.package-item` with `.pkg-icon`, `.pkg-title`, `.pkg-desc`
- Step items: `.step` with `.step-num`, `.step-title`, `.step-desc`
- Pool page experience grid uses 2×2 layout (`repeat(2, 1fr)`) for 4 cards

---

## IMPORTANT NOTES FOR EDITING
1. **Each file is self-contained** — CSS and JS are inline, not shared across files
2. **When creating a new page**, copy `gate.html` as the template (it's the most polished version)
3. **SVG animations are handcrafted** — they use raw `requestAnimationFrame` loops with normalized time fractions (0.0-1.0 mapped to cycle phases)
4. **No cross-page navigation exists yet** — each page is standalone; nav links are in-page anchors only
5. **Forms are non-functional** — `onsubmit="return false;"` means no actual form submission is wired up
6. **Copyright year:** all pages show © 2026
7. **Favicon:** SVG inline data URI — dark rounded rect with cyan "C"
8. **The logo** is text-based: "Craison" in white + "Digital" in cyan (`var(--cyan)`)
9. **No homepage currently exists** — `index.html` was removed; site only has product-specific pages
10. **Pool page confirmed** — the pool.html on GitHub is the full, working version as of 2026-03-19.
