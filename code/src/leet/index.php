<?php

date_default_timezone_set("UTC");
$data['timeset'] = date("U");
$data['id'] = "4321";

$value = base64_encode(json_encode($data));

if(!isset($_COOKIE['leet'])) {
	setcookie("leet", $value, 0);
}

require_once("../db.php");
require_once("../header.php");
print("# pwd ");
print("<br />");
print("/home/sqli/leet");
print("<br />");
print("<br />");
print("¯\_(ツ)_/¯");
print("<br />");
print("<br />");

if(!isset($_COOKIE['leet'])) {
    print("");
} else {
	$data = json_decode(base64_decode($_COOKIE['leet']));
	var_dump($data);
	# Based on the contents of the cookie, use it for injection




}

require_once("../footer.php");

