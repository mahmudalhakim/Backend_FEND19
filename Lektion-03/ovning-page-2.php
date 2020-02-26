<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
  <style>

  body{
    font-family:Arial, sans-serif;
    width:400px;
    margin: 10px auto;
  }
  h1{
    text-align:center;
  }

  .message{
    border:1px double #faf;
    margin:10px;
    padding:20px;
    font-size:16px;

  }
  </style>
</head>
<body>
  <h1>Your message</h1>
  <pre class="message"><?php
    if(isset($_GET['message']))
      echo $_GET['message'];
    ?>
  </pre>
</body>
</html>