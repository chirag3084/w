<html>
<body>
    <form  action= " " method="post">
        <h3> Enter the Year : <input type="text" name="year" />
        <input type="Submit" name="Submit" value="Submit" /></h3>
    </form>
    <?php
    if( $_POST )
    {  
        $year = $_POST[ 'year' ];
        if(!is_numeric($year))
        {
            echo " Input should be a number";
            return;
        }
        if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400))
        {
            echo "<h3><b>$year is a leap year.</b></h3>";  
        }
        Else
{
            echo "<h3><b>$year is not a leap year.<b></h3>";  
        }
    }
?>

</body>
</html>
