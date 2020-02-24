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
  <form action="form-2-demo.php?id=1234" 
        method="POST">
  <!--  Formulärdata kommer att skickas till
        filen form-2-demo.php
        OBS! Det finns en Query-String 
        efter filnamnet, som skapar en 
        GET-Request (som lagras i $_GET)
  -->
    <input 
      type="text" required
      placeholder="Ange ditt förnamn"
      name="fornamn"
    > 
    <input 
      type="text" required
      placeholder="Ange ditt efternamn"
      name="efternamn"
    > 
    <input 
      type="email" required
      placeholder="Ange ditt mejl"
      name="email"
    > 
    <!-- Skapa en hidden-field -->
    <input 
      type="hidden" 
      name="id" value="1234">

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