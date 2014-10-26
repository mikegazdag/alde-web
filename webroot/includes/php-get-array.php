<?php 

function from_array($x=null) {
  if(!isset($x)) return null;
  else if(is_string($x)) return mysql_real_escape_string($x);
  else if(is_array($x)) {
    foreach($x as $k=>$v) {
      $k2=mysql_real_escape_string($k);
      if($k!=$k2) unset($x[$k]);
      $x[$k2]=from_array($v);
    }
    return $x;
  }
}
?>