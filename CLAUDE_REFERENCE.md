# CLAUDE_REFERENCE.md
> **Purpose:** Read this file FIRST every session to understand the codebase before making changes.
> Last updated: 2026-03-18

---

## REPO OVERVIEW
- **Owner:** craisondigital
- **Repo:** cd-site
- **Branch:** main
- **Business:** Craison Digital — Smart Home / Smart Property consulting (Miami area)
- **Hosting:** Static HTML files (likely GitHub Pages or similar)

---

## FILE INVENTORY (3 files, all in root)

| File | Purpose | Size | Key Feature |
|---|---|---|---|
| `index.html` | Original landing page — Smart Gate Access | ~60KB | Older version, simpler layout |
| `gate.html` | **Primary gate product page** — redesigned & expanded | ~73KB | Full gate product page with problem/solution, experience, beyond-gate, add-ons |
| `fountains.html` | **Lake fountain control product page** | ~71KB | Fountain product page with weather station integration |

---

## TECH STACK
- **Pure static HTML** — no build system, no framework, no bundler
- **Single-file architecture** — each page has HTML + CSS + JS all inline in one `.html` file
- **Fonts:** Google Fonts — `Syne` (display/headings, weight 400-800) + `DM Sans` (body, weight 300-600)
- **No external CSS or JS libraries** — everything is custom
- **SVG illustrations** — complex inline SVGs with JavaScript animations (gate scene, fountain scene)
- **No backend / no form handling** — forms use `onsubmit="return false;"` (placeholder)

---

## DESIGN SYSTEM (consistent across gate.html & fountains.html)

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

## PAGE STRUCTURE (gate.html & fountains.html share this pattern)

1. **Nav** — fixed top, blur backdrop, logo left, links right, CTA button, mobile hamburger toggle
2. **Hero** — full viewport, layered backgrounds (gradient + grid + glow), headline ABOVE illustration, SVG animation, content overlay below with eyebrow badge + subtitle + CTA buttons
3. **Stats Bar** — 4 stats in a row, border top/bottom
4. **Problem/Solution** — 2-column grid, pain points vs benefits
5. **Experience** — 3-column card grid (features with icons)
6. **What's Included (Package)** — 6-item grid with 1.5px gap borders (looks like a unified grid block)
7. **How It Works** — 4-step vertical timeline with numbered circles + blue connecting line
8. **Features/Dashboard** — 2-column layout, feature checklist left + mockup dashboard right
9. **Beyond Section** — 3-column grid showing other services (cross-sell)
10. **Pricing** — centered card with "Contact for Pricing" + includes list + optional add-on cards below
11. **Contact Form** — centered form with name, email, phone, select dropdown, textarea, submit button
12. **Footer** — simple 3-column: logo, copyright, tagline

---

## SVG ANIMATIONS

### Gate Animation (index.html & gate.html)
- **10-second cycle** looping via `requestAnimationFrame`
- Truck approaches → RFID reader detects → LED changes red→amber→green → gate opens (scale transform on hinge points) → truck passes through → notification toast appears → gate closes → reset
- Key element IDs: `truckGroup`, `gateLeft`, `gateRight`, `readerLed`, `rfidRings`, `hudMode`, `hudTag`, `notifToast`
- Gate hinge points: left=375, right=725 (transform-origin for scale)

### Fountain Animation (fountains.html)
- **14-second cycle** looping via `requestAnimationFrame`
- Phone slides in → tap animation → fountain turns on (spray opacity fades in) → wind picks up (anemometer spins faster, HUD wind speed increases) → fountain auto-shutoffs → amber toast appears → cycle resets
- Key element IDs: `sprayGroup`, `waterGlowEl`, `phoneGroup`, `anemometer`, `notifToast2`, `hudStatus`, `hudWind`
- LED lights around fountain base shimmer when running

---

## NOTIFICATION TOAST COMPONENT
- Default (green) — for authorized/success events
- Amber variant (class `.amber`) — for weather alerts
- Structure: dot + icon + body (title + sub) + badge
- Controlled by adding/removing `.visible` class in JS animation loop

---

## RESPONSIVE BREAKPOINTS
- **960px:** grids collapse to 2-col
- **768px:** nav becomes hamburger, grids to 1-col, stats wrap, form rows stack
- **480px:** beyond/compat grids to 1-col, stats to 1-col

---

## NAMING CONVENTIONS
- CSS classes use kebab-case: `.section-inner`, `.btn-primary`, `.exp-card`
- Section IDs match nav anchors: `#package`, `#how`, `#pricing`, `#contact`, `#experience`, `#features`, `#beyond`
- Package grid items: `.package-item` with `.pkg-icon`, `.pkg-title`, `.pkg-desc`
- Step items: `.step` with `.step-num`, `.step-title`, `.step-desc`

---

## IMPORTANT NOTES FOR EDITING
1. **Each file is self-contained** — CSS and JS are inline, not shared across files
2. **When creating a new page**, copy `gate.html` as the template (it's the most polished version)
3. **index.html is the older design** — `gate.html` has the improved layout (headline above SVG, better mobile, problem/solution section, beyond section, add-ons)
4. **SVG animations are handcrafted** — they use raw `requestAnimationFrame` loops with normalized time fractions (0.0-1.0 mapped to cycle phases)
5. **No cross-page navigation exists yet** — each page is standalone; nav links are in-page anchors only
6. **Forms are non-functional** — `onsubmit="return false;"` means no actual form submission is wired up
7. **Copyright year:** `gate.html` and `fountains.html` show © 2026; `index.html` shows © 2025
8. **Favicon:** SVG inline data URI — dark rounded rect with cyan "C"
9. **The logo** is text-based: "Craison" in white + "Digital" in cyan (`var(--cyan)`)
