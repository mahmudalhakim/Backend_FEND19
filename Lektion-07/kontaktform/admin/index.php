<?php

// 1. Logga in i databasen
require_once '../db.php';

// 2. Förbered en SQL-sats
$stmt = $db->prepare("SELECT * FROM contactform");

// 3. Kör SQL
$stmt->execute();

// 4. Skapa en HTML-tabell
$table = '<table class="table table-sm">';
$table .= '<tr class="table-dark"><th>Namn</th><th>E-post</th><th>Meddelande</th><th></th></tr>';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    // $table .= print_r($row);

    $id = htmlspecialchars($row['id']);
    $name = htmlspecialchars($row['name']);
    $email  = htmlspecialchars($row['email']);
    $message   = htmlspecialchars($row['message']);


    $table .= "<tr>
                <td>$name</td>
                <td>$email</td>
                <td><pre>$message</pre></td>
                <td class='text-center'>
                    <a href='delete.php?id=$id' 
                        class='btn btn-sm btn-outline-danger'>
                        Ta bort   
                    </a>
                </td>
                </tr>";
} // while
$table .= '</table>';
?>

<!DOCTYPE html>
<html lang="sv">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Alla meddelanden</title>
</head>

<body class="container">

        <?php
            //  Skriv ut tabellen
            echo $table;
        ?>
        
        
        <a href='delete.php?id=0' 
            class='btn btn-sm btn-outline-danger'>
            Ta bort alla meddelanden 
        </a>

</body>
</html>
