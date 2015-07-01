<?php

	/* 세션 불러오기*/
	session_start();
	session_destroy();
	header('location: /ppt/index.php');
?>