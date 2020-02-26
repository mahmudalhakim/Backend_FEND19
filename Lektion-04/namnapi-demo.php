<?php

// Steg 1 - Skapa en endpoint
$url = "https://api.namnapi.se/v2/names.json";

// Steg 2 - Hämta data 
$json = file_get_contents($url);

// Steg 3 - Konvertera json till en array
$array = json_decode($json, true);


// Arbeta med data
$names = '<ul>';
foreach ($array['names']  as $key => $value) {
  $names .= '<li>';
  $names .= $value['firstname'] . ' ' ;
  $names .= $value['surname'];
  $names .= '</li>';
}
$names .= '</ul>';

?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namnapi - Demo</title>
</head>
<body>
  <h1>Namnapi - Demo</h1>
  <h2>Visa 10 olika namn</h2>
  <div>
    <?php
      echo $names;
    ?>
  </div>
</body>
</html>