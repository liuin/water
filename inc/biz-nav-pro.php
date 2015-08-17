<ul class="person-tabs nav nav-tabs">
  <li <?php if(isset($page)&&strstr($page,'商品管理')){echo 'class="active"';} ?> role="presentation"><a href="biz-pro.php">商品管理</a></li>
  <li <?php if(isset($page)&&strstr($page,'经营效果')){echo 'class="active"';} ?> role="presentation"><a href="biz-jyxg.php">经营效果</a></li>
  <li <?php if(isset($page)&&strstr($page,'添加商品')){echo 'class="active"';} ?> role="presentation"><a href="biz-pro-add.php">添加商品</a></li>
</ul>