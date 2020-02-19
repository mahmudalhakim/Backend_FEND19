<?php

// Arbeta med variabler

$company = "Nackademin AB";
$mobile = "073-4234234";
$webmaster = "Mahmud Al Hakim";
$age = 47;

// Konstanter
define("SITE_TITLE" , "Web Academy AB");

?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variabler - <?=$company?> </title>
</head>
<body>


  <?php

    echo "<h1>Variabler</h1>";
    echo "<p>Välkommen till $company</p>";
    // $123;
    // Parse error: syntax error, unexpected 

    echo "<h1>Konstanter</h1>";
    // echo "Välkommen till SITE_TITLE" ; // OBS! Fel
    echo "Välkommen till ";
    echo SITE_TITLE ; 

    echo "<h2>Magiska konstaner</h2>";
  
    echo "<h3>Visa radnummer</h3>";
    echo __LINE__ . "<br>"; 
    echo __LINE__ . "<br>"; 
    echo __LINE__ . "<br>"; 

    echo "<h3>Visa aktuell mapp</h3>";
    echo __DIR__ . "<br>";

    echo "<h3>Visa filnamn</h3>";
    echo __FILE__ ;

    echo "<h3>Datatyper</h3>";
    var_dump($webmaster);
    echo "<br>";
    var_dump($age);

    echo "<h3>Testa datatyper</h3>";
    echo is_string($webmaster);  // 1 == true
    echo "<br>";
    echo is_int($webmaster); // OBS! ett tomt resultat == false
    echo "<br>";
    echo is_numeric($age); // 1

    echo '<h3>Strängar</h3>';
    echo '$webmaster'; // OBS! variabelnamn visas i webbläsaren!

    echo "<h4>Konkatenering</h4>";
    $url = "https://webacademy.se";
    $txt = "Web Academy AB";
  
    // Skapa en länk med konkatenering
    echo '<a href="' .  $url  . '">' . $txt . '</a><br>';

    // Alternativ syntax utan konkatenering
    echo "<a href='$url'>$txt</a><br>";
    echo "<a href=$url>$txt</a><br>";
    echo "<a href=\"$url\">$txt</a><br>";

    ?>


  <footer>

    <hr>
    <?php
      echo "<p>$company | 
            Kontakt: $mobile | 
            Webmaster: $webmaster </p>
            <p>I samarbete med ";
      echo SITE_TITLE;

      // define("SITE_TITLE" , "TEST");
      // Notice: Constant SITE_TITEL already defined

    ?>
  </footer>

  <p>TEST</p><p>TEST</p>

</body>
</html>