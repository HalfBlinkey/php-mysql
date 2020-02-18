<?php
    // Get the data from the form
    // Filter into variables safely using the filter_input() function
   $saying = filter_input(INPUT_POST, 'saying');
   $name = filter_input(INPUT_POST, 'name');

   //count characters
   $flatten = str_replace(" ", "", $saying);
   $c_count = strlen($flatten);

   //change saying to uppercase
   $upper_saying = strtoupper($saying);

   //replace white spaces with slashes to easily convert string to array
   $format_saying = str_replace(" ", '/',$saying);
   //turn $trim_saying into an array
   $saying_array = explode('/', $format_saying);

   //get word count from $array
   $w_count = count($saying_array);

   //replace vowels in saying
   $replace1 = str_replace('a', '*',$saying);
   $replace2 = str_replace('e', '*',$replace1);
   $replace3 = str_replace('i', '*',$replace2);
   $replace4 = str_replace('o', '*',$replace3);
   $replace_saying = str_replace('u', '*',$replace4);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Stringer</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>String Processor</h1>

            <span><?php echo "The favorite saying of $name is...."; ?></span><br>

            <span><?php echo $saying; ?></span><br>

            <span><?php echo "That saying consist of $c_count characters and $w_count words"; ?></span><br><br>

            <span><?php echo "As a heading the title looks like this..."; ?></span><br>

            <?php foreach($saying_array as $word){ ?>
            <tr>
              <td><?php echo ucfirst($word); ?></td>
            </tr>
            <?php } ?><br>

            <span><?php echo "Or maybe it looks like this..."; ?></span><br>

            <span><?php echo $upper_saying; ?></span><br><br>

            <span><?php echo "With the vowels replaced with starts it loooks like this..."; ?></span><br>

            <span><?php echo $replace_saying; ?></span><br><br>

            <span><?php echo "Here are the individual words"; ?></span><br>

            <?php foreach($saying_array as $word){ ?>
            <tr>
              <td><?php echo $word; ?><br></td>
            </tr>
            <?php } ?>
        </main>
    </body>
</html>
