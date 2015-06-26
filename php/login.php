<?php
	/*
	$conn = mysqli_connect('lcalhost','root','admin01');
	mysqli_select_db($conn,'user');
	$result=mysqli_query($conn,'SELECT*FROM user');
	$sql_insert_id = "INSERT INTO user(u_id,u_pw) VALUSE(".$_POST['user_id'].",".$_POST['user_pw'].");
	*/
	echo "Hello, World";
	echo $_GET['user_id'];
	echo $_GET['user_pw'];

?>