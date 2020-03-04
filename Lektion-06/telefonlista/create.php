<?php

/**************************************
 * 
 * Filnamn: create.php
 * Författare: Mahmud Al Hakim
 * Date: 2020-03-04
 * 
 * Filen innehåller ett formulär
 * som skickar data till databasen
 * 
 *************************************/


// Hantera data som skickas via formuläret
if($_SERVER['REQUEST_METHOD'] === 'POST') :

  // Test
  // print_r($_POST);

  // Skapa en SQL-sats
  $sql = "INSERT INTO contacts (name, tel)
          VALUES ( :name , :tel ) ";

  // Prepared statements
  $stmt = $db->prepare($sql);

  // Binda parametrar
  $stmt->bindParam(':name' , $_POST['name']);
  $stmt->bindParam(':tel'  , $_POST['tel']);

  // Skicka SQL-satsen till databas-servern
  $stmt->execute();

endif;

?>


<form action="#" method="POST">

<div class="row">

  <div class="col-md-5">
    <input 
      name="name"
      type="text" 
      placeholder="Ange namn" 
      class="form-control mb-3"
    >
  </div>
  <div class="col-md-5">
    <input 
      name="tel"
      type="text" 
      placeholder="Ange telefon" 
      class="form-control mb-3"
    >
  </div>
  <div class="col-md-2">
    <input 
      type="submit" 
      value="Lägg till"
      class="btn btn-outline-primary btn-block"
    >
  </div>

</div>

</form>


