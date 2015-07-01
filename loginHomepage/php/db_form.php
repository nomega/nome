<!DOCTYPE html>
<html lang="ko">
	<head>
	    <title>DB관리도구</title>

	    <!-- Customizing CSS/js -->
	    <script type="text/javascript" ></script>
	    <link rel="stylesheet" type="text/css" href="">
	    <!-- //Customizing CSS/js -->

	    <!-- Common meta tag -->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!-- //Common meta tag -->

	    <!-- Bootstrap -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/bootstrap.min.css" rel="stylesheet">    
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <!-- //Bootstrap -->
	</head>
<body>
		<ol>
			<li><a href="/php/db_form.php?id=1">DB 생성하기</a></li>
			<li><a href="/php/db_form.php?id=2">TABLE 생성하</a></li>
			<li><a href="/php/db_form.php?id=3">'user'에 값 입력하기<a></li>
		</ol>
	</nav>
	<div>
		<?php
		if(!empty($_GET['id'])){
			echo file_get_contents("db_".$_GET['id'].".txt");
		}
		?>
	</div>
</body>
</html>