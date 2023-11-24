<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<select>";
        for ($i = date("Y"); $i >= 1900; $i--) {
        echo "<option value='$i'>$i</option>";
        }
        echo "</select>";
        ?>
    </body>
</html>
