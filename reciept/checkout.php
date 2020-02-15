<?php
    //create $item_price and topping_price variables
    $item_price = 0;
    $toppings_price = 0;
    // Get the data from the form
    // Filter into variables safely
   $special_instructions = filter_input(INPUT_POST, 'special_instructions');

   $pizza_size = filter_input(INPUT_POST, 'pizza_size');
   if($pizza_size == 'lg') {
     $item_price = 19.98;
   }elseif ($pizza_size == 'md') {
     $item_price = 16.98;
   }else {
     $item_price = 12.98;
   }

   $payment_method = filter_input(INPUT_POST, 'payment_method');

   $toppings = filter_input(INPUT_POST, 'toppings',
          FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

   if($toppings !== NULL){
     foreach($toppings as $key => $value){
       $toppings_price += 1.99;
     }
   }
    // Calculate values for reciept
    $tax = .07;
    $sub_total = $item_price + $toppings_price;
    $sales_tax = $sub_total * $tax;
    $total = $sub_total + $sales_tax;
    $date = date('m.d.Y');

    // Apply currency and percent formatting
    $item_price_f = '$'.number_format($item_price, 2);
    $subtotal_f = '$'.number_format($sub_total, 2);
    $sales_tax_f = '$'.number_format($sales_tax, 2);
    $total_f = '$'.number_format($total, 2);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Delivery Summary</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main class="reciept">
            <h1>Delivery Summary</h1>

            <label>Date:</label>
            <span><?php echo $date; ?></span><br>

            <label>Pizza Size:</label>
            <span><?php echo $pizza_size; ?></span><br>

            <label>Toppings:</label>
            <span><?php foreach ($toppings as $top) : ?>
              <tr>
                <td><?php echo $top; ?></td>
              <tr>
            <?php endforeach; ?></span><br>

            <label>Special Instructions:</label>
            <span><?php echo $special_instructions; ?></span><br>

            <label>Payment Method:</label>
            <span><?php echo $payment_method; ?></span><br>

            <label>Pizza Price:</label>
            <span><?php echo $item_price_f; ?></span><br>

            <label>Subtotal:</label>
            <span><?php echo $subtotal_f; ?></span><br>

            <label>Sales Tax:</label>
            <span><?php echo $sales_tax_f; ?></span><br>

            <label>total:</label>
            <span><?php echo $total_f; ?></span><br>
        </main>
    </body>
</html>
