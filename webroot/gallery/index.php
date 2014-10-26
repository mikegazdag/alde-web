<!--
Devel notes:

	-) Add MySQL - PHP
	-) PHP to assign Title tag, id to .figure,
		-> PHP -- load all id's into array, give 1 of 10 position possibilites

-->

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");
$title = "West Coast Gallery";
$css_file = array('gallery');
$body_class = 'gallery';

	$cid='0';
	$pid='0';

	if(!isset($cid)) {
			$cid=from_array($_GET['cid']);
	}

include_once($_SERVER['DOCUMENT_ROOT']."/includes/templates/single-col.php");
?>

<div id="header">
      <div class="section">
        <h1><span>W</span>est Coast</h1>
        <h2 class="color">Gallery</h2>
      </div>
      <ul class="menu hori color">
        <?php include ($site_nav); ?>
      </ul>
</div><!--/#header -->

 <div id="main">
      <div class="section">

		<div class="arrange">
<!-- Dynamtics bits -->
<?php

if(empty($cid))
	{
		$result = mysql_query("SELECT * FROM paintings WHERE gallery_set='west_coast'")
			or die(mysql_error());

		$i=10;
		while($row = mysql_fetch_array($result)) {

		if ($i&1) {  $class='odd'; }
		else { $class='even'; }

		echo (//"<li>\n".
			"\t\t\t".
			"<div class='figure ". $class ."' id='figure-" .$row["pid"]."'>\n".
			"\t\t\t\t".
			"<a href='/painting/?pid=".$row['pid']."' class='fi'>\n".
			"\t\t\t\t\t".
			"<img src='../" .$imgSRC. imgSrcBuilder($row["title"]) .".png'"."alt='' class='painting' />\n".
			"\t\t\t\t".
			"</a>\n".
			"\t\t\t\t".
			"<p class='figcaption'>\n".
			"\t\t\t\t\t".
			"<a href='/painting/?pid=".$row['pid']."' class='button'>".
			$row['title'] . "</a>\n".
			"\t\t\t\t".
			"</p>\n".
			"\t\t\t".
			"</div>\n".
			"\t\t"
			//"</li>\n"
			);

			$i++;
		}

	}

?>
		</div> <!-- /.arrange -->
	</div>
    <div class="z-bot mountains"></div>
	<div class="z-bot tribal">
		<div class="z-top chairs"></div>
	</div>

</div><!-- /#main -->
<div id="footer">
	<div class="z-top planks-of-wood"></div>
	<div class="section">
	  <ul class="nav hori color">
	    <?php include ($site_nav); ?>
	  </ul>

<?php
include_once($template_footer);
?>
