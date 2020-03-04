<?php

/**************************************
 * 
 * Filnamn: update.php
 * Författare: Mahmud Al Hakim
 * Date: 2020-03-04
 * 
 * 1. Filen visar ett formulär 
 * med data från en enda rad som hämtas 
 * från databasen med hjälp av id
 * 
 * 2. Uppdatera databasen (raden) med 
 * ny data från formuläret
 * 
 *************************************/

require_once 'header.php';
require_once 'db.php';

if(isset($_GET['id'])){
  $id = htmlspecialchars($_GET['id']);
  $sql = "SELECT * FROM contacts WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id' , $id );
  $stmt->execute();

  if($stmt->rowCount() > 0){
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = $row['name'];
    $tel  = $row['tel'];
  }else{
    header('Location:index.php');
    exit;
  }

}else{
  header('Location:index.php');
  exit;
}

// 2. Uppdatera databasen (raden) med ny data från formuläret

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $name = htmlentities($_POST['name']);
  $tel  = htmlentities($_POST['tel']);
  $id   = htmlentities($_POST['id']);

  $sql = "UPDATE contacts
          SET name = :name, tel = :tel 
          WHERE id = :id";

  $stmt = $db->prepare($sql);

  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':tel' , $tel);
  $stmt->bindParam(':id'  , $id);

  $stmt->execute();
  header('Location:index.php');
  exit;
}

?>




<form action="#" method="POST">

<div class="row">

  <div class="col-md-5">
    <input 
      name="name"
      type="text" 
      placeholder="Ange namn" 
      class="form-control mb-3"
      value="<?php echo $name ?>"
    >
  </div>
  <div class="col-md-5">
    <input 
      name="tel"
      type="text" 
      placeholder="Ange telefon" 
      class="form-control mb-3"
      value="<?php echo $tel ?>"
    >
  </div>
  <div class="col-md-2">
    <input 
      type="submit" 
      value="Uppdatera"
      class="btn btn-outline-success btn-block"
    >
  </div>

</div>

<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>


<?php
  require_once 'footer.php';
?>