<ul class="side-nav">
  <li class="cur">
    <span class="hd1"><span class="caret fr"></span>我的订单</span>
    <ul> 
      <li><a class="<?php if (isset($page)&&strstr($page, '团购订单')): ?>active<?php endif ?>" href="person-order.php">团购订单</a></li>
      <li><a class="<?php if (isset($page)&&strstr($page, '聚活动')): ?>active<?php endif ?>" href="person-jhd.php">聚活动</a></li>
      <li><a class="<?php if (isset($page)&&strstr($page, '我的收藏')): ?>active<?php endif ?>" href="person-collect.php">我的收藏</a></li>            
    </ul>
  </li>

  <li class="cur">
    <span class="hd1"><span class="caret fr"></span>我的评价</span>
    <ul> 
      <li><a class="<?php if (isset($page)&&strstr($page, '待评价')): ?>active<?php endif ?>" href="person-pj.php">待评价</a></li>
      <li><a class="<?php if (isset($page)&&strstr($page, '已评价')): ?>active<?php endif ?>" href="person-pj-rd.php">已评价</a></li>
    </ul>
  </li>

  <li class="cur">
    <span class="hd1"><span class="caret fr"></span>退款维权</span>
    <ul> 
      <li><a class="<?php if (isset($page)&&strstr($page, '我的退款')): ?>active<?php endif ?>" href="person-tk.php">我的退款</a></li>
    </ul>
  </li>

  <li class="cur">
    <span class="hd1"><span class="caret fr"></span>我的账户</span>
    <ul> 
      <li><a class="<?php if (isset($page)&&strstr($page, '我的积分')): ?>active<?php endif ?>" href="person-jf.php">我的积分</a></li>
      <li><a class="<?php if (isset($page)&&strstr($page, '我的余额')): ?>active<?php endif ?>" href="person-count.php">我的余额</a></li>
      <li><a class="<?php if (isset($page)&&strstr($page, '账户设置')): ?>active<?php endif ?>" href="person-set.php">账户设置</a></li>
    </ul>
  </li>
</ul>
