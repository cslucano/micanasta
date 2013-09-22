#!/bin/sh

cat prodvol.sql prodporgiro.sql prodporproc.sql | psql -h localhost -U micanasta -W micanasta 
