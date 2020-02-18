<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loan Processor</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Loan Processor</h1>
            <span><?php echo "Todays date is:"?></span><br>
            <?php echo date(' F d,Y \a\t H:i:s')?><br><br>

            <form action="display_results.php" method="post">
                <div id="data">

                    <label>Please enter date as numerical value seperated by slashes for example 1/2/2020</label><br><br>

                    <label>Loan Start Date:</label>
                    <input type="text" name="start">
                    <br>

                    <label>Loan Due Date:</label>
                    <input type="text" name="due">
                    <br>

                    <label>Annual interest as a %:</label>
                    <input type="text" name="interest">
                    <br>

                    <label>Principal borrowed:</label>
                    <input type="text" name="principal">
                    <br>
                </div>

                <div id="buttons">
                    <input type="submit" value="calculate"><br>
                </div>

            </form>
        </main>
    </body>
</html>
