#!/bin/bash
mkdir /app/bareos-deb
URL=https://download.bareos.org/bareos/release/18.2/xUbuntu_18.04/amd64
wget $URL/bareos-common_18.2.5-144.1_amd64.deb -P /app/bareos-deb
wget $URL/bareos-filedaemon_18.2.5-144.1_amd64.deb -P /app/bareos-deb
wget $URL/libfastlz_0.1-14.2_amd64.deb -P /app/bareos-deb
