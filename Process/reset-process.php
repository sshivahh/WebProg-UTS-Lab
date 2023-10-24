<?php

    require_once("./../Database/db.php");

    $username = $_GET['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $password = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "UPDATE users SET password = ? WHERE username = ?";
    
    $stmt = $db->prepare($sql);
    $stmt->execute([$password,$username]);

    header("location: ./../Pages/login.php");
?>