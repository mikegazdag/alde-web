<?php


	$db_host = "localhost";
	$db_user = 'ormazzic_alde';
	$db_pwd = 'drivingtocampbellriver';

	$database = 'ormazzic_deval';
	$table = 'paintings';

	if (!mysql_connect($db_host, $db_user, $db_pwd))
	    die("Can't connect to database");

	if (!mysql_select_db($database))
	    die("Can't select database");

	if (!$database ) {
	//error catch can't connect to db
	        die ("<h2>Unable to connect to the database ($db_name)" . ' at this time</h2>');
    }


?>
