<?php

    require_once('./../Database/db.php');

    session_start();
    require_once('./../Database/db.php');

    if(isset($_SESSION['id'])){   
        $id_user = $_SESSION['id']; 
        $sql = "SELECT * FROM tasks WHERE id_user = ? AND done = ?";
        $stmt1 = $db->prepare($sql);
        $stmt2 = $db->prepare($sql);
        $stmt1->execute([$id_user, 0]);
        $stmt2->execute([$id_user, 1]);
    }   

    if(isset($_SESSION['username'])){
?>
<!-- kalo udah login -->
<html>
    <head>
        <title>TaskTracker</title>
        <link rel="stylesheet" href="./../Styling/home.css">
    </head>
    <body>
        <div class="blue-block">
            <h1 class="logo" style = "">Task Tracker</h1>
            <div class="profile">
                <img src="./../Src/profile.png" alt="" class="profile-pic">
                <div class="profile-content">
                    <h3><?= $_SESSION['username']?></h3>
                    <a href="./../Process/logout-process.php">
                        <button>Log Out</button>
                    </a>
                </div>
            </div>
        </div>
        <h2 class="task-title">Your Tasks</h2>
        <div class="task-container">
        <?php
            $x = 1;
            while($data = $stmt1->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div class="task">
                <div class="task-header">
                    <p class="task-name"><?= "$x. {$data['judul']}" ?></p>
                    <a href="./edit-task.php?id_task=<?= $data['id'];?>">
                            <button>Edit</button>
                    </a>
                </div>
                <p class="task-desc"><?= $data['description'] ?></p>
                <p class="task-due"><img class="clock" src="./../Src/due.png" alt=""><?= $data['due'] ?></p>
                <p class="task-status"><?php
                    switch($data['status']){
                        case 0:
                            echo "Not started";
                            break;
                            case 1:
                                echo "Waiting on";
                                break;
                                default: echo "In progress";
                            };
                ?></p>
                <p class="task-notdone">Not done</p>
            </div>
        <?php        
            $x++;}
        ?>
        <?php           
            while($data = $stmt2->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div class="task">
                <div class="task-header">
                <p class="task-name"><?= "$x. {$data['judul']}" ?></p>
                    <a href="./edit-task.php?id_task=<?= $data['id'];?>">
                            <button>Edit</button>
                    </a>
                </div>
                <p class="task-desc"><?= $data['description'] ?></p>
                <p class="task-due"><img class="clock" src="./../Src/due.png" alt=""><?= $data['due'] ?></p>
                <p class="task-status"><?php
                    switch($data['status']){
                        case 0:
                            echo "Not started";
                            break;
                            case 1:
                                echo "Waiting on";
                                break;
                                default: echo "In progress";
                            };
                ?></p>
                <p class="task-done">Done</p>
            </div>
        <?php        
            $x++;}
        ?>
            <a href="./add-task.php" class="add-task">
                <button>Add Task</button>
            </a>
        </div>
    </body>
</html>



<?php

    }else{
?>
<!-- kalo belom login -->
<html>
    <head>
        <title>TaskTracker</title>
        <link rel="stylesheet" href="./../Styling/home.css">
    </head>
    <body>
        <div class="login-window">
            <h1 class="login-header">Please Log In First</h1>
            <a href="./login.php">
                <button>Log In</button>
            </a>
        </div>
    </body>
</html>
<?php

    }
?>