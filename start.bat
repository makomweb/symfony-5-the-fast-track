rmdir /q /s .\var\cache\dev\http_cache\
docker-compose up -d
symfony server:start -d
symfony run -d --watch=config,src,templates,vendor symfony console messenger:consume async