<?php
  //Call the database.php file with the require_once() function.
  require_once('database.php');

  // Get the data from the form(city name)
  // Filter into variables safely using the filter_input() function
  $city = filter_input(INPUT_POST, 'city');

  //Create a query to retrieve all fields from customers
  //for the specified city.
  $queryCity = 'SELECT * FROM customers
                WHERE city = :city';
  $statement1 = $db->prepare($queryCity);
  $statement1->bindValue(":city", $city);
  $statement1->execute();
  $cities = $statement1->fetchAll();
  $statement1->closeCursor();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Customers by City</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <main>
      <h1>Mathcing Criteria</h1>
      <table>
        <tr>
          <th>CustID</th>
          <th>Name</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Zip</th>
        </tr>
        <?php foreach ($cities as $ct) : ?>
          <tr>
            <td><?php echo $ct['custid']; ?></td>
            <td><?php echo $ct['name']; ?></td>
            <td><?php echo $ct['address']; ?></td>
            <td><?php echo $ct['city']; ?></td>
            <td><?php echo $ct['state']; ?></td>
            <td><?php echo $ct['zip']; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </main>
  </body>
</html>
