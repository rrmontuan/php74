SHELL := /bin/bash # Use bash syntax
.PHONY: run in

run:
	docker-compose run --service-ports --rm app

in:
	docker exec -it $(shell docker-compose ps -q php) /bin/bash

clean:
	docker-compose down
	docker rmi app-php74

build:
	docker-compose build app

default: run