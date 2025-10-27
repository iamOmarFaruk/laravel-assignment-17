## Laravel Portfolio (Assignment 17)

A simple, clean Laravel project that serves a personal portfolio site. It includes static pages, a projects listing, and a basic layout using Blade templates.

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


