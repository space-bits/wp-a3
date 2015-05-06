#/bin/bash

rm cinema.sqlite3
sqlite3 cinema.sqlite3 < install.sql
sqlite3 cinema.sqlite3 < populate.sql
chmod 666 cinema.sqlite3
