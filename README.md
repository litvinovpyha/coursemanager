# Laravel-платформа с открытым исходным кодом для курсов
📚 Простая Laravel-система для управления курсами. Позволяет создавать, редактировать и удалять курсы.

## 🔧 Возможности

- Создание / просмотр / редактирование / удаление курсов | CRUD
- Загрузка изображений
- Авторизация с ролями (admin / user)
- Проверка доступа через middleware
- Покрытие тестами с использованием Laravel Feature Tests
- tailwind интерфейс

## Стек:
- Laravel 12
- Livewire
- PHPUnit
- SQLite / PostgreSQL

## 🚀 Установка

```bash
git clone https://github.com/litvinovpyha/coursemanager.git
cd coursemanager
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
CRUD-приложение на Laravel для управления курсами.
