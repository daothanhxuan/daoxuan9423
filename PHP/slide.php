<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $temps =array ('D:\PHP\htdocs\mkien\image\team-1.jpg','D:\PHP\htdocs\mkien\image\team-2.jpg','D:\PHP\htdocs\mkien\image\team-3.jpg','D:\PHP\htdocs\mkien\image\team-4.jpg');
    foreach ($temps as $key) {
        echo"<img src='images/$key' width='100px' height='100px' alt='$key'>";
    }
    ?>
<?php
for ($i = 1; $i < 10; $i++) {
    echo"dãy số là $i <br>";
$i=1;
while($i<=10){
    echo"dãy số là $i<br>";
    $i++;
}
?>
</body>