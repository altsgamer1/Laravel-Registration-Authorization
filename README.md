# Laravel Registration Authorization
## Установка
### Клонирование репозитори
    git clone https://github.com/altsgamer1/Laravel-Registration-Authorization.git
### Загрузка зависимостей
    composer install
### Указать подключение MySQL
Задать свои значения DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD в файле **/.env**
### Создание таблиц
    php artisan migrate
    php artisan db:seed --class=ContactSeeder
### Запуск
    php artisan serve
### Результат
    http://127.0.0.1:8000/
