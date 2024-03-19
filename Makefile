######  init  ################
init: down up
#####/  init  ################

########
up: docker-pull docker-build docker-up app-init
down: docker-down-clear
########

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-up:
	docker-compose up -d

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

app-init: composer-install

########
composer-install:
	docker-compose run --rm app-php-cli composer install

composer-update:
	docker-compose run --rm app-php-cli composer update
