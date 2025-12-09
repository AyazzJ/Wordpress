Posterframe Simple Helper

This is a tiny plugin that provides a shortcode to insert a hero image used by the Posterframe theme.

Installation
1. Zip the `posterframe-simple` folder or upload it via WP Admin -> Plugins -> Add New -> Upload Plugin.
2. Activate the plugin.

Usage
- Insert into a post, page or widget (text block):
  [posterframe_hero]
- With a specific image URL:
  [posterframe_hero url="https://example.com/path/to/image.jpg" alt="Poster"]
- Add classes:
  [posterframe_hero url="..." class="my-class another-class"]

Notes
- The plugin enqueues a tiny inline style so the image matches the theme's hero aspect ratio and styling.
- This plugin is intentionally minimal: it provides a single shortcode and a dismissible admin notice to help you remember the shortcode syntax.

License: GPLv2 or later
