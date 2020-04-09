<?php 

require('database.php');

initMigration($pdo);

?>
<html>
    <head>
        <title>Crud</title>
    </head>
    <body>
        <a href="create.php">Create User</a>
        <a href="read.php?show=all">Show All Users</a>
    </body>
</html>