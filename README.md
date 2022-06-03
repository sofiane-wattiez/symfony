# symfony blog 

`cd symfony`

## INSTALL & UPDATE DEPENDENCIES

`composer install && composer update @latest`

## CREATE BDD

`php bin/console doctrine:database:create`

## UPDATE BDD

`php bin/console doctrine:migrations:migrate`

## LOAD FIXTURE

`php bin/console doctrine:fixtures:load`     

`symfony server:start -d`

# LOGIN INFO FOR TEST

id: `email0@gmail.com`

pwd : `password`
