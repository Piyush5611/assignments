# College Website Scaffold

This branch provides a ready-to-extend PHP scaffold for a college website, featuring Bootstrap 5, AOS animations, optional GSAP, simple configuration via `.env`, and SCSS tooling.

## Features
- PHP pages with shared includes (head, header, footer)
- Pages: Home, About, Courses, Admission, Gallery, Contact
- Contact form (actions/contact_submit.php) with CSRF protection
- PHPMailer integration via Composer
- Config helpers: config.php, env loader, db (PDO), csrf utilities
- Assets: SCSS -> CSS with npm `sass`, JS, and placeholder SVG images
- Baseline .htaccess
- Example SQL schema

## Getting started
1. Copy `.env.example` to `.env` and fill values
2. Install PHP dependencies
   ```bash
   composer install
   ```
3. Install JS tooling (for SCSS)
   ```bash
   npm install
   npm run dev # for watch
   # or
   npm run build
   ```
4. Serve the site via your preferred PHP server (Apache, Nginx + PHP-FPM, or built-in)
   ```bash
   php -S localhost:8000
   ```

## Structure
```
assets/
  css/
  images/
  js/
  scss/
actions/
config/
includes/
sql/
vendor/
```

## Mail
- Set `MAIL_TO` in `.env` to receive contact form submissions.
- For robust delivery, configure `SMTP_*` variables; PHPMailer will use SMTP when `SMTP_HOST` is set.

## Notes
- The SCSS compiles to `assets/css/main.css` using the `sass` package.
- PHPMailer is declared in `composer.json`. Run `composer install` to enable it.
- The skeleton is intentionally simple and ready for feature implementation.
