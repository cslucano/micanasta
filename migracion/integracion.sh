#!/bin/sh

cat categoria.sql producto.sql estadistica.sql updateimage.sql | psql -h localhost -U micanasta -W micanasta 
