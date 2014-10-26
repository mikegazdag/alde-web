<?php
header("Location: /");
die();

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");
//init template & bootstrap
$pid=0;
$pid=from_array($_GET['pid']);

// One Table Pull;
$r = mysql_query("SELECT * FROM paintings WHERE pid='".$pid."'")
    or die(mysql_error());
$d = mysql_fetch_array($r);

// Table Join
// $sql =  mysql_query("SELECT * FROM Pricing WHERE pid='".$pid."'")
//     or die(mysql_error());

//$sql = mysql_query("SELECT CONCAT(first_name, last_name) As name FROM people WHERE (CONCAT(first_name, last_name) LIKE '%" . $term . "%')");

$sql = mysql_query("SELECT * FROM pricing WHERE pid = '$pid' ")
    or die(mysql_error());

$object = new stdClass();

$object->pid = $pid;
// $object = new Painting();

/*
Giclee                      111
Giclee - Unstreched         112
Giclee - Small              121
Giclee - Small Unstreched   122
Art Paper                   333
Block Mt.                   444
Poster                      555
Art Card                    666
Box Set -  6 Piece          665

*/
$cards  = new stdClass();
$poster = new stdClass();
$block = new stdClass();
$paper = new stdClass();
$giclee = new stdClass();
$gicleeSmall = new stdClass();

$poster->link = 'baalls';
$poster->price = '14';
$poster->size = '1:3 10" x 10"';
$poster->shipping = '2323';

$block->link = 'baalls';
$block->price = '2323';
$block->shipping = '2323';

$paper->link = 'baalls';
$paper->price = '2323';
$block->shipping = '';

$gicleeSmall->link = 'baalls';
$gicleeSmall->price = '425';
$gicleeSmall->shipping = '20';

$giclee->link = 'baalls';
$giclee->price = '425';
$giclee->shipping = '20';
    
// echo $object->poster->price;

$title = $d['title'] .  " | ";
$collection = $d['collection']; 
//$price = $d['price']; 
$body_class = 'westcoast piece';

include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/templates/single-col.php");
?>

<section class="top">
    <div class="container">
        
        <div class="row">
            <div class="span12 painting">
                <img src="<?php echo '/'.$imgSRC . imgSrcBuilder($d["title"]) .'.png' ?>" alt="<?php echo $d['title'] ?>">
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
                <p><i>Collection:</i> 
                                    <?php // $result = explode("-", $d['collection']);
                                        echo $collection; ?><p>
            </div>
        </div>
</section>
<section class="mid">
    <div class="container">
        <div class="row meta-sales">

            <div class="span7 pricing">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td class="i">
                                <h2>Poster Paper</h2>
                                <p>High quality macosa print</p>
                            </td>
                            
                            <td class="b">
                                <a href="<?php echo $poster->link ?>"><p><b>$</b><?php echo $poster->price ?>
                                <span><?php echo $poster->size ?></span><p>
                                <div class="pay">Continue to <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"></a></div>
                            </td>
                        </tr>

                        <!-- another -->
                        <tr>
                            <td class="i">
                                <h2>Block Mount</h2>
                                <p>Printed on wood&mdash;made for easy hanging</p>
                            </td>
                            
                            <td class="b">
                                <a href="http://google.com"><p><b>$</b>44
                                <span>1:3 10" x 10"</span><p>
                                <div class="pay">Continue to <span>PayPal</span><!-- <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"> --></a></div>
                            </td>

                        </tr>

                        <!-- another -->
                        <tr>
                            <td class="i">
                                <h2>Fine Art Paper</h2>
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
                                <p>Printed Canvas stretched on 1.5' Pine Frame</p>
                            </td>
                            <td class="b c">
                                <a href="#"><p><b>$</b>219
                                <span>1:2 15" x 15"</span><p>
                                <div class="pay">Continue to <span>PayPal</span><!-- <img src="/images/logo-paypal.png" alt="Paypal" width="76" heihgt="20"> --></a></div>
                            </td>
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

        </div>

    </div>
</section>

<?php
//$js_file = array('jquery.nivo.slider', 'front');
include_once($template_footer);
?>
