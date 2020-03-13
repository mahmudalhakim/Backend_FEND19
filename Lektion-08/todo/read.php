<?php

require_once 'db.php';

$sql = "SELECT * FROM todo";
$stmt = $db->prepare($sql);
$stmt->execute();

$todos = '<ul id="list" class="list-group mt-1">';


while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
  $id   = htmlspecialchars( $row['id']);
  $todo = htmlspecialchars( $row['todo']);

  $todos .= "<li class='list-group-item'>
                $todo
                <span class='float-right'>
                <button 
                  data-href='delete.php?id=$id' 
                  data-todo = $todo
                  data-toggle='modal'
                  data-target='#deleteModal'
                  class='btn btn-outline-danger btn-sm delete-btn'>
                  Ta bort
                </button>
                </span>
            </li>";

endwhile;

$todos .= '</ul>';

echo $todos;

?>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ta bort</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Är du säker? <br>
        Vill du ta bort följande produkt... <br>
        <em>
          <span id="delete-todo" class="text-danger"></span>
        </em>
      </div>
      <div class="modal-footer">
        <button class="btn btn-info" data-dismiss="modal">Nej</button>
        <a type="button" class="btn btn-danger modal-btn-yes">Ja</a>
      </div>
    </div>
  </div>
</div>