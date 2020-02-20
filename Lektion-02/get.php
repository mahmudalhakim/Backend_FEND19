<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET-Requset</title>
</head>
<body>
  <h1>GET-Requset</h1>
  <h3>
    <a href="http://localhost/Lektion-02/get.php?namn=Mahmud&age=47">
    http://localhost/Lektion-02/get.php?namn=Mahmud&age=47
    </a>
  </h3>
  <h3>
    <a href="http://localhost/Lektion-02/get.php?namn=Yasmin&age=45">
    http://localhost/Lektion-02/get.php?namn=Yasmin&age=45
    </a>
  </h3>
  <h3>
    <a href="http://localhost/Lektion-02/get.php?namn=Mariam&age=17">
    http://localhost/Lektion-02/get.php?namn=Mariam&age=17
    </a>
  </h3>

</body>
</html>

<?php

// Hantera en GET-Request
$name = $_GET['namn'];
$age  = $_GET['age'];


echo "<h1>Hej $name</h1>"; 
echo "<h2>Du är $age år gammal!</h2>"; 

// Test
echo "<hr>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

?>