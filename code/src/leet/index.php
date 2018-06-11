<?php

date_default_timezone_set("UTC");
$data['timeset'] = date("U");
$data['iphash'] = md5($_SERVER['client_ip']); # !! CHECK THIS !!!

$value = base64_encode(json_encode($data));

$insql = "INSERT INTO leet (iphash, time, cookie) 
          VALUES ('{$data['iphash']}','{$data['timeset']}','{$value}')";

# Save the cookie and data for the user settion
# to the database, then show their sessions below.

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
	die("");
} else {
	$cookiedata = $_COOKE['leet'];
	$data = json_decode(base64_decode($cookiedata));
	var_dump($data);
	# Based on the contents of the cookie, use it for injection
	$sql = "SELECT iphash, time, cookie FROM leet WHERE iphash = " . $data['iphash'];

	$data = pg_query($db, $sql);



}

require_once("../footer.php");

