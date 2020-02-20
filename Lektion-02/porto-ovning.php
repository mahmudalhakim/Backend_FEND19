<?php

// Skapa nödvändiga variabler
$pris = 9;
$antal = 0;
$vikt = 0;

// Testa om det finns data i URLen
if(isset($_GET['vikt'])){
  $vikt = $_GET['vikt'];  
  if($vikt <= 50)       $antal = 1;
  elseif($vikt <= 100)  $antal = 2;
  elseif($vikt <= 250)  $antal = 4;
  elseif($vikt <= 500)  $antal = 6;
  elseif($vikt <= 1000) $antal = 8;
  elseif($vikt <= 2000) $antal = 10;
}

// Skapa ett meddelande
$message = ($vikt > 0) 
  ? "<div class='alert alert-success'>
      Du behöver $antal frimärke. <br>
      Ditt pris är: " . ($antal*$pris) .
      "kr</div>"
  : '<div class="alert alert-danger">Ange vikt i URLen tack!</div>';


// Om vikten saknas i tabellen
if($vikt > 2000)
  $message = '<div class="alert alert-danger">
              Du behöver skicka ett paket!
              </div>';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Porto - Övning</title>
</head>
<body class="container">
  <h1>Porto - Övning</h1>
  <h4>Skriv ett program som beräknar porto för brev enligt följande:</h4>
  <table class="table table-sm">
    <tr>
      <th>Max vikt (g)</th>
      <th>Pris</th>
      <th>Antal frimärken</th>
    </tr>
    <tr>
      <td>50</td>
      <td>9,00</td>
      <td>1</td>
    </tr>
    <tr>
      <td>100</td>
      <td>18,00</td>
      <td>2</td>
    </tr>
    <tr>
      <td>250</td>
      <td>36,00</td>
      <td>4</td>
    </tr>
    <tr>
      <td>500</td>
      <td>54,00</td>
      <td>6</td>
    </tr>
    <tr>
      <td>1000</td>
      <td>72,00</td>
      <td>8</td>
    </tr>
    <tr>
      <td>2000</td>
      <td>90,00</td>
      <td>10</td>
    </tr> 
  </table>

  <?php echo $message; ?>

</body>
</html>