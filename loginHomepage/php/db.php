<?php
	$conn = mysqli_connect("localhost","root","1234");
	var_dump($conn);
	$sql_db = "CREATE DATABASE `loginpage`";
	mysqli_query($conn,$sql_db);
	mysqli_select_db($conn,'loginpage');
	$sql_table = "CREATE TABLE `user` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		  `u_id` varchar(30) NOT NULL,
		  `u_pw` varchar(100) NOT NULL,
		  `u_name` varchar(30) NOT NULL,
		  `u_mail` varchar(100) NOT NULL,
		  PRIMARY KEY (id)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	mysqli_query($conn,$sql_table);
	$sql_insert = "INSERT INTO user(u_id,u_pw,u_name,u_mail) values('tester','0000','user','user@mail.com')";
	mysqli_query($conn,$sql_insert);
	$result = mysqli_query($conn,"SELECT * FROM user");
	$row = mysqli_fetch_assoc($result);
	echo "DB확인<br />";
	echo $row['id'].",".$row['u_id'].",".$row['u_pw'].",".$row['u_name'].",".$row['u_mail'];
?>