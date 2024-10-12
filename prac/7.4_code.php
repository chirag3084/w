<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee_data</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter employee id:<br/>
        <input type="text" name="empid[]">
        Enter Job Title:<br/>
        <input type="text" name="empid[]">
        Enter employee id:<br/>
        <input type="text" name="empid[]"><br/>
        Enter job title:<br/>
        <input type="text" name="job[]">
        <input type="text" name="job[]">
        <input type="text" name="job[]">
        <input type="text" name="job[]"><br/>
        years of experience:<br/>

        <input type="text" name="experience[]">
        <input type="text" name="experience[]">
        <input type="text" name="experience[]">
        <input type="text" name="experience[]"><br/>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $empid=$_POST["empid"];
        $job=$_POST["job"];
        $yrs=$_POST["yrs"];
        $yrs=array_map(create_function)
        
    }
    ?>
</body>
</html>