# CLAUDE_REFERENCE.md
> **Purpose:** Read this file FIRST every session to understand the codebase before making changes.
> Last updated: 2026-04-20

---

## REPO OVERVIEW
- **Owner:** craisondigital
- **Repo:** cd-site
- **Branch:** main
- **Business:** Craison Digital — Smart Home / Smart Property consulting (Sarasota area)
- **Hosting:** Bluehost (PHP, deployed via GitHub Actions FTP)
- **Domain:** craisondigital.com

---

## FILE INVENTORY (root directory)

| File | Purpose | Deployed |
|---|---|---|
| `index.php` | **Homepage** — Animated notification hero, services grid, timeline, contact form | ✓ |
| `about.php` | **About page** | ✓ |
| `gate.php` | **Gate product page** — Smart Gate Access for Large Properties | ✓ |
| `fountains.php` | **Fountain product page** — Smart Lake Fountain Control | ✓ |
| `pool.php` | **Pool product page** — Smart Pool Automation | ✓ |
| `garage.php` | **Garage product page** — Rollup & Garage Door Control | ✓ |
| `pricing.php` | **Gate pricing page** — 3-tier installed pricing, add-on cards, FAQ, contact | ✓ |
| `fountain-pricing.php` | **Fountain pricing page** | ✓ |
| `garage-pricing.php` | **Garage pricing page** | ✓ |
| `thank-you.php` | **Form confirmation page** — Post-submit redirect, noindex | ✓ |
| `404.html` | **Custom 404 page** — Branded error page | ✓ |
| `nav.php` | **Shared nav include** — PHP include used by all pages | ✓ |
| `footer.php` | **Shared footer include** — PHP include used by all pages | ✓ |
| `.htaccess` | **Apache config** — Custom 404, GZIP, caching, security headers | ✓ |
| `img/` | **Images directory** — Product photos and assets | ✓ |
| `.cpanel.yml` | **Unused** — Legacy cPanel deployment config, superseded by GitHub Actions | No |
| `CLAUDE_REFERENCE.md` | **This file** — Codebase reference for Claude sessions | No |

### Cleanup candidates (not deployed, not needed)
- `*.bak` files (`gate_backup.bak`, `index_backup_svg_animation.bak`)
- `temp-*.txt` files (`temp-changes.txt`, `temp-ignore.txt`, `temp-ignore2.txt`, `temp-placeholder.txt`)

### Images in `img/`
| File | Used On | Description |
|---|---|---|
| `Gate_rfid_animation.png` | pricing.php, gate.php | RFID reader/gate product shot |
| `PhoneControl.png` | pricing.php | Phone controlling gate |
| `keypad.png` | pricing.php | Weatherproof keypad |
| `wifi_bridge.png` | pricing.php | Point-to-point wireless bridge antennas |
| `gate_alarm.png` | pricing.php | Gate alarm/siren |
| `door_cam.png` | pricing.php | Doorbell camera |
| `gate_home.png` | index.php | Gate card on homepage |
| `pool_home.png` | index.php | Pool card on homepage |
| `fountain_night.png` | index.php | Fountain card on homepage |
| `rollup_home.png` | index.php | Garage/rollup card on homepage |
| `camera_home.png` | index.php | Camera integration card |
| `ha_integration.png` | index.php | One-app dashboard card |

---

## DEPLOYMENT (GitHub Actions + FTP)

### How it works:
1. Push to `main` branch on GitHub
2. `.github/workflows/deploy.yml` triggers automatically
3. FTP Deploy Action uploads **all files** to Bluehost via FTP
4. No manual steps required — push = deploy

### Credentials (stored as GitHub repo secrets):
- `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`

### NOT deployed:
- `CLAUDE_REFERENCE.md`, `*.bak`, `temp-*.txt` files are uploaded but irrelevant to the live site

### Bluehost details:
- Home directory: `/home4/craisond/`
- Deploy path: `/home4/craisond/public_html/`

---

## TECH STACK
- **PHP with server-side includes** — nav and footer are shared include files
- **Single-file CSS/JS** — each page still has its own inline styles and scripts (no external CSS/JS libraries)
- **Fonts:** Google Fonts — `Syne` (display/headings, weight 400-800) + `DM Sans` (body, weight 300-600)
- **No build system, no framework, no bundler**
- **SVG illustrations** — complex inline SVGs with JavaScript animations on some pages
- **Forms:** Formspree (`https://formspree.io/f/xaqabrdo`) — redirect to `thank-you.php` on submit

---

## ⚠️ NAVIGATION — PHP INCLUDE PATTERN

The nav lives in `nav.php` and is included on every page. Active state is driven by a `$activePage` variable set **before** the include.

### Usage pattern (top of `<body>` on every page):
```php
<?php $activePage = 'home'; ?>
<?php include 'nav.php'; ?>
```

### Valid `$activePage` values:
- `'home'` — index.php
- `'about'` — about.php
- `'how-it-works'` — how-a-smart-home-should-work.php
- `'gate'` — gate.php
- `'fountains'` — fountains.php
- `'garage'` — garage.php
- `'pool'` — pool.php
- `'pricing'` — pricing.php
- `'fountain-pricing'` — fountain-pricing.php
- `'garage-pricing'` — garage-pricing.php

### How nav.php resolves active state:
```php
$servicePages = ['gate', 'fountains', 'garage', 'pool'];
$pricingPages = ['pricing', 'fountain-pricing', 'garage-pricing'];
$isServiceActive = in_array($activePage, $servicePages);
$isPricingActive = in_array($activePage, $pricingPages);
```

- Service product pages → `Services` label gets `nav-active`, current page link gets `dropdown-active`
- Pricing pages → `Pricing` label gets `nav-active`, current page link gets `dropdown-active`
- `home` → `Home` gets `nav-active`
- `about` → `About` gets `nav-active`

### Nav structure:
```
Home | About | Services ▾ | Pricing ▾ | [Get a Quote]
```

**Services dropdown:** Gate Controls 🚪 · Fountain Controls ⛲ · Garage Controls 🚗 · Pool Controls 🌊

**Pricing dropdown:** Gate Control 🚪 · Fountain Control ⛲ · Garage Control 🚗

### Mobile menu:
Same links, uses `.mobile-menu` div with `.mm-label` / `.mm-sub` structure. Toggle via `#navToggle` / `#mobileMenu`.

---

## FOOTER — PHP INCLUDE PATTERN

Footer lives in `footer.php`. Include at the bottom of `<body>` on every page:

```php
<?php include 'footer.php'; ?>
```

### Footer links:
Home · About · Gate · Pool · Fountains · Garage · Contact

### Footer bottom line:
`© 2026 Craison Digital. All rights reserved.`
`Smart Property Consulting · Estates & Compounds · Sarasota`

---

## DESIGN SYSTEM

### CSS Variables
```css
--black: #060a10; --dark: #0b1018; --card: #0f1724;
--card-hover: #141d2e; --border: rgba(255,255,255,0.06);
--blue: #2f80ed; --blue-bright: #5ba4f5;
--blue-glow: rgba(47,128,237,0.15); --cyan: #00d4ff;
--green: #4ade80; --green-glow: rgba(74,222,128,0.15);
--text: #e4e9f2; --muted: #6b7a8d; --white: #f4f7fb;
--font-display: 'Syne', sans-serif; --font-body: 'DM Sans', sans-serif;
```

### Visual Patterns
- Dark theme only, noise texture overlay (`body::before`), section alternation (`--black` / `--dark`)
- Border: `1px solid rgba(255,255,255,0.06)`, border-radius: cards 14-16px, buttons 8px, badges 100px
- Glow effects on CTAs and SVG elements
- `fadeUp` animation with staggered delays
- `.reveal` class + IntersectionObserver for scroll-triggered animations

### Typography
- **h1:** Syne 800, `clamp(2.2rem, 5.2vw, 4.2rem)`
- **Section titles:** Syne 800, `clamp(1.7rem, 3.2vw, 2.6rem)`
- **Card titles:** Syne 700, ~1rem
- **Body:** DM Sans 300, 0.85-0.9rem
- **Tags/labels:** 0.7rem, weight 600, letter-spacing 0.16em, uppercase

### Responsive Breakpoints
- **960px:** grids to 2-col, plan layout stacks
- **768px:** hamburger menu, grids to 1-col, footer stacks, compact toast styles
- **480px:** add-on grids to 1-col, app icons smaller

---

## ⭐ PRICING PAGE TEMPLATE (pricing.php) — REPLICATE FOR NEW PRODUCTS

### Page Flow
```
Nav (standard)
 → Packages Section (#packages) — gradient h2 + cycling notification toast + 3-col pricing cards + footnote
 → Photo Banner — full-width image, dark overlay, bold text
 → Add-Ons Section (#addons) — 2-col image cards (how-card pattern) + footnote
 → FAQ Section (#faq) — accordion
 → Contact Form (#contact)
 → Footer
```

### Packages Section
- **Section tag** in WHITE (not blue): `style="color:var(--white);"`
- **H2** with blue-to-cyan gradient on key phrase
- **Cycling notification toast** — centered, static-positioned, JS cycles through 3-4 product scenarios every 3.5s with fade transition
- **3-column pricing cards** — emoji icon → name → tagline → LARGE price (2.4rem white) → "Installed · One-time · No monthly fees" → divider → feature list with cyan checkmarks → muted features (gray dashes) → full-width CTA button
- **Featured card:** `class="pkg-card featured"` — cyan border glow, badge, always-visible gradient line
- **Footnote:** centered, mentions existing equipment assumption, free property assessment

### Pricing Philosophy
- Show INSTALLED prices (hardware + labor bundled) — never show component costs
- "Contact" for variable-complexity items
- Bundle vs standalone pricing for simple add-ons
- No "starting at" on cards — footnote handles the disclaimer

### Add-On Cards (how-card pattern)
- 2-column grid, product photo at top (180px), card body with h3 + description
- **NO emoji icons** — photos only in this section
- Optional pricing line at bottom

### Gate Pricing Reference
| Package | Installed Price |
|---|---|
| Phone Control | $295 |
| Hands-Free RFID | $650 |
| Full Access Control | $995 |

| Add-On | With Package | Standalone |
|---|---|---|
| PIN Code Keypad | $95 | $195 |
| Wireless Bridge | $195 | $295 |
| Gate Camera | Contact | Contact |
| Gate Alarm | Contact | Contact |

---

## IMPORTANT NOTES
1. Nav and footer are shared PHP includes — edit `nav.php` or `footer.php` to change them everywhere
2. Always set `$activePage` before including `nav.php`
3. **New pricing pages:** copy `pricing.php` as template, set correct `$activePage`, add to nav.php's `$pricingPages` array
4. **New product pages:** copy `gate.php` as template, set correct `$activePage`, add to nav.php's `$servicePages` array
5. DO NOT add page-specific section links to nav — all pages use simplified nav
6. DO NOT use `position:fixed` overlays for mobile nav
7. Forms use Formspree — action `https://formspree.io/f/xaqabrdo`, redirect to `thank-you.php`
8. Footer must say **Sarasota** (not Miami)
9. Images go in `img/` directory

---

## TODO
- [ ] Open Graph meta tags for social sharing
- [ ] robots.txt and sitemap.xml for SEO
- [ ] HTTPS redirect in .htaccess
- [ ] Clean up `*.bak` and `temp-*.txt` files from repo
