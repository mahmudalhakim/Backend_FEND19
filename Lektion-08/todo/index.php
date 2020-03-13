<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

  $todo = htmlspecialchars($_POST['todo']);

  require_once 'db.php';
  $stmt = $db->prepare("INSERT INTO todo (todo) VALUES (:todo) ");
  $stmt->bindParam(':todo', $todo);
  $stmt->execute(); 

endif;

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inköpslista</title>
</head>
<body class="container">
    <h1 class="display-2 text-center">Inköpslista</h1>
    <h2>Vad vill du handla idag?</h2>
    <form action="#" method="POST">
      <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <input name="todo" class="form-control" required autofocus>
            </div>
        </div>
        <div class="col-md-4">
            <button class="btn-block btn btn-outline-success">Lägg till</button>
        </div>
      </div>
    </form>

    <?php 
      require_once 'read.php';
    ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function(){
      
      $(document).on("click", ".delete-btn", function () {
        let $href = $(this).data('href');
        // alert($href)
        
        $(".modal-btn-yes").attr('href', $href);
      
        let $todo = $(this).data('todo');
        $('#delete-todo').html($todo);

      });

    });

  </script>
  </body>
</html>