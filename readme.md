docker build -t docker-l8 .

docker run -e PORT=80 -p 80:80 docker-l8
