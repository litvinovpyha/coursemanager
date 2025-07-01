# CourseManager

📚 Laravel-based open-source platform for managing online courses. Provides a simple interface to create, edit, and delete course records.

## 🔧 Features

- Create / View / Edit / Delete courses (CRUD)
- Image upload for courses
- Role-based authentication (admin / user)
- Access control via middleware
- Test coverage using Laravel Feature Tests
- Tailwind CSS interface

### 🧱 Tech Stack

- Laravel 12
- Livewire
- PHPUnit
- SQLite / PostgreSQL

## 🚀 Installation

```bash
git clone https://github.com/litvinovpyha/coursemanager.git
cd coursemanager
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
