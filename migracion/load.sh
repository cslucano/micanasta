#!/bin/sh

cat prodvol.sql prodporgiro.sql prodporproc.sql prodestac.sql | psql -h localhost -U micanasta -W micanasta 
