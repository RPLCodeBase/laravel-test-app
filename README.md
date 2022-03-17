## Laravel Test Application
### How to use
Require `composer` and `php8 or higher`

1. Clone Project
```
git clone https://github.com/RPLCodeBase/laravel-test-app.git
```

2. setup .env file
3. setup database
4. generate key
```
php artisan key:generate
```
5. composer install
```
composer install
```
6. migrate
```
php artisan migrate
```
7. seed
```
php artisan db:seed
```
8. run server
```
php artisan serve
```
9. run watch : watch for changes with live reload
```
npm run watch
```
10. run storage link : link storage to public
```
php artisan storage:link
```
if image upload is not working, change storage path in .env file
```
APP_URL=http://127.0.0.1:8000
```
