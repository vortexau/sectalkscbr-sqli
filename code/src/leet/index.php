<?php


require_once("../db.php");

error_reporting(E_ALL);

function base64url_encode($data) { 
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
}

function base64url_decode($data) { 
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
}

date_default_timezone_set("UTC");
$data = array();
$data['timeset'] = date("U");
$data['iphash'] = md5($_SERVER['REMOTE_ADDR']);

$json = json_encode($data);
$value = base64url_encode($json);

$insql = "INSERT INTO leet (iphash, time, cookie) 
          VALUES ('{$data['iphash']}','{$data['timeset']}','{$value}')";

pg_query($db, $insql);

# Save the cookie and data for the user settion
# to the database, then show their sessions below.

if(!isset($_COOKIE['leet'])) {
	setcookie("leet", $value, 0);
}

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
	$cookiedata = $_COOKIE['leet'];
	$data = (array) json_decode(base64url_decode($cookiedata));

	if(isset($data['iphash']) && is_array($data['iphash'])) {
		die("");
	}
	# Based on the contents of the cookie, use it for injection
	$sql = "SELECT iphash, time, cookie FROM leet WHERE iphash = 'jj" . $data['iphash'] . "'";

	error_log($sql);
	error_log($cookiedata);
	error_log(var_dump($data), true);
	$result = pg_query($db, $sql);

	if($result === false) {
		die();
	}

	if(!pg_fetch_array($result)) {
		print("No match");
	} else {
		print("Match found!");
	}

}

require_once("../footer.php");

