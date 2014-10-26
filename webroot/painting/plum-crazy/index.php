<?php 
//init template & bootstrap
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

//Set what painting gets displayed
$pid= '1002';

//Load this information from the database
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-bootstrap.php");

/*
	AL EDIT THESE LINKS BELOW
	

*/
//Set the painting specific links in the page
$card->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Plum%20Crazy&item_number=6661002&amount=6%2e00&currency_code=CAD&button_subtype=services&shipping=2%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$card->price = '8';
$card->size = '5" x 7"';


$poster->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Plum%20Crazy&item_number=5551002&amount=25%2e00&currency_code=CAD&button_subtype=services&shipping=5%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$poster->price = '30';
$poster->size = '1:2 15" x 20"';

$block->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Plum%20Crazy&item_number=4441002&amount=65%2e00&currency_code=CAD&button_subtype=services&shipping=15%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$block->price = '80';
$block->size = '12" x 16"';

$paper->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Plum%20Crazy&item_number=3331002&amount=100%2e00&currency_code=CAD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$paper->price = '105';
$paper->size = '18" x 24"';

$giclee->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Plum%20Crazy&item_number=1111002&amount=500%2e00&currency_code=CAD&button_subtype=services&shipping=30%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$giclee->price = '530';
$giclee->size = '30" x 40"';


//Load the template of the page with the data from above
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-template.php");