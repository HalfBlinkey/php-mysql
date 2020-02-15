<!DOCTYPE html>
<html>
<head>
    <title>Questionaire</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>How did you hear about us?</h1>
    <?php if (!empty($message)) { ?>
        <p class="error"><?php echo htmlspecialchars($message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>How did you hear about us?</label>
            <select name="data" value="<?php echo htmlspecialchars($symptoms); ?>">
                <option value="customer">I'm a regular customer</option>
                <option value="friend">From a friend</option>
                <option value="television">on television</option>
                <option value="net">Through an online search</option>
            </select>
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit"><br>
        </div>

    </form>
    </main>
</body>
</html>
