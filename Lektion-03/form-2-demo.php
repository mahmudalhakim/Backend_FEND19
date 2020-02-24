<?php

// Tips
// Ett sätt att rensa $_GET och $_POST
function clean_xss(){
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  foreach ($_GET as $key => $value) {
    $_GET[$key] = htmlspecialchars($value);
  }
}

clean_xss();


// TEST
echo "<hr>";
echo "<pre>";
echo "<h3>POST</h3>";
print_r($_POST);
echo "<h3>GET</h3>";
print_r($_GET);
echo "</pre>";
echo "<hr>";

/*
OBS! 
  Det är viktigt att rensa skadlig kod,
  genom att konvertera HTML-koder till entiteter
  med hjälp av funktionen htmlspecialchars
  https://www.w3schools.com/php/func_string_htmlspecialchars.asp

*/
if(isset($_POST['fornamn']) 
    && isset($_POST['efternamn'])
    && isset($_POST['email'])
  )
{
  $name = $_POST['fornamn'];
  $name .= " ";
  $name .= $_POST['efternamn'];

  $email = $_POST['email'];
  
  if(empty($_POST['fornamn'])){
    $name = "Guest";
  }
}else{
  header('Location:form-demo.php');
  exit(); // Gå till föregående sida och avsluta skripet!
}


// Validering i PHP
// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
    die;
}
?>
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Välkommen</title>
</head>
<body>
  <h1>Välkommen</h1>
  <h2>
  <?php echo $name ?>
  </h2>
</body>
</html>