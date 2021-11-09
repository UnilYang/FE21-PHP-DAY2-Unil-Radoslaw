<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise3</title>
</head>
<body>
    <?php 


function addFunction($math, $physics, $english)
{
    $sum = $math + $physics + $english;
    $avg = ($math + $physics + $english) / 3;
    echo  "Sum of the 3 grades is: $sum <br>"; 
    echo "Average grade is: $avg ";
}
addFunction(3, 4, 5);


    ?>
</body>
</html>