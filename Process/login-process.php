<?php

    require_once('./../Database/db.php');

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $db->prepare($sql);
    $temp = $stmt->execute([$username]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);



    if(password_verify($password, $data['password'])){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
        header("location: ./../Pages/home.php");
    }
    else{
        header("location: ./../Pages/error.php?error=Incorrect credentials");
    }

?>