<?php
	//Database information Here
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="products";
	//create and check db connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
	die("connection failed:".$conn->connect_error);
	}
	//create variables to be added to db table
	$Name=$_POST['Name'];
	$Price=$_POST['Price'];
	$Description=$_POST['Description'];
	//create sql string 
	$sql="INSERT INTO cart(Name,Price,Description) VALUES('$Name','$Price','$Description')";
	//send query and check to ensure there are no errors
	if($conn->query($sql)=== TRUE)
	{
		echo "New record created succesfully";
	}
	else
	{
		"Error:".$sql."<br>".$conn->error;
	}
	//close db connection
	$conn->close();
?>