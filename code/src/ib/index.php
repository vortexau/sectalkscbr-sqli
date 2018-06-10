<?php

require_once("../db.php");
require_once("../header.php");
print("# pwd ");
print("<br />");
print("/home/sqli/inband");
print("<br />");
print("<br />");

if(is_array($_GET['id'])) {
	print("That doesn't work here, sorry!");
	die;
}

print("sectalks australian cities");
print("<br />");

if(!isset($_GET['id'])) {
	$_GET['id'] = 1;
}

$sql = "SELECT id, city, state FROM ib WHERE id = " . $_GET['id'];

$data = pg_query($db, $sql);

print("+-------------------------------------------------+ <br />");
print("| City       | State                              | <br />");
print("+-------------------------------------------------+ <br  />");
foreach (pg_fetch_all($data) as $row) {
	print("| ");
	print(str_pad($row['city'], 10, ' '));
	print(" | ");
	print(str_pad($row['state'], 35, ' '));
	print("|");
	print("<br />");
}
print("+-------------------------------------------------+");

require_once("../footer.php");

