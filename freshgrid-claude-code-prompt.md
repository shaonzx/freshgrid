# Srijon FreshGrid — Build Brief for Claude Code

You are working on a local WordPress + WooCommerce site. Do the heavy lifting end to end: plugins, store configuration, branding, catalog, pages, navigation and homepage, so the site looks and behaves like a real, live grocery store. Work in phases, commit after each phase, and only stop to ask me when you are truly blocked.

---

## 1. Environment (read before doing anything)

- OS: Windows, shell: PowerShell. XAMPP (Apache + MySQL) is running.
- Site root: `C:\xampp\htdocs\freshgrid` → local URL `http://localhost/freshgrid`
- WP-CLI is available as `wp` (run it from the site root). PHP and MySQL CLIs are on PATH.
- Local DB: `freshgrid`, user `root`, empty password, table prefix `wp_`.
- Git repo at the site root. WordPress core, `wp-config.php`, `.htaccess` and `wp-content/uploads/` are git-ignored.
- Active theme: **GrocefyCart** (CozyThemes) — a **block / Full Site Editing theme**.
- WooCommerce is already installed and active.
- Deployment (done manually by me, not you): files are uploaded to cPanel at `https://reasonist.me/demos/freshgrid`, and the DB is exported with `wp search-replace "http://localhost/freshgrid" "https://reasonist.me/demos/freshgrid" --export=...`. It will later move to the client's own domain. So everything must be URL- and path-agnostic.

## 2. Hard rules

1. **Never edit** WordPress core, the GrocefyCart theme files, or any third-party plugin files. Theme updates must not wipe our work. I do not want a child theme.
2. All custom code (PHP hooks, CSS, block patterns, brand assets, seed scripts) goes into **one custom plugin**: `wp-content/plugins/freshgrid-core/`. Activate it. Keep it small and well organized.
3. Layout/template changes for the block theme are made through the Site Editor's stored data (templates, template parts, navigation, global styles in the DB) via WP-CLI / PHP, or via patterns registered in `freshgrid-core`. Do not create files inside the theme folder.
4. Brand colors and fonts go into **Global Styles** (so I can change them later in Appearance → Editor → Styles), not hard-coded CSS. Use CSS in `freshgrid-core` only for what Global Styles can't do.
5. Never hard-code URLs or the `/freshgrid/` path. Use `home_url()`, `plugins_url()`, attachment IDs, etc. No absolute `http://localhost` in content you create.
6. Make content creation **reproducible and idempotent**: put it in seed scripts under `freshgrid-core/seed/` run with `wp eval-file`, which check for existing items (by slug/SKU) before creating. Re-running must not create duplicates.
7. Prefer free plugins from wordpress.org only. No Pro/paid features (GrocefyCart Pro / Cozy Blocks Pro features are not available). Minimal plugin count.
8. Before each phase, take a DB backup: `wp db export backups/<phase>.sql` (add `backups/` to `.gitignore`).
9. Commit at the end of each phase with a clear message.
10. Create/maintain a `CLAUDE.md` at the site root documenting these rules, the structure of `freshgrid-core`, and how to re-run the seeds, so future sessions follow them.

## 3. Functional requirements

- Clean, simple, modern grocery storefront. Mobile-first.
- Customers can **check out as a guest** OR **create an account** (at checkout or on My Account). Registered users see their own order history in **My Account → Orders**.
- Payment: **Cash on Delivery only** for now. Keep checkout compatible with adding **SSLCommerz** (official "SSLCommerz Payment Gateway" plugin) later — do not install it now. If the block Checkout ever has to be swapped for the classic `[woocommerce_checkout]` shortcode, styling should still hold up.
- Country: Bangladesh. Currency: BDT (৳), price format suited to Bangladesh, no decimals unless needed.
- Phone number required at checkout (primary contact in BD). Keep the checkout short: name, phone, address, district/city, optional email for guests if WooCommerce allows; don't remove fields WooCommerce needs.
- Shipping zones (placeholder rates, clearly easy to edit): **Inside Dhaka** flat rate ৳60, **Outside Dhaka** flat rate ৳120, optional free shipping above ৳3,000.
- Units: kg/g.

## 4. Plugins

- Check what GrocefyCart recommends/requires (admin notices, its getting-started page, any TGMPA-style list) and install the **free** companion plugins it needs to render its patterns/blocks properly. Tell me which ones and why.
- Install **WP Mail SMTP** (activate only, don't configure — I'll configure it on the server).
- Nothing else unless genuinely required; justify any addition.

## 5. Branding (logo + identity)

Brand: **Srijon FreshGrid™** — a Srijon Tech Limited venture.
Tagline: **Wholesale • Retail • Smart Commerce • Delivery Ecosystem**

Existing concept for direction (don't trace it, improve on it): a green leaf mark, "Srijon" in dark charcoal and "FreshGrid" in green, with ™ and the tagline below.

Create:
- Logo as **SVG source** files: horizontal (mark + wordmark), stacked, and icon-only (square). Light and dark-background variants.
- Exported **PNG** versions (WordPress blocks SVG uploads by default): logo at 2x, and a 512×512 site icon. Install whatever tooling you need to export (e.g. an npm image library) — keep it out of the deployed site.
- Store sources in `freshgrid-core/assets/brand/` with a short `README.md` explaining how to edit and re-export.
- Set the logo (Site Logo / `custom_logo`) and site icon via WP-CLI so they appear in the header and browser tab. Set site title and tagline.
- Derive the palette from the theme so the brand and the site feel like one system: read GrocefyCart's theme.json palette and fonts first, then pick a primary green, a dark charcoal, an accent (e.g. warm orange/yellow for sale badges/CTAs), and neutrals. Apply them through Global Styles. Use the theme's fonts unless a change is clearly better (and then use a font the theme supports locally — no external font CDNs).
- Everything must be swappable later: replacing the logo in Appearance → Editor (Site Logo block) or Settings, and colors in Styles, should update the whole site.

## 6. Catalog (demo data)

Product categories (with descriptions and a category image each):
- Fresh Vegetables
- Fresh Fruits
- Fish & Seafood
- Meat & Poultry
- Dairy & Eggs
- Rice, Grains & Pulses
- Cooking Essentials (oil, spices, salt, sugar)
- Snacks & Beverages
- Organic Corner

Products: about **30–40**, realistic for Dhaka (e.g. Potato, Onion (Deshi), Tomato, Green Chili, Lau, Mango (Himsagar), Banana (Sagor), Rui Fish, Ilish, Broiler Chicken, Beef, Eggs (Farm, dozen), Miniket Rice, Masoor Dal, Soybean Oil, Turmeric Powder, etc.). For each:
- Realistic BDT price; some with sale prices; SKU; stock quantity; weight.
- Short description + description.
- Several as **variable products** with weight variations (e.g. 500 g / 1 kg / 5 kg).
- A few marked **featured**; a few with "wholesale/bulk" pack sizes.
- Tags where useful (organic, best-seller, local).

Images:
- Use real photos with licenses that allow commercial use without attribution requirements (e.g. Unsplash or Pexels). Download, resize to max 1200px, convert to WebP (keep a JPG fallback only if needed), import with `wp media import`, and attach as product/category images.
- Record every image's source URL and license in `freshgrid-core/seed/IMAGE_CREDITS.md`.
- If a suitable photo can't be found, use a clean, consistent placeholder in brand colors — never a broken image.

## 7. Pages & navigation

Pages (well-written placeholder content, clearly editable, Bangladesh context):
- Home, Shop, Cart, Checkout, My Account (WooCommerce pages — make sure they're assigned correctly)
- About Us, Contact (address placeholder in Dhaka, phone, email, hours, embedded map optional), Wholesale (bulk-order inquiry info + contact CTA; no extra plugin), FAQ, Delivery Information, Return & Refund Policy, Privacy Policy, Terms & Conditions

Navigation (block theme → Navigation block / `wp_navigation`):
- Header: Home, Shop (submenu with all categories), Wholesale, About, Contact; plus search, account icon and cart icon with count.
- Footer: Shop categories, Customer (My Account, Orders, Delivery Info, Returns), Company (About, Wholesale, Contact, Privacy, Terms), contact info, short brand blurb, copyright "© {year} Srijon FreshGrid — A Srijon Tech Limited venture".
- Make sure the mobile menu works.

## 8. Homepage

Build it like a live store, using free WooCommerce blocks (Product Collection etc.) and the theme's free patterns:
1. Hero with headline, subtext, CTA to Shop, fresh produce imagery.
2. Shop by category (grid with category images).
3. Featured products.
4. On sale / deals of the day.
5. Why FreshGrid (fresh daily, fast delivery in Dhaka, Cash on Delivery, wholesale pricing) — icons.
6. Wholesale/bulk-order CTA banner.
7. Best sellers or new arrivals.
8. Trust strip (delivery areas, COD, support hotline).

Also polish: shop/category archive, single product page, cart, checkout and My Account so they look consistent with the brand.

## 9. Verification (do this, don't skip)

- `curl` every key page and confirm HTTP 200 and no PHP warnings/notices (check `wp-content/debug.log`).
- Confirm with WP-CLI: guest checkout enabled, account creation at checkout and on My Account enabled, COD enabled, currency BDT, shipping zones present, product/category counts, no products without images.
- Search the DB for any `http://localhost` strings inside content you created that should have been relative/dynamic (normal `siteurl`/`home` options are fine — `search-replace` handles those).
- Give me a **manual test checklist** at the end: guest COD order, register + order + see it in My Account → Orders, mobile menu, cart count, logo/site icon, page links.

## 10. How to work

1. First, inspect the setup (theme.json, active plugins, WooCommerce state, existing pages) and show me a **short plan** grouped into phases. Then proceed without waiting unless something is ambiguous or risky.
2. Suggested phases: (a) freshgrid-core plugin + CLAUDE.md + plugins, (b) WooCommerce settings, (c) branding + global styles, (d) categories + products + images, (e) pages + navigation, (f) homepage + template polish, (g) verification.
3. After each phase: a 3–5 line summary of what changed and the commit hash.
4. At the end, tell me exactly what lives in the **DB** vs **files**, so I know that deploying needs both the file upload (including `wp-content/uploads`) and a fresh DB export.
