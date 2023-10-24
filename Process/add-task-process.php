<?php

    session_start();

    require_once('./../Database/db.php');

    if(!isset($_SESSION['username'])){
        header("location: ./../Pages/error.php?error=You are not logged in");
    }

    $username = $_SESSION['username'];

    $id_user = $_SESSION['id'];

    $judul = $_POST['judul'];
    $desc = $_POST['desc'];
    $due = $_POST['due'];

    $sql = "INSERT INTO tasks(id_user, judul, description, due, done, status)
            VALUES(?, ?, ?, ?, 0, 0)";

    $stmt = $db->prepare($sql);
    $stmt->execute([$id_user, $judul, $desc, $due]);

    header("location: ./../Pages/home.php");
?>
