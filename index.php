<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tip Calculator</title>
    </head>

    <body>

        <?php 
            include "output.php";
         ?>


        <h1>Tip Calculator</h1>

        <form method="POST">

            <label>Bill subtotal: $
                <input type="text" name="bill" placeholder="Your Bill Amount" value="<?php echo "$bill"; ?>">
            </label>
            <span class="error">* <?php echo "$billErr"; ?></span>
            <br><br>

            Tip Percentage:
            <span class="error">* <?php echo "$tip_percentErr"; ?></span>
            <br><br>

            <?php
                include "percentRadios.php"
            ?> <br><br>


            <label>
                <input type="radio" name="tip_percent"> Custom:
            </label> 
                <input type="text" name="tip_percent_custom" placeholder="eg. 18.5" value="<?php echo "$tip_percent_custom"; ?>" >%
                <span class="error">* <?php echo "$tip_percentErr"; ?></span>
            <br><br>

            <label>Split: <input type="text" name="split" value="<?php echo "$split"; ?>"> person(s) </label>
            <span class="error"><?php echo "$splitErr"; ?></span>
            <br><br>


            <input type="submit" name="submit"> <br>
            
            
        </form>


        <?php
            if ( isset($_POST["submit"]) ) { 
                echo "
                    <br> Total Tip: $total_tip
                    <br> Total (With Tip): $total
                    <br> Tip Per Person: $tip_each
                    <br> Total Per Person: $total_each
                    ";

            }

        ?>


    </body>

</html>