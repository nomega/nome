<?php
	$conn = mysqli_connect("localhost","root","admin01");
	mysqli_select_db($conn,"loginpage");
	$result = mysqli_query($conn,"SELECT * FROM user");
	
	echo "<p>conn</p>";
	var_dump($conn);
	echo "<p>result</p>";
	var_dump($result);
?>