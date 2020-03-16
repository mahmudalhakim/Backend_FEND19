<?php

$stmt = $db->prepare("SELECT * FROM guestbook ORDER BY date DESC");
$stmt->execute();

$output = '<div class="list-group">';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)):

    $id   = htmlspecialchars($row['id']);
    $name = htmlspecialchars($row['name']);
    $body = htmlspecialchars($row['body']);
    $date = htmlspecialchars($row['date']);


    $output .= "<a href='#' 
                class='list-group-item list-group-item-action list-group-item-light'
                data-toggle='modal' data-target='.bd-example-modal-lg-$id'>
                $body <br> 
                <em>$name</em>
                <span class='badge badge-info badge-pill float-right'>$date</span>
              </a>";


    $output .= " <!-- Large modal from https://getbootstrap.com/docs/4.4/components/modal/ -->    
    <div class='modal fade bd-example-modal-lg-$id m-5 p-5'>
      <div class='modal-dialog modal-lg'>
        <div class='modal-content p-5'>
          <div class='modal-header p-0'>
          <h4>Gäst: <em> $name </em> </h4>
            <button type='button' class='close float-right' data-dismiss='modal'>
              <span>&times;</span>
            </button>
          </div>
          
          <h5>Meddelande</h5>
          <div>$body</div>
          <hr>
          <em>Datum: $date</em> 
        </div>
      </div>
    </div>";

endwhile;

$output .= '</div>';

echo $output;
