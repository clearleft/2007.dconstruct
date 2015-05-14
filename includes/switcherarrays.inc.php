<?php

$titles = array("May", "June", "July", "August");
$hrefs = array("may", "june", "july", "august");

# change the order of the ss_title and ss_href arrays to change the default month (default month comes first)
$ss_title[0] = $titles[3];
$ss_title[1] = $titles[2];
$ss_title[2] = $titles[1];
$ss_title[3] = $titles[0];
$ss_href[0] = $hrefs[3];
$ss_href[1] = $hrefs[2];
$ss_href[2] = $hrefs[1];
$ss_href[3] = $hrefs[0];
if (isset($_COOKIE["styletitle"]) && $_COOKIE["styletitle"] == $titles[0]) {
	$ss_title[0] = $titles[0];
	$ss_title[1] = $titles[1];
	$ss_title[2] = $titles[2];
	$ss_title[3] = $titles[3];
	$ss_href[0] = $hrefs[0];
	$ss_href[1] = $hrefs[1];
	$ss_href[2] = $hrefs[2];
	$ss_href[3] = $hrefs[3];
}
if (isset($_COOKIE["styletitle"]) && $_COOKIE["styletitle"] == $titles[2]) {
	$ss_title[0] = $titles[2];
	$ss_title[1] = $titles[0];
	$ss_title[2] = $titles[1];
	$ss_title[3] = $titles[3];
	$ss_href[0] = $hrefs[2];	
	$ss_href[1] = $hrefs[0];
	$ss_href[2] = $hrefs[1];
	$ss_href[3] = $hrefs[3];
}
if (isset($_COOKIE["styletitle"]) && $_COOKIE["styletitle"] == $titles[3]) {
	$ss_title[0] = $titles[3];
	$ss_title[1] = $titles[0];
	$ss_title[2] = $titles[1];
	$ss_title[3] = $titles[2];
	$ss_href[0] = $hrefs[3];	
	$ss_href[1] = $hrefs[0];
	$ss_href[2] = $hrefs[1];
	$ss_href[3] = $hrefs[2];
}

?>
