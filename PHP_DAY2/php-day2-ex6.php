<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DAY2-EX6</title>
</head>
<body>
    
<!-- Exercise 6

Create a form with input fields for your firstname, lastname and age. Extract the values from each input field and display them all in a separate div. Use the POST method.
If the length of your name is larger than 5 characters, change the text colour to green. Otherwise, change the text-colour to red.Now extend with adding a new input field "hobbies". Use the GET method to extract and display the hobbies -->


<form action= "php-day2-ex6.php" method="POST">
           First Name: <input type="text"   name="firstname" /><br/><br/>
           Last Name: <input type= "text"  name="lastname" /><br/><br/>
           Age: <input type= "text"  name="age" /><br/><br/>
           <input  type="submit"  name="submit" /><br/><br/>
        </form>
       <?php
       if(isset($_POST['submit']))
       {
           if(strlen($_POST["firstname"]) > 5)
           {
               echo "<div style='color: green'>Welcome ".$_POST['firstname'] . " " . $_POST['lastname']."! You are " .$_POST['age']. " years old";
           }
                   else
                   {
                        echo "<div style='color: red'>Welcome ".$_POST['firstname'] . " " . $_POST['lastname']."! You are " .$_POST['age']. " years old";
                    }
        }
       ?>
</body>
</html>