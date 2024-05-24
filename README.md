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
   4) docker-compose chmod -R gu+w storage
   5) docker-compose chmod -R guo+w storage
   6) docker exec test_app php artisan cache:clear
   7) docker exec test_app php artisan migrate
   8) docker exec test_app php artisan parse:cities
