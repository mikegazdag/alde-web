	<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html-contact-form.php"); ?> 

	<footer id="footer">
		<div class="container">
			<div class="row">
			  <nav class="menu hori span12">
			    <?php include ($site_nav); ?>
			  </nav>
			</div>

		<!-- /start of footer -->
			<div class="row links">
				
				<div class="span3">
					
					<div class="link faceboook">
						<a href="https://www.facebook.com/allan.d.haan?fref=aldewebsite" target="_blank">
						<i class="icon-faceboook"><span></span></i>
							Follow me<br>on Facebook
						</a>
					</div>

					<div class="link artbox">
						<a href="http://loupeimaging.com/" target="_blank">
						<i class="icon-artbox"><span></span></i>
							Printing by<br>ArtBox
						</a>
					</div>

					<div class="link cordova">
						<a href="http://www.matticksfarm.com/merchants/cordova%20hair/cordovahair.htm" target="_blank">
						<i class="icon-cordova"><span></span></i>
						Haircuts by<br>Cordova Hair</a>
					</div>

					<div class="link bcferries">
						<a href="http://www.bcferries.com/" target="_blank">
						<i class="icon-bcferries"><span></span></i>
						BC Ferries<br>
						<em>Available in the gift shop aboard most vessels</em>
						</a>
					</div>

				</div>

				<div class="span9 events">
					<h4>Find my artwork at these establishments:</h4>
					<div class="row">
						<ul class="unstyled inline ">

							<li class="span2">
								<p><a href="http://www.mokahouse.com/?page_id=35" target="_blank"><strong>Moka House</strong> 
								<span>Cook Street Village<br>
								Victoria, BC</span></a> </p>
							</li>

							<li class="span2">
								<p><a href="http://www.starbucks.com/store/945/" target="_blank"><strong>Starbucks</strong>
								<span>Cadboro Bay<br>
								Victoria, BC</span></a></p>
							</li>

							<li class="span2">
								<p><a href="http://www.seriouscoffee.com/south-island/oak-bay" target="_blank"><strong>Serious Coffee</strong> 
								<span>Oak Bay<br>
								Victoria, BC</span></a></p>
							</li>

							<li class="span2">
								<p><a href="http://www.sidestreetstudio.com/" target="_blank"><strong>Side Street Studio</strong> 
								<span>Oak Bay<br>
								Victoria, BC</span></a></p>
							</li>

							<li class="span2">
								<p><a href="http://www.sundancejavabar.ca/" target="_blank"><strong>Sundance Java Bar</strong> 
								<span>Willow Point<br>
								Campbell River, BC</span></a></p>
							</li>

							<li class="span2">
								<p><a href="http://www.yelp.ca/biz/impressions-custom-framing-ltd-campbell-river" target="_blank"><strong>Impression Art &amp; Framing</strong> 
								<span>990 Shoppers Row<br>
								Campbell River, BC</span></a></p>
							</li>

							<li class="span2">
								<p><a href="http://www.crmuseum.ca" target="_blank"><strong>Campbell River Museum</strong>
								<span>470 Island Hwy<br>
								Campbell River, BC</span></a></p>
							</a></li>
							<li class="span2">
								<p><a href="http://www.comoxvalleyartgallery.com" target="_blank"><strong>Comox Valley Art Gallery</strong> 
								<span>580 Duncan Ave<br>
								Courtenay, BC</span></a></p>
							</li>
<!-- 
							<li class="span5">
								<p><a href="http://www.bcferries.com"><strong>BC Ferries</strong>
								
								</a></p>
								
							</li> -->

						</ul>
					</div>
				</div>


			</div>

			<div class="row legal-message">
				<p>All images &copy; <?php echo date("Y"); ?> Allan De Haan</p>
			</div>

	</div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript">if (typeof jQuery == 'undefined') { document.write(unescape("%3Cscript src='/js/vendor/jquery.min.js' type='text/javascript'%3E%3C/script%3E")); }</script>

<script src="/js/site-plugins.min.js"></script>
<?php if(isset($js_file)) {
	if(is_string($js_file)) {
		$js_files = array($js_file);
	} else {
		$js_files = $js_file;
	}

	foreach($js_files as $js_file): ?>
<script src="/js/<?php echo $js_file; ?>.js"></script>
	<?php endforeach;
} ?>

<script src="/js/site.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-29049040-1']);_gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
