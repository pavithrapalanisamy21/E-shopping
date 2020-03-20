<?php
  $conn = mysqli_connect('127.0.0.1','root','myphpaccount21');
  
  if(!$conn){
	  echo 'Not connect';
  }
  
  if(!mysqli_select_db($conn,'onlineshopping')){
	  echo 'DB not selected';
  }
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $Address = $_POST["Address"];
  $choice = $_POST["choice"];
  $comments = $_POST["review"];
	
  $sql = "INSERT INTO shippingdetails (Username,Email,Address,ModeOfPayment,UserReview) VALUES('$name','$email','$Address','$choice','$comments')";	
  
  if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>alert('Your order placed successfully');</script>";
		header('refresh:1;url=homepage.html');
  }	
  
	  
  
?>
