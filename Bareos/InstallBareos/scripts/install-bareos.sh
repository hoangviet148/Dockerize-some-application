#!/bin/bash
cd /app/bareos-deb

dpkg -i libfastlz_0.1-14.2_amd64.deb
dpkg -i bareos-common_18.2.5-144.1_amd64.deb
dpkg -i bareos-database-mysql_18.2.5-144.1_amd64.deb
dpkg -i bareos-director_18.2.5-144.1_amd64.deb
dpkg -i bareos-filedaemon_18.2.5-144.1_amd64.deb
dpkg -i bareos-storage_18.2.5-144.1_amd64.deb
dpkg -i bareos_18.2.5-144.1_amd64.deb