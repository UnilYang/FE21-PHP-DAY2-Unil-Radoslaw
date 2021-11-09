<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercise6</title>
</head>
<body>
<form  method ="POST">
First Name: <input type="text"   name="firstname" /><br>
Last Name: <input type ="text"  name="lastname" /><br>
Age: <input type ="text"  name="age" /><br>
<input  type="submit"  name="submit"  />
</form>
    <?php 
    /*Create a form with input fields for your firstname, lastname and age. 
    Extract the values from each input field and display them all in a separate div. Use the POST method.
    If the length of your name is larger than 5 characters, change the text colour to green. Otherwise, 
    change the text-colour to red.Now extend with adding a new input field "hobbies". 
    Use the GET method to extract and display the hobbies */
    if( isset($_POST['submit']))
{
    if( $_POST["firstname"] || $_POST["lastname"] || $_POST["age"] )
    {
        echo "<div>Your first name: ". $_POST[ 'firstname'] . " .</div><br>" ;
        echo "<div>Your last name: ". $_POST[ 'lastname'] . " .</div><br>" ;
        echo "<div>And your age is: ". $_POST[ 'age'] . " .</div><br>" ;
    }
}


    ?>
</body>
</html>