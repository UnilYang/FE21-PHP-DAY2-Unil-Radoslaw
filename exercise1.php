<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercise1</title>
</head>
<body>
<form  method ="POST">
First Name: <input type="text"   name="firstname" /><br>
Last Name: <input type ="text"  name="lastname" /><br>
<input  type="submit"  name="submit"  />
</form>
    <?php 
    //Exercise1
    /*Create a PHP script which will accept two parameters from the form (name and surname). 
The user must insert name and surname into the form to get the output: "Welcome Name Surname!"*/
if( isset($_POST['submit']))
{
    if( $_POST["firstname"] || $_POST["lastname"] )
    {
        echo "Welcome ". $_POST[ 'firstname'] . ' ' . $_POST['lastname'] . "!<br>" ;
    }else{
        echo "please insert your name, or please insert your surname.";
    }
}

    
    ?>
</body>
</html>


