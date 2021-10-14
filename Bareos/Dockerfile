FROM ubuntu:18.04

WORKDIR /app

COPY . .
RUN ls /app/scripts
RUN apt-get update -y
RUN apt-get install wget \
                    apt-utils \
                    gawk \
                    libcap2-bin \
                    libjansson4 \
                    liblzo2-2 \
                    libmysqlclient-dev \
                    lsof \
                    bsd-mailx \
                    mailutils \
                    dbconfig-common  -y
RUN bash /app/scripts/deb-install.sh
# RUN bash /app/scripts/install-bareos.sh
CMD ["sleep","infinity"]