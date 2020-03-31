.PHONY: install lint

install:
	docker-compose run --rm composer install

lint:
	docker-compose run --rm --entrypoint sh php -c 'for file in **/*.php; do php -l $$file || exit 1; done'
