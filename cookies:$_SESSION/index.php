<?php
  //begin session at the top of our code
  session_start();

  //filter and set the default for our switch statement
  $action = filter_input(INPUT_GET, 'action');
  if ($action === NULL) {
    $action = 'page1';
  }

  //setup our switch statement using the $action variable
  switch($action) {
    case 'page1':
      include('page1.php');
      break;
    case 'page2':
      include('page2.php');
      break;
    case 'page3':
      include('page3.php');
      break;
  }
?>
