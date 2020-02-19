<?php
// <?php är en PHP-tagg som startar ett skript
# Min första PHP-sida

/*
  Datum : 2020-02-19
  Författare: Mahmud Al Hakim
  Copyright : MIT
*/

// Visa alla felmeddelanden och varningar
ini_set('display_errors', '1');
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
</head>
<body>

<?php

echo "<h1>Hello World!</h1>";

print "<h2>Utskrift via funktionen print.</h2>";

?>

<p>Lorem ipsum dolor sit amet.</p>

<?="<p>Exempel på echo - shortcut syntax.</p>"?>

</body>
</html>