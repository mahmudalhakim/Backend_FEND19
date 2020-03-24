<?php 
/**********************************************
 *       order-form.php
 *       Visar ett beställningsformulär
 *  
 **********************************************/

require_once 'header.php';
require_once 'db.php';

$id = htmlspecialchars($_GET['id']);

$sql = "SELECT * FROM films WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$title = $row['title'];
$price = $row['price'];

?>

<h2>Beställning</h2>

<form action="order-process.php" method="post"> 

  <h4><?php echo $title; ?></h4>
  <h4>Pris: <?php echo $price; ?>kr</h4>

  <input 
    type="number" 
    name="customer_id" 
    required 
    class="form-control my-2"
    placeholder="Ange ditt kundnummer"> 

  <input
    type="hidden"
    name="film_id" 
    value="<?=$id?>"> <!-- Echo shorthand syntax -->
    
  <input
    type="hidden" 
    name="price" 
    value="<?=$price?>">

  <input type="submit"
      class="form-control my-2 btn btn-outline-success"
      value="Skicka beställningen">
      
</form>

<?php
require_once 'footer.php';