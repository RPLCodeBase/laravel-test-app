## Laravel Test Application
### How to use
Require `composer` and `php8 or higher`

1. Clone Project
```
git clone https://github.com/RPLCodeBase/laravel-test-app.git
```
2. composer install
```
composer install
```
3. setup .env file
4. setup database
5. generate key
```
php artisan key:generate
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

11. Login
```
email : admin@test.com
password : admin
```

12. Debug Application with Telescope
```
http://127.0.0.1:8000/telescope
```
how to disable Telescope
setup file config/telescope.php change enabled to false
```
enable = 'enabled' => env('TELESCOPE_ENABLED', true),
disable = 'enabled' => env('TELESCOPE_ENABLED', false),
```
