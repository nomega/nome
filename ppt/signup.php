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

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/ppt/index.php">최원영의 파워포인트</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">홈으로<span class="sr-only">(current)</span></a></li>
              <li><a href="/ppt/intro.php">소개</a></li>
              <li><a href="/ppt/lec.php">강좌</a></li>
            </ul>
            <?php
              if(!empty($_SESSION['be_login'])){
                if($_SESSION['be_login']){
                echo" <ul class='nav navbar-nav navbar-right'>
                  <li><a href = #><mark>".$_SESSION['name']."</mark></a></li>
                  <li><a href='/ppt/php/logout.php'>로그아웃</a></li>
                  </ul>";
                }
              } else {
              echo "<ul class='nav navbar-nav navbar-right'>
                  <li><a id='nav_btn' href='/ppt/signin.php'><button type='button' class='btn btn-default navbar-btn'>로그인</button></a></li>
                  <li><a id='nav_btn' href='/ppt/signup.php'><button type='button' class='btn btn-default navbar-btn btn btn-primary'>회원가입</button></a></li>
                </ul>";
              }
          ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container">
          <div>
            <h1>회원가입하기</h1>
            <p>최원영의 파워포인트에 가입하여 최고의 서비스를 제공받으세요</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 panel panel-default" id="sign_form">
            <div class="panel-body">
              <form class="form-horizontal" action="/ppt/php/signup.php" method="POST">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputEmail1">이메일 주소</label>
                  <input class="col-md-9" type="email" class="form-control" id="InputEmail1" placeholder="이메일을 입력하세요" name="mail">
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputName">이름</label>
                  <input class="col-md-9" type="text" class="form-control" id="InputName" placeholder="이름을 입력해주세요" name="name">
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputPassword1">패스워드</label>
                  <input class="col-md-9" type="password" class="form-control" id="InputPassword1" placeholder="패스워드를 입력해주세요" name="pw">
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputPassword2">패스워드 확인</label>
                  <input class="col-md-9" type="password" class="form-control" id="InputPassword2" placeholder="패스워드를 다시 한 번 입력해주세요" name="rpw">
                </div>
                  <button type="submit" class="btn btn-default btn-block">가입하기</button>
              </form>
             </div>
          </div>
       </div>
   </div>
  </body>
</html>