<!DOCTYPE html>
<html>
<head>
    <title>Questionaire</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
<main>
    <h1>How did you hear about us?</h1>
    <form action="." method="post">
        <input type="hidden" name="action" value="process_rolls">

        <label>How did you hear about us?:</label>
        <select name="data" value="<?php echo htmlspecialchars($symptoms); ?>">
            <option value="customer">I'm a regular customer</option>
            <option value="friend">From a friend</option>
            <option value="television">television</option>
            <option value="net">Online search</option>
        </select><br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit"><br>

        <label>Awesome!:</label>
        <span><?php echo $message; ?></span><br>
    </form>
</main>
</body>
</html>
