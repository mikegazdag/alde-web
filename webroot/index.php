<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

$title = "Allan De Haan Art, West Coast Interpretational";
$metaDescription = "Allan De Haans Art from West Coast Interpretational paintings to digital art.";

//$css_file = array('front','jquery-flexslider');
$body_class = 'front';

include($_SERVER['DOCUMENT_ROOT']."/includes/templates/single-col.php");

	$cid='0';
	$pid='0';
	//$slideshow='1';
?>
<section class="homepage">
	<div class="container">
		<!-- <div class="row">
				<ul class="menu enhance hori span12">
					<?php //include($site_nav) ?>
				</ul>
			</div> -->

		<div class="hero-unit">
			<hgroup>
				<h1><span>A</span>llan De Haan Art</h1>
				<img src="/images/allandehaan-art-logo.png" width="514" height="303" alt="Allan De Haan Art" id="logo" class="z-bot">
				<h2>West Coast Interpretational</h2>
			</hgroup>

			<div class="row">
				<nav class="menu hori span12">
					<?php include($site_nav) ?>
				</nav>
			</div>

			<div class="row">
				<div class="span12">
					<div class="pointer">
						<div class="triangle"></div>
						<div class="triangle2"></div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="scene-1">
		<div class="prop moon"></div>
		<div class="prop owl"></div>		
		<div class="prop rectangle"></div>
		<div class="prop oval"></div>
	</div>
	
</section>

<br><br><br>
<section class="gallery" id="gallery">
	<div class="container">
		<div class="row">
			
			<div class="piece west-coast-pieces-crest-mt-sunset">
				<div class="meta">
					<a href="/painting/crest-mt-sunset"><h3>Crest Mt Sunset</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-silent-shadows">
				<div class="meta">
					<a href="/painting/silent-shadows"><h3>Silent Shadows</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-summers-eve">
				<div class="meta">
					<a href="/painting/summers-eve"><h3>Summer's Eve</h3></a>
				</div>
			</div>
			
			<div class="piece west-coast-pieces-ravens-roost">
				<div class="meta">
					<a href="/painting/ravens-roost"><h3>Raven's Roost</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-chin-beach-west">
				<div class="meta">
					<a href="/painting/chin-beach-west"><h3>Chin Beach West</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-plum-crazy">
				<div class="meta">
					<a href="/painting/plum-crazy"><h3>Plum Crazy</h3></a>
				</div>
			</div>

			<div class="piece west-coast-pieces-chesterman-beach the-rounds">
				<div class="meta">
					<a href="/painting/chesterman-beach"><h3>Chesterman Beach</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-hills-of-sooke the-rounds">
				<div class="meta">
					<a href="/painting/hills-of-sooke"><h3>Hills of Sooke</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-orca-symmetry the-rounds">
				<div class="meta">
					<a href="/painting/orca-symmetry"><h3>Orca Symmetry</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-payzant-creek the-rounds">
				<div class="meta">
					<a href="/painting/payzant-creek"><h3>Payzant Creek</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-starry-night the-rounds">
				<div class="meta">
					<a href="/painting/starry-night"><h3>Starry Nights</h3></a>
				</div>
			</div>
			<div class="piece west-coast-pieces-watcher the-rounds">
				<div class="meta">
					<a href="/painting/watcher"><h3>The Watcher</h3></a>
				</div>
			</div>

		</div>

		<div class="side left"></div>
		<div class="side right"></div> 
	</div>
</section>

<section class="scene-2 container">
	<div class="prop coromorant"></div>
	<div class="prop color"></div>
</section>

<div class="following-eye container">
	<div class="row">

		<div class="wrap">
			<div class="eyeball">
			    <div class="iris"></div>
			</div>
			<div class="base"></div>

				<div class="prop gloss"></div>
				<div class="prop clam"></div>

		</div>

		<div class="row">

		

			</div>
		

	</div>
</div>

<section class="the-end">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h3>THE END</h3>

				<p class="body-text">Thank you for visiting, check back soon for updates!</p>
			</div>
		</div>
	</div>
</section>

<?php
//$js_file = array('jquery.xeyes-1.3.min', 'jquery-lettering');
include_once($template_footer);
?>
