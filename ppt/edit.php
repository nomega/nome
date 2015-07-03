
<?php
/* 세션 불러오기 */
session_start();
?>
<!DOCTYPE html>
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
    <div class="subject">
      <h1>개인정보 수정하기</h1>
    </div>
    <!-- 회원정보 수정 패널-->
    <div class ="row">
    <div class = "col-md-6 col-md-offset-3 panel panel-default">
      <div class="panel-body">
        <h3><?php echo $_SESSION['name']; ?>님</h3>
        <form class="form-horizontal" action="/ppt/php/edit.php" method="POST">
          <div class="form-group">
            <label class="col-md-3 control-label" for="InputPW">현재 비밀번호</label>
            <input class="col-md-9" type="password" id="InputPW" placeholder="현재 비밀번호를 입력해주세요" name="CPW">
          </div>
          <hr>
          <div class="form-group">
            <label class="col-md-3 control-label" for="InputEPW">변경할 비밀번호</label>
            <input class="col-md-9" type="password" id="InputName" placeholder="변경할 비밀번호를 입력해주세요" name="EPW">
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" for="InputEPW">비밀번호 확인</label>
            <input class="col-md-9" type="password" class="form-control" id="InputName" placeholder="비밀번호를 다시 입력해주세요" name="RPW">
          </div>
          <hr>
          <div class="form-group">
            <label class="col-md-3 control-label" for="InputName">이름</label>
            <input class="col-md-9" id="InputName" placeholder="변경할 이름을 입력해주세요" name="ENAME">
          </div>
          <button type="submit" class="btn btn-default btn-block">수정하기</button>
        </form>
      <div>
    </div>
  </body>
</php>