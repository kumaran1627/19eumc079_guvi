<?php

session_start();

$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'common');
$name = $_POST['mail'];
$p = $_POST['pass'];
$d = $_POST['done'];

$s= "select * from data where email='$name' ";
$result= mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo "Gmail account is already registered";
}else{
    $reg = "insert into data(email,password1,confirm1)values('$name','$p','$d')";
    mysqli_query($con,$reg);
    // echo "Registration Successfully";
    header('location:home.php');

}


?>