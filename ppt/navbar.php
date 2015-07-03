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
          echo"<ul class='nav navbar-nav navbar-right'>
              <li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' role='button' aria-expanded='false'>
                  ".$_SESSION['name']."님<span class='caret'></span>
                </a>
                  <ul class='dropdown-menu' role='menu' aria-labelledby='drop1'>
                      <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>메뉴1</a></li>
                      <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>메뉴2</a></li>
                      <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>메뉴3</a></li>
                      <li role='presentation' class='divider'></li>
                      <li role='presentation'><a role='menuitem' tabindex='-1' href='/ppt/edit.php'>개인정보 수정</a></li>
                  </ul>
              </li>
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