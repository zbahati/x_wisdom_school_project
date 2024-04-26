<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <h1>WELCOM TO ADMIN DASHBOARD</h1>
    <a href="add_trade.php">Add trade</a>
    <a href="add_trainee.php">Add trainee</a>
    <a href="logout.php">Logout</a>

</body>
</html>