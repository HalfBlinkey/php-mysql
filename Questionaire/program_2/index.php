<?php

//set default values to be used when page first loads
$data = 'customer';

//take action based on variable in POST array
$data = filter_input(INPUT_POST, 'data');
switch ($data) {
    case 'customer':
      $message = 'We love our regular customers.';
      break;
    case 'friend':
      $message = 'Thank your friend for us.';
      break;
    case 'television':
      $message = 'We are glad our television adds are working.';
      break;
    case 'net':
      $message = 'We work hard to be seen on Google.';
      break;
}
include 'display_results.php';
?>
