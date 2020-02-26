<?php

/********************************
 * 
 * Arbeta med RESTful API:er
 * 
 ********************************/

// Steg 1 - Hämta en resurs/endpoint/url
$url = "https://jsonplaceholder.typicode.com/users";

// Steg 2 - Skicka en GET-Request och hämta data
$data = file_get_contents($url);  // JSON-format

// Test
// echo "<pre>", $data, "</pre>";

// Steg 3 - Konvetera (decode = parse) data till en associativ array 
$array = json_decode($data , true);

// Test
// echo "<pre>";
// print_r($array);
// echo "</pre>";

echo "<h2>Övningar - Arbeta med JSONPlaceholder</h2>";
echo "<h3>Skriv ut alla namn från JSONPlaceholder</h3>";
foreach ($array as $key => $value) {
  // Skriv ut alla nycklar
  // echo $key;  

  // Skriv ut alla arrayer 
  // print_r($value); 
  // OBS! Varje JSON-objekt blev en array

  // Skriv ut alla namn
  echo $value['name'] . '<br>';

}

echo "<h3>2. Skriv ut en HTML-lista över alla namn</h3>";
echo "<ul>";
foreach ($array as $key => $value) {
  echo "<li>";
  echo $value['name'];
  echo "</li>";
}
echo "</ul>";

echo "<h3>3. Skriv ut en HTML-tabell över alla namn och mejl</h3>";
$table = "<table  border='1'>";
$table .= "<tr>
            <th>ID</th>
            <th>Namn</th>
            <th>E-post</th>
          </tr>";
foreach ($array as $key => $value) {
  $name = $value['name'];
  $table .= "<tr>
              <td>". $value['id'] . "</td>
              <td>$name</td>
              <td>$value[email]</td>
          </tr>";
}
$table .= "</table>";

echo $table;

echo "<h3>4. Visa de första 10 bilderna från JSONPlaceholder</h3>";
// Steg 1 - Ange en endpoint
$endpoint = "https://jsonplaceholder.typicode.com/photos";

// Steg 2 - Hämta data i JSON-format
$json = file_get_contents($endpoint);

// Steg 3 - Konvertera JSON till en associativ array
$array = json_decode($json, true);

// Test
// print_r($array);

foreach ($array as $key => $value) {
  if($key == 10)
    break;
  // echo $key . ' = ' . $value['thumbnailUrl'] . '<br>';
  echo "<img 
          src='$value[thumbnailUrl]' 
          alt='$value[title]'
        >";
}


echo "<h3>5. Skriv ut adressetiketter från JSONPlaceholder</h3>";

$url = "https://jsonplaceholder.typicode.com/users";
$json = file_get_contents($url); 
$users = json_decode($json , true);

$result = '';

foreach ($users as $index => $user) {
  $result .= "<div 
                style='border:1px solid black; 
                      padding:5px; 
                      margin:5px; 
                      float:left;
                      width:200px;
                      height:200px'
              >
              <h4>$user[name]</h4>
              <p>". $user['address']['street'] ."
              <br>". $user['address']['suite'] ."
              <br>". $user['address']['zipcode'] ."
              <br>". $user['address']['city'] ."
              </div>";
}

echo $result;