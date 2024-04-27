docker-compose exec backend composer install
docker-compose exec backend init --env=Development --overwrite=y
docker-compose exec backend yii migrate --interactive=0