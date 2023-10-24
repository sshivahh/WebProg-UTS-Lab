<html>
    <head>
        <link rel="stylesheet" href="./../Styling/window.css">
    </head>
    <body>
        <div class="window">
            <h1>Reset Your Password</h1>
            <form action="./../Process/reset-input-process.php" method="POST">
                <label for="">Username</label>
                <br />
                <input type="text" name="username" required>
                <br />
                <label for="">What is your mother's last name?</label>
                <br />
                <input type="text" name="mother" required>
                <br />
                <button type="submit">Reset</button>
            </form>
        </div>
    </body>
</html>