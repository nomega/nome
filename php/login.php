<?php

	$conn = mysqli_connect("localhost","root","admin01");
	if(!$conn) {
		$conn = mysqli_connect("localhost","root","admin01","3300");
	mysqli_select_db($conn,"loginpage");
	$sql_idsearch = "SELECT * FROM user WHERE u_id='".$_POST['user_id']."'";
	$idsearch_result = mysqli_query($conn,$sql_idsearch);
	if($idsearch_result->num_rows == "1") {

		$sql_search = "SELECT * FROM user WHERE u_id='".$_POST['user_id']."' AND u_pw='".$_POST['user_pw']."'";
		$search_result = mysqli_query($conn,$sql_search);
		
		if($search_result->num_rows == "0") {
			header('location: /passwordfail.php');
		} else {
			header('location: /success.php');
		}
	} else {
		$sql_insert = "INSERT INTO user(u_id,u_pw,u_name,u_mail) VALUES('".$_POST['user_id']."','".$_POST['user_pw']."','any','user@mail.com')";
		$insert_result = mysqli_query($conn,$sql_insert);
		header('location: /signin.php');
	}

?>