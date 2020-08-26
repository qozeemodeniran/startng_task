<?php

 if(isset($_POST['send']))
 {
  $fullName = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $track = $_POST['track'];
  $message = $_POST['comment'];
  $text = $name . "," . $email . "\n";
  $fp = fopen('message.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';

    }
fclose ($fp);    
}
?>