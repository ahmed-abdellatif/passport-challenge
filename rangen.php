
<?php

if (isset($_POST['submit'])) {
    $max       = '15';
    $min       = '1';

    $lower_bound = &$min;
    $upper_bound = &$max;

    $upper_bound = trim($_POST['max']);
    $lower_bound = trim($_POST['min']);

    $errorArray = array();

    if ($upper_bound == '' || $lower_bound == '') {
        array_push($errorArray, 'Please fill all fields.');
    }
    if (filter_var($lower_bound, FILTER_VALIDATE_INT) == false) {
        array_push($errorArray, 'Please enter a number for lower.');
    }
    if (filter_var($upper_bound, FILTER_VALIDATE_INT) == false) {
        array_push($errorArray, 'Please enter a number for upper.');
    }
}
?>
