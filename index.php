<?php 
include"db/db_connect.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users where UserName='$username' && Password='$password'";
    $result = mysqli_query($connect_db, $query);
    if(mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['username']= $username;
        header("location: admin/index.php");
    }else{
        echo "user is not logged in";
    }
    

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php 
    if(isset($_GET['error'])){
        ?>
        <div style="width: 90%; background: red; padding: 10px; color: white">
            <p> <?php echo $_GET['error'] ?></p>
        </div>
        <?php 
    }
    ?>
<h1>Login</h1>
<form action="" method="post">
    <div>
        <input type="text" name="username" required placeholder=" Username">
    </div>
    <div>
        <input type="password" name="password" placeholder=" Password" required>
    </div>
    
    <div>
        <input type="submit" name="login" value="Login">
    </div>
</form>
<a href="signup.php">Sign up</a>
    
</body>
</html>