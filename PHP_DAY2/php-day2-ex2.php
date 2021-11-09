<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DAY2-EX2</title>
</head>
<body>

<!-- Exercise 2

Create a function which takes two integer parameters - divide them and output the result on the screen. -->

<?php
    function divFunction($num1, $num2)
    {
        $div = $num1 / $num2;
        echo "Div of the two numbers is: $div";
    }
    divFunction(200, 50);
    ?>


</body>
</html>