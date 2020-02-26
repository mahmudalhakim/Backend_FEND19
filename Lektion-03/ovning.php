<?php

/*  
  Övning
  1. Skapa ett kontaktformulär. 
  2. Alla fält är obligatoriska.
  3. Säkerhetsoptimera servern genom 
    att validera all data som skickas 
    via formuläret till backend-systemet.
  4. Visa lämpliga felmeddelanden vid fel.
  5. Om all data är giltig (valid), 
    visa meddelandet på en ny sida.
*/


/**
 * Funktionen clean_xss()
 * rensar alla blanka tecken och specialtecken,
 * för att förhindra XSS-attacker
 */
function clean_xss(){
  foreach ($_POST as $key => $value) {
    $value = trim($value);
    $_POST[$key] = htmlspecialchars($value);
  }
}
clean_xss();


// En array som lagrar giltig data.
$data = [
  'name'    => '',
  'email'   => '',
  'message' => ''
];

// En array som lagrar alla fel.
$errors = [];





// Validera alla fält 
if (isset($_POST['name'])
    && isset($_POST['email'])
    && isset($_POST['message'])
) {


  if (empty($_POST['name'])) {
    $errors['name'] = "Error: name is missing!";
  }else{
    $data['name'] = $_POST['name'];
  }




  if (empty($_POST['email'])) {
    $errors['email'] = "Error: email is missing!";
  }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = $_POST['email'] . " is not a valid email address";
  }else{
    $data['email'] = $_POST['email'];
  }




  if (empty($_POST['message'])) {
    $errors['message'] = "Error: message is missing!";
  }else{
    $data['message'] = $_POST['message'];
  }


}

// Skicka meddelandet till en ny sida
if (!count($errors) && $data['message']){
  $message = $data['message'];
  $message = urlencode($message); 
  // https://www.php.net/urlencode
  $url="ovning-page-2.php?message=$message";
  header("Location: $url");

} 

/**
 * Skriv ut alla arrayer
 */
echo "<hr>";
echo "<pre>";
echo "<h3>POST</h3>";
var_dump($_POST);
echo "<h3>Errors</h3>";
var_dump($errors);
echo "<h3>Data</h3>";
var_dump($data);
echo "</pre>";
echo "<hr>";

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Form</title>
  <link rel="stylesheet" href="ovning.css">
</head>
<body>

<h3>Contact Form</h3>

<div class="container">

  <form action="#" method="POST">

    <label for="name">Name</label>
    <input 
      type="text" 
      placeholder="Your name.."
      name="name" 
      value="<?php echo $data['name']; ?>"
    >
    <div class='error'>
      <?php echo (empty($errors['name']) ? '' : $errors['name'] ); ?>
    </div>

    <label for="email">Email</label>
    <input 
      type="text"
      placeholder="Your email.."
      name="email"
      value="<?php echo $data['email']; ?>"
    >
    <div class='error'>
      <?php echo (empty($errors['email']) ? '' : $errors['email'] ); ?>
    </div>

    <label for="message">Message</label>
    <textarea 
      name="message" 
      placeholder="Write something.."><?php echo $data['message']; ?></textarea>
    <div class='error'>
      <?php echo (empty($errors['message']) ? '' : $errors['message'] ); ?>
    </div>

    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>