# make start

start:
	sudo /etc/init.d/mysql stop
	docker-compose up
	php -S localhost:8000

