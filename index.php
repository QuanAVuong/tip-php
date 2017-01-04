<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tip Calculator</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--         <link rel="stylesheet"
              href="http://fonts.googleapis.com/css?family=Roboto:400,100,500,300italic,500italic,700italic,900,300"> -->

        <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"> -->
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-orange.min.css" />
        <link rel="stylesheet" type="text/css" href="main.css">


        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


    </head>

    <body>

        <div class="mdl-layout mdl-js-layout">


            <div class="demo-layout-transparent mdl-layout mdl-js-layout">
              <header class="mdl-layout__header mdl-layout__header--transparent">
                <div class="mdl-layout__header-row">
                  <!-- Title -->
                  <span class="mdl-layout-title">Tip Calculator App</span>
                  <!-- Add spacer, to align navigation to the right -->
                  <div class="mdl-layout-spacer"></div>
                  <!-- Navigation -->
                  <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Home</a>
                    <a class="mdl-navigation__link" href="">About</a>
                    <a class="mdl-navigation__link" href="">Contact</a>
                  </nav>
                </div>
              </header>
              <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Tip Calculator App</span>
                <nav class="mdl-navigation">
                  <a class="mdl-navigation__link" href="">Home</a>
                  <a class="mdl-navigation__link" href="">About</a>
                  <a class="mdl-navigation__link" href="">Contact</a>
                </nav>
              </div>
              <main class="mdl-layout__content">
              </main>
            </div>



            <div id="form"> <!-- M==================== F O R M ==================== -->
                <?php 
                    include "output.php";
                 ?>


                <h2 .mdl-typography--display-1 >Tipping...</h2>

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


        <!--             <label>
                        <input type="radio" name="tip_percent"> Custom:
                    </label> 
                        <input type="text" name="tip_percent_custom" placeholder="eg. 18.5" value="<?php echo "$tip_percent_custom"; ?>" >%
                        <span class="error">* <?php echo "$tip_percentErr"; ?></span>
                    <br><br> -->

                    <label>Split: <input type="text" name="split" value="<?php echo "$split"; ?>"> person(s) </label>
                    <span class="error"><?php echo "$splitErr"; ?></span>
                    <br><br>


                    <!-- <input type="submit" name="submit"> <br> -->
                    
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit">
                      Calculate
                    </button>
                </form>


                <?php
                    if ( isset($_POST["submit"]) ) {

                        // if ( !isset($billErr) && !isset($tip_percentErr) && !isset($splitErr) ) {
                        if ( empty($arrErr) ) {
                            echo "
                                <br> Total Tip: $ $total_tip
                                <br> Total (With Tip): $ $total
                                <br> Tip Per Person: $ $tip_each
                                <br> Total Per Person: $ $total_each
                                ";

                        }
                        
                    }

                ?>

            </div> <!-- M==================== E N D   F O R M ==================== -->

            




        </div>


    </body>

</html>