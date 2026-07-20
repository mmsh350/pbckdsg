# Kaduna State Planning & Budget Commission Website

This is a modern, responsive, and modular frontend codebase for the Kaduna State Planning & Budget Commission.

## Directory Structure

- `/assets/` - Contains all static files (CSS, JS, images, fonts, videos).
  - `/css/` - Segmented stylesheets (variables, style, responsive, animations).
  - `/js/` - Modular JavaScript files.
  - `/images/` - Organized image assets.
- `/components/` - HTML snippets for reusable components (header, footer, etc.).
- `index.html` - The main landing page.

## Architecture

- **CSS:** Uses standard variables and is split into modular files to prevent bloat.
- **JavaScript:** Component-based JS with DOMContentLoaded listeners to prevent execution errors.
- **HTML:** Semantic HTML5 structure with clear section comments.

## Setup

Just serve the directory via any static HTTP server:
```bash
npx serve .
```
