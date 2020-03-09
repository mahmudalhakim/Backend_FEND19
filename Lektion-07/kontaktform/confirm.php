<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    // Testa att skriva ut data som finns i POST-arrayen
    // print_r($_POST);
    
    // Lägg till htmlspecialchars för att rensa HTML
    $name = htmlspecialchars($_POST['name']);

    $email = htmlspecialchars($_POST['email']);
    // Lägg till ett filter för att validera e-postadressen
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is not a valid email address");
        die; // vid fel avsluta med die() eller exit() 
    }
    $message = htmlspecialchars($_POST['message']);

    // Logga in i databasen
    require_once 'db.php';

    // Förbered en SQL-sats
    $sql = "INSERT INTO contactform (name,email,message) 
            VALUES ( :name, :email, :message) ";
    $stmt = $db->prepare($sql);

    // Binda variabler till params, som finns i VALUES
    $stmt->bindParam(':name'    , $name);
    $stmt->bindParam(':email'   , $email);
    $stmt->bindParam(':message' , $message);

    // Skicka SQL till databasen
    $stmt->execute(); 

    // Skapa bekräftelse 
    $confirm = "<h3>Tack $name</h3>
                <p>Här kommer en kopia på ditt meddelande</p>
                <hr>
                <p><em>$message</em></p>
                <p><b>Din e-postadress är $email</b></p>
                <hr>";

endif;

?>

<!DOCTYPE html>
<html lang="sv">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tack</title>
</head>
<body class="container">
    <?php
        echo $confirm;
    ?>
</body>
</html>