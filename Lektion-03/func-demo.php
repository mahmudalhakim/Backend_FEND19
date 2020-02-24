<?php

  // Inkludera en fil
  include 'functions.php';

  // Anropa en parameterlös funktion
  head("Funktioner - Demo"); // sidhuvud

?>

<!-- Anropa en parameterlös funktion inne i en tagg -->
<p><?php demo(); ?></p>

<!-- Anropa en funktion med ett argument -->
<p><?php hello('Mahmud!'); ?></p>
<p><?php hello('Rasmus!'); ?></p>

<!-- Anropa en funktion med två argument -->
<p><?php echo full_name('Rasmus' , 'Lerdorf'); ?></p>

<p>
<?php
  echo_br("Test 1.");
  echo_br("Test 2.");
  echo_br("Test 3.");
?>
</p>

<h2>Skriv ut GET-arrayen</h2>
<a href="?fname=Mahmud&lname=Al Hakim">
  Testa GET-arrayen här!
</a>
<?php print_array($_GET); ?>

<h2>Funktion med flera argument</h2>
<?php
  rest_demo('A');
  rest_demo('A', 'B');
  rest_demo('A', 'B', 'C');
?>

<h2>Övning</h2>
<a href="?name=Mahmud Al Hakim">
  Testa funktionen get_URL med ett <b>giltigt</b> värde!
</a>
<br>
<a href="?name">
  Testa funktionen get_URL med ett <b>ogiltigt</b> värde!
</a>
<h3>Response: <?php echo get_URL('name'); ?></h3>


<?php footer() ?>