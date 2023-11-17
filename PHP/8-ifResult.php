<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        //befor if statement
            echo "THE GAME";
            if ($_GET["response"] == "yes")
            {
                echo "HAS BEEN QUITED";
            }
            if ($_GET["response"] == "no")
            {
                echo "WILL BE CONTINUED IN 3 SECONS";
            }
                echo "<br>AFTER IF STATEMENT";
        ?>
    </body> 
</html>
