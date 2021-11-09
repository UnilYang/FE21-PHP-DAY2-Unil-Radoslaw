<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DAY2-EX5</title>
</head>
<body>

<!-- Exercise 5

Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)."
 -->
 
    <?php
    function convertFunction($num1)
    {
        $hours = $num1 / 60;
        $minute = $num1 % 60;
        
        echo "$num1 minutes = ".round($hours)." hour(s) \t and \t $minute minute(s).";
    }
    convertFunction(200);
    ?>

</body>
</html>