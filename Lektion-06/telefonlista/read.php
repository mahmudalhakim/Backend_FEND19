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
            <th>Namn</th>
            <th>Telefon</th>
          </tr>';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  // test
  // print_r($row);

  $name = $row['name'];
  $table .= "<tr>
              <td> $name </td>
              <td> $row[tel]   </td>
            </tr>";
}
$table .= '</table>';

echo $table;

