<?php
    // get the data from the form
    $symptoms = filter_input(INPUT_POST, 'data');

    // validate investment
    if ( $symptoms == 'customer' ) {
        $message = 'We love our regular customers.';
    } else if ( $symptoms == 'friend' )  {
        $message = 'Thank your friend for us.';
    } else if ( $symptoms == 'television') {
        $message = 'We are glad our television adds are working!';
    } else if ( $symptoms == 'net' ) {
        $message = 'We work hard to be found on Google.';
    } else {
        $message = ''; }

    // if an error message exists, go to the index page
    if ($message != '') {
        include('index.php');
        exit();
    }

?>
