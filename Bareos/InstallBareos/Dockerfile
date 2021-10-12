FROM ubuntu:18.04

WORKDIR /app

COPY . .
RUN ls /app/scripts
RUN apt-get update -y
RUN apt-get install wget apt-utils -y
RUN bash /app/scripts/deb-install.sh
RUN bash /app/scripts/install-bareos.sh

CMD echo "Done!"