<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Advanced</title>
</head>
<body>
<form class="form text-center fs-4" method ="POST">
Degrees in F:<br><br><input type="text"   name="degrees" /><br><br>
<input  type="submit"  name="submit"  />
</form><div class="text-center fs-4">
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
  function convertDegrees($degrees){
    if(!$degrees){
      return false; 
    }
    $result = ($degrees - 32) * 5/9;
    echo "<br>Degrees in C: " . (round($result)) . "°<br>";
    return $result;
  }
    
  if( isset($_POST['submit']))
  {
    if($_POST["degrees"]){
      $value = $_POST["degrees"];
    }else {
      $value = false;
    }
    $result = convertDegrees($value);
  
      if(!$result){
        echo "please insert a number";
      }else {
      switch( $result)
        {
           case $result <6:
           echo "<br><p>very cold</p><br><img src='img/verycold.jpg' width='30%' class='rounded'>";
           break;
            case $result >5 and $result <11:
              echo "<br><p>cold</p><br><img src='img/cold.jpg' width='30%' class='rounded'>";
              break;
               case $result >10 and $result<16:
               echo "<br><p>pleasant</p><br><img src='img/pleasant.jpg' width='30%' class='rounded'>";
               break;
               case $result >15 and $result<21:
               echo "<br><p>warm</p><br><img src='img/hot.jpg' width='30%' class='rounded'>";
               break;
                  case $result >20:
                    echo "<br><p>hot</p><br><img src='img/veryhot.jpg' width='30%' class='rounded'>";
                    break;
          default:
                  echo "<br><p>please enter degrees in F to convert to C</p>";
        }
    }
  }
    ?></div>
    <footer class="text-center py-2 fs-5 mt-2">Radek Slowinski - 2021</footer>
</body>
</html>