<?php

/**************************************
 * 
 * Filnamn: read.php
 * Författare: Mahmud Al Hakim
 * Date: 2020-03-04
 * 
 * Filen hämtar en tabell från databasen
 * 
 *************************************/

$sql = "SELECT * FROM contacts";
$stmt = $db->prepare($sql);
$stmt->execute();
// $stmt är ett objekt som innehåller tabellen

$table = '<table class="table">';
$table .= '<tr>
            <th>ID</th>  
            <th>Namn</th>
            <th>Telefon</th>
            <th>Admin</th>
          </tr>';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  // test
  // print_r($row);

  $id   = htmlspecialchars( $row['id']);
  $name = htmlspecialchars( $row['name']);
  $tel  = htmlspecialchars( $row['tel']);

  $table .= "<tr>
              <td> $id </td>
              <td> $name </td>
              <td> $tel </td>
              <td>
                <a href='update.php?id=$id' 
                  class='btn btn-outline-info'>
                  Uppdatera
                </a>
              </td>
            </tr>";
}
$table .= '</table>';

echo $table;

