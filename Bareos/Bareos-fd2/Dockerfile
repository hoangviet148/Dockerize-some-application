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
                    mailutils -y
# RUN apt-get install mysql-server-5.7 -y
RUN bash /app/scripts/deb-install.sh
RUN bash /app/scripts/install-bareos-fd2.sh

CMD ["sleep","infinity"]