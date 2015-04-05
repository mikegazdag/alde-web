<?php 
//init template & bootstrap
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

//Set what painting gets displayed
$pid= '0801';

//Load this information from the database
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-bootstrap.php");

/*
	AL EDIT THESE LINKS BELOW
	

*/
//Set the painting specific links in the page

$card->no='';
$card->link = '';
$card->price = '';
$card->size = '';

$poster->no='';
$poster->link = '';
$poster->price = '';
$poster->size = '';

$block->no='';
$block->link = '';
$block->price = '';
$block->size = '';

$paper->no='';
$paper->link = '';
$paper->price = '';
$paper->size = '';

$giclee->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Crest%20Mt%2e%20Sunset%091110801&item_number=1110801&amount=400%2e00&currency_code=CAD&button_subtype=services&shipping=25%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted';
$giclee->price = '425';
$giclee->size = '2 @ 10" x 12", 1 @ 16" x 20"';


//Load the template of the page with the data from above
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-template.php");