<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> file store in array</h1>
    <?php
    $file=fopen("first.txt","r");
    $a=array();
    $i=0;
    while(!feof($file))
    {
        $a[$i]=fgetc($file);
        echo"a[".$i."]:".$a[$i]."<br>";
        $i=$i+1;
    }
    ?>
</body>
</html>