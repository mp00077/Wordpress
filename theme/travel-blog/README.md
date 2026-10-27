# Travel Blog

Modern block theme for WordPress 7.0 travel publishing.

Author: M. Pospíšil

## Structure

- `style.css` - theme metadata, frontend CSS, hover states, reveal/parallax animation classes.
- `theme.json` - global styles, palette, typography, spacing, template parts.
- `functions.php` - theme supports, pattern category, motion script enqueue.
- `assets/images/hero-travel-blog.png` - generated hero visual for the first viewport and guide section.
- `assets/js/motion.js` - IntersectionObserver reveal animation and lightweight parallax.
- `design/mockups/homepage-mockup.png` - graphic homepage concept for review.
- `screenshot.png` - theme preview image for the WordPress admin.
- `parts/` - reusable header and footer template parts.
- `templates/` - home, index, archive, single, page, 404, and landing templates.
- `patterns/` - hero, homepage menu, and front-page sections for Full Site Editing.
- `styles/` - global style variations for quick font and color switching.

## Font and Color Settings

The theme exposes editable palettes, font families, font sizes, line height, letter spacing, font weight, text transform, and decorations through the WordPress Site Editor.

In WordPress go to Appearance > Editor > Styles. Use Typography to switch heading/body fonts and use Colors to adjust the global palette. The included style variations offer ready-made alternatives:

- Editorial Coast
- Mountain Journal
- Sunset Notes

## Visual Direction

Travel Blog uses a premium editorial language: large serif headlines, readable sans-serif body text, cinematic photography, compact cards, route-map details, and a palette built from off-white paper, pine green, terracotta, ocean blue, and sunlit yellow.

The first screen is intentionally image-led. The generated hero image leaves negative space on the left for the headline and keeps travel objects on the right for atmosphere without reducing legibility.

## Content Model

- Posts: travel stories, guides, reviews, field notes.
- Categories: continents, regions, or primary destination groups.
- Tags: travel style such as train, family, solo, budget, food, hiking, photography.
- Featured image: required for best archive/card presentation.

## Next Steps

- Add sample demo content and featured images for realistic theme screenshots.
- Add Playwright visual checks once a local WordPress instance is available.
- Add a newsletter block pattern after selecting the form plugin.
