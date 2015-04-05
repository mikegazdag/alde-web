<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

$title = $d['title'] .  " | ";
$collection = $d['collection'];
$metaDescription = $d['description'];

$body_class = 'westcoast piece ' . $d['url-slug'].' '.$d['primary-color'];
$body_class_color = $d['primary-color'];
$datePainted = "1003";


include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/templates/single-col.php");
?>

<section class="top">
    <div class="container">
        
        <div class="row">
            <div class="span8 painting">
                <img src="<?php echo '/'.$imgSRC . imgSrcBuilder($d["title"]) .'.png' ?>" alt="<?php echo $d['title'] ?>">
            </div>

             <div class="span4 meta">
                <h1><?php echo $d['title'] ?></h1>
                <p><i>Date Created:</i> <?php echo $d['date_year_created']; ?></p>
                <p><i>Type:</i> <?php echo $d['paint-type'] ?></p>
                <p><i>Size:</i> <?php echo $d['size']; ?></p>                
                <div id="primary-color" class="<?php echo $body_class_color; ?>" style="display:hidden"></div>
                <!-- <p><i>Collection:</i>  -->
                                    <?php // $result = explode("-", $d['collection']);
                                        //echo $collection; ?><p>
            </div>

        </div>

        <div class="row">   
             <div class="span12 post">
                <p><?php echo $d["description"]; ?></p>
            </div>           
        </div>
</section>
<section class="mid">
    <div class="container">

        <div class="row sales">
           <div class="span10 sales-info">
                <p class="lead">Available Prints</p>
                <p>All prices include shipping and handling. Purchase with <img src="/images/logo-paypal.png" alt="Paypal" width="76" height="20"></p>
           </div>
        </div>
        
        <div class="row">
            <div class="span10 border">&nbsp;</div>
        </div>
        
        <div class="row meta-sales">

            <div class="span7 pricing">
                <table class="table table-condensed">
                    <tbody>


                        <!-- art cards -->
                        <?php if (!isset($card->no) ): ?>
                        <tr>
                            <td class="i">
                                <h2>Art Cards</h2>
                                <p>Fine Art card in sleeve with envelope</p>
                            </td>
                            
                            <td class="b">
                                <a href="<?php echo $card->link ?>"><p><b>$</b><span class="price"><?php echo $card->price ?></span>
                                <span><?php echo $card->size ?></span><p>
                                <div class="pay">Click to <span>Buy Now!</span></a></div>
                            </td>
                        </tr>
                        <?php endif; ?>


                        <!-- Poster paper-->
                        <?php if (!isset($poster->no) ): ?>
                        <tr>
                            <td class="i">
                                <h2>Poster Paper</h2>
                                <p>High quality macosa print</p>
                            </td>
                            
                            <td class="b">
                                <a href="<?php echo $poster->link ?>"><p><b>$</b><span class="price"><?php echo $poster->price ?></span>
                                <span><?php echo $poster->size ?></span><p>
                                <div class="pay">Click to <span>Buy Now!</span></a></div>
                            </td>
                        </tr>
                        <?php endif; ?>


                        <!-- block mount -->
                        <?php if (!isset($block->no) ): ?>
                        <tr>
                            <td class="i">
                                <h2>Block Mount</h2>
                                <p>Printed on wood&mdash;made for easy hanging</p>
                            </td>
                            
                            <td class="b">
                                <a href="<?php echo $block->link ?>"><p><b>$</b><span class="price"><?php echo $block->price ?></span>
                                <span><?php echo $block->size ?></span><p>
                                <div class="pay">Click to <span>Buy Now!</span></a></div>
                            </td>

                        </tr>
                        <?php endif; ?>


                        <!-- fine paper -->
                        <?php if (!isset($paper->no) ): ?>
                        <tr>
                            <td class="i">
                                <h2>Fine Art Paper</h2>
                                <p>Museum quality digital print of the original painting</p>
                            </td>
                            <td class="b c">
                                <a href="<?php echo $paper->link ?>"><p><b>$</b><span class="price"><?php echo $paper->price ?></span>
                                <span><?php echo $paper->size ?></span><p>
                                <div class="pay">Click to <span>Buy Now!</span></a></div>
                            </td>
                        </tr>
                        <?php endif; ?>

                        <!-- giclee -->
                        <?php if (!isset($giclee->no) ): ?>
                        <tr>
                            <td class="i">
                                <h2>Giclee</h2>
                                <p>Printed Canvas stretched on 1.5' Pine Frame</p>
                            </td>
                            <td class="b c">
                                <a href="<?php echo $giclee->link ?>"><p><b>$</b><span class="price"><?php echo $giclee->price ?></span>
                                <span><?php echo $giclee->size ?></span><p>
                                <div class="pay">Click to <span>Buy Now!</span></a></div>
                            </td>
                        </tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>

            <div class="span5 meta-print">
                <div class="content" style="display:none">
                    <h4>Block Mount Print</h4>
                    <p>Block mount prints are high quality laser prints on MDF and ready for easy hanging</p>
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
