# Laravel Registration Authorization
## Установка
### Клонирование репозитории
    git clone https://github.com/altsgamer1/Laravel-Registration-Authorization.git
    cd Laravel-Registration-Authorization
### Загрузка зависимостей
    composer install
### Настройки Laravel
    php -r "file_exists('.env') || copy('.env.example', '.env');"
    php artisan key:generate
### Подключение MySQL
Задать свои значения DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD в файле **/.env**
### Создание таблиц
    php artisan migrate
    php artisan db:seed --class=ContactSeeder
### Запуск
    php artisan serve
### Результат
    http://127.0.0.1:8000/
