<?php
    //set default value of variables for initail page load
    if(!isset($item_quantity)) { $item_quantity = '';}
    if(!isset($item_price)) { $item_price = ''; }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transaction Processor</title>
    </head>
    <body>
        <main>
            <h1>Transaction Processor</h1>
            <?php if (!empty($error_message)) { ?>
            <p class = "error"><?php echo htmlspecialchars($error_message); ?><//p>
            <?php } ?>
            <form action=" checkout.php" method="post">

                <div id="data">
                    <label>Item Quantity:</label>
                    <input type="text" name="item_quantity"
                           value="<?php echo htmlspecialchars($item_quantity); ?>">
                    <br>

                    <label>Item Price:</label>
                    <input type="text" name="item_price"
                           value="<?php echo htmlspecialchars($item_price); ?>">
                    <br>
                </div>

                <div id="buttons">
                    <label>Calculate Payment</label>
                    <input type="submit" value="Calculate"><br>
                </div>

            </form>
        </main>
    </body>
</html>
