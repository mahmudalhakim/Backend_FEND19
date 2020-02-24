<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulär och PHP</title>
</head>
<body>
  <h1>Formulär och PHP</h1>

  <h2>Formulär med GET-Request</h2>
  <form action="#" method="GET">
  
    <input 
      type="text" 
      placeholder="Ange ditt förnamn"
      name="fornamn"
    >
    <input type="submit" value="Skicka">

  </form>

  <h2>Formulär med POST-Request</h2>
  <form action="#" method="POST">
  
    <input 
      type="text" 
      placeholder="Ange ditt förnamn"
      name="fornamn"
    > 
    <input 
      type="text" 
      placeholder="Ange ditt efternamn"
      name="efternamn"
    > 
    <input type="submit" value="Skicka">

  </form>

  <?php


  // Hantera GET-Request
  if(isset($_GET['fornamn'])){
    echo "Hej " . $_GET['fornamn'];
  }

  // Hantera POST-Request
  if(isset($_POST['fornamn'])){
    echo "Hej " . $_POST['fornamn'];
  }

  if(isset($_POST['efternamn'])){
    echo " " . $_POST['efternamn'];
  }

  echo "<hr>";
  echo "<h3>Test POST-Array</h3>";
  echo "<pre>";
  
  echo "Utskrift med funktionen print_r <br>";
  print_r($_POST);

  echo "Utskrift med funktionen var_dump <br>";
  var_dump($_POST);

  echo "</pre>";
  echo "<hr>";

  ?>

</body>
</html>