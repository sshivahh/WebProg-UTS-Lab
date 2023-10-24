<?php

    require_once('./../Database/db.php');

?>

<html>
    <head>
        <title>IFF330 AL6</title>
        <link rel="stylesheet" href="./../Styling/window.css">
    </head>
    <body>
        <div class='window'>
            <h1>Register</h1>
            <form action="./../Process/register-process.php" method="POST">
                <label for="">Username</label>
                <br />
                <input type="text" name='username' required>
                <br />
                <label for="">Password</label>
                <br />
                <input type="password" name='password' required>
                <br />
                <p>What is your mother's last name?</p>
                <input type="text" name='mother' required>
                <br />
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="./login.php">Log in</a> here!</p>
        </div>
    </body>
</html>