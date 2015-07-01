<!DOCTYPE html>
<html lang="ko">
	<head>
	    <title>로그인 성공</title>

    <!-- Customizing CSS/js -->
    <script type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="/css/index.css">
     <link rel="stylesheet" type="text/css" href="/css/html5-doctor-reset-stylesheet.min.css">
    <!-- //Customizing CSS/js -->
        
    <!-- Common meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- //Common meta tag -->
        
	</head>
    <body>
    <div class ="wrapper">
    	<div class ="subject">
    		<h1>로그인에 성공하셨습니다</h1>
    	</div>
        <div class="box-login">
        <form action="/php/login.php" method="post">
            <div class="box-input">
                <div class="box-idpw">
                    <label>로그인</label>
                    <input type="text" class="input-box" name="user_id" placeholder="아이디">
                </div>
                <div class="box-idpw">
                    <label id="pw-label">비밀번호</label>
                    <input type="password" id="pw-input-box" class="input-box" name="user_pw" placeholder="암호">
                </div>
            </div>
            <input type="submit" class="btn-login" value ="로그인하기">
        </form>
        </div>
    </div>
  </body>
</html>