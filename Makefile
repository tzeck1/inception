NAME=inception
CONTS:=$(shell sudo docker ps -q | wc -l)

${NAME}:
	sudo docker-compose -f srcs/docker-compose.yml up --build

clean:
	# sudo docker kill $(shell sudo docker ps -q)
	sudo docker system prune -a
	sudo rm -rf ~/data/wordpress-data/*
	sudo rm -rf ~/data/mariadb-data/*

test:
	@echo $(CONTS)

re: clean ${NAME}

.PHONY: inception clean re