<?php

    define('DSN', 'mysql:host=localhost;dbname=database_webprog_lab');
    define('DBUSER', 'root');
    define('DBPASS', '');

    $db = new PDO(DSN, DBUSER, DBPASS);

?>