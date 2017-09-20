# How to up

1. Install your environment(set up php7, mysql5.7, nginx1.13 libs for php and other);
2. Run the console command `provision/provision.sh`;
3. Done.

### Описание

Реализовано 2 запроса. Доступны по адресам:
1. https://localhost/index.php?r=main/get-json&data={"code":125,"type":4,"message":"test",%20"application":"main%20project"} - для добавления в БД;
2. https://localhost/index.php?r=main/show - для просмотра информации.

Настройки приложения config/web.php там же и для db;

Controllers - вся логика и обработка запросов controllers/MainController.php - реализована логика для текущей задачи;

Models - модели для приложения и текущего задания models/User.php - для config необходимо, models/Message.php - реализована модель для текущей задачи;

Views - представления приложения. views/layouts и views/main/index.php - реализованы представления для текущего задания.
