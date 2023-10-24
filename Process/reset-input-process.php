<?php

    require_once('./../Database/db.php');

    $sql = "SELECT * FROM users WHERE username = ?";

    $username = $_POST['username'];

    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$data){
        header("location: ./../Pages/error.php?error=username not found");
    }

    $mother = $_POST['mother'];

    if($mother === $data['mother']){
        header("location: ./../Pages/reset.php?username=$username");
    }
    else{
        header("location: ./../Pages/error.php?error=Incorrect credentials");
    }

?>