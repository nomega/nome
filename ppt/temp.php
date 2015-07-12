<ul class='nav navbar-nav navbar-right'>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
		".$_SESSION['name']님."<span class="caret"></span>
	</a>
	 <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">메뉴1</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">메뉴2</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">메뉴3</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">개인정보 수정</a></li>
              </ul>
</li>
<li><a href='/ppt/php/logout.php'>로그아웃</a></li>
</ul>

<?php
    function dropdown(){
        
    }
?>