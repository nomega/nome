<!DOCTYPE html>
<html lang="kr">
<head>
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
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
    /* Mysql 서버 접속 */
    $conn = mysqli_connect("localhost","root","admin01");
    if(!$conn) {
        $conn = mysqli_connect("localhost","root","admin01","3300");
    }
    /* DB 선택 */
    mysqli_select_db($conn,"ppt");
    $sql_getname = "SELECT * FROM member WHERE";
    $rst_getname = mysqli_query($conn, $sql_getname);
    $row = mysqli_fetch_assoc($rst_getname);

    echo "<p>SQL문</p>".$sql_getname;
    echo "<p>치환한 결과값</p>".$row;
    echo "<p>진정한 결과값$</p>".$row["name"];
?>

</body>
</html>