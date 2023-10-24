<?php

    $error = $_GET['error'];

?>

<html>
    <head>
        <link rel="stylesheet" href="./../Styling/error.css">
    </head>
    <body>
        <div class="window">
            <h1>Error caught</h1>
            <p>Cause of Error</p>
            <p><?= $error?></p>
            <a href="./login.php">
                <button>Log In</button>
            </a>
        </div>
    </body>
</html>
