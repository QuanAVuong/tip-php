<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tip Calculator</title>
    </head>

    <body>

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


    </body>

</html>