# Srijon FreshGrid brand assets

| File | Use |
|---|---|
| `logo-horizontal-{light,dark}.svg` | Mark + wordmark. The site header uses the light PNG. |
| `logo-horizontal-tagline-{light,dark}.svg` | Same, with the tagline. For print and wide placements. |
| `logo-stacked-{light,dark}.svg` | Centered mark, wordmark and tagline. |
| `icon-{light,dark}.svg` | Square icon. The light one is the site icon. |
| `png/` | Exports of all of the above: logos 800px wide, icons 512×512. |

`light` means "for light backgrounds" and `dark` means "for dark backgrounds".

Text in the SVGs is outlined from Sora Bold and Inter Medium, the fonts bundled with GrocefyCart (SIL OFL), so no font needs to be installed.

## Editing and re-exporting

The SVGs are generated. To change colors, wording or proportions, edit `tools/build-brand.mjs` at the site root, then:

```
cd tools
npm install
node build-brand.mjs
```

This rewrites the SVGs and PNGs here. `tools/` is local only and is not deployed. For one-off changes you can also open an SVG in Figma or Inkscape, but the next build will overwrite it.

If you change the brand colors, also update the palette in `seed/02-branding.php` or in Appearance → Editor → Styles.

## Replacing the logo on the site

Upload a new PNG in Appearance → Editor → Patterns → Header → Site Logo block. The header and footer both use that one image. The site icon is in Settings → General.

Re-running the branding seed does not replace an already imported logo: it finds it by its seed key.
