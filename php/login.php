<?php
<<<<<<< HEAD
	
	$conn = mysqli_connect("localhost","root","admin01");
	mysqli_select_db($conn,"loginpage");

	$sql_search = "SELECT * FROM user WHERE u_id='".$_POST['user_id']."' AND u_pw='".$_POST['user_pw']."'";
	$search_result = mysql_query($conn,$sql_search);
	if($search_result->num_rows == 0) {
		$sql_insert = "INSERT INTO `user`(`u_id`,`u_pw`,`u_name`,`u_mail`) VALUES(".$_POST['user_id'].",".$_POST['user_pw'].",'사용자','user@mail.com')";
		$insert_result = mysqli_query($conn,$sql_insert);
		header('location: /singin.php')
	} else {
		header('location: /success.phph')
	}
=======
	/*
	$conn = mysqli_connect('lcalhost','root','admin01');
	mysqli_select_db($conn,'user');
	$result=mysqli_query($conn,'SELECT*FROM user');
	$sql_insert_id = "INSERT INTO user(u_id,u_pw) VALUSE(".$_POST['user_id'].",".$_POST['user_pw'].");
	*/
	echo "Hello, World";
	echo $_GET['user_id'];
	echo $_GET['user_pw'];

>>>>>>> e9f14b409f06c3709b5921b5afd25f884af4e400
?>