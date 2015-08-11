<ul class="person-tabs nav nav-tabs">
  <li <?php if(isset($page)&&strstr($page,'团购订单')){echo 'class="active"';} ?> role="presentation"><a href="person-order.php">团购订单</a></li>
  <li <?php if(isset($page)&&strstr($page,'聚活动')){echo 'class="active"';} ?> role="presentation"><a href="person-jhd.php">聚活动</a></li>
  <li <?php if(isset($page)&&strstr($page,'我的收藏')){echo 'class="active"';} ?> role="presentation" ><a href="person-collect.php">我的收藏</a></li>
</ul>