<?php

    require_once('./../Database/db.php');

?>

<html>
    <head>
        <title>IFF330 AL6</title>
        <link rel="stylesheet" href="./../Styling/window.css">
    </head>
    <body>
        <div class="window">
            <h1>Log In</h1>
            <form action="./../Process/login-process.php" method="POST">
                <label for="">Username</label>
                <br />
                <input type="text" name="username" required>
                <br />
                <label for="">Password</label>
                <br />
                <input type="password" name='password' required>
                <br />
                <button type="submit">Log In</button>
            </form>
            <p>Forgot your password? <a href="./reset-input.php">Reset your password</a></p>
            <p>Don't have an account? <a href="./register.php">Register</a> here!</p>
        </div>
    </body>
</html>