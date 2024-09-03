1.fix lỗi không chạy được:

    composer install
    cp .env.example .env
    php artisan key:generate

2.Các lệnh cơ bản:
* Lệnh chạy: 	php artisan serve
* Lệnh tạo :
    - project mới: composer create-project laravel/laravel tên
    - controller: php artisan make:controller tên
    - model: php artisan make:model  tên
    - table dtbs: php artisan make:migration tên
