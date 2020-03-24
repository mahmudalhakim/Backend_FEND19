<?php

    // C R U D
    // Hämta alla filmer
    require_once 'db.php';
    $stmt = $db->prepare("SELECT * FROM films");
    $stmt->execute();

    echo "<div class='row'>";

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

      ?>

      <div class="col-md-3">
      
        <a href="order-form.php?id=<?php echo $id; ?>">
          <div class="card">
            <img class="card-img-top"
                src="<?php echo $image; ?>"
                alt="<?php echo $title; ?>">
            <div class="card-body">
              <h4 class="card-title text-center">
                <?php echo $title . '<br>';
                      echo $price . 'kr'; ?>
              </h4> 
            </div>
          </div> 
        </a>

      </div> <!-- col -->


      <?php
    endwhile;

    echo "</div>"; // row