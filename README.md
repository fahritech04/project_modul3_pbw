# Laravel - Perpustakaan

## Run Locally

Clone the project

```bash
  git clone https://github.com/fahritech04/project_modul3_pbw
```

Go to the project directory

```bash
  cd projectName
```

-   Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    composer require doctrine/dbal
```

```bash
    composer update
```

#### Login

-   username = admin
-   password = 12345678
