<?php
	session_start();
	/* 로그인 프로세스 */
	/* Mysql 서버 접속 */
	$conn = mysqli_connect("localhost","root","admin01");
	if(!$conn) {
		$conn = mysqli_connect("localhost:3300","root","admin01");
	}
	/* DB 선택 */
	mysqli_select_db($conn,"ppt");

	/* POST값 변수로 치환 */
	$mail = $_POST['mail'];
	$pass = $_POST['pw'];

	/* 입력 값 Null 여부 검사*/
	if(empty($mail)){
			echo "<script> alert('메일 주소를 입력해주세요.'); </script>";
			echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
			if(empty($pass)){
					echo "<script> alert('패스워드를 입력해주세요.'); </script>";
					echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
	
			}
	}
	/* 메일주소 검사*/
	$sql_idsearch = "SELECT * FROM member WHERE `mail`='".$mail."'";
	$rst_idsearch = mysqli_query($conn, $sql_idsearch);
	if($rst_idsearch->num_rows == "1") {
			/* 메일주소 검사 통과시 패스워드 검사 */
			$sql_pwsearch = "SELECT * FROM member WHERE `mail`='".$mail."' AND `pw`='".$pass."'";
			$rst_pwsearch = mysqli_query($conn, $sql_pwsearch);
			if($rst_pwsearch->num_rows == "1") {
				$row = mysqli_fetch_assoc($rst_pwsearch);
				/* 로그인 성공 시 세션에 저장 */
				$_SESSION['be_login'] = true;
				$_SESSION['name'] = $row['name'];
				$_SESSION['ID'] = $row['id'];
				echo "<script> location.href='/ppt/index.php'; </script>";
		} else {
					echo "<script> alert('패스워드가 틀렸습니다.'); </script>";
					echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
		}
	} else {
				echo "<script> alert('해당 메일주소로 가입되어 있지 않습니다.'); </script>";
				echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
	}
?>