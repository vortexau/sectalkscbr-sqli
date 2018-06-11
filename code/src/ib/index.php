<?php

require_once("../db.php");
require_once("../header.php");

error_reporting(E_ALL);

print("# pwd ". PHP_EOL);
print("/home/sqli/inband" . PHP_EOL);
print(PHP_EOL);

if(isset($_GET['id']) && is_array($_GET['id'])) {
	print("That doesn't work here, sorry!");
	die;
}

print("goal: display all au sectalks cities");
print("<br />" . PHP_EOL);

if(!isset($_GET['id'])) {
	$_GET['id'] = 1;
}

$sql = "SELECT id, city, state FROM ib WHERE id = " . $_GET['id'];

if(isset($_GET['debug']) && $_GET['debug'] == TRUE) {
	print(PHP_EOL . "<!-- " . $sql . "-->" . PHP_EOL);
}

$data = pg_query($db, $sql);

if($data === FALSE) {
	die();
}

print("+-------------------------------------------------+" . PHP_EOL);
print("| City       | State                              |" . PHP_EOL);
print("+-------------------------------------------------+" . PHP_EOL);
foreach (pg_fetch_all($data) as $row) {
	print("| ");
	print(str_pad($row['city'], 10, ' '));
	print(" | ");
	print(str_pad($row['state'], 35, ' '));
	print("| " . PHP_EOL);
}
print("+-------------------------------------------------+" . PHP_EOL);

require_once("../footer.php");

