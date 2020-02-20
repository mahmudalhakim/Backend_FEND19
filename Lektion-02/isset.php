<?php

// Test 
echo "<hr><h3><pre>GET ";
print_r($_GET);
echo "</pre></h3><hr>";

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $message = "<h3>Produkt $id</h3>";
}
else{
  $message = "<h3>Välj en produkt från listan</h3>";
}

?>

<!DOCTYPE html>

<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funktionen isset()</title>
</head>
<body>
  <h1>Funktionen isset()</h1>
  <h3>
    <a href="?id=1">Produkt 1</a>  <br>
    <a href="?id=2">Produkt 2</a>  <br>
    <a href="?id=3">Produkt 3</a>
  </h3>

  <?php echo $message; ?>

</body>
</html>