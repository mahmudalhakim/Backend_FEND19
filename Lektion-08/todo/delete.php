<?php

require_once 'db.php';

if(isset($_GET['id'])){

  $id = htmlspecialchars($_GET['id']); 

  $sql = "DELETE FROM todo WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

header('Location:index.php');