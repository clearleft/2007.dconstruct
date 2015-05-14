<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pics-label" content='(pics-1.1 "http://www.icra.org/ratingsv02.html" comment "ICRAonline EN v2.0" l gen true for "http://www.clagnut.com/" r (nz 1 vz 1 lc 1 oh 1 cz 1) "http://www.rsac.org/ratingsv01.html" l gen true for "http://www.clagnut.com/" r (n 0 s 0 v 0 l 1))' />
<meta name="MSSmartTagsPreventParsing" content="true" />

<?php
$ss_title[0] = "Lucida family fonts";
$ss_title[1] = "Microsoft web fonts";
$ss_title[2] = "Vera family fonts";
$ss_href[0] = "type_lucida";
$ss_href[1] = "type_ms";
$ss_href[2] = "type_vera";
if (isset($_COOKIE["styletitle"]) && $_COOKIE["styletitle"] == "Microsoft web fonts") {
	$ss_title[0] = "Microsoft web fonts";
	$ss_title[1] = "Lucida family fonts";
	$ss_title[2] = "Vera family fonts";
	$ss_href[0] = "type_ms";
	$ss_href[1] = "type_lucida";
	$ss_href[2] = "type_vera";
}
if (isset($_COOKIE["styletitle"]) && $_COOKIE["styletitle"] == "Vera family fonts") {
	$ss_title[0] = "Vera family fonts";
	$ss_title[1] = "Microsoft web fonts";
	$ss_title[2] = "Lucida family fonts";
	$ss_href[0] = "type_vera";	
	$ss_href[1] = "type_ms";
	$ss_href[2] = "type_lucida";
}
//echo "<p>cookie styletitle " . $_COOKIE["styletitle"] . "<br />";
//echo "chosen title " .$ss_title[0] . "</p>";
?>
<link type="text/css" media="screen" title="<?php echo $ss_title[0]; ?>"  href="/css/<?php echo $ss_href[0]; ?>.css" rel="stylesheet" />
<link type="text/css" media="screen" title="<?php echo $ss_title[1]; ?>"  href="/css/<?php echo $ss_href[1]; ?>.css" rel="alternate stylesheet" />
<link type="text/css" media="screen" title="<?php echo $ss_title[2]; ?>"  href="/css/<?php echo $ss_href[2]; ?>.css" rel="alternate stylesheet" />

<style type="text/css" media="screen">
<!--
@import url(/css/present_global.css);
-->
</style>
<script src="/js/global.js" type="text/javascript"></script>

<script src="/js/amz.js" type="text/javascript"></script>
<script src="/mint/?js" type="text/javascript"></script>
<script type="text/javascript">var msAccID="0020hjja" </script>
<script src="http://www.mapsurface.com/api/1.0/mapsurface.js" type="text/javascript"></script>

<link rel="top" title="Home page" href="/" />
<link rel="search" title="Search this site" href="/search/" />
<link rel="help" title="Accessiblity details" href="/accessibility/" />
<link rel="author" title="Contact the author, Richard Rutter" href="/contact/" />
<link rel="meta" type="application/rdf+xml" title="FOAF" href="foaf.rdf" />
<link rel="shortcut icon" href="/favicon.ico" />
