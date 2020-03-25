<?php

    // C R U D
    // Hämta alla filmer
    require_once 'db.php';
    $stmt = $db->prepare("SELECT * FROM video_films");
    $stmt->execute();

    echo "<div class='row'>";

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
      $id    = htmlspecialchars($row['id']);
      $title = htmlspecialchars($row['title']);
      $price = htmlspecialchars($row['price']);
      $image = htmlspecialchars($row['image']);

      // Skapa src till img-taggen
      if(empty($image))
        $image = "images/no-poster.png";
      else
        $image = "images/$image";

      ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      
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