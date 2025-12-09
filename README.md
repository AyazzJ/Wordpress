# Posterframe WordPress Theme

Custom theme tailored for selling movie posters with a bold grid, hero spotlight, and e-commerce-friendly layout.

## Quick start
1. Zip the `posterframe` folder or upload it into `wp-content/themes/`.
2. Activate the theme in **Appearance → Themes**.
3. Set a static front page (Appearance → Customize → Homepage Settings) to use `front-page.php` or leave the blog as the homepage.
4. Create the required pages and assign templates:
	- Home: set your chosen page as “Homepage” (uses `front-page.php`).
	- Shop: set WooCommerce “Shop” page and it will use `archive-product.php` automatically.
	- Cart: create a page named Cart/Panier and assign template “Cart / Panier”.
	- About: create a page and assign template “About / À propos”.
	- Contact: create a page and assign template “Contact”.
5. Create or assign menus to `Primary Menu` and `Footer Menu` in **Appearance → Menus**.
6. Add featured images to posts to populate the hero and grids. Use the recommended sizes below.
7. Optional: If using WooCommerce, set the Shop page so the “Shop Posters” button links correctly.

## Recommended image sizes
- Portrait posters: use the `posterframe-portrait` size (960×1344, hard crop).
- Landscape variants: use `posterframe-landscape` (1344×960, hard crop).

## Notable files
- `style.css` – theme header + base variables.
- `assets/css/theme.css` – layout, grid, hero, footer, and button styles.
- `assets/js/theme.js` – mobile navigation toggle.
- Template files: `front-page.php`, `single.php`, `archive.php`, `search.php`, `404.php`, and `template-parts/content/*` for card/single/no-content views.

## Customization tips
- Swap the accent colors in `style.css` or `theme.json` palette.
- Replace the Google Font import in `assets/css/theme.css` with your preferred font or a local font file.
- Add a real `screenshot.png` (1200×900) to the theme root for WordPress previews.

## WooCommerce note
The Shop CTA falls back to the home page when WooCommerce is not active. When WooCommerce is installed, set **WooCommerce → Settings → Products → Shop page** so the CTA points to your catalog.
Cart template uses the WooCommerce shortcode and will show a friendly notice if the plugin is inactive.
