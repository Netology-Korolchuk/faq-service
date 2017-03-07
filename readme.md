# Типовой Сервис часто задаваемых вопросов (FAQ)

## Данный сервис разработан в качестве дипломного проекта к курсу PHP/SQL: back-end разработка и базы данных Интернет университета "Нетология" группа PHP-7.

# Возможности:
 - управление темами и вопросами
 - управление модераторами
 - логировние действий администраторов
 - использование стоп-слов для блокировки вопросов
  
# Требования:
 - PHP >= 5.6.4
 - Laravel 5.3, встроенный шаблонизатор blade
 - MySQL
  
# Установка:
 - копируем репозиторий или делаем git clone https://github.com/Netology-Korolchuk/faq-service.git
 - открываем консоль и переходим в корень приложения
 - composer install
 - редактируем файл .env <br/>
	DB_CONNECTION=mysql <br/>
	DB_HOST=localhost <br/>
	DB_PORT=3306 <br/>
	DB_DATABASE=ваша БД <br/>
	DB_USERNAME=ваш пользователь БД <br/>
	DB_PASSWORD=ваш пароль <br/>
 - php artisan key:generate
 - php artisan migrate (или загружаем дамп из файла faq.sql)
 - php artisan db:seed 

 - для серверов Nginx может понадобиться изменить настройки конфигурации, добавить строку
   location / { 
		try_files $uri $uri/ /index.php?$query_string; 
              }

