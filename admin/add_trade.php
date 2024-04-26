<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location: ../index.php?error= 😁 You are trying to hack us!');
}

include("../db/db_connect.php");
if(isset($_POST['add_trade'])){
    $trade_name = $_POST['trade_name'];
    $query = "INSERT INTO trade VALUES('','$trade_name')";
    $result = mysqli_query($connect_db, $query);
    if($result == true){
       header("location: add_trade.php?success= Trade is created succesfully");
    }else{
       header("location: add_trade.php?error= Trade is created succesfully");

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add trade</title>
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
    if(isset($_GET['success'])){
        ?>
        <div style="width: 90%; background: green; padding: 10px; color: white">
            <p> <?php echo $_GET['success'] ?></p>
        </div>
        <?php 
    }
    ?>

<h1>ADD TRADE</h1>
<form action="" method="post">
    <div>
        <input type="text" name="trade_name" required placeholder=" Trade name">
    </div>
    <div>
        <input type="submit" name="add_trade" value="Add trade">
    </div>
</form>

<a href="index.php">Home</a>
    
</body>
</html>