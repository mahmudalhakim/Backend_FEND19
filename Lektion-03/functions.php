<?php

// Deklarera en parameterlös funktion
function demo(){

  echo "Hello World";

}

// Deklarera en funktion med en parameter
function hello($name){

  echo "Hello $name";

}

// Övning - Skapa en sidhuvud
function head($title){
  echo "<!DOCTYPE html>
  <html lang=\"sv\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>$title - Nackademin</title>
  </head>
  <body>
    <h1>$title</h1>";
}


// Skapa en sidfot
function footer(){
  $year = date('Y');
  echo "<hr>
  <footer>
    Copyright &copy; $year
  </footer>
  </body>
  </html>";
}

// Skriv ut med radbrytning
function echo_br($text){
  echo "$text<br>\n";
}

// Funktioner med två parametrar
function full_name($fname, $lname){
  return "$fname $lname";
}

// En funktion som skriver ut en array med pre-taggen
// Vi får en "snyggare" array
function print_array($array){
  echo '<hr>';
  echo '<pre>';
  print_r($array);
  echo '</pre>';
  echo '</hr>';
}

// Funktioner med ett godtyckligt antal parametrar
function rest_demo(...$args){
  // ... är en operator som heter rest-operator
  // rest-operatorn omvandlar argrumenten till en array
  print_array($args);

}

/*
  Övning
• Skapa en funktion med namnet get_URL()
• Funktionen läser in data via URLen (via en GET-Request).
• Exempel på anrop av funktionen get_URL("name");
• Funktionen ska då returnera värdet som man skickar med namnet/nyckeln name
• Exempel på URLen: test.php?name=Mahmud
• Mahmud är alltså värdet som returneras av funktionen.
• Implementera nödvändiga felkontroller.
• Testa funktionen med olika nycklar.
*/
function get_URL($key){
  if(empty($_GET[$key])){
    echo "<span style='color:red'>No query string was presented!<span>";
  }elseif(isset($_GET[$key])){
    return $_GET[$key];
  }
}