#!/bin/sh

cat categoria.sql producto.sql estadistica.sql | psql -h localhost -U micanasta -W micanasta 
