NAME=inception

${NAME}:
	sudo docker-compose -f srcs/docker-compose.yml up --build

clean:
	# sudo docker kill $(shell sudo docker ps -q)
	sudo docker system prune -a

reset:
	sudo rm -rf ~/data/wordpress-data/*
	sudo rm -rf ~/data/mariadb-data/*

re: clean ${NAME}

.PHONY: inception clean re reset
