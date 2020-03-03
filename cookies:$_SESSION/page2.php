<?php
  //add cookie to session array
  $_SESSION['c4'] = 'Peanut Butter';

  //delete cookie from the session array
  unset($_SESSION['c1']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page #2</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Page #2</h1>

            <div class="data">
              <span><?php foreach ($_SESSION as $ss => $sv) : ?>
                <tr>
                  <td><?php echo "$ss $sv"; ?></td>
                <tr>
              <?php endforeach; ?></span><br>
        </main>
        <p><a href=".?action=page3">Next Page</a></p>
    </body>
</html>
