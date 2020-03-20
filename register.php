<?php
$conn = mysqli_connect('127.0.0.1','root','myphpaccount21');

mysqli_select_db($conn,'onlineshopping'); 
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $confirm = $_POST['cpsw'];
  
  $s = "select * from register where Username ='$name'";
  $result = mysqli_query($conn,$s);
  $num = mysqli_num_rows($result);
  
  if($num == 1 ){
	  echo "<script type='text/javascript'>alert('username is already taken');</script>";
	  header('refresh:1;url=login.html');
  }
  elseif($password !== $confirm){
	  echo "<script type='text/javascript'>alert('password mismatched');</script>";
	  header('refresh:1;url=login.html');
  }
  else{
	  $query = "INSERT INTO register (Username,Email,Password,Confirm Password) VALUES ('$name','$email','$password','$confirm')";
	  if(!mysqli_query($conn,$query)){
	  echo "<script type='text/javascript'>alert('Registered successfully');</script>";
	  header('refresh:1;url=homepage.html');
	  }
	  else{
		  echo 'not registered';
	  }
	  
	  
	}
?>