# CLAUDE_REFERENCE.md
> **Purpose:** Read this file FIRST every session to understand the codebase before making changes.
> Last updated: 2026-03-20

---

## REPO OVERVIEW
- **Owner:** craisondigital
- **Repo:** cd-site
- **Branch:** main
- **Business:** Craison Digital — Smart Home / Smart Property consulting (Miami area)
- **Hosting:** Static HTML files (likely GitHub Pages or similar)

---

## FILE INVENTORY (4 files, all in root)

| File | Purpose | Size |
|---|---|---|
| `index.html` | **Homepage** — Animated estate SVG hero with full property automation showcase | ~75KB |
| `gate.html` | **Primary gate product page** — Smart Gate Access for Large Properties | ~73KB |
| `fountains.html` | **Lake fountain control product page** — Smart Lake Fountain Control | ~71KB |
| `pool.html` | **Pool automation product page** — Smart Pool Automation (any brand, or no automation at all) | ~77KB |

---

## TECH STACK
- **Pure static HTML** — no build system, no framework, no bundler
- **Single-file architecture** — each page has HTML + CSS + JS all inline in one `.html` file
- **Fonts:** Google Fonts — `Syne` (display/headings, weight 400-800) + `DM Sans` (body, weight 300-600)
- **No external CSS or JS libraries** — everything is custom
- **SVG illustrations** — complex inline SVGs with JavaScript animations (gate scene, fountain scene, pool+spa scene, estate overview scene)
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

## HOMEPAGE (index.html)

### Section Structure
1. **Hero** — Animated estate SVG + bold headline "Your property has a dozen systems. You should only need one app."
2. **The Problem** — App graveyard (12 disconnected apps visual)
3. **What We Do** — Narrative flow: walk property → learn how you live → connect everything → stay and improve
4. **What We Automate** — Card grid (Gate/Pool/Fountains = Live, Lighting/Cameras/HVAC = Coming Soon)
5. **Why We're Different** — 3 statements: automate what others won't / build relationships not invoices / custom for every customer
6. **Day in the Life** — Timeline 6AM-11PM showing automated estate scenarios
7. **Monthly Plans** — Ongoing partnership section
8. **Contact** — Form with dropdown

### Animated Estate SVG (viewBox 0 0 1100 440)

#### Layout (left to right):
- **Gate pillars** (x≈98-122): Two pillars on opposite sides of the driveway. Bottom pillar at y=336 (near side, drawn BEHIND car), top pillar at y=238 (far side, drawn IN FRONT of car). Gate bars span vertically across driveway between pillars.
- **Driveway**: Curved path from x=0 to x=480, top edge y=305→255, bottom edge y=340→295. ~35px wide.
- **Pool** (trapezoid, x=100-325, y=155-230): Perspective shape (narrower at top, wider at bottom), LEFT of house. Brick paver deck extends from x=0 to x=365 above the driveway. Dark (#020810) when off, green glow when lit.
- **House** (x=360-640, y=140-280): Main house with 4 windows + front door at x=482-518. Roof peak at y=75.
- **Garage wing** (x=640-740, y=180-280): To the right of the house with 2 windows.
- **Oak tree** (x=640, canopy center y=262): Large spreading oak between house and fountain. Organic irregular canopy (paths, not ellipses) ~185px wide, flat-topped. 3 angled spotlights at base (fixtures at x=608,640,672).
- **Palm trees** (3): Behind fountain/garage at x=750,890,1010. Brown trunks (#5a3c20/#6e4c2a) with ring segments. Green fronds. Each has angled spotlight.
- **Lake/fountain** (centered at x=960,y=330 with transform="translate(-60,-30)" making effective center ~(900,300)): Large elliptical lake (rx=140,ry=70). Enhanced fountain spray from fountains.html: tall center jet, wide fan sprays both sides, splash particles, ripple rings, LED ring, mist haze, water glow.
- **Car** (84×28 body): Centered at origin, translated by JS. Stops at x=52 before gate, drives to x=320 (in front of house).
- **Notification toasts**: SVG overlay at y≈380.
- **Landscape lights**: 4 lights in a row along the bottom (near) edge of the driveway from gate to house.

#### Ground Surfaces:
- **Grass**: Entire ground (y=150-440) covered with grass texture pattern + ground gradient
- **Brick pavers**: Only on the pool patio area (x=0 to x=365, y=150 down to driveway top edge)
- **Driveway**: Separate fill with driveGrad

#### Animation Cycle (20 seconds):
- 0.00-0.15: Dark estate, everything off
- 0.15-0.24: Car approaches from left, headlights visible
- 0.18: Pillar lights come on (car detected approaching)
- 0.24-0.27: Car stops at gate, LED amber→green
- 0.27-0.33: Gate opens (scaleY). ALL lights come on simultaneously:
  - Windows (staggered 0.27-0.37)
  - Porch lights (0.28)
  - Oak tree spotlights (0.28)
  - Landscape lights (0.29-0.38)
  - Palm tree spotlights (0.29-0.36)
  - Pool lights + caustics + glow (0.27-0.35)
  - Fountain spray + LEDs + ripples (0.27-0.35)
  - Lake caustics (0.27-0.35)
- 0.33-0.50: Car drives through gate along driveway to x=320, scaling to 0.8
- 0.48-0.58: Gate closes behind car
- 0.50+: Car parked in front of house
- 0.51-0.61: Toast "Gate: Vehicle Arrived"
- 0.72-0.82: Toast "Pool Night Activated"
- 0.88-0.96: Everything fades to dark
- 0.97-1.00: Reset

#### Gate Animation:
```js
// Gate panels retract vertically toward their respective pillars
var HINGE_BOT=336, HINGE_TOP=260;
function setGate(sx){
  gateLeft.setAttribute('transform','translate(0,'+HINGE_BOT+') scale(1,'+sx+') translate(0,'+(-HINGE_BOT)+')');
  gateRight.setAttribute('transform','translate(0,'+HINGE_TOP+') scale(1,'+sx+') translate(0,'+(-HINGE_TOP)+')');
}
```

#### Driveway Tracking Function:
```js
function driveCenterY(x){
  if(x<=0) return 322;
  if(x<=120) return lerp(322,316,x/120);
  if(x<=320) return lerp(316,290,(x-120)/200);
  if(x<=480) return lerp(290,275,(x-320)/160);
  return 275;
}
```

#### Responsive:
- **Tablet (≤960px):** CSS filter `brightness(1.3) contrast(1.1)` on SVG, viewBox `0 80 1100 380`
- **Mobile (≤768px):** CSS filter `brightness(1.6) contrast(1.15)` on SVG, viewBox `30 90 1080 360`
- **Phone (≤480px):** viewBox `30 90 1080 360` (tight crop, gate+house+pool+lake bigger)
- Dynamic viewBox set via JS `updateViewBox()` on load and resize

#### Key SVG Colors (brightened for mobile visibility):
- House walls: #1e2a3e / #152235
- Roof: #223050 / #1a2640
- Gate posts: #253a55 / #1a2a40
- Driveway: #152535 / #182838, stroke #2a3e55
- Car body: #1e2d42, stroke #3a5068
- Ground: #121e2e / #0c1824
- All strokes: #2a4060 (globally brightened)
- Palm trunks: #5a3c20 / #6e4c2a (brown) with #4a3018 ring segments
- Oak canopy: #081410 / #0c1a14 / #0e1c16 (dark greens, layered paths)
- Pool off: #020810 (nearly black), pool water gradient #040e1a / #030a12

---

## OTHER PAGE STRUCTURES

### Gate & Fountain Pages (shared pattern)
1. Nav → 2. Hero (SVG animation) → 3. Stats Bar → 4. Problem/Solution → 5. Experience (3-col) → 6. What's Included → 7. How It Works → 8. Features/Dashboard → 9. Beyond Section → 10. Pricing → 11. Contact Form → 12. Footer

### Pool Page (pool.html) — different section order
1. **Nav** — fixed top, blur backdrop, logo left, links right, CTA button, mobile hamburger
2. **Hero** — headline "Your pool, finally simple." + centered pool/spa SVG animation + phone mockup
3. **Stats Bar** — 1 APP / 4 WAYS / 24/7 / 100%
4. **Problem/Solution** — brand-agnostic: "Your pool works. Using it shouldn't be this hard."
5. **Experience** — **4-column (2×2) grid**: Phone, Voice, Automation, Physical Buttons
6. **Compatibility** — 3 cards: Existing Automation / No Automation / Mixed Equipment (brand-agnostic)
7. **Whole-House Integration** — 6-card grid showing pool+home automations
8. **What's Included** — 6-item package grid
9. **How It Works** — 4 steps
10. **Features/Dashboard** — "Built for you. Not a template." + dashboard mockup
11. **Beyond the Pool** — cross-sell grid
12. **Pricing** — contact for pricing card + single add-on
13. **Contact Form** — dropdown for setup type
14. **Footer**

---

## SVG ANIMATIONS

### Estate Animation (index.html)
- **20-second cycle** looping via `requestAnimationFrame`
- Car approaches → pillar lights detect → gate opens → all lights come on (windows, porch, landscape, oak spotlights, palm spotlights, pool lights, fountain spray + LEDs) → car drives through to house → notification toasts → everything fades to dark → reset
- **Enhanced fountain** adapted from fountains.html: tall center jet, wide fan sprays, splash particles, 4 animated ripple rings, LED ring, mist haze, water glow, organic sway
- Key element IDs: `carGroup`, `gateLeft`, `gateRight`, `gateLed`, `pillarLight1/2`, `porchLight/2`, `windowAmbient`, `winGlow1-6`, `lLight1-4`, `oakSpotBeams`, `oakCanopyLit`, `palmSpot1-3`, `poolCaustics`, `poolRipples`, `poolGlowOverlay`, `poolLightsGroup`, `fountainSpray`, `ftnLedGroup`, `ftnRipple1-4`, `splashCenter`, `ftnDroplets`, `waterGlowEl`, `waterGlowInner`, `lakeCaustics`, `lakeRipples`, `estateToast`, `toastTitle`, `toastSub`

### Gate Animation (gate.html)
- **10-second cycle** looping via `requestAnimationFrame`
- Truck approaches → RFID reader detects → LED changes red→amber→green → gate opens (scale transform on hinge points) → truck passes through → notification toast appears → gate closes → reset
- Key element IDs: `truckGroup`, `gateLeft`, `gateRight`, `readerLed`, `rfidRings`, `hudMode`, `hudTag`, `notifToast`
- Gate hinge points: left=375, right=725 (transform-origin for scale)

### Fountain Animation (fountains.html)
- **14-second cycle** looping via `requestAnimationFrame`
- Phone slides in → tap animation → fountain turns on → wind picks up → fountain auto-shutoffs → amber toast appears → cycle resets
- Key element IDs: `sprayGroup`, `waterGlowEl`, `phoneGroup`, `anemometer`, `notifToast2`, `hudStatus`, `hudWind`

### Pool + Spa Animation (pool.html)
- **14-second cycle** looping via `requestAnimationFrame`
- Phone fades in → tap indicator pulses on SPA button → jets turn on → spa lights/water go red → temp rises 96→102 → lights/water transition red→green → in-phone notification → phone fades out → jets wind down → reset
- Key element IDs: `poolSVG`, `phoneGroup`, `phoneTemp`, `phoneStatus`, `spaJets`, `spaRipples`, `spaCaustics`, `spaWaterOverlay`, `spaLight1-3`

---

## NOTIFICATION TOAST COMPONENT
- Default (green) — for authorized/success events
- Amber variant (class `.amber`) — for weather alerts or automation events
- Structure: dot + icon + body (title + sub) + badge
- Controlled by adding/removing `.visible` class in JS animation loop
- **Pool page uses in-SVG notification** inside the phone mockup instead of HTML overlay

---

## RESPONSIVE BREAKPOINTS
- **960px:** grids collapse to 2-col, estate SVG gets brightness(1.3) contrast(1.1)
- **768px:** nav becomes hamburger, grids to 1-col, estate SVG gets brightness(1.6) contrast(1.15), viewBox crops to zoom in
- **480px:** beyond/compat grids to 1-col, estate SVG viewBox tight crop

---

## NAMING CONVENTIONS
- CSS classes use kebab-case: `.section-inner`, `.btn-primary`, `.exp-card`
- Section IDs match nav anchors: `#package`, `#how`, `#pricing`, `#contact`, `#experience`, `#features`, `#beyond`
- Pool page adds: `#compat` (compatibility), `#integration` (whole-house integration)

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
9. **index.html homepage exists** — built 2026-03-20 with animated estate SVG hero
10. **Pool page confirmed** — the pool.html on GitHub is the full, working version as of 2026-03-19
11. **Homepage SVG element draw order matters** — pool → garage → house → gate (bottom pillar) → car → gate (top pillar) → oak tree → palm trees → fountain → landscape lights. This layering creates correct depth/perspective.
12. **Fountain in index.html** uses enhanced spray adapted from fountains.html — center jet, fan sprays, splash particles, ripple rings, LEDs, mist, water glow
13. **Homepage not yet pushed to GitHub** — exists at /mnt/user-data/outputs/index.html, needs to be committed
