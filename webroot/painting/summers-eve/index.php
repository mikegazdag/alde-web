<?php 
//init template & bootstrap
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

//Set what painting gets displayed
$pid= '0802';

//Load this information from the database
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-bootstrap.php");

/*
	AL EDIT THESE LINKS BELOW
	

*/
//Set the painting specific links in the page
$card->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Summers%20Eve&item_number=6660802&amount=6%2e00&currency_code=CAD&button_subtype=services&shipping=2%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$card->price = '8';
$card->size = '5" x 7"';


$poster->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Summers%20Eve&item_number=5550802&amount=22%2e00&currency_code=CAD&button_subtype=services&shipping=5%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$poster->price = '27';
$poster->size = '1:2 12" x 18"';

$block->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Summers%20Eve&item_number=4440802&amount=60%2e00&currency_code=CAD&button_subtype=services&shipping=10%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$block->price = '70';
$block->size = '10" x 15"';

$paper->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Summers%20Eve&item_number=3330802&amount=90%2e00&currency_code=CAD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$paper->price = '100';
$paper->size = '16" x 24"';

$giclee->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Summers%20Eve&item_number=1110802&amount=425%2e00&currency_code=CAD&button_subtype=services&shipping=20%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$giclee->price = '445';
$giclee->size = '24" x 36"';


//Load the template of the page with the data from above
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-template.php");