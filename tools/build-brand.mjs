// Generates the FreshGrid logo SVGs and PNGs into freshgrid-core/assets/brand/.
// Text is converted to outlines so the SVGs need no font installed.
// Usage: cd tools && npm install && node build-brand.mjs
import { mkdirSync, readFileSync, writeFileSync } from 'node:fs';
import { dirname, join } from 'node:path';
import { fileURLToPath } from 'node:url';
import * as fontkit from 'fontkit';
import sharp from 'sharp';

const here = dirname(fileURLToPath(import.meta.url));
const wpContent = join(here, '..', 'wp-content');
const out = join(wpContent, 'plugins', 'freshgrid-core', 'assets', 'brand');
const fonts = join(wpContent, 'themes', 'grocefycart', 'assets', 'fonts');

// Keep in sync with the Global Styles palette (seed/02-branding.php).
const COLORS = {
	light: { first: '#1F2A25', second: '#177A52', tagline: '#4C5650', leaf: '#177A52' },
	dark: { first: '#FFFFFF', second: '#6FD3A4', tagline: '#D5DED9', leaf: '#6FD3A4' },
};
const TAGLINE = 'Wholesale • Retail • Smart Commerce • Delivery Ecosystem';

const load = (file, wght) => fontkit.create(readFileSync(join(fonts, file))).getVariation({ wght });
const sora = load('sora/Sora-VariableFont_wght.ttf', 700);
const inter = load('inter/Inter-VariableFont_wght.ttf', 500);

/** Outline a string. Returns the SVG path data and its advance width at this size. */
function outline(font, text, size, x, y, tracking = 0) {
	const scale = size / font.unitsPerEm;
	const run = font.layout(text);
	let pen = 0;
	const parts = run.glyphs.map((glyph, i) => {
		const pos = run.positions[i];
		const d = glyph.path
			.scale(scale, -scale)
			.translate(x + pen + pos.xOffset * scale, y - pos.yOffset * scale)
			.toSVG();
		pen += pos.xAdvance * scale + tracking;
		return d;
	});
	return { d: parts.join(''), width: pen - tracking };
}

/** The mark: a leaf whose veins step off the midrib at right angles, forming a grid. */
function leaf(x, y, size, color, id) {
	const s = size / 100;
	return `<g transform="translate(${x} ${y}) scale(${s})">
	<mask id="${id}" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="100">
		<rect width="100" height="100" fill="#fff"/>
		<g fill="none" stroke="#000" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round">
			<path d="M24 76 68 32"/>
			<path d="M38 62V40M38 62H60"/>
			<path d="M52 48V27M52 48H73"/>
		</g>
	</mask>
	<path fill="${color}" mask="url(#${id})" d="M88 12C52 6 12 24 12 60c0 16 12 28 28 28C76 88 94 48 88 12Z"/>
	<path fill="none" stroke="${color}" stroke-width="6" stroke-linecap="round" d="M20 80 7 93"/>
</g>`;
}

function svg(width, height, body, title) {
	return `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 ${round(width)} ${round(height)}" width="${round(width)}" height="${round(height)}" role="img" aria-label="${title}">
<title>${title}</title>
${body}
</svg>
`;
}
const round = (n) => Math.ceil(n * 100) / 100;

/** "Srijon" + "FreshGrid" + a small ™, starting at x with its baseline at y. */
function wordmark(x, y, size, c) {
	const first = outline(sora, 'Srijon', size, x, y, -size * 0.01);
	const gap = size * 0.24;
	const second = outline(sora, 'FreshGrid', size, x + first.width + gap, y, -size * 0.01);
	const tmX = x + first.width + gap + second.width + size * 0.06;
	const tm = outline(inter, '™', size * 0.42, tmX, y - size * 0.4);
	return {
		width: first.width + gap + second.width + size * 0.06 + tm.width,
		body: `<path fill="${c.first}" d="${first.d}"/>
<path fill="${c.second}" d="${second.d}"/>
<path fill="${c.second}" d="${tm.d}"/>`,
	};
}

function horizontal(mode, withTagline) {
	const c = COLORS[mode];
	const mark = 88;
	const text = wordmark(mark + 16, withTagline ? 52 : 62, 46, c);
	let body = leaf(0, 0, mark, c.leaf, `m-h-${mode}`) + text.body;
	let width = mark + 16 + text.width;
	if (withTagline) {
		// Tracked out to span the wordmark exactly.
		const base = outline(inter, TAGLINE, 15, 0, 0).width;
		const tracking = (text.width - base) / (TAGLINE.length - 1);
		const line = outline(inter, TAGLINE, 15, mark + 16, 78, Math.max(tracking, 0));
		body += `<path fill="${c.tagline}" d="${line.d}"/>`;
		width = Math.max(width, mark + 16 + line.width);
	}
	return svg(width, mark, body, 'Srijon FreshGrid');
}

function stacked(mode) {
	const c = COLORS[mode];
	const probe = wordmark(0, 0, 46, c);
	const tagProbe = outline(inter, TAGLINE, 13, 0, 0);
	const width = Math.max(probe.width, tagProbe.width);
	const mark = 110;
	const text = wordmark((width - probe.width) / 2, mark + 56, 46, c);
	const line = outline(inter, TAGLINE, 13, (width - tagProbe.width) / 2, mark + 88);
	const body = leaf((width - mark) / 2, 0, mark, c.leaf, `m-s-${mode}`) + text.body + `<path fill="${c.tagline}" d="${line.d}"/>`;
	return svg(width, mark + 96, body, 'Srijon FreshGrid');
}

function icon(mode) {
	const bg = mode === 'light' ? '#177A52' : '#1F2A25';
	const fg = mode === 'light' ? '#FFFFFF' : '#6FD3A4';
	return svg(512, 512, `<rect width="512" height="512" rx="104" fill="${bg}"/>` + leaf(86, 86, 340, fg, `m-i-${mode}`), 'Srijon FreshGrid');
}

mkdirSync(join(out, 'png'), { recursive: true });

const files = {};
for (const mode of ['light', 'dark']) {
	files[`logo-horizontal-${mode}`] = horizontal(mode, false);
	files[`logo-horizontal-tagline-${mode}`] = horizontal(mode, true);
	files[`logo-stacked-${mode}`] = stacked(mode);
	files[`icon-${mode}`] = icon(mode);
}

for (const [name, source] of Object.entries(files)) {
	writeFileSync(join(out, `${name}.svg`), source);
	// 2x of the largest display size: logos up to 400px wide, icons exactly 512px.
	const width = name.startsWith('icon') ? 512 : 800;
	await sharp(Buffer.from(source), { density: 300 })
		.resize({ width })
		.png({ compressionLevel: 9 })
		.toFile(join(out, 'png', `${name}.png`));
	console.log(name);
}
