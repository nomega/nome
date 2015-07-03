<?php
	/* 세션 불러오기 */
	session_start();
	/* 개인정보 수정 프로세스 */
	/* Mysql 서버 접속 */
	$conn = mysqli_connect("localhost","root","admin01");
	if(!$conn) {
		$conn = mysqli_connect("localhost","root","admin01","3300");
	}
	/* DB 선택 */
	mysqli_select_db($conn,"ppt");

	/* POST 및 SESSION 값 변수로 치환 */
	$CPW = $_POST['CPW'];
	$EPW = $_POST['EPW'];
	$RPW = $_POST['RPW'];
	$ENAME = $_POST['ENAME'];
	$NAME = $_SESSION['name'];
	$ID = $_SESSION['ID'];

	/* 입력 값 Null 여부 검사*/
	if(empty($CPW)){
			echo "<script> alert('현재 비밀번호를 입력해주세요.'); </script>";
			echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
	} else if(empty($EPW) && empty($NAME)){
			echo "<script> alert('변경할 사항을 입력해주세요.'); </script>";
			echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
	}
	
	
	/* 비밀번호 확인 */
	$sql_search = "SELECT * FROM member WHERE id ='".$ID."'";
	$sql_result = mysqli_query($conn, $sql_search);
	$row = mysqli_fetch_assoc($sql_result);
	if($row['pw'] != $CPW){
		echo "<script> alert('현재 비밀번호가 일치하지 않습니다.'); </script>";
		echo "<script> history.go(-1); </script>";
	}

	/* 각 사항 수정여부 확인 */
	if(!empty($EPW)){
		/* 패스워드 확인 검사 */
		if($EPW != $RPW) {
				echo "<script> alert('입력하신 패스워드와 패스워드 확인이 일치하지 않습니다.'); </script>";
				echo "<script> function page_back() {history.go(-1)();} page_back() </script>";
		}
		$sql_EditPW = "UPDATE member SET pw = '".$EPW."' WHERE id = '".$ID."'";
		mysqli_query($conn, $sql_EditPW);
	}
	if(!empty($NAME)){
		$sql_EditNAME = "UPDATE member SET name ='".$NAME."' WHERE id = '".$ID."'";
		mysqli_query($conn, $sql_EditNAME);
	}
	/* 수정된 내용 세션에 반영하기 */
	$sql_search = "SELECT * FROM member WHERE id ='".$ID."'";
	$sql_result = mysqli_query($conn, $sql_search);
	$row = mysqli_fetch_assoc($sql_result);
	$_SESSION['name'] = $row['name'];

		echo "<script> alert('개인정보가 수정되었습니다.'); </script>";
		echo "<script> location.href='/ppt/index.php'; </script>";

?>