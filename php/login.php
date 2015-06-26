<?php
	
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
?>