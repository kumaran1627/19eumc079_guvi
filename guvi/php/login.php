<?php

session_start();

$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'common');
$name = $_POST['mail'];
$p = $_POST['pass'];


$s= "select * from data where email='$name'&& password1='$p' ";
$result = mysqli_query($con ,$s);

$num = mysqli_num_rows($result);

if($num==1){
    

    header('location:home.php');
     
}else{
    echo "Sorry,we can't find an account with this email address.Please try
    again or create a new account";
     

}


?>