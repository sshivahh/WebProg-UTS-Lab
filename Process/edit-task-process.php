<?php

    session_start();
    require_once("./../Database/db.php");

    if(!isset($_SESSION['username'])){
        header("location: ./../Pages/error.php?error=You are not logged in");
    }

    $id_task = $_GET['id_task'];

    $judul = $_POST['judul'];
    $desc = $_POST['desc'];
    $due = $_POST['due'];
    if(isset($_POST['done'])){
        $done = 1;
    }else{
        $done = 0;
    }

    $status = $_POST['status'];

    
    echo  "done = $done and status is $status";

    $sql = "UPDATE tasks
            SET
                judul = ?,
                description = ?,
                due = ?,
                done = ?,
                status = ?
            WHERE id = ?";

    $stmt = $db->prepare($sql);
    $stmt->execute([$judul, $desc, $due, $done, $status, $id_task]);

    header("location: ./../Pages/home.php");

?>