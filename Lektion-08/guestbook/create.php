<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    
    $name = htmlspecialchars($_POST['name']);
    $body = htmlspecialchars($_POST['body']);



    // Förbered en SQL-sats
    $stmt = $db->prepare("INSERT INTO guestbook (name,body) 
                            VALUES (:name, :body) ");

    // Binda variabler till params, som finns i VALUES
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':body', $body);

    // Skicka SQL till databasen
    $stmt->execute(); 

endif;

?>

<form action="#" method="post" class="row">

    <div class="col-md-12 form-group">
        <textarea id="textarea" name="body" cols="30" rows="5" maxlength="500" required
        class="form-control" placeholder="Skriv ett meddelande (max 500 tecken)"></textarea>
        <div class="float-right" id="count"></div>
    </div>

    <div class="col-md-6 form-group">
        <input name="name" type="text" required
        class="form-control" placeholder="Skriv ditt namn">
    </div>

    <div class="col-md-6 form-group">
        <input type="submit" value="Skicka"
        class="btn btn-success form-control">
    </div>

</form>

<script>
document.getElementById('textarea').onkeyup = function () {
    document.getElementById('count').innerHTML = 
    "Tecken kvar: " + (500 - this.value.length);
};
</script>