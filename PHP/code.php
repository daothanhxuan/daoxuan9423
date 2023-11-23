<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    <body>
        <?php
            $is_christmas = false;
            if (date('m') == 12 && date('d') == 25) {
                $is_christmas = true;
            }
            if ($is_christmas){
                echo "Yes";
            }
            else{
                echo "No";
            }
        ?>
    </body>
</html>
