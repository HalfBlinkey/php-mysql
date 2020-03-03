<?php
  //retrieve the session ID
  $id = session_id();

  //assign the string "Hello World" to the session array
  //along with two other cookkies
  $_SESSION['c1'] = 'White Macadamia';
  $_SESSION['c2'] = 'Chocolate chip';
  $_SESSION['c3'] = 'Oatmeal Raisin';

  //retrive our hello world cookie for display
  $c1 = $_SESSION['c1'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page #1</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Page #1</h1>

            <div class="data">
            <span><?php echo "The session id: $id"; ?></span><br><br>

            <span><?php echo "The contents of session array: $c1"; ?></span><br><br>

            <span><?php echo "2 more elements were added to the array."; ?></span><br><br>
            </div>
        </main>
        <p><a href= ".?action=page2">Next Page</a></p>
    </body>
</html>
