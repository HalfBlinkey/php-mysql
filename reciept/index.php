
<?php
    //set default value of variables for initail page load
    if(!isset($item_quantity)) { $item_quantity = '';}
    if(!isset($item_price)) { $item_price = ''; }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Your Pizza</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Order Your Pizza</h1>
            <?php if (!empty($error_message)) { ?>
            <p class = "error"><?php echo htmlspecialchars($error_message); ?><//p>
            <?php } ?>
            <form action=" checkout.php" method="post">

                <div id="data">
                    <label>Toppings:</label>
                    <select name="toppings[]" size="3" multiple>
                      <option value="pepperoni">Pepperoni</option>
                      <option value="mushroom">Mushroom</option>
                      <option value="peppers">peppers</option>
                    </select>
                    <br><br>

                    <label>Payment Method:</label>
                    <input type="checkbox" name="payment_method" value="card" checked>Card
                    <input type="checkbox" name="payment_method" value="cash">Cash
                    <input type="checkbox" name="payment_method" value="payPal">PayPal
                    <br><br>

                    <label>Pizza Size:</label>
                    <input type="radio" name="pizza_size" value="lg" checked>Lg
                    <input type="radio" name="pizza_size" value="md">Md
                    <input type="radio" name="pizza_size" value="sm">Personal
                    <br><br>

                    <label>Special Instructions:</label>
                    <input type="text" name="special_instructions">
                    <br>
                </div>

                <div id="buttons">
                    <label>Submit Order</label>
                    <input type="submit" value="Submit" class="buttons"><br>
                </div>

            </form>
        </main>
    </body>
</html>
