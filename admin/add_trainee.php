<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location: ../index.php?error= 😁 You are trying to hack us!');
}

include "../db/db_connect.php";

if(isset($_POST['add_trainee'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $trade_id = $_POST['trade_id'];

    $query = "INSERT INTO trainees VALUES('','$fname','$lname','$gender','$trade_id')";
    $result = mysqli_query($connect_db, $query);
    if($result == true){
        header("location: add_trainee.php?success= Trainee is added successfully");
    }else{
        header("location: add_trainee.php?error= Trainee is not added successfully");
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add trainee</title>
</head>
<body>
<?php 
include("message.php");
?>
    <h1>ADD TRAINEE</h1>
    <form action="" method="post">
        <div>
        <input type="text" name="fname" required placeholder=" Fist name">
        </div>
        <div>
            <input type="text" name="lname" placeholder=" Last name">
        </div>
        <div>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div>
            <input type="text" name="trade_id" placeholder=" Trade id">
        </div>
        <div>
            <input type="submit" name="add_trainee" value=" Add trainee">
        </div>
    </form>
    <a href="index.php">Home</a>
</body>
</html>