<ul class="main-nav nav nav-pills ">
  <li <?php if(isset($page)&&strstr($page,'首页')){echo 'class="active"';} ?>><a href="home.php">首页</a></li>
  <li <?php if(isset($page)&&strstr($page,'找水疗')){echo 'class="active"';} ?>><a href="find-water.php">找水疗</a></li>
  <li <?php if(isset($page)&&strstr($page,'找优惠')){echo 'class="active"';} ?>><a href="find-youhui.php">找优惠</a></li>
  <li <?php if(isset($page)&&strstr($page,'活动集结')){echo 'class="active"';} ?>><a href="jijiehao.php">活动集结</a></li>
  <li <?php if(isset($page)&&strstr($page,'团队预订')){echo 'class="active"';} ?>><a href="recruit.php">团队预订</a></li>
  <li <?php if(isset($page)&&strstr($page,'积分兑换')){echo 'class="active"';} ?>><a href="supplier.php">积分兑换</a></li>
</ul><!-- /右目录 -->