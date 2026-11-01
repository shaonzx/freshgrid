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
inc/assets.php       enqueues assets/css/frontend.css
assets/css/          polish CSS
seed/lib.php         idempotent helpers, loaded by every seed
```

## Deployment

The owner deploys by hand: file upload (including `wp-content/uploads`) plus a DB export with `wp search-replace`. Don't upload `backups/` or `tools/`.
