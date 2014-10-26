<?php 
//init template & bootstrap
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");

//Set what painting gets displayed
$pid= '0906';

//Load this information from the database
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-bootstrap.php");

/*
	AL EDIT THESE LINKS BELOW
	

*/
//Set the painting specific links in the page
$card->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Orca%20Symmetry&item_number=6660906&amount=5%2e00&currency_code=CAD&button_subtype=services&shipping=2%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$card->price = '7';
$card->size = '5" x 5"';


$poster->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Orca%20Symmetry&item_number=5550906&amount=20%2e00&currency_code=CAD&button_subtype=services&shipping=5%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$poster->price = '25';
$poster->size = '1:2 12" x 12"';

$block->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Orca%20Symmetry&item_number=4440906&amount=55%2e00&currency_code=CAD&button_subtype=services&shipping=10%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$block->price = '65';
$block->size = '10" x 10"';

$paper->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Orca%20Symmetry&item_number=3330906&amount=80%2e00&currency_code=CAD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$paper->price = '85';
$paper->size = '16" x 16"';

$giclee->link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=HU5TGYCBEHS8N&lc=CA&item_name=Orca%20Symmetry&item_number=1110906&amount=350%2e00&currency_code=CAD&button_subtype=services&shipping=15%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted															';
$giclee->price = '365';
$giclee->size = '24" x 24"';


//Load the template of the page with the data from above
require_once($_SERVER['DOCUMENT_ROOT'] . "/painting/painting-template.php");