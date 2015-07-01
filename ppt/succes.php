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
                  <li><a href = #><mark>".$_SESSION['name']."</mark>님</a></li>
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
      </div>
        <h1>회원가입이 완료되었습니다.</h1>
        <p>이제 '최원영의 파워포인트'의 모든 서비스를 이용하실 수 있습니다.</p>
  </div>
  </body>
</html>