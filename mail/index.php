<?php
$to = 'linkinparkhoney@gmail.com';
$subject = 'This is an email';
$body = 'This is an test email'."\n".'Hope you got it.';
$headers = 'From: Himalaya <linkinparkhoney@gmail.com>';

if (mail($to, $subject, $body, $headers)) {
  echo 'Email has been sent to '.$to;
}
else {
  echo 'Error sending the email';
}
?>
