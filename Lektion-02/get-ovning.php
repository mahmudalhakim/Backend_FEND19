<?php
$message = (isset($_GET['age']) AND $_GET['age'] >= 18) 
? '<div class="alert alert-success">Välkommen till vår webshop</div>'
: '<div class="alert alert-danger">Du får inte handla här!</div>';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>GET-Request - Övning</title>
</head>
<body class="container">
<h1>GET-Request - Övning</h1>
<p>Skapa ett skript som hämtar ett tal via URLen.</p>  
<p>Om ett tal saknas i URLen, eller om talet är mindre än 18, 
    så ska skriptet visa meddelandet: 
    "Du får inte handla här!"
</p>
<p>Om talet är större än eller lika med 18, 
    visa meddelandet "Välkommen till vår webshop".
</p>
<hr>

<?php echo $message; ?>

</body>
</html>