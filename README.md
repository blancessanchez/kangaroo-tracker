
## Kangaroo Tracker Demo

This project is a very small front end for a fictitious company to store information about their pet kangaroos.

## Tech Stack

- PHP 8.2.0
- Laravel 10.15.0
- jQuery 3.7.0
- Bootstrap 4.5.3

## Run Locally

- Clone the project

```bash
  git clone git@github.com:blancessanchez/kangaroo-tracker.git
```

- Create database named **kangaroo_tracker**.

- Go to the project directory

```bash
  cd kangaroo-tracker
```

- Execute the necessary setup

```bash
  php artisan migrate --path=database/migrations/kangaroo-tracker
  php artisan db:seed
  php artisan key:generate
  composer install
  npm install
```

- Go to the .env file, change the following according to the credentials

```bash
  DB_HOST=127.0.0.1
  DB_DATABASE=kangaroo_tracker
  DB_USERNAME=root
  DB_PASSWORD=
```

- Start the server and build assets

```bash
  php artisan serve
  npm run build
```

- Login Credentials

```bash
  username: user
  password: password
```
