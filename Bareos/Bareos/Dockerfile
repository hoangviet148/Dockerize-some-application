FROM ubuntu:18.04

WORKDIR /app

COPY . .
RUN apt-get update -y
RUN apt-get install wget \
                    apt-utils \
                    net-tools \
                    nano \
                    openssh-server \
                    gawk \
                    libcap2-bin \
                    libjansson4 \
                    liblzo2-2 \
                    libmysqlclient-dev \
                    lsof \
                    bsd-mailx \
                    mailutils \
                    dbconfig-common -y
RUN apt-get install mysql-server -y
RUN bash /app/scripts/deb-install.sh
CMD ["sleep","infinity"]