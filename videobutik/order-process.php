<?php 
/**********************************************
 *       order-form.php
 *       Hanterar beställningen
 *  
 **********************************************/

if ($_SERVER['REQUEST_METHOD'] == 'POST'):

  // Hämta och rensa data från POST-Arrayen
  $film_id     = htmlspecialchars($_POST['film_id']); 
  $price       = htmlspecialchars($_POST['price']);
  $customer_id = htmlspecialchars($_POST['customer_id']);

  echo "Film: $film_id";

endif;