<ul class="person-tabs nav nav-tabs">
  <li <?php if(isset($page)&&strstr($page,'待评价')){echo 'class="active"';} ?> role="presentation" ><a href="person-pj.php">待评价</a></li>
  <li <?php if(isset($page)&&strstr($page,'已评价')){echo 'class="active"';} ?> role="presentation" ><a href="person-pj-rd.php">已评价</a></li>
</ul>