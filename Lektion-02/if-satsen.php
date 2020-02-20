<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If-satsen</title>
</head>
<body>
  <h1>IF-satsen</h1>

<?php

date_default_timezone_set('Europe/Stockholm');

$time = date('H');
var_dump($time);

// Test Code (testkod)
$time = 21;
// echo $time;

if($time < 20){

  echo "<h2>Goddag</h2>";
}
else{

  echo "<h2>God kväll</h2>";

}

echo "<h2>Ternary-operator</h2>";
echo "<p>Skriv om if-satsen ovan med hjälp av 
      en ternary-operator.</p>";

echo "<h3>Lösning</h3>";

echo ($time < 20) ? 'Goddag' : 'God kväll' ;




echo "<hr>";

echo "<h2>Alternativ syntax</h2>";

if($time < '20'):
?>
<h2>Goddag</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consectetur quibusdam magni illo accusamus, assumenda eos at asperiores! Quasi rem, molestiae quam reiciendis provident adipisci ab sed eum doloremque itaque.</p>
<img 
  src="https://i.picsum.photos/id/1025/4951/3301.jpg" 
  alt="Dummy Image"
  width="495"
  height="331"
>

<?php else: ?>

<h2>God kväll</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic in quam nesciunt deleniti. Sint aspernatur nemo veniam, adipisci, dolor at rerum accusantium iure suscipit sed debitis blanditiis tempora nulla? Iste!</p>
<img 
  src="https://i.picsum.photos/id/1004/5616/3744.jpg" 
  alt="Dummy Image"
  width="500"
  height="330"
>

<?php endif; ?>

</body>
</html>
