# Personal Finance with Laravel and Filament

A modern, robust Personal Finance application built to demonstrate the power of **Laravel 12** and **Filament 5**.

## 🚀 About the Project

This application is designed to help users track their income, expenses, and budget in a clean, dashboard-style interface. It features a fully responsive admin panel powered by Filament, providing an excellent starting point for learning how to build complex data-driven applications.

### Key Features

*   **📊 Interactive Dashboard**: Visual overview of your financial health with charts and statistics.
*   **💰 Transaction Management**: Easily record income and expenses.
*   **🏦 Multi-Account Support**: Manage multiple bank accounts and track balances automatically.
*   **📂 Categorization**: Organize transactions with custom categories.
*   **📉 Budgeting**: Set and monitor monthly budgets to stay on track.
*   **🔒 Secure & Private**: Built with multi-tenancy in mind—users only see their own data, secured by Global Scopes.
*   **🌍 User Preferences**: Customizable currency and locale settings per user.

## 🛠️ Technology Stack

*   **Framework**: [Laravel 12](https://laravel.com)
*   **Admin Panel**: [Filament 5](https://filamentphp.com)
*   **Database**: SQLite
*   **Testing**: [Pest PHP](https://pestphp.com)

## 🏁 Getting Started

### Installation

1.  **Clone the repository**
    ```bash
    git clone https://github.com/Meruem2796/laravel_filament_personal_finance.git
    cd laravel_filament_personal_finance
    ```

2.  **Install dependencies**
    ```bash
    composer install
    ```

3.  **Setup environment**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Run migrations and seed the database**
    ```bash
    php artisan migrate:fresh --seed
    ```

5.  **Create an admin user**
    ```bash
    php artisan make:filament-user
    ```

6.  **Serve the app**
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000/admin` and log in with the credentials you just created.

## 🧪 Running Tests

```bash
php artisan test
```

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).