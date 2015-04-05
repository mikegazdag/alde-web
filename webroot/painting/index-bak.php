<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");
//init template & bootstrap
$pid=0;
$pid=from_array($_GET['pid']);

$r = mysql_query("SELECT * FROM paintings WHERE pid='".$pid."'")
or die(mysql_error());
$d = mysql_fetch_array($r);

$title = $d['title'];
$body_class = 'westcoast';

include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/templates/single-col.php");
?>

<section class="piece">
  <div class="container">
    <div class="row">
        <div class="span12">

        </div>
        <div class="span12 image">
            <img src="<?php echo '/'.$imgSRC . imgSrcBuilder($d["title"]) .'.png' ?>" alt="<?php echo $d['title'] ?>" width="" heihgt="">
        </div>
    </div>

    <div class="row">
        <div class="span6 post">
            <p><?php echo $d["description"]; ?></p>
        </div>

        <div class="span6 meta">
                <h1><?php echo $d['title'] ?></h1>
                <p><i>Date Created:</i> August, 2010</p>
                <p><i>Type:</i> Acrylic on Canvas</p>
                <p><i>Size:</i> 24" x 24" x 1.5"</p>
        </div>
    </div>
    <br>
    <div class="row meta-sales">

        <div class="span7 pricing">

            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <td class="i">
                            <h2>ART PAPER</h2>
                            <p>High quality macosa print</p>
                        </td>
                        <!-- <td>&nbsp;</td> -->
                        <td class="b">
                            <a href="#"><p><b>$</b>19
                            <span>1:3 10" x 10"</span><p>
                            <div class="pay">Continue to <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"></a></div>
                        </td>
                    </tr>

                    <!-- another -->
                    <tr>
                        <td class="i">
                            <h2>Block Mount</h2>
                            <p>Printed on wood&mdash;made for easy hanging</p>
                        </td>
                        <!-- <td>&nbsp;</td> -->
                        <td class="b">
                            <a href="http://google.com"><p><b>$</b>44
                            <span>1:3 10" x 10"</span><p>
                            <div class="pay">Continue to <span>PayPal</span><!-- <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"> --></a></div>
                        </td>

                    </tr>

                    <!-- another -->
                    <tr>
                        <td class="i">
                            <h2>Art Paper</h2>
                            <p>Museum quality digital print of the original painting</p>
                        </td>
                        <td class="b c">
                            <a href="#"><p><b>$</b>87
                            <span>1:2 15" x 15"</span><p>
                            <div class="pay">Continue to <span>PayPal</span><!-- <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"> --></a></div>
                        </td>
                    </tr>

                       <tr>
                        <td class="i">
                            <h2>Giclee</h2>
                            <p>Museum quality digital print of the original painting</p>
                        </td>
                        <td class="b c">
                            <a href="#"><p><b>$</b>219
                            <span>1:2 15" x 15"</span><p>
                            <div class="pay">Continue to <span>PayPal</span><!-- <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"> --></a></div>
                        </td>
                        <!-- <td class="b">
                            <a href="#"><p><b>$</b>430
                            <span>1:1 35" x 35"</span><p></a>

                            <div class="pay">Continue to <span>PayPal</span></a></div>
                        </td> -->

                    </tr>



                </tbody>
            </table>
        </div>

          <div class="span5 meta-print">
           <div class="content" style="display:none">
                <h4>Block Mount Print</h4>
               <p>Block mount prints are high quaility laser prints on MDF and ready for easy hanging</p>
               <ul class="thumbnails">
                  <li class="span1"><img alt="" src="http://placehold.it/75x100/"></li>
                  <li class="span1"><img alt="" src="http://placehold.it/75x100/"></li>
                  <li class="span1"><img alt="" src="http://placehold.it/75x100/"></li>
                  <li class="span1"><img alt="" src="http://placehold.it/75x100/"></li>
              </ul>
          </div>
        </div>

        <div class="span4">&nbsp;</div>
    </div>

     <div class="row">
                    <div class="span6 sub-gallery">
                        <p><strong>The Rounds</strong></p>
                        <a href="#"><img src="/images/pieces/the-watcher.png" alt=""></a>
                        <a href="#"><img src="/images/pieces/orca-symmetry.png" alt=""></a>
                        <a href="#"><img src="/images/pieces/payzant-creek.png" alt=""></a>
                        <a href="#"><img src="/images/pieces/the-hills-of-sooke.png" alt=""></a>
                        <a href="#"><img src="/images/pieces/starry-starry-night.png" alt=""></a>
                        <a href="#"><img src="/images/pieces/chesterman-beach.png" alt=""></a>
                    </div>
                </div>


</div><!--/.container -->

 <div class="bg"></div>
</section>

<?php
//$js_file = array('jquery.nivo.slider', 'front');
include_once($template_footer);
?>
