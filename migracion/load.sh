#!/bin/sh

cat prodvol.sql prodporgiro.sql prodporproc.sql | psql -U micanasta -W micanasta 
