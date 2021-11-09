<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise4</title>
</head>
<body>
    <?php 
    /*Create a function that calculates the area and volume of a box.
Formulas:
area = width x height
volume = width x height x depth
Pass three different numbers as arguments and get calculated results using the return statement.
You should get the following results:
The area of the box is: 14
The volume of the box is: 70*/
    function areaFunction($width, $height, $depth)
    {
        $area = $width * $height;
        $volume = $width * $height * $depth;
        echo "The area of the box is: $area <br>"; 
        echo "The volume of the box is: $volume";
    }
    areaFunction(2, 7, 5);



    ?>
</body>
</html>