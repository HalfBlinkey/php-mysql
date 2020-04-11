<?php
  $engine = new RailCar('A@$1%$#','Diesel');
  $caboose = new RailCar('B%$2&*', 'Caboose');
  $passneger = new PassCar('C45#65%', 'Sleeper', 20, 20, 'Restroom');
  $transport = new CargoCar('D76489@', 'Transport', 'Luggage', 100 );
  $longDelivery = new CargoCar('E34598!', 'Delivery', 'Parts', 1000);
  $connector = new RailCar('F65678&', 'Connector');
  $tankHopper = new RailCar('G12743*', 'Hopper');

  $train = array ($engine, $caboose, $passneger, $transport, $longDelivery, $connector, $tankHopper);
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Train</title>
      <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <main>
        <?php foreach ($train as $car) : ?>
          <li><?php echo $car->toString(); ?></li>
        <?php endforeach; ?>
  </main>
</html>
