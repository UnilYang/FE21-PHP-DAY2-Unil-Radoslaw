<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DAY2-EX3</title>
</head>
<body>
    
<!-- Exercise 3

Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. then make the calculation and print them on the screen. Make sure that the variables are numbers.
E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4 -->

<?php
    function gradeFunction($math, $physics, $english)
    {
        $sum = $math + $physics + $english;
        $avg = ($math + $physics + $english) / 3;

        echo "Sum: $sum"."<br/>";
        echo "Average: $avg";
    }
    gradeFunction(3, 4, 5);

?>

</body>
</html>