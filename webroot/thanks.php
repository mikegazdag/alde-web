<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-bootstrap.php");
$title = "Thank You";
$body_class = 'thanks';

include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/templates/single-col.php");

 require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/php-mail.php");

 // First we set the to address. I would not let anyone put in a to 
 // address in a web form, and neither should you.
 // $to = 'al@allandehaan.com';
  $to = 'gazdag@gmail.com';

 // Then we get the information we need from the $_POST array.
 // This step is not necessary, but in a production environment, 
 // we would process and sanitize this data here, rather than 
 // passing raw post data to the class.
 if (isset($_POST['email'])) {
    $from = $_POST['email'];
    $subject = "ADH.com from $from"; 
 }
 
 if (isset($_POST['user-message'])) {
    $body = $_POST['user-message'];
 }
 
 
 // Then create the ZFmail object using the information from above
 $mail = new ZFmail($to,$from,$subject,$body);

 // Finally, call the object's send method to deliver the mail.
 $mail->send(); 

?>

<div class="container">
    <div class="row"><br><br><br>
        <h1>Thank you!</h1>
    </div>

    <div class="row offset3">
        <p class="lead">Gee thanks for getting in touch. I'll be replying back within a reasonable amount of time if you require me to.</p>
            </div>
    <div>



<?php
include_once($template_footer);
?>
