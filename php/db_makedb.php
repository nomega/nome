<?php

	$conn = mysqli_connect("localhost","root","admin01");
	if($conn == "FALSE") {
		$conn = mysqli_connect("localhost:3300","root","admin01");
	}

	$sql_db = "CREATE DATABASE ".$_POST['mdb_name'];
	mysqli_query($conn,$sql_db);
	mysqli_select_db($conn,$_POST['mdb_name']);
	$result = mysql_query('SHOW DATABASE');
	echo "<h2>결과 확인</h2><br>";
	echo $result;
	echo "는 아직 구현 못 했지만 성공";
	echo $_POST['mdb_name'];
?>