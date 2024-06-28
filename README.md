# Laravel Inertia Vue 3 Project

This project is a web application built using Laravel, Inertia, and Vue 3. Laravel is used for the backend, Inertia for sharing data between the backend and frontend, and Vue 3 for the frontend.

## Features

- **Laravel Backend**: Laravel provides a robust and secure backend for the application. It handles user authentication, database management, and API endpoints.
- **Inertia**: Inertia allows for the sharing of data between the backend and frontend, making it easier to build dynamic and responsive user interfaces.
- **Vue 3 Frontend**: Vue 3 is used to create the frontend of the application. It provides a reactive and component-based approach to building user interfaces.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm
- Docker

## Installation

1. Clone the repository:

```bash
git clone https://github.com/your-username/your-project.git
```

2. Install PHP dependencies:
```bash
composer install
```
3. Install JavaScript dependencies:

```bash
npm install
```

4. Create a copy of the .env.example file and rename it to .env. Update the database connection details and other environment variables as needed.


5. Run docker containers

```bash
docker-compose up -d
```


6. Generate an application key:
```bash
php artisan key:generate
```

7. Run database migrations:

```bash
php artisan migrate
```

8. Start the development server:

```bash
npm run dev
```


Visit http://localhost:8000 in your browser to view the application.

## Usage

- To start the Laravel development server, run `php artisan serve`.
- To compile and minify the JavaScript and CSS assets, run `npm run build`.
- To run tests, run `php artisan test`.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.