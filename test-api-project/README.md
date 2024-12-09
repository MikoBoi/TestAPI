В контроллере ApiDataController находятся функций по эндпоинтам. Маршруты прописаны в web.php.
При обращении к тому или иному эндпоинту по маршруту данные из массива Data будут записываться в базу данных. Каждый элемент массива Data будет сохраняться в отдельной записи с уникальным идентификатором (ID).
В БД четыре сущности: sales, orders, incomes, stocks. Ниже конфигурация БД.
Хостинг БД: https://console.aiven.io
DB_CONNECTION=mysql
DB_HOST=mysql-f80a46b-m1ko01115-6511.b.aivencloud.com
DB_PORT=28232
DB_DATABASE=defaultdb
DB_USERNAME=avnadmin
DB_PASSWORD=AVNS_pjwmQod338tRqyHwsvf

Проект запустить:
docker exec -it laravel-app bash
php artisan serve --host=0.0.0.0 --port=8000
