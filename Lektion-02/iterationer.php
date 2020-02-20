<?php

// Lösning 1 med en for-loop

// .= är en operator som används för att lägga till data

$table = "<table>";
$table .= "<tr>    
            <th>x</th>
            <th>x<sup>2</sup></th>
            </tr>";

for($x=1; $x<=10;$x++){
  $table .= "<tr> 
              <td>$x</td>
              <td>" . $x**2 . "</td>
            </tr>";
}
$table .= '</table>';

// Lösning 2 med en while-loop

$table2 = "<table>";
$table2 .= "<tr>
            <th>x</th>
            <th>x<sup>2</sup></th>
            </tr>";
$x=1;
while($x<=10){
  $table2 .= "<tr> 
              <td>$x</td>
              <td>".$x*$x."</td>
            </tr>";
  $x++;
}
$table2 .= '</table>';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iterationer</title>
  <style>
    th, td{
      border:1px solid maroon;
      width:100px;
      padding:5px;
    }

    div{
      display:inline-block;
    }
  </style>
</head>
<body>

<div>
  <h2>Lösning med en for-loop</h2>
  <?php echo $table; ?>
</div>

<div>
  <h2>Lösning med en while-loop</h2>
  <?php echo $table2; ?>
</div>

</body>
</html>