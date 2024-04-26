<?php 
include("db/db_connect.php");
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO users VALUES('','$username', '$password')";

    if( mysqli_query($connect_db, $query) ==true){
        echo " Account is created";
    }else {
        echo "Account is not created";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
<h1>Sign up</h1>
<form action="" method="post">
    <div>
        <input type="text" name="username" required placeholder=" Username">
    </div>
    <div>
        <input type="password" name="password" placeholder=" Password" required>
    </div>
    
    <div>
        <input type="submit" name="signup" value="signup">
    </div>
</form>
<a href="index.php">Login</a>
    
</body>
</html>