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

  // :name och :tel kallas "parameter markers" = platshållare 

  // Prepared statements
  // Varför?
  // The database parses, compiles, and performs query optimization 
  // on the SQL statement template, and stores the result 
  // without executing it
  // https://www.w3schools.com/php/php_mysql_prepared_statements.asp
  $stmt = $db->prepare($sql);

  // Binda parametrar
  $name = htmlspecialchars($_POST['name']);
  $tel  = htmlspecialchars($_POST['tel']);
  // Övning
  // Testa att name och tel är minst ett tecken
  $stmt->bindParam(':name' , $name );
  $stmt->bindParam(':tel'  , $tel);

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


