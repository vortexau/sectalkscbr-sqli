<?php

require_once("../db.php");
require_once("../header.php");
print("# pwd " . PHP_EOL);
print("/home/sqli/blind" . PHP_EOL . PHP_EOL);
print("goal: discover the true/false condition && then discover the table name" . PHP_EOL);
print(PHP_EOL);
# Blind SQLi
#
if(isset($_GET['id']) && is_array($_GET['id'])) {
    die("Not here either");
}

if(!isset($_GET['id'])) {
	$_GET['id'] = 1;
}

$sql = "SELECT username, password FROM blind WHERE id = " . $_GET['id'];

print($sql);

$result = pg_query($db, $sql);

if($result === false) {
	die();
}

$row = pg_fetch_row($result, 0);

print("+---------------------------------------------------+" . PHP_EOL);
print("| Username       | Password                         |" . PHP_EOL);
print("+---------------------------------------------------+" . PHP_EOL);
print("| ");
print(str_pad($row['0'], 14, ' '));
print(" | ");
print(str_pad($row['1'], 33, ' '));
print("|" . PHP_EOL);
print("+---------------------------------------------------+" . PHP_EOL);


require_once("../footer.php");

