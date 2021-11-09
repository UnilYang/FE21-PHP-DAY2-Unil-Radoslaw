<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2</title>
</head>
<body>

    <?php 
//Create a function which takes two integer parameters - divide them and output the result on the screen.
function divideFunction($num1, $num2)
       {
           $result = $num1 / $num2;
           echo  "Result of $num1/$num2: $result";
       }
       divideFunction(100, 10);


    ?>
</body>
</html>