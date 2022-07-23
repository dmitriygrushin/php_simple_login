<?php
session_start();

if (!isset($_SESSION['username'])) header('Location: login.php');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <title>HTML 5 Boilerplate</title>
    </head>
    <body>

        <a href="logout.php">LOGOUT</a>
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    </body>
</html>