<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>
<body>
<form  method ="POST">
Degrees in F: <input type="number"   name="degrees" /><br>
<input  type="submit"  name="submit"  />
</form>
    <?php 
   /*1- Create a function that can convert °F in °C and show the result on the screen.
      2- You can play with the results creating conditionals 
      and showing on the screen a different img 
      and message depending on the temp:
    From 0°C to 5°C: Very cold
    From 6°C to 10°C: Cold
    From 11°C to 15°C: Pleasant
    From 16°C to 20°C: Warm
    Above 21°C: Hot
    Use Bootstrap to show yours results on the screen. (32 °F − 32) × 5/9 = 0 °C */
  $degrees = "degrees";
  if( isset($_POST['submit']))
  {
  function convertDegrees($degrees){
    $result = ($degrees - 32) * 5/9;
    echo "Degrees in C: " . $result;
  }
  convertDegrees("degrees");    
      switch( $result)
        {
           case $result <6:
           echo "very cold";
           break;
            case $result >5 and $result <11:
              echo "cold";
              break;
               case $result >10 and $result<16:
               echo "pleasant";
               break;
               case $result >15 and $result<21:
               echo "warm";
               break;
                  case $result >20:
                    echo "hot";
                    break;
          default:
                  echo "please enter degrees in F to convert to C";
        }
    }

    ?>
</body>
</html>