<html>
    <head>
        <link rel="stylesheet" href="./../Styling/window.css">
    </head>
    <body>
        <div class="window">
            <h1>Reset Your Password</h1>
            <form action="./../Process/reset-process.php?username=<?= $_GET['username'];?>" method="POST">
                <label for="">Enter your new password</label>
                <br>
                <input type="password" name='password'>
                <br>
                <button type="submit">Reset</button>
            </form>
        </div>
    </body>
</html>