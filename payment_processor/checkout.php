<?php
    // Get the data from the form
    // Filter into variables safely using the filter_input() function
   $item_quantity = filter_input(INPUT_POST, 'item_quantity',
            FILTER_VALIDATE_INT);
    $item_price = filter_input(INPUT_POST, 'item_price',
            FILTER_VALIDATE_FLOAT);

    // Validate item_quantity display error if need be
    if ($item_quantity === FALSE ){
        $error_message = 'Item Quantity must be a valid number.';
    } else if( $item_quantity <= 0 ){
        $error_message = 'Item Quantity must be greater than 0.';
    //Validate item_price
    } else if( $item_price === FALSE ){
        $error_message = 'Item Price must be a valid number';
    } elseif ($item_price <= 0 ) {
        $error_message = 'Item Price must be greater than 0.';
    } else {
        $error_message = '';
    }

    // If an error message exists, go the index page and display the message
    if ( $error_message != '') {
        include('index.php');
        exit();
    }

    // Calculate values for reciept
    $tax = .07;
    $sub_total = $item_price * $item_quantity;
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
        <title>Transaction Processor</title>
    </head>
    <body>
        <main>
            <h1>Transaction Processor</h1>

            <label>Date:</label>
            <span><?php echo $date; ?></span><br>

            <label>Item Quantity:</label>
            <span><?php echo $item_quantity; ?></span><br>

            <label>Item Price:</label>
            <span><?php echo $item_price_f; ?></span><br>

            <label>Subtotal:</label>
            <span><?php echo $subtotal_f; ?></span><br>

            <label>Sales Tax</label>
            <span><?php echo $sales_tax_f; ?></span><br>

            <label>total</label>
            <span><?php echo $total_f; ?></span><br>
        </main>
    </body>>
</html>
