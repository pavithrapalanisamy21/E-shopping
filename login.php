<?php
$conn = mysqli_connect('127.0.0.1','root','myphpaccount21');
mysqli_select_db($conn,'onlineshopping'); 

$name = $_POST['uname'];
$password = $_POST['psw'];

$s = "select * from register where Username ='$name' && Password = '$password'";

if(!mysqli_query($conn,$s)){
	echo "<script type='text/javascript'>alert('Wrong Username or password');</script>";
	header('refresh:1;url=login.html');
}
else{
	echo "<script type='text/javascript'>alert('Login successfully');</script>";
	header('refresh:1;url=homepage.html');
}
?>