<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## О проекте

Реализовано:
- Авторизация по логину и паролю, регистрация
- Развертывания проекта через docker-compose
- Верстка сайта на библиотеке Bootstrap
- При разработке использовались pint и phpstan

## Установка проекта

- git clone https://github.com/uuviuu/blog-test-project.git 
- docker network create blog-test-project
- docker-compose up -d 

## Установка backend

- docker-compose exec php fish
- composer install
- cp .env.example .env - скопируйте и заполните файл .env в соответствии с примером
- php artisan key:generate
- php artisan migrate

## Установка frontend

- docker-compose exec nodejs fish
- npm install
- npm run build
- npm run serve

Контакты:
[почта](mailto:my.test.laravel.message@gmail.com)
[telegram](https://t.me/wrkuuvi)