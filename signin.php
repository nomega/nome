<!-- MySQL Connecting -->
<?
	$conn = mysqli_connect('lcalhost','root','admin01');
	mysqli_select_db($conn,'user');
	$result=mysqli_query($conn,'SELECT*FROM user')
	echo $result
?>
<!-- //MySQL Connecting -->

<!DOCTYPE HTML>
<html>
	 <head>
    <title>회원가입 성공</title>

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
    <link href="/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- //Bootstrap -->
  </head>

  <body>
  	<nav>
  		<h5>회원가입이 완료되었습니다</h5>
  	</nav>
  	<div class="wrapper">
      <form action="/php/login.php" method="get">
        <p>ID <input type="text" name="user_id"></p>
        <p>PW <input type="text" name="user_pw"></p>
        <input type="submit" value ="로그인하기">
      </form>
	  </div>
  </body>
</html>