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
      <!-- 네비게이션 바 불러오기-->
      <?php include 'lib/navbar.php'; ?> 

      <div class="container">
          <div class="bs-docs-header" id="content" tabindex="-1">
            <h1>로그인하기</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 panel panel-custom" id="sign_form">
            <div class="panel-body panel-body-custom">
              <form class="form-horizontal" action="/ppt/php/signin.php" method="POST">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputEmail">E-MAIL</label>
                  <input class="input-custom col-md-9" type="email" id="InputEmail" placeholder="이메일을 입력하세요" name="mail">
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="InputPassword1">PASSWORD</label>
                  <input class="input-custom col-md-9" type="password"  id="InputPassword1" placeholder="패스워드를 입력해주세요" name="pw">
                </div>
                  <button type="submit" class="btn btn-default" id="left">SIGN IN</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>