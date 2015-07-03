<!-- MySQL Connecting -->
<?
	session_start();
?>
<!-- //MySQL Connecting -->

<!DOCTYPE HTML>
<html>
	 <head>
    <title>최원영의 파워포인트</title>

    <!-- Customizing CSS/js -->
    <script type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- //Customizing CSS/js -->

    <!-- Common meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- //Common meta tag -->

    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- //Bootstrap -->
  </head>

  <body>
    <div class="container">
      <!-- 네비게이션 바 불러오기-->
      <?php include 'navbar.php'; ?> 

      <div class="container">
          <div class="bs-docs-header" id="content" tabindex="-1">
            <h1>로그인하기</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 panel panel-default" id="sign_form">
            <div class="panel-body">
              <form class="form-horizontal" action="/ppt/php/signin.php" method="POST">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputEmail">이메일 주소</label>
                  <input class="col-md-9" type="email" class="form-control" id="InputEmail" placeholder="이메일을 입력하세요" name="mail">
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputPassword1">패스워드</label>
                  <input class="col-md-9" type="password" class="form-control" id="InputPassword1" placeholder="패스워드를 입력해주세요" name="pw">
                </div>
                  <button type="submit" class="btn btn-default" id="left">로그인 하기</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>