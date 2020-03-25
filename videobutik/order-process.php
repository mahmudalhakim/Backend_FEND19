<?php 
/**********************************************
 *       order-form.php
 *       Hanterar beställningen
 *  
 **********************************************/

if ($_SERVER['REQUEST_METHOD'] == 'POST'):

  require_once 'db.php';
  require_once 'header.php';

  // Hämta och rensa data från POST-Arrayen
  $film_id     = htmlspecialchars($_POST['film_id']); 
  $price       = htmlspecialchars($_POST['price']);
  $customer_id = htmlspecialchars($_POST['customer_id']);

  // print_r($_POST);

  // Testa om kunden finns i databasen
  $sql = "SELECT * FROM customers WHERE id=:id"; 
  $stmt = $db->prepare($sql); 
  $stmt->bindParam(':id', $customer_id); 
  $stmt->execute();

  // Om kunden saknas skapa ett felmeddelande
  if ($stmt->rowCount() == 0) {
    $message = "<div class='alert alert-warning'>
                <h3> OBS! Felaktigt kundnummer! </h3>
                </div>";
  }
  else { // Ja kunden finns i databasen.
    $row   = $stmt->fetch(PDO::FETCH_ASSOC);
    $name  = htmlspecialchars($row['name']);
    $email = htmlspecialchars($row['email']);

    // Skapa ett meddelande med info om beställningen
    $message = "<div class='alert alert-success'>
                <h3>Tack $name</h3> 
                <p>Vi kommer att skicka en länk till </p>
                <p>$email</p>
                </div>";

    // Skicka beställningen till databasen
    $sql = "INSERT INTO orders(film, customer)
            VALUES (:film, :customer)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':film', $film_id);
    $stmt->bindParam(':customer', $customer_id); 
    $stmt->execute();
  }

  echo $message;
  
  require_once 'footer.php';

endif;