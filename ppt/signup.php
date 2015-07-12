<!-- MySQL Connecting -->
<?
  session_start();
?>
<!-- //MySQL Connecting -->

<!DOCTYPE HTML>
<html>
	<head>
    <title>최원영의 파워포인트</title>
    <?php include 'lib/loadBS.html'; ?>
  </head>

  <body>
    <div class="container">
      <?php include 'lib/navbar.php'; ?> 
    <div class="container">
          <div>
            <h1>회원가입하기</h1>
            <p>최원영의 파워포인트에 가입하여 최고의 서비스를 제공받으세요</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 panel panel-custom" id="sign_form">
            <div class="panel-body panel-body-custom">
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