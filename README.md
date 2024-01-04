## Setup
### Install composer
```
Composer install
```
Note: If composer installed then "composer update"
### Install package node module
```
npm i
```
### Copy file .env.example to .env
```
cp .env.example .env
```
Note: After, change env (otp)
### Generate key
```
php artisan key:generate
```
### Migrate database
```
php artisan migrate
```
### Run server
```
php artisan serve
```

## v.2
```
cp .env.example .env
```
delete all tables
```
php artisan migrate
```
## Dump AutoLoad
```
composer dump-autoload
```