============dostanie sie do mysl-a w kontenerze my_db==========================================
1) docker ps | grep mydb
d73c57630614   mysql:8.0.32                                                              "docker-entrypoint.s…"   14 minutes ago   Up 14 minutes             3306/tcp, 33060/tcp                                                                            docker-compose-2_mydb_1

2) docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' docker-compose-2_mydb_1
172.29.0.4

3) mysql -h 172.29.0.4 -u root -p

4)
w kontenerze musi byc to
volumes:
  db-data:
   name: db-data

inaczej mysql nie dziala

===============read variable in linux===============================
1) echo "$MY_APACHE_VERSION"

2)
export VERSION_MYDB=8
docker-compose up -d

zmiana bazy danych wymaga skasowania kontenerow i jeszcze raz docker-compose up
trzeba zrobic docker container prune oraz docker volume prune tak aby wyczyscil sie volumen z docker-compose (db-data)


=================KOMENDY==================================
1)
docker rm -f $(docker ps -f ancestor=my_php_mysql -q)


==================phpmyadmin==============================
https://hub.docker.com/_/phpmyadmin

http://localhost:8080
serwer: mydb
user: root
pass: root


=================redis====================================
services.yml:
    redis_cache_service:
        class: Symfony\Component\Cache\Adapter\RedisAdapter
        arguments:
            - '@redis'
    redis:
        class: Redis
        public: false
        calls:
            - method: connect
              arguments:
                  - 'mycache'

doctrine.yml:
        result_cache_driver:
            type: service
            id: redis_cache_service
===============VARIABLES=================================
w pliku custom.env dodajemy:
BACKEND_DB_SERVICE=mysql://root:root@mydb/my_database?serverVersion=8&charset=utf8mb4
tworzymy plik parameters.yml:
imports:
  - resource: parameters.php
tworzymy parameters.php:
<?php
$container->setParameter('backend_db_service', getenv('BACKEND_DB_SERVICE'));
w doctrine.yaml korzystamy z tej zmiennej:
url: "%backend_db_service%"

========email===============================
#MAILER_DSN=smtp://malyszg:Sunshine1983@poczta.o2.pl:465
MAILER_DSN=gmail://malyszg:gvtbyhpqlvminsjs@smtp.gmail.com:465

gmail trzeba włączyć dwuetapowe logowanie:
https://myaccount.google.com/security?hl=pl
nasteþnie ustawić hasła aplikacji:
https://myaccount.google.com/signinoptions/two-step-verification?rapt=AEjHL4PyOqtSsB-EioSbX_odXbqHyMHShyqhlab5nA5v3Rpp6yJCcA5k2BDQPLE9Z3Cj8603KirQcOIFGo7fT-1dVWqoE6csOQ

https://support.google.com/accounts/answer/185833

zmienna środowiskowa w mailer.yaml
framework:
    mailer:
        dsn: '%MAILER_DSN%'
