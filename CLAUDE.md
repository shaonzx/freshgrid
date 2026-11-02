# Srijon FreshGrid

WordPress + WooCommerce grocery store. Local: `http://localhost/freshgrid`. Theme: GrocefyCart (block theme).
Deployed manually to cPanel, later to the client's domain, so everything must stay URL- and path-agnostic.

## Rules

1. Never edit WordPress core, the GrocefyCart theme or any third-party plugin. No child theme.
2. All custom code (PHP hooks, CSS, patterns, brand assets, seeds) goes in `wp-content/plugins/freshgrid-core/`.
3. Block theme layout changes live in the DB (templates, template parts, navigation, global styles), written by seeds, or in patterns registered by `freshgrid-core`. Never create files in the theme folder.
4. Brand colors and fonts go in Global Styles. CSS in `freshgrid-core` only for what Global Styles can't do, and it uses `var(--wp--preset--*)`, never hex values.
5. Never hard-code URLs or the `/freshgrid/` path. Use `home_url()`, `plugins_url()`, attachment IDs. No `http://localhost` in created content.
6. Content is reproducible: seeds in `freshgrid-core/seed/` look up by slug/SKU and never create duplicates.
7. Free wordpress.org plugins only, and as few as possible. No Pro features.
8. Before each phase of work: `wp db export backups/<phase>.sql`. `backups/` is git-ignored.
9. Commit at the end of each phase.

## Running WP-CLI here

PHP's `gd` extension is off in `C:\xampp\php\php.ini`, so plain `wp` can't make image thumbnails. Anything that imports images must run as:

```
php -d extension=gd C:/wp-cli/wp-cli.phar <command>
```

`wp eval '...'` from PowerShell loses double quotes through `wp.bat`. Use `wp eval-file` instead.

To regenerate `.htaccess`, WP-CLI needs a config declaring `apache_modules: [mod_rewrite]` via `WP_CLI_CONFIG_PATH`.

## freshgrid-core layout

```
freshgrid-core.php   bootstrap
inc/store.php        BD locale, free-shipping preference, classic checkout fallback
inc/links.php        [fg_link], [fg_year], freshgrid/link block binding: URLs resolved at render time
inc/patterns.php     registers homepage patterns, shared pattern helpers
inc/assets.php       enqueues assets/css/frontend.css
patterns/            homepage sections (PHP, run at render time)
assets/css/          polish CSS, presets only
assets/brand/        logo SVGs and PNGs, see its README
seed/lib.php         idempotent helpers, loaded by the seeds
seed/0*-*.php        the seeds, in run order
seed/verify.php      read-only health check
seed/data/           catalog, page copy, image manifest
seed/markup/         header, footer and front page block markup
seed/images/         processed product photos and placeholders
seed/IMAGE_CREDITS.md
```

`tools/` at the site root holds Node build scripts for logos and images (`npm install` first). It is not deployed.

## Re-running the seeds

From the site root, in order, each with `php -d extension=gd C:/wp-cli/wp-cli.phar eval-file wp-content/plugins/freshgrid-core/seed/<file>`:

`01-store-settings.php`, `02-branding.php`, `03-catalog.php`, `04-pages.php`, `05-navigation.php`, `06-site-editor.php`, then `verify.php`.

They never duplicate, but they do **overwrite**: re-running resets those settings, products, pages, menus, templates and Global Styles to the seed values, discarding edits made in wp-admin. On a site with real edits, run only the seed you need, after a backup.

## Things that bite

- Menus store IDs plus block bindings (`core/post-data`, `core/term-data`, `freshgrid/link`), never URLs. Keep it that way.
- `06-site-editor.php` builds the shop template from the theme's `archive-product.html` and stops with an error if a theme update changes the markup it edits.
- Importing images needs GD (see above). The local Apache PHP has GD off too, so uploads through wp-admin locally get no thumbnails.
- `wp_insert_post()` under WP-CLI has no user: `seed/lib.php` sets an admin and removes KSES, otherwise terms are silently dropped and block markup is altered.
- When choosing meat photos check the file title, not just the look: halal products must not show pork.
- Run WP-CLI from PowerShell, not Git Bash, for any argument starting with `/`: Git Bash rewrites `/%postname%/` to `/C:/Program%20Files/Git/%postname%/`. Pages and products don't use that setting, so normal testing won't show it.
- `wp search-replace` without `--export` changes the local DB: the local site then 404s with no styles or images. To undo, swap the two URLs and run it again.

## Deployment

The owner deploys by hand: file upload (including `wp-content/uploads`) plus a DB export with `wp search-replace`. Don't upload `backups/` or `tools/`. `.htaccess` is git-ignored and has a path-specific `RewriteBase`: after deploying, re-save Settings > Permalinks on the server.

Export with `wp search-replace <local-url> <server-url> --all-tables-with-prefix --skip-columns=guid --export=<file>`. Without `--all-tables-with-prefix` WooCommerce tables can be left out. The file has no SQL mode line, so a strict server rejects its zero dates: prepend `SET NAMES utf8mb4; SET SESSION sql_mode='NO_AUTO_VALUE_ON_ZERO'; SET FOREIGN_KEY_CHECKS=0;`. Importing replaces the server's data, so never overwrite a store that has real orders.
