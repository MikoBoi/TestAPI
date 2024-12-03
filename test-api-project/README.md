В контроллере ApiDataController находятся функций по эндпоинтам. Маршруты прописаны в web.php.
Так как при любой дате возвращается пагинация, а поле data пустая, решил при обращений к тому или иному эндпойнту будет записываться полностью JSON в БД:
В БД четыре сущности: sales, orders, incomes, stocks. Ниже конфигурация БД.
Хостинг БД: https://console.aiven.io
DB_CONNECTION=mysql
DB_HOST=mysql-f80a46b-m1ko01115-6511.b.aivencloud.com
DB_PORT=28232
DB_DATABASE=defaultdb
DB_USERNAME=avnadmin
DB_PASSWORD=AVNS_pjwmQod338tRqyHwsvf
