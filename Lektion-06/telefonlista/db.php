<?php

/**************************************
 * 
 * Filnamn: db.php
 * Författare: Mahmud Al Hakim
 * Date: 2020-03-04
 * 
 * Filen innehåller info om databasen
 * och användaren
 * 
 *************************************/

$db_server   = "localhost";
$db_database = "contactsdb";
$db_username = "root";
$db_password = "root";

try{
  $db = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8" 
                , $db_username 
                , $db_password);

  $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); 

  // echo "<h2>Connected Successfully</h2>";

}catch(PDOException $e){
  echo "<h2>Error: " . $e-> getMessage() . "</h2>";
}