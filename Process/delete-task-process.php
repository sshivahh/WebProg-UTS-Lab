<?php

    session_start();
    require_once("./../Database/db.php");

    if(!isset($_SESSION['username'])){
        header("location: ./../Pages/error.php?error=You are not logged in");
    }

    $id_task = $_GET['id_task'];

    $sql = "DELETE FROM tasks WHERE id = ?";

    $stmt = $db->prepare($sql);
    $stmt->execute([$id_task]);

    header("location: ./../Pages/home.php");

?>