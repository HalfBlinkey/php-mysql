<?php
    // Get the data from the form
    // Filter into variables safely using the filter_input() function
   $start = filter_input(INPUT_POST, 'start');
   $due = filter_input(INPUT_POST, 'due');
   $interest = filter_input(INPUT_POST, 'interest', FILTER_VALIDATE_FLOAT);
   $principal = filter_input(INPUT_POST, 'principal', FILTER_VALIDATE_FLOAT);

   //turn dates into array
   $start_array = explode('/', $start);
   $due_array = explode('/', $due);

   //use elements in array to create time stamps
   $start_stamp = mktime(0,0,0,$start_array[0], $start_array[1], $start_array[2]);
   $due_stamp = mktime(0,0,0,$due_array[0], $due_array[1], $due_array[2]);

   //use the getdate() function to return an array countaining our timestamp
   $start_parts = getdate($start_stamp);
   $due_parts = getdate($due_stamp);

   //pull out the elements where going display from the array
   $start_mon = $start_parts['month'];
   $start_day = $start_parts['mday'];
   $start_year = $start_parts['year'];

   $due_mon = $due_parts['month'];
   $due_day = $due_parts['mday'];
   $due_year = $due_parts['year'];

   //turn array elements into ints for use in setDate() function
   $start_mon_int = intval($start_mon);
   $start_day_int = intval($start_day);
   $start_year_int = intval($start_year);

   $due_mon_int = intval($due_parts);
   $due_day_int = intval($due_day);
   $due_year_int = intval($due_year);

   //calcualte amout of time on Loan
   $start_date = new DateTime();
   $due_date = new DateTime();
   $start_date ->setDate($start_year_int, $start_mon_int, $start_day_int);
   $due_date ->setDate($due_year_int, $due_mon_int, $due_day_int);
   $loan_length = $start_date ->diff($due_date);

   //format loan length for use in calculations
   $years = $loan_length->format('%y');
   $months = $loan_length->format('%m');
   $length = ($months* 1/12) + $years;

   //calculate and format simple interest
   $percent = $interest/100;
   $simple_i = $percent * $length * $principal;
   $simple_i_f = '$'.number_format($simple_i, 2);

   //format principal
   $principal_f = '$'.number_format($principal,2);

   //calcualte and format total amount to pay off loan
   $total = $simple_i  + $principal;
   $total_f = '$'.number_format($total, 2);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loan Processor</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Loan Processor</h1>

            <label>Start Date:</label>
            <span><?php echo  "$start_mon $start_day, $start_year"; ?></span><br>

            <label>Due Date:</label>
            <span><?php echo  "$due_mon $due_day, $due_year"; ?></span><br>

            <label>Annual Rate:</label>
            <span><?php echo  "$interest %"; ?></span><br>

            <label>Principal:</label>
            <span><?php echo $principal_f; ?></span><br>

            <label>Simple Interest:</label>
            <span><?php echo $simple_i_f; ?></span><br>

            <label>In all you'll pay back:</label>
            <span><?php echo $total_f; ?></span>
        </main>
    </body>
</html>
