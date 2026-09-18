# E-commerce Car — Car Store

A car storefront built with **Laravel 13**. Visitors browse a catalogue of cars and filter the
listing by brand.

متجر سيارات مبني بـ Laravel — يعرض كتالوج السيارات ويتيح الفلترة حسب الماركة.

> **Status:** early development. The catalogue currently runs on static data held in the
> controller; database persistence, cart, and checkout are on the roadmap below.

---

## Features

**Available now**

- Landing page with a branded hero section and brand navigation
- Car catalogue listing name, brand, price, tax, availability, and image
- Filter the catalogue by brand — Toyota, Kia, Hyundai, Mazda
- Shared Blade layout with a glassmorphism navigation bar
- Responsive layout built on Bootstrap 5

**Not implemented yet** — see [Roadmap](#roadmap)

- Database-backed car records
- Shopping cart and checkout
- User registration and login
- Admin panel for managing inventory

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 13 |
| Language | PHP 8.3 |
| Templating | Blade |
| Styling | Bootstrap 5.3.3 + Bootstrap Icons (CDN) |
| Build tool | Vite |
| REPL | Laravel Tinker |
| Testing | PHPUnit |

---

## Routes

| Method | URI | Action | Description |
|---|---|---|---|
| GET | `/` | closure | Landing page |
| GET | `/cars` | `CarController@ListCar` | Full car catalogue |
| GET | `/brand/{brand}` | `CarController@CarsByBrand` | Catalogue filtered by brand |

Example: `/brand/toyota` returns only Toyota models. Brand matching is case-insensitive.

---

## Project Structure

```
E-commerce-car/
│
├── app/
│   ├── Http/Controllers/
│   │   └── CarController.php        # Catalogue listing and brand filtering
│   └── Models/
│       └── User.php
│
├── resources/views/
│   ├── land_page.blade.php          # Landing page
│   ├── cars.blade.php               # Catalogue grid
│   └── layouts/
│       └── app.blade.php            # Shared layout and navigation
│
├── routes/
│   └── web.php                      # Route definitions
│
├── database/migrations/             # Default Laravel migrations
├── public/images/                   # Car images
│
├── composer.json
├── package.json
└── vite.config.js
```

---

## Getting Started

### Requirements

- PHP 8.3 or newer
- Composer
- Node.js and npm

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/lolo67fa/E-commerce-car.git
cd E-commerce-car

# 2. Install PHP dependencies
composer install

# 3. Install front-end dependencies
npm install

# 4. Set up the environment file
cp .env.example .env
php artisan key:generate

# 5. Build assets
npm run build

# 6. Start the development server
php artisan serve
```

Open <http://localhost:8000> in your browser.

For live asset reloading during development, run `npm run dev` in a second terminal instead of
`npm run build`.

---

## Roadmap

The catalogue currently reads from a hard-coded array inside `CarController`. The planned
progression:

- [ ] **Move cars into the database** — add a `Car` model, a migration, and a seeder, then query
      with Eloquent instead of the in-controller array
- [ ] **Car detail page** — a dedicated route and view per vehicle
- [ ] **Search and filters** — by price range, year, and availability
- [ ] **Shopping cart** — add, update quantity, remove
- [ ] **Checkout flow** — order summary and confirmation
- [ ] **Authentication** — registration, login, and per-user order history
- [ ] **Admin panel** — create, update, and delete inventory
- [ ] **Move inline styles into CSS files** — the Blade views currently carry their own `<style>`
      blocks
- [ ] **Feature tests** — cover the catalogue and brand-filter routes

---

## Author

**Ghala Alshreef**

- GitHub: [@lolo67fa](https://github.com/lolo67fa)
- LinkedIn: [ghala-a-670a62380](https://linkedin.com/in/ghala-a-670a62380)
- Portfolio: [try.ka.nz/ai/ghalaalshreef](https://try.ka.nz/ai/ghalaalshreef)

---

## License

Released under the MIT License. Laravel itself is open-source software licensed under the
[MIT license](https://opensource.org/licenses/MIT).
