<?php
if(isset($_GET['id'])):
    $id = htmlentities($_GET['id']);
    include_once '../db.php';
    if($id == 0)
        $sql = "DELETE FROM contactform";
    else
        $sql = "DELETE FROM contactform WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
endif;

header('Location: index.php');