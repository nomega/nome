<!DOCTYPE html>
<html lang="ko">
	<head>
			<title>로그인 실패</title>

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
			<!-- //Bootstrap -->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1>로그인에 실패하셨습니다</h1>
				</div>
			</div>
	 			<div class="jumbotron">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form class="form-horizontal" action="/php/login.php" method="POST">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
							    <div class="col-sm-10">
							      <input type="email" class="form-control" id="inputEmail3" name="user_id" placeholder="아이디를 입력해주세요">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">PW</label>
							    <div class="col-sm-10">
							      <input type="password" class="form-control" id="inputPassword3" name="user_pw" placeholder="비밀번호를 입력해주세요">
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" class="btn btn-primary btn-lg">로그인하기</button>
							    </div>
							  </div>
							</form>
						</div>
					</div>
				</div>
			  </div>


		<!-- Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- //Bootstrap -->
	</body>
</html>