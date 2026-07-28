# Woodland Financial Group — WordPress theme install guide

This is the Woodland landing page packaged as an installable WordPress theme
(`longbridge.zip`). Once installed and activated, your homepage renders the exact
design — no page building required.

---

## What you need first

You need a **WordPress site you control**. Since nothing's set up yet, pick ONE:

- **Self-hosted WordPress (recommended, most flexible)** — buy hosting with 1-click
  WordPress from **Hostinger** or **SiteGround** (~$3–10/mo), plus a domain
  (e.g. `woodlandfinancialgroup.com`). They install WordPress for you.
- **WordPress.com** — works ONLY on the **Business plan or higher** (~$25/mo).
  Cheaper WordPress.com plans block custom theme uploads, so the zip won't install.

> If you just want it live cheaply and don't specifically need WordPress, this same
> design can be hosted as a plain page on Cloudflare Pages/Netlify for free. Ask and
> I'll set that up instead.

---

## Install the theme (2 minutes)

1. Log in to your WordPress admin (`yoursite.com/wp-admin`).
2. Go to **Appearance → Themes → Add New → Upload Theme**.
3. Choose **`longbridge.zip`** and click **Install Now**.
4. Click **Activate**.

Your homepage now shows the Woodland landing page. (The theme uses a
`front-page.php` template, so it takes over the homepage automatically.)

---

## Set it up

- **Site title:** Settings → General → set **Site Title** to `Woodland Financial Group`
  (this becomes the browser tab title).
- **Phone & email:** Appearance → **Customize → "Woodland — Contact Info"** →
  edit the phone number and email. These update the footer instantly — no code.
- **If the homepage doesn't show the design:** Settings → **Reading** → set
  "Your homepage displays" to **A static page**, and pick any page (or leave it on
  "Your latest posts" — the theme handles both).

---

## Make the contact form actually send you leads

Out of the box, the "Request your funding options" form shows a thank-you message
but does **not** email anyone (it's a front-end demo). To capture real leads, the
standard WordPress way is a free form plugin:

1. Plugins → Add New → install **WPForms Lite** (or **Contact Form 7**).
2. Build a form with the same fields (name, business, email, phone, amount, interest).
3. Ask me and I'll swap the demo form in the theme for the plugin's shortcode so the
   styled section stays but submissions get emailed to you.

---

## Editing text, images, and colors

- **Phone/email** — editable in the Customizer (above).
- **Headlines, product descriptions, stats, testimonial** — these live in the theme's
  `front-page.php`. They're currently placeholders. Send me the real copy and I'll
  update them, or a developer can edit that file directly.
- **Colors/fonts** — defined at the top of `style.css` as variables
  (`--emerald`, `--gold`, `--bg`, etc.). Easy to retune.

> Want your sister's boyfriend to edit everything himself without code? That's the
> case where rebuilding in **Elementor** makes sense — this theme is the faithful,
> fixed-design version; Elementor trades some fidelity for click-to-edit freedom.

---

## Placeholders to replace before going live

- Phone `(800) 555-1234` and `hello@woodlandfinancialgroup.com`
- The testimonial (name + quote)
- The stat figures (kept as capabilities, not a fabricated track record)
- The footer legal/disclaimer — have it reviewed for your state/licensing
