<?php $dr = $_SERVER["DOCUMENT_ROOT"] . "/2007"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <title>Contact (dConstruct 2007)</title>

<?php include("../includes/head.inc.php"); ?>

<?php include("../includes/switcherarrays.inc.php"); ?>
<?php include("../includes/csslinks.inc.php"); ?>

</head>

<body class="contact">

<div id="container">

<?php include ("../includes/timeline.inc.php"); ?>
 
 <div id="branding">
  <h1><a href="http://2007.dconstruct.org/">dConstruct 2007</a></h1>
  <h2>Designing the User Experience </h2>
 </div><!-- #branding -->
 
<?php include ("../includes/nav.inc.php"); ?>
 
 <div id="picstrip">
  <div id="leftnob"></div>
  <div id="rightnob"></div>
  <div id="pi-date">7th September at Brighton Dome</div>
  <!--<div id="pi-real"><img src="/images/postit.png" alt="7th September at Brighton Dome" width="320" height="210" /></div>-->
 </div><!-- #picstrip -->
 
 <div id="content">
  <div id="mainstuff">
  <div id="text">

  <h3>Contact</h3>
  
  <hr />

<?php
include("../includes/modules/feedback/index.php");
?>

  </div><!-- #text -->
 
  <div id="foottop"></div>
  
<?php include("../includes/bigfooter.inc.php"); ?>
  
 </div><!-- #mainstuff -->


 </div><!-- #content -->

</div><!-- #container -->


<?php include("../includes/urchin.inc.php"); ?>
</body>
</html>