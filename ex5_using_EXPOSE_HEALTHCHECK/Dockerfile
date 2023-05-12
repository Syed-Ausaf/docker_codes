# EXPOSE & HEALTHCHECK example 
#The EXPOSE directive has the following format:
#EXPOSE <port>
#However, the ports exposed with the EXPOSE directive will only be accessible from
#within the other Docker containers. To expose these ports outside the Docker
#container, we can publish the ports with the -p flag with the docker container
#run command:
#docker container run -p <host_port>:<container_port> <image>
FROM ubuntu
RUN apt-get update && apt-get install apache2 curl -y 
HEALTHCHECK CMD curl -f http://localhost/ || exit 1
#As an example, we can use the following directive to ensure that the container can
#receive traffic on the http://localhost/ endpoint:
#The exit code at the end of the preceding command is used to specify the health
#status of the container. 0 and 1 are valid values for this field. 0 is used to denote a
#healthy container, and 1 is used to denote an unhealthy container.
#In addition to the command, we can specify a few other parameters with the
#HEALTHCHECK directive, as follows:
#• --interval: This specifies the period between each health check (the default
#is 30s).
#• --timeout: If no success response is received within this period, the health
#check is considered failed (the default is 30s).
#• --start-period: The duration to wait before running the first health check.
#This is used to give a startup time for the container (the default is 0s).
#• --retries: The container will be considered unhealthy if the health check
#failed consecutively for the given number of retries (the default is 3).
EXPOSE 80
ENTRYPOINT ["apache2ctl", "-D", "FOREGROUND"]
