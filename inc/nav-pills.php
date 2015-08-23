<ul class="main-nav nav nav-pills ">
  <li <?php if(isset($page)&&strstr($page,'首页')){echo 'class="active"';} ?>><a href="home.php">首页</a></li>
  <li <?php if(isset($page)&&strstr($page,'今日热单')){echo 'class="active"';} ?>><a href="hot-order.php">今日热单</a></li>
  <li <?php if(isset($page)&&strstr($page,'身边团购')){echo 'class="active"';} ?>><a href="side-buyteam.php">身边团购</a></li>
  <li <?php if(isset($page)&&strstr($page,'商家官网')){echo 'class="active"';} ?>><a href="biz.php">商家官网</a></li>
  <li <?php if(isset($page)&&strstr($page,'招聘')){echo 'class="active"';} ?>><a href="recruit.php">招聘</a></li>
  <li <?php if(isset($page)&&strstr($page,'供应商')){echo 'class="active"';} ?>><a href="supplier.php">供应商</a></li>
</ul><!-- /右目录 -->