<?php
$r = mysql_query("SELECT * FROM paintings WHERE pid='".$pid."'")
    or die(mysql_error());
$d = mysql_fetch_array($r);

$card  = new stdClass();
$poster = new stdClass();
$block = new stdClass();
$paper = new stdClass();
$giclee = new stdClass();
$gicleeSmall = new stdClass();