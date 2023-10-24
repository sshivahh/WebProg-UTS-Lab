<?php

    session_start();
    require_once("./../Database/db.php");

    if(!isset($_SESSION['username'])){
        header("location: ./error.php?error=You are not logged in");
    }

    $id_task = $_GET['id_task'];

    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id_task]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
    <head>
        <link rel="stylesheet" href="./../Styling/window.css">
    </head>
    <body>
        <div class="window">
            <h1>Edit Task</h1>
            <form action="./../Process/edit-task-process.php?id_task=<?= $id_task;?>" method="POST">
                <label for="">Task Name</label>
                <br>
                <input type="text" name='judul' value="<?= $data['judul'];?>" required>
                <br>
                <label for="">Task Description</label>
                <br>
                <input type="text" name='desc' value="<?= $data['description'];?>">
                <br>
                <label for="">Due Date</label>
                <br>
                <input type="date" name='due' value=<?= $data['due'];?> required>
                <br>
                <label for="">Done</label>
                <br>
                <input type="checkbox" name="done">
                <br>
                <label for="">Progress</label>
                <br>
                <select name="status" id="">
                    <option value="0">Not started</option>
                    <option value="1">Waiting on</option>
                    <option value="2">In progress</option>
                </select>
                <br>
                <button type="submit">Edit Task</button>
            </form>
            <a href="./../Process/delete-task-process.php?id_task=<?= $id_task;?>">
                <button type="submit" id="delete">Delete Task</button>
            </a>
        </div>
    </body>
</html>