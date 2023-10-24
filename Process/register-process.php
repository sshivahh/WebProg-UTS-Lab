<?php

    require_once('./../Database/db.php');

    $username = $_POST['username'];

    echo "username adalah $username";

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $db->prepare($sql);
    
    $temp = $stmt->execute([$username]);
    
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    echo $data;
    

    if($data){
        header('location: ./../Pages/error.php?error=Username is already taken');
    }
    
    $tempPassword = $_POST['password'];
    
    $mother = $_POST['mother'];
    
    $password = password_hash($tempPassword, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users(username, password, mother) VALUES
            (?, ?, ?)";

    $stmt = $db->prepare($sql);
    $data = [$username, $password, $mother];
    $stmt->execute($data);

    header('location: ./../Pages/login.php');
?>