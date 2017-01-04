<?php

$billErr = $tip_percentErr = $splitErr = "";
list( $bill, $tip_percent, $split ) = array(10, 15, 1);
$total = $total_tip = $total_each = $tip_each = 0;
$arrErr = array();


function process_input($data) { 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);    // optional, since PHP_SELF is not used
    return $data; // string ?
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["bill"])) {
        $billErr = "required";
        $arrErr[] = $billErr; 
    } else {
        $bill = process_input($_POST["bill"]);

        if (!preg_match("/^\d+\.?\d+$/", $bill)) {
            $billErr = "Only a positive decimal number please eg. 123.99"; 
            $arrErr[] = $billErr; 
        }
    }
    

    if (empty($_POST["tip_percent"])) {
        $tip_percentErr = "required";
        $arrErr[] = $tip_percentErr; 
    } else {
        $tip_percent = process_input($_POST["tip_percent"]);

        if (!preg_match("/^\d+\.?\d+$/", $tip_percent)) {
            $tip_percentErr = "Only a positive decimal number please eg. 18.5";
            $arrErr[] = $tip_percentErr; 
        }
    }


    if (empty($_POST["split"])) {
        $splitErr = "required";
        $arrErr[] = $splitErr; 
    } else {
        $split = process_input($_POST["split"]);

        if (!preg_match("/^\d+$/", $split)) {
            $splitErr = "Only a natural number please eg. 4";
            $arrErr[] = $splitErr; 
        }
    }
}

$total_tip = $tip_percent/100 * $bill;
$total = $bill + $total_tip;
if ( $split > 0 ) {
    $tip_each = $total_tip/$split;
    $total_each = $total/$split;
}

?>
