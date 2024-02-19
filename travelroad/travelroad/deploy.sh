#!/bin/bash

sudo cp -r /usr/share/nginx/travelroad /home/pc12-dpl/travelroad_laravel/travelroad/

cd /home/pc12-dpl/travelroad_laravel/

git add .
git commit -m "Se Realizan cambios en las maquina de desarrollo"
git push

ssh Luis@20.56.155.34 "
	cd /home/Luis/travelroad_laravel/travelroad
	git fetch
	git pull

	cd ..
	sudo cp -r travelroad/ /usr/share/nginx/
	cd /usr/share/nginx/travelroad
	sudo composer install
	sudo systemctl restart nginx
"
