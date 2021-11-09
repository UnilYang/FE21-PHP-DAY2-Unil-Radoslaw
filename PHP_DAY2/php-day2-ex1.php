<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DAY2-EX1</title>
</head>
<body>

<!-- Exercise 1

Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname. -->


       <form action= "php-day2-ex1.php" method="GET">
           Name: <input type="text"   name="name" />
           Surname: <input type= "text"  name="surname" />
           <input  type="submit"  name="submit" />
        </form>
       <?php
       if(isset($_GET['submit']))
       {
           if($_GET["name"] && $_GET["surname"])
               echo "Welcome ".$_GET['name'] . " " . $_GET['surname']."!";
           else
               echo "please insert your name, or please insert your surname.";
       }
       ?>
</body>
</html>