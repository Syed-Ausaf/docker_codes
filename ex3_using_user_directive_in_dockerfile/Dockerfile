# USER example
FROM ubuntu
RUN apt-get update && apt-get install apache2 -y 
USER www-data
# user www-data is defalult for apache web server
CMD ["whoami"]
#In this exercise, we implemented the USER directive in the Dockerfile to set the
www-data user as the default user of the Docker image.

