<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tip Calculator</title>
    </head>

    <body>

        <?php 
            function current_val($input) {
                // default input values
                switch (true) {
                    // ISSUE: will take on split's value if placed at the end
                    case $input == "billErr" || $input == "tip_percentErr" || $input == "splitErr":
                        $val = "";
                        break;

                    case $input == "bill":
                        $val = 10;
                        break;
                    case $input == "tip_percent_custom":
                        $val = 18;
                        break;
                    case "split":
                        $val = 1;
                        break;

                    default:
                        echo "something is wrong";
                        break;
                }

                // override default with POSTed value
                if ( isset($_POST[$input]) ) {
                    $val = $_POST[$input];
                }

                echo $val;
            }

         ?>


        <h1>Tip Calculator</h1>

        <form method="POST">

            <label>Bill subtotal: $
                <input type="text" name="bill" placeholder="Your Bill Amount" value="<?php current_val("bill"); ?>">
            </label>
            <span class="error">* <?php current_val("billErr"); ?></span>
            <br><br>

            Tip Percentage:
            <span class="error">* <?php current_val("tip_percentErr"); ?></span>
            <br><br>

            <?php
                include "percentRadios.php"
            ?> <br><br>


            <label>
                <input type="radio" name="tip_percent"> Custom:
            </label> <br><br>
                <input type="text" name="tip_percent_custom" placeholder="eg. 18.5" value="<?php current_val("tip_percent_custom"); ?>" >%
                <span class="error">* <?php current_val("tip_percentErr"); ?></span>
            

            <label>Split: <input type="text" name="split" value="<?php current_val("split"); ?>"> person(s) </label>
            <span class="error"><?php current_val("splitErr"); ?></span>
            <br><br>


            <input type="submit" name="submit"> <br>
            
            
        </form>


        <?php
            if ( isset($_POST["submit"]) ) { 
                include "output.php";
            }

        ?>


    </body>

</html>