<?php
#Automated mailing script. Only for demo. Do not leave active. Could result in spam flagging.
$name='';
$address='';
$subject='';
$message='';

if(isset($_POST) && !empty($_POST)) {
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
  }

  if (isset($_POST['email']) && ($_POST['test-email'] == true)) {
    $adress = $_POST['email'];
  }

  if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];
  }

  if (isset($_POST['message'])) {
    $message = "Dear " . $name . ",
      " . $_POST['message'];
  }
  mail($address, $subject, $message);
}


?>
