# One laravel project: **Brand Panel**

## Description
Panel for brand info manipulation

## How to install
1) Create `.env` from `.env.example` file and change it
    1) Change `DB_` settings
    2) Change `APP_URL` settings
2) Run `composer install` command
3) Run `php artisan migrate` command
4) Run `php artisan key:generate` command 
6) Run `php artisan storage:link` command
7) Run `php artisan voyager:install` command
8) Run `php artisan voyager:admin your@email.com --create` command with your email and create admin user

## Written by
1) `Laravel Framework`
2) `Voyager Admin panel`
3) `AMP typeset (HTML, CSS, JavaScript)`
4) `MySQL Database`