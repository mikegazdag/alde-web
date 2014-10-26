<?php
$title = "Allan De Haan Art, West Coast Interpretational";
//$css_file = array('front','jquery-flexslider');
$body_class = 'homepage';
require_once($_SERVER['DOCUMENT_ROOT']."/includes/templates/single-col.php");

	include_once("includes/php-get-array.php");
	$cid='0';
	$pid='0';
	$slideshow='1';
?>

	<div class="container">
		<div class="hero-unit">
			<h1><span>A</span>llan De Haan Art</h1>
			<img src="/images/allandehaan-art-logo.png" width="514" height="303" alt="Allan De Haan Art" id="logo" class="z-bot">
			<h2>West Coast Interpretational</h2>

			<div class="row-fluid">
				<ul class="menu hori span12">
					<?php include_once($site_nav) ?>
				</ul>
			</div>

		</div>

	</div>

	<div class="scene1">

		<div class="row-fluid">
			<div class="pointer span2 offset5">
				<div class="triangle"></div>
				<div class="triangle2"></div>
			</div>
		</div>

		<div class="mmoon"></div>
		<div class="ggoose">
			<p class="baby"></p>
		</div>
		<div class="ttrees"></div>
		<div class="rectangle"></div>
		<div class="oval"></div>


	</div>


<hr>
<hr>
<hr>
<hr>
<hr>

    <div id="header">
      <div class="section">

	<h1 class="z-top"><span>A</span>llan De Haan Art</h1>
	<img src="/images/allandehaan-art-logo.png" width="514" height="303" alt="Allan De Haan Art" id="logo" class="z-bot">

	<h2>West Coast Interpretational</h2>

	<ul class="menu hori color">
        <?php include ($site_nav); ?>
      </ul>


    <img src="/images/arrow-down.png" width="88" height="79" alt="">


	<div class="section wrap-mogo">
		<div class="z-bot moon"></div>
		<div class="z-top goose"></div>
	</div>

      </div>
    </div><!--/#header -->

<div id="main">
    <div class="section intro">
<!-- 	<h2 class="accents"><span class="color">Recent Art Work</span></h2>
 --><div class="flexslider">
	   <ul class="slides">
	     <?php
	  //     	$result = mysql_query("SELECT * FROM paintings WHERE slideshow='".$slideshow."'")
	  //     		or die(mysql_error());

	  //     	while($row = mysql_fetch_array($result)) {
	  //     		//echo("<img src='../".$imgSRC.imgSrcBuilder($row["title"]) .".png' alt='' title='".$row["title"] ."'/>\n");
	  // 		echo("\t\t\t".
	  //     		"<li>\n".
	  //     		"\t\t\t\t".
	  //     		"<a href='/details/?pid=".$row['pid']."'>".
	  //     		"<img src='/" .$imgSRC. imgSrcBuilder($row["title"]) .".png'"." alt='' />\n".
	  //     		"</a>".
	  //     		"\t\t\t\t".
	  //     		"<p class='flex-caption'>".
	  //     		"<a href='/details/?pid=".
	  //     		$row['pid']."'>" . $row['title'] . "</a>"."</p>\n".
	  //     		"\t\t\t".
	  //     		"</li>\n\n"
	  //     		);
	  //       }
			// mysql_free_result($result);
	    ?>
	    	<li><img src="/images/pieces/chesterman-beach.png"></li>
	       </ul>
	  </div>

    </div>


	<div class="section-empty z-bot">&nbsp;</div>

	 <div class="section events">
	    <h2 class="color">Where to find my art?</h2>

		<div class="event present">
			<h3>Latte One</h3>

			<p>2000 Cadboro Bay Rd</p>
			<p>Victoria, BC</p>

			<h4>Showing:</h4>

			<p class="date">June 01-30, 2012</p>
		</div>

		<div class="event past">
			<h3>Moka House</h3>

			<p>@ SHOAL POINT</p>
			<p>VICTORIA, BC</p>

			<h4>Showed:</h4>

			<p class="date">June 01-30, 2012</p>
		</div>

		<div class="event past">
			<h3>Latte One</h3>

			<p>2000 Cadboro Bay Rd</p>
			<p>Victoria, BC</p>

			<h4>Showing:</h4>

			<p class="date">June 01-30, 2012</p>
		</div>


		<?php
		// $i = 1;
		// $r = mysql_query("SELECT * FROM events") or die(mysql_error());

		// 	while($row = mysql_fetch_array($r)) {

		// 		if($i <= 1) {
		?>
<!--
				<div class="event present">
					<h3><?php echo $row['venue'] ?></h3>

					<p><?php echo $row['location'] ?></p>
					<p><?php echo $row['city'] ?></p>

					<h4>Showing:</h4>

					<p class="date"><?php echo $row['showing-month']?> <?php echo $row['showing-date']?></p>
				</div>
 -->
			<?php
				// }
				// else {
				// //echo the past events

				// $currentMonth = date("M");
				// $showingMonth = $row['showing-month'];

				// //hide the future events
				// if ($currentMonth >= $showingMonth) {

				// } else {

				?>
<!-- 				<div class="event past">
					<h3><?php echo $row['venue'] ?></h3>

					<p><?php echo $row['location'] ?></p>
					<p><?php echo $row['city'] ?></p>
					<h4>Showed:</h4>

					<p class="date"><?php echo $row['showing-month']?> <?php echo $row['showing-date']?></p>
				</div>
 -->			<?php
			// 	}

			// 	}
			// ++$i;

			// }
		?>


	</div>


</div> <!-- /#main -->

	<div id="footer">
		<div class="section">
		  <ul class="menu hori color">
		    <?php include ($site_nav); ?>
		  </ul>

<?php
//$js_file = array('jquery.flexslider-min','front');
include_once($template_footer);
?>
