<?php 
//init template & bootstrap
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

//Set what painting gets displayed
$pid= '0804';

//Load this information from the database
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-bootstrap.php");

/*
	AL EDIT THESE LINKS BELOW
	

*/
//Set the painting specific links in the page
$card->no='';
$card->link = 'N/A';
$card->price = 'N/A';
$card->size = 'N/A';



$poster->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Raven%27s%20Roost&item_number=5550804&amount=23%2e00&currency_code=CAD&button_subtype=services&shipping=5%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$poster->price = '28';
$poster->size = '1:2 8" x 20"';

$block->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Raven%27s%20Roost&item_number=4440804&amount=65%2e00&currency_code=CAD&button_subtype=services&shipping=10%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$block->price = '75';
$block->size = '8" x 20"';

$paper->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Raven%27s%20Roost&item_number=3330804&amount=140%2e00&currency_code=CAD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$paper->price = '155';
$paper->size = '16" x 40"';

$giclee->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Raven%27s%20Roost&item_number=1110804&amount=475%2e00&currency_code=CAD&button_subtype=services&shipping=25%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$giclee->price = '500';
$giclee->size = '24" x 60"';


//Load the template of the page with the data from above
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-template.php");