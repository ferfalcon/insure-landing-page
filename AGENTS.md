# Repository Guidelines

## Project Structure & Module Organization

This repository is a full WordPress checkout configured for DDEV, with the project work centered on the custom block theme at `wp-content/themes/insure-landing-page/`.

- `wp-content/themes/insure-landing-page/style.css`: theme header, global CSS, responsive layout, and component styles.
- `wp-content/themes/insure-landing-page/functions.php`: theme setup and stylesheet/font enqueues.
- `wp-content/themes/insure-landing-page/theme.json`: block theme settings, palettes, typography, and layout presets.
- `wp-content/themes/insure-landing-page/templates/`: block theme templates, including `front-page.html`.
- `wp-content/themes/insure-landing-page/patterns/`: PHP block patterns used to render the landing page.
- `wp-content/themes/insure-landing-page/assets/images/`: challenge images, SVG icons, and decorative patterns.
- `starting-files/`: original Frontend Mentor reference files; use for comparison, not runtime changes.

Avoid editing WordPress core files under `wp-admin/` or `wp-includes/` unless the task explicitly requires core work.

## Build, Test, and Development Commands

- `ddev start`: start the local WordPress environment.
- `ddev describe`: view site URLs, database details, and service status.
- `ddev wp theme activate insure-landing-page`: activate the custom theme locally.
- `ddev wp cache flush`: clear WordPress caches after theme or content changes.
- `ddev exec php -l wp-content/themes/insure-landing-page/functions.php`: lint PHP syntax.

If a `ddev` command fails because the container is unreachable, run `ddev start` to boot the environment, then retry your command.

There is no Node, Composer, or asset build pipeline in this repository. CSS and theme files are edited directly.

## Coding Style & Naming Conventions

Use tabs for all PHP indentation. Do not use spaces for indentation. Follow WordPress PHP spacing conventions, including escaped output such as `esc_url()`. Keep PHP functions and handles prefixed with `insure-landing-page` or `insure_` patterns where applicable.

CSS uses custom properties under `:root`, mobile-first media queries, and BEM-like class names such as `.insure-header__inner` and `.insure-button--dark`. Keep new theme classes scoped with the `insure-` prefix.

## Testing Guidelines

No automated test suite is currently configured. Validate changes by running PHP linting and checking the mobile and desktop breakpoints in the browser. Instruct the user to inspect the responsive layout in the browser, as you cannot view the browser directly. Output the exact CSS media queries applied and verify their pixel values against starting-files/style-guide.md. Then ask the user to visually confirm the result. For UI work, verify hover/focus states, navigation behavior, image paths, and accessibility labels.

## Commit & Pull Request Guidelines

Format all commit messages using Conventional Commits, strictly following the pattern: `type: short imperative summary`. Use `feat:`, `fix:`, `docs:`, or `chore:` prefixes as appropriate.

Pull requests should include a short summary, testing notes, linked issue or challenge reference when relevant, and before/after screenshots for visual changes.
