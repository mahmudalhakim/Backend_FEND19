<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datum och tid</title>
</head>
<body>
  <h1>Datum och tid</h1>

  <?php
    
    echo "Klocka: ";
    // Ändra tidszon (alltid bra att ha innan utskrift)
    date_default_timezone_set('Europe/Stockholm');
    echo date('H:i:s');

    echo "<br>";

    echo "Vecka: " . date('W');

    // Bra länk
    // https://www.php.net/manual/en/function.date.php

  ?>

  <hr>
  <footer>
    Copyright &copy; 
    1999-
    <?php
    echo date('Y');
    ?>

  </footer>
</body>
</html>