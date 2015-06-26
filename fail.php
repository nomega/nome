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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- //Bootstrap -->
  </head>
  <body>
    <nav>
        <h5>로그인에 실패하셨습니다</h5>
      </nav>
      <div class="wrapper">
          <form action="/php/login.php" method="POST">
            <p>ID <input type="text" name="user_id"></p>
            <p>PW <input type="text" name="user_pw"></p>
            <input value ="로그인하기"type="submit">
          </form>
      </div>
  </body>
</html>