<?php

include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$query = mysqli_num_rows($query);
if($query>0){
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login";
    header("location:home.php");

}else{
    header("location:login.php");
}
?>