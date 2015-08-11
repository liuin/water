<ul class="person-tabs nav nav-tabs">
  <li <?php if(isset($page)&&strstr($page,'验证团购劵')){echo 'class="active"';} ?> role="presentation"><a href="biz-val-tgj.php">验证团购劵</a></li>
  <li <?php if(isset($page)&&strstr($page,'已消费团购劵')){echo 'class="active"';} ?> role="presentation"><a href="biz-val-yxf.php">已消费团购劵</a></li>
  <li <?php if(isset($page)&&strstr($page,'团购劵状态查询')){echo 'class="active"';} ?> role="presentation" ><a href="biz-val-ztcx.php">团购劵状态查询</a></li>
</ul>