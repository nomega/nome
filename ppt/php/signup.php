<?php
	/* 회원가입 프로세스 */
	/* Mysql 서버 접속 */
	$conn = mysqli_connect("localhost","root","admin01");
	if(!$conn) {
		$conn = mysqli_connect("localhost","root","admin01","3300");
	}
	/* DB 선택 */
	mysqli_select_db($conn,"ppt");

	/* POST값 변수로 치환 */
	$mail = $_POST['mail'];
	$name = $_POST['name'];
	$pw = $_POST['pw'];
	$rpw = $_POST['rpw'];

	/* 입력 값 Null 여부 검사*/
	if(empty($mail)){
			echo "<script> alert('메일 주소를 입력해주세요.'); </script>";
			echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
			if(empty($name)){
					echo "<script> alert('이름을 입력해주세요.'); </script>";
					echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
					if(empty($pw)){
						echo "<script> alert('패스워드를 입력해주세요.'); </script>";
						echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
						if(empty($rpw)){
							echo "<script> alert('패스워드 확인을 입력해주세요.'); </script>";
							echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
						}
					}
	
			}
	}


	/* 패스워드 확인 검사 */
	if($pw != $rpw) {
			echo "<script> alert('입력하신 패스워드와 패스워드 확인이 일치하지 않습니다.'); </script>";
			echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
	}
	/* 패스워드 확인 검사 통과시 메일주소 중복 검사 */
	$sql_idsearch = "SELECT * FROM member WHERE `mail`='".$mail."'";
	$rst_idsearch = mysqli_query($conn, $sql_idsearch);
	if($rst_idsearch->num_rows == "1") {
			echo "<script> alert('해당 메일주소로 이미 가입되어 있니다.'); </script>";
			echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
	} else{
			$sql_insert = "INSERT INTO `member`(`mail`, `name`, `pw`) VALUES ('".$mail."','".$name."','".$pw."')";
			mysqli_query($conn, $sql_insert);
			header("location: /ppt/succes.php");
	}

?>