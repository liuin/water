<ul class="person-tabs nav nav-tabs" >
  <li <?php if(isset($page)&&strstr($page,'我的积分')){echo 'class="active"';} ?> role="presentation" ><a href="person-jf.php">我的积分</a></li>
  <li <?php if(isset($page)&&strstr($page,'我的余额')){echo 'class="active"';} ?> role="presentation" ><a href="person-count.php">我的余额</a></li>
  <li <?php if(isset($page)&&strstr($page,'账户设置')){echo 'class="active"';} ?> role="presentation" ><a href="person-set.php">账户设置</a></li>
</ul>