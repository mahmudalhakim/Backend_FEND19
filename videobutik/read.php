<?php

    // C R U D
    // Hämta alla filmer
    require_once 'db.php';
    $stmt = $db->prepare("SELECT * FROM films");
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
      $id    = $row['id'];
      $title = $row['title'];
      $price = $row['price'];
      $image = $row['image'];

      // Skapa src till img-taggen
      if(empty($image))
        $image = "images/no-poster.png";
      else
        $image = "images/$image";


      echo "<img src='$image'>" . '<br>';

    endwhile;