# Combonate
<h1>Процесс запуска проекта</h1>
<ol>
  <li> Установить Visual Studio Code и ХAМPP</li>
<li> Скачать zip файл из Github и распоковать его/li>
<li> Открыть проект в Visual Studio Code и открыть встроенный терминал/li>
<li> Прописываем команду для установки "composer update"/li>
<li> Прописываем в файле dinamic-site.sql необходимое имя базы данных/li>
<li> Запускаем ХАМРР и переходим по ссылке http: //localhost/phpmyadmin/, создаем базу данных/li>
<li> Прописываем команду php artisan migrate для миграции данных/li>
<li> Прописываем команду php artisan serve для запуска/li>
  </ol>
Локальный сервер будет доступен по адресу http: //localhost:8000
