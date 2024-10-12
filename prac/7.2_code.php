<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cube number for 1 to 10</title>
</head>
<body>
    <?php
    $a;
    $i;
    {
        for($a=0;$a<=10;$a++){
            $i = $a * $a * $a;
            echo("$i<br>");
        }
    }
    ?>
</body>
</html>