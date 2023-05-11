# WORKDIR, COPY and ADD example
FROM ubuntu:latest 
RUN apt-get update && apt-get install apache2 -y 
WORKDIR /var/www/html/
COPY index.html .
#ADD http://sample.com/test.txt /tmp/test.txt
CMD ["ls"]
