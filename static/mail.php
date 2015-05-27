<?php
#Automated mailing script. Only for demo. Do not leave active. Could result in spam flagging.
$to='';
$subject='';
$name='';
$message='';
$header = 'From: webmaster@silverado.com';

if(isset($_POST) && !empty($_POST)) {
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
  }

  if (isset($_POST['email']) && ($_POST['test-email'] == true)) {
    $to = $_POST['email'];
  }

  if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];
  }

  if (isset($_POST['message'])) {
    $message = "Dear " . $name . ",
      " . $_POST['message'];
  }
}

mail($to, $subject, $message, $header);

?>
