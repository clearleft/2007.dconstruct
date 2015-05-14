<?php $dr = $_SERVER["DOCUMENT_ROOT"] . "/2007"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <title>Location (dConstruct 2007)</title>

<?php include("../includes/head.inc.php"); ?>

<?php
	$hostname = $_SERVER["HTTP_HOST"];
	switch ($hostname) {
		case "dconstruct.dev":
		   $key = "ABQIAAAABTXyWulIY6MBY6a26fe05BTPL1bDnADF7iT6vdFPhv_HGD71IBQZ2w3Q8NENJNbLSlTQKl2oWvQBhg";
		   break;
		case "2007.dconstruct.dev":
		   $key = "ABQIAAAABTXyWulIY6MBY6a26fe05BQjxmioS0wYVdQov_ObmtO7PWA5EhRRE-Y-uoXfE3ypooCFi33mzXDDuA";
		   break;
		default:
		   $key = "ABQIAAAABTXyWulIY6MBY6a26fe05BRzRyzAwFGoBv8pBRApzgExIEdmTBSuJ7RD_TqYE2usqHEt0rNidLmsQg";
	}
	echo "<script src='http://maps.google.com/maps?file=api&amp;v=1&amp;key=$key' type='text/javascript'></script>";
	?>
	

 <script type="text/javascript" src="/js/map.js"></script>

<?php include("../includes/switcherarrays.inc.php"); ?>
<?php include("../includes/csslinks.inc.php"); ?>

</head>

<body class="location">

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
  
  <h3>Location</h3>
  
  <hr />
  
  <h4 class="vcard"><span class="fn org">Brighton Dome</span>, <span class="adr"><span class="street-address">Church Street</span>, <span class="locality">Brighton</span> <span class="postal-code">BN1 1UG</span>, <span class="country-name">UK</span></span></h4>
  
<ol id="places" class="xoxo">

<li>

	<h4>Travelling</h4>
	
	<ul>
	<li class="vcard">
		<span class="fn org">Brighton Train Station</span>,
		<abbr class="adr geo" title="50.828907;-0.140623">
		<span class="street-address">Queens Road</span>
		</abbr>
	</li>
	</ul>

</li>
<li>

	<h4>Workshops</h4>
	
	<ul>
	<li class="vcard">
		<span class="fn org">Clearleft</span>,
		<abbr class="adr geo" title="50.82636;-0.1382">
		<span class="street-address">28 Kensington Street</span>
		</abbr>
	</li>
	</ul>

</li>
<li>

	<h4>Pre-party</h4>
	
	<ul>
	<li class="vcard">
		<span class="fn org">Heist</span>,
		<abbr class="adr geo" title="50.8225;-0.1437">
		<span class="street-address">57 West Street</span>
		</abbr>
	</li>
	</ul>

</li>
<li>

	<h4>After-party</h4>
	
	<ul>
	<li class="vcard">
		<span class="fn org">Above Audio</span>,
		<abbr class="adr geo" title="50.8199;-0.1345">
		<span class="street-address">10 Marine Parade</span>
		</abbr>
	</li>
	</ul>

</li>
<li style="float: left;">

	<h4><a href="http://maps.google.co.uk/maps?q=hotels&amp;near=BN1+1UE">Accommodation</a></h4>
	
	<ul>
	<li>
		<p class="vcard">
		<span class="fn org">Old Ship Hotel</span>,
		<abbr class="adr geo" title="50.820401;-0.141953">
		<span class="street-address">31&ndash;38 Kings Road</span>
		<br />
		<span class="tel">+44 (0)1273 329 001</span>
		</abbr>
		<a class="url" href="http://www.paramount-hotels.co.uk/hotels/southern-england/paramount-old-ship-hotel/">website</a>
		</p>
		<p class="summary" title="This rate is subject to availability.">We have arranged preferred rates for the nights of Thursday 6th and Friday 7th September. Quote <q>Clearleft rate</q> when you book.</p>
	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Lansdowne Place Hotel</span>,
		<abbr class="adr geo" title="50.823993;-0.161619">
		<span class="street-address">1 Lansdowne Place</span>
		<br />
		<span class="tel">+44 (0)1273 736 266</span>
		</abbr>
		<a class="url" href="http://www.lansdowneplace.co.uk/">website</a>
		</p>
		<p class="summary" title="This rate is subject to availability.">We have arranged preferred rates for the nights of Thursday 6th and Friday 7th September. Quote <q>dConstruct</q> when you book.</p>
	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Blanch House</span>,
		<abbr class="adr geo" title="50.819486;-0.129572">
		<span class="street-address">7 Atlingworth Street</span>
		<br />
		<span class="tel">+44 (0)1273 603 504</span>
		</abbr>
		<a class="url" href="http://www.blanchhouse.co.uk/">website</a>
		</p>
		<p class="summary">Rooms from &pound;100&ndash;&pound;190 per night (week nights). Call for <abbr title="Friday">Fri</abbr>/<abbr title="Saturday">Sat</abbr> night rates</p>
	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Drakes Hotel</span>,
		<abbr class="adr geo" title="50.819235;-0.130742">
		<span class="street-address">43&ndash;44 Marine Parade</span>
		<br />
		<span class="tel">+44 (0)1273 696 934</span>
		</abbr>
		<a class="url" href="http://www.drakesofbrighton.com/">website</a>
		</p>
		<p class="summary">Rooms from &pound;95 (week nights) or from &pound;125 (<abbr title="Friday">Fri</abbr>/<abbr title="Saturday">Sat</abbr>)</p>
	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Five Hotel</span>,
		<abbr class="adr geo" title="50.819933;-0.131997">
		<span class="street-address">5 New Steine</span>
		<br />
		<span class="tel">+44 (0)1273 686 547</span>
		</abbr>
		<a class="url" href="http://www.fivehotel.co.uk ">website</a>
		</p>
		<p class="summary">Rooms from &pound;35&ndash;&pound;60 <abbr title="per person">pp</abbr>/<abbr title="per night">pn</abbr></p>
	</li>
	</ul>

</li>

<li style="float: left;">

	<h4><a href="http://maps.google.co.uk/maps?q=restaurants&amp;near=BN1+1UE">Eating</a></h4>
	
	<ul>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">E-Kagen</span>,
		<abbr class="adr geo" title="50.8279;-0.13785">
		<span class="street-address">22&ndash;23 Sydney Street</span>
		</abbr>
		</p>
		<p class="summary">Superb Japenese food served in an unassuming setting. <span class="rating">5</span>/5</p>
	</li>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">Wagamama Noodle Bar</span>,
		<abbr class="adr geo" title="50.82565;-0.13845">
		<span class="street-address">Kensington St</span>
		</abbr>
		</p>
		<p class="summary">Asian food chain with lots of seating. <span class="rating">3</span>/5</p>
	</li>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">Gourmet Burger Company</span>,
		<abbr class="adr geo" title="50.824854;-0.139335">
		<span class="street-address">44&ndash;47 Gardner Street</span>
		</abbr>
		</p>
		<p class="summary">Not bad for a burger chain. <span class="rating">3</span>/5</p>
	</li>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">Strada</span>,
		<abbr class="adr geo" title="50.822868;-0.139915">
		<span class="street-address">160&ndash;161 North Street</span>
		</abbr>
		</p>
		<p class="summary">Reliable Italian fare. <span class="rating">4</span>/5</p>
	</li>
	
	</ul>

</li>
<li>

	<h4><a href="http://www.looseconnection.com/brighton/">Free WiFi</a></h4>
	
	<ul>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">Earth and Stars</span>,
		<abbr class="adr geo" title="50.82476;-0.14221">
		<span class="street-address">46 Windsor Street</span>
		</abbr>
		</p>
		<p class="summary">Locally sourced food and organic beer. <span class="rating">4</span>/5</p>
	</li>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">Riki-Tik</span>,
		<abbr class="adr geo" title="50.8237;-0.14025">
		<span class="street-address">18a Bond Street</span>
		</abbr>
		</p>
		<p class="summary">The kids like this trendy bar. <span class="rating">3</span>/5</p>
	</li>
	
	<li class="hreview">
		<p class="item vcard">
		<span class="fn org">Pavilion Gardens Caf&eacute;</span>,
		<abbr class="adr geo" title="50.823187;-0.1391">
		<span class="street-address">New Road</span>
		</abbr>
		</p>
		<p class="summary">This outdoor caf&eacute; might be a little chilly in September. <span class="rating">3</span>/5</p>
	</li>
	
	</ul>

</li>

</ol>
  </div><!-- #text -->
 
  <div id="foottop" style="clear: both;"></div>
  
<?php include("../includes/bigfooter.inc.php"); ?>
  
 </div><!-- #mainstuff -->


 </div><!-- #content -->

</div><!-- #container -->


<?php include("../includes/urchin.inc.php"); ?>
</body>
</html>