<?php

/**************************************
 * 
 * Filnamn: delete.php
 * Författare: Mahmud Al Hakim
 * Date: 2020-03-04
 * 
 * 1. Filen tar bort en rad från databasen
 *    med hjälp av ett id
 *************************************/

require_once 'db.php';

if(isset($_GET['id'])){

  $id = htmlspecialchars($_GET['id']); 

  $sql = "DELETE FROM contacts WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

header('Location:index.php');

// Övning
// Lägg till en popup (modal) 
// som visar en bekräftelse (confirm) med Ja/Nej