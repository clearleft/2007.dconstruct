<?php
include("includes/switcherarrays.inc.php");

$set = $_REQUEST["set"];
$host = $_SERVER["HTTP_HOST"];

if ($set == $hrefs[3]) {
	setcookie ('styletitle', $titles[3], 0, '/', $host, '0');
} elseif ($set == $hrefs[2]) {
	setcookie ('styletitle', $titles[2], 0, '/', $host, '0');
} elseif ($set == $hrefs[0]) {
	setcookie ('styletitle', $titles[0], 0, '/', $host, '0');
} else {
	setcookie ('styletitle', $titles[1], 0, '/', $host, '0');
} 
$referrer = $_SERVER["HTTP_REFERER"];
header("Location: $referrer");
?>