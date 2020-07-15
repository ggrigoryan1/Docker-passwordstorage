## Install (Установка через Docker)

Устанавливаем Docker - https://docs.docker.com/engine/install/ubuntu/<br />
Устанавливаем Docker Compose - https://docs.docker.com/compose/install/<br />


cp www/passwordstorage/.env.example www/passwordstorage/.env<br />

Откройте файл .env и отредакрируйте его если надо <br />
DB_HOST=mysql - для использования базы данных Docker <br />
DB_PORT=3306 <br />
DB_DATABASE=docker_passwordStorage <br />
DB_USERNAME=root <br />
DB_PASSWORD=secret <br />

Выполните команду<br />
 docker-compose up -d --build <br />
Или </br>
 docker-compose up --build <br />
 
 Для команд composer <br />
 docker-compose run --rm composer .. <br />
 
 Для команд npm <br />
 docker-compose run --rm npm  <br />
 
 Для команд artisan <br />
 docker-compose run --rm artisan  <br />
 
 
 После создания файла .env и команды  docker-compose up -d --build <br />
 Выполните <br />
    docker-compose run --rm artisan migrate<br />
    docker-compose run --rm artisan db:seed<br />
    docker-compose run --rm artisan key:generate<br />

Для подключения к базе данных<br />
docker-compose exec mysql bash<br />
mysql -uroot -psecret<br />

url: http://localhost:8080/<br />
login: admin@site.ru<br />
pass: admin<br />