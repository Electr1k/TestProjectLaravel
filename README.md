<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Тестовое задание

Web: localhost:8080/<br>
Api: <br> 
1) Добавление города: <br>
Method: POST <br>
URL: localhost:8080/api
2) Удаление города: <br>
   Method: DELETE <br>
   Param: id - Id города<br>
   URL: localhost:8080/api/{id}

Развертывание:
1) Docker: <br>
   1) Клонировать репозиторий
   2) docker-compose build
   3) docker-compose up -d
   4) docker exec test_app composer install
   5) docker exec test_app chmod -R guo+w storage
   6) docker exec test_app php artisan cache:clear
   7) docker exec test_app php artisan migrate
   8) docker exec test_app php artisan parse:cities<br>
2) Локально: <br>
   1) Клонировать репозиторий
   2) Создать postgres юзера(TestProject, q1r) и бд TestProject. Env поменять host на localhost
   3) php artisan migrate
   4) php artisan parse:cities
   5) php artisan serve

Немного комментариев:<br>
Парсер вынесен в отдельную команду php artisan parse:cities и парсит БД один раз перед стартом сервера. Помимо вкладки с городами сервисы можно вынести и для других групп, но на данном этапе у всех групп по одному эндпоинту и выносить логику из однометодных контроллеров в сервисы сейчас, на мой взгляд, смысла нет.
