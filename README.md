## Laravel Portfolio (Assignment 17)

A simple, clean Laravel project that serves a personal portfolio site. It includes static pages, a projects listing, and a basic layout using Blade templates.

### Overview
Watch a short video overview of the project:

- ▶️ Watch the demo: https://somup.com/cT6woE9Omi

### What’s inside
- **Home**: Landing page
- **Resume**: Brief resume/CV page
- **Projects**: Grid of sample projects rendered from the controller
- **Contact**: Simple contact page (static)
- **Privacy** and **Terms**: Policy pages

### Tech Stack
- Laravel 11 (PHP)
- Blade templates
- Vite for asset bundling (default Laravel setup)

### Quick start
1. Clone this repo and install dependencies:
   ```bash
   composer install
   npm install
   ```
2. Create the environment file and key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Use SQLite (already included) or configure your DB in `.env`. Then run migrations:
   ```bash
   php artisan migrate
   ```
4. Build assets and start the dev server:
   ```bash
   npm run dev
   php artisan serve
   ```
5. Visit `http://localhost:8000`.

### Routes
Key routes defined in `routes/web.php`:
- `/` → Home
- `/resume` → Resume
- `/projects` → Projects
- `/contact` → Contact
- `/privacy` → Privacy Policy
- `/terms` → Terms of Service

### Structure
- `app/Http/Controllers/PageController.php` handles page rendering and provides sample project data.
- `resources/views/layouts/app.blade.php` is the main layout.
- `resources/views/pages/*` contains the page templates.
- `resources/views/components/project-card.blade.php` renders each project item.

### Notes
- This project is for learning/demo purposes.
- Feel free to replace the sample project data with real content.

### Database
This project uses 6 tables: `users`, `categories`, `products`, `customers`, `invoices`, and the pivot `invoice_products`. Below is a concise English summary of the schema and relationships.

#### users
- Columns: `id`, `name`, `mobile` (nullable), `otp` (nullable), `email`, `email_verified_at`, `password`, `remember_token`, `timestamps`
- Relationships: One user can have many categories, products, customers, invoices, and invoice_products.

#### categories
- Columns: `id`, `name`, `user_id`, `timestamps`
- Relationships: Belongs to a user; has many products.

#### products
- Columns: `id`, `user_id`, `category_id`, `name`, `price (12,2)`, `unit`, `image` (nullable), `timestamps`
- Relationships: Belongs to a user and a category; belongsToMany invoices via `invoice_products`.

#### customers
- Columns: `id`, `name`, `email` (nullable), `mobile` (nullable), `user_id`, `timestamps`
- Relationships: Belongs to a user; has many invoices.

#### invoices
- Columns: `id`, `total (14,2)`, `discount (14,2)`, `vat (14,2)`, `payable (14,2)`, `user_id`, `customer_id`, `timestamps`
- Relationships: Belongs to a user and a customer; belongsToMany products via `invoice_products`.

#### invoice_products (pivot)
- Columns: `id`, `invoice_id`, `product_id`, `user_id`, `qty (14,2)`, `sale_price (14,2)`, `timestamps`
- Relationships: Belongs to a user, an invoice, and a product.
- Constraint: A unique index on `(invoice_id, product_id)` prevents adding the same product multiple times to the same invoice.

#### Running migrations
- Run all migrations:
   ```bash
   php artisan migrate
   ```
- For SQLite, set `DB_CONNECTION=sqlite` in `.env` and ensure `database/database.sqlite` exists (included in this project).

