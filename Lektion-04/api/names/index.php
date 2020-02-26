<?php

/***********************************
 * 
 *  Att skapa ett eget API i PHP
 * 
 * ********************************/

// 1. Ange innehållstypen JSON.
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa PHP-arrayer för att lagra olika förnamn och efternamn.
$firstNamesMale = [
  "Mahmud" ,
  "Kalle"  , 
  "Erik"   , 
  "Adam"   , 
  "Fredrik", 
];
$firstNamesFemale = [ 
  "Astrid" , 
  "Yasmin" , 
  "Sara"   , 
  "Maria"  ,
  "Åsa"    
];
$lastNames = [
  "Al Hakim",
  "Öberg",
  "Ericsson",
  "Anka",
  "Söderberg",
  "Gustavsson",
  "Nilson",
  "Lindgren",
  "Nyström",
  "Hakimson"
];

// 3. Arbeta med GET-Request.
// Sätt en gräns/limit på antal namn till 10.
// Kontrollera om det finns data i GET-Requesten (t.ex. limit=20) 
// Ändra limit i så fall.
// Exempel på en GET-Request
// http://localhost/api/names/?limit=50
$limit = 10;
if(isset($_GET['limit'])){
  $limit = $_GET['limit'];
}

// 4. Skapa ett antal slumpgenererade namn 
// (förnamn och efternamn) enligt GET-requesten. 
// Skapa minst 10 namn om limit saknas! 
// Spara dessa i en ny array.
$names = [];

while(true) {
    $randFnMale   = rand(0,count($firstNamesMale)-1);
    $randFnFemale = rand(0,count($firstNamesFemale)-1);
    $randLastname = rand(0,count($lastNames)-1);

    $randGender = rand(0,1);
    if($randGender){
      $firstname = $firstNamesMale[$randFnMale];
      $gender = "male";
    }else{
      $firstname = $firstNamesFemale[$randFnMale];
      $gender = "female";
    }
      
    $name = array("firstname"=>$firstname,
                  "lastname"=>$lastNames[$randLastname],
                  "gender" => $gender
                );

    $names[] = $name;

    if(count($names) >= $limit)
      break;
      
}

// Extra - Blanda alla namn i arrayen
shuffle($names);

// 5. Konvertera PHP-arrayen till en JSON-string.

$json = json_encode($names,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
// json_encode — 
// Returns the JSON representation of a value 
// http://php.net/manual/en/function.json-encode


// 6. Skicka JSON till klienten.
echo $json;