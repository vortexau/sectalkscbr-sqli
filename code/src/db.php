<?php

$connstr = "host=172.23.0.2 dbname=stcbr user=stcbr password=6JnrEuMkYdcKmCrF";
# connect to the database
$db = pg_connect($connstr);

# Check if DB exists. If tables don't exist, import the database
$dbsql = "dmwPqbTGmMJvu3Vz.sql";

$checksql = "SELECT EXISTS (
    SELECT 1 
    FROM pg_tables
    WHERE schemaname = 'stcbr'
    AND tablename = 'ib'
)";

$r = pg_query($db, $checksql);
$row = pg_fetch_row($r);

if($row['0'] == 'f') {
	# Import the database itself
	print("IMPORT");
}

error_reporting(0);

