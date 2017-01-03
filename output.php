<?php

// $billErr = $tip_percentErr = $splitErr = "";
// list( $bill, $tip_percent, $split ) = array(0, 15, 1);
// $total = $total_tip = $total_each = $tip_each = 0;

function process_input($data) { 
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);	// optional, since PHP_SELF is not used
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["bill"])) {
    $billErr = "required";
  } else {
    $bill = process_input($_POST["bill"]);

    if (!preg_match("/^\d+\.?\d+$/", $bill)) {
      $billErr = "Only a positive decimal number please eg. 123.99"; 
    }
  }
  
  if (empty($_POST["tip_percent"])) {
    $tip_percentErr = "required";
  } else {
    $tip_percent = process_input($_POST["tip_percent"]);

    if (!preg_match("/^\d+\.?\d+$/", $tip_percent)) {
      $tip_percentErr = "Only a positive decimal number please eg. 18.5"; 
    }
  }

  if (empty($_POST["split"])) {
    $splitErr = "required";
  } else {
    $split = process_input($_POST["split"]);

    if (!preg_match("/^\d+$/", $split)) {
      $splitErr = "Only a whole number please eg. 4"; 
    }
  }
}

$total_tip = $tip_percent/100 * $bill;
$total = $bill + $total_tip;
$tip_each = $total_tip/$split;
$total_each = $total/$split;


echo "
    <br> Total Tip: $total_tip
    <br> Total (With Tip): $total
    <br> Tip Per Person: $tip_each
    <br> Total Per Person: $total_each
    ";


?>
