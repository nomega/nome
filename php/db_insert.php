<?php

	$conn = mysqli_connect("localhost","root","admin01");
	if($conn == "FALSE") {
		$conn = mysqli_connect("localhost:3300","root","admin01");
	}
	echo $_POST['mdb_id'].", ".$_POST['mdb_mail'];
	mysqli_select_db($conn,'loginpage');
	$sql_insert = "INSERT INTO user(u_id,u_pw,u_name,u_mail) values('".$_POST['mdb_id']."','".$_POST['mdb_pw']."','".$_POST['mdb_nm']."','".$_POST['mdb_mail']."')";
	mysqli_query($conn,$sql_insert);
	$result = mysqli_query($conn,"SELECT * FROM user WHERE u_id='".$_POST['mdb_id']."'");
	$row = mysqli_fetch_assoc($result);
	echo "<h2>결과확인</h2><br>입력된 데이터<br>";
	echo $row['id'].",".$row['u_id'].",".$row['u_pw'].",".$row['u_name'].",".$row['u_mail'];
?>