<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrayer</title>
</head>
<body>
  <h1>Arrayer</h1>
  <?php

  // Skapa en array
  $cars = ["Saab" , "Volvo"];
  $cars2 = Array("Saab", "Volvo");

  // Skriv ut en array
  // echo $cars;
  // Notice: Array to string conversion 

  echo "<pre>";
  print_r($cars);
  print_r($cars2);
  echo "</pre>";

  echo "<h3>Skriv ut antal element</h3>";
  echo count($cars);

  // Lägg till ett element
  $cars[] = "Mazda";
  $cars[] = "Opel";

  echo "<pre>";
  print_r($cars);
  echo "</pre>";


  echo "<h3>Associativ array</h3>";
  $flowers = array(
    'liljor' => 50,
    'rosor'  => 60
  );

  echo "<pre>";
  print_r($flowers);
  echo "</pre>";

  echo "Rosor kostar "  . $flowers['rosor'] . "kr";
  echo "<br>";
  echo "Rosor kostar  $flowers[rosor] kr";

  echo "<h3>Globala assosiativa arrayer</h3>";
  echo "<pre>";
  print_r($_SERVER);

  ?>
</body>
</html>