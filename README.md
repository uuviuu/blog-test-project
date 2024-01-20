<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## О проекте

Реализовано:
- Авторизация по логину и паролю, регистрация
- Развертывания проекта через docker-compose
- Верстка сайта на библиотеке Bootstrap
- При разработке использовались pint и phpstan

## Установка

- git clone https://github.com/uuviuu/blog-test-project.git - скачать репозиторий
- docker-compose up -d - установить зависимости из файла docker-compose.yml
- docker-compose exec php fish
- cd map-info/
- composer install
- composer dump-autoload
- cp .env.example .env - скопируйте и заполните файл .env в соответствии с примером
- php artisan key:generate
- php artisan migrate

Контакты:
[почта](mailto:my.test.laravel.message@gmail.com)
[telegram](https://t.me/uuviuu)