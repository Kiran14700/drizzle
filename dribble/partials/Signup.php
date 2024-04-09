<?php 

include("db_connect.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['Name'];
        $username=$_POST['Username'];
        $email=$_POST['Email'];
        $password=$_POST['Password'];

        $sql="INSERT INTO `users` ( `name`, `username`, `email`, `password`, `dt`) VALUES ( '$name', 
        '$username', '$email', '$password', current_timestamp());";

$result = mysqli_query($conn, $sql); // 5 yeh result fir fire hogi
if($result){
    session_start();
    $_SESSION['signup']=true;
}

        header("Location:/DRIBBLE/index.php");
    }
    
?>