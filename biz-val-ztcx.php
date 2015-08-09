<? $page='团购劵状态查询-验证管理-我是商家'; include('inc/header.php') ?>

<div class="main-person container">
  <?php include('inc/nav-pills.php'); ?>
  <div class="row">
    <div class="col-sm-2 left-side person-left-side">
      <?php include('inc/biz-nav.php'); ?>
    </div>
    <div class="col-sm-10 person-right-side person-right-side-jf">
      <?php include('inc/biz-nav-yzgl.php'); ?>
      <div class=" col-xs-12 col-table biz-val-ztcx-col">
        <div class="xfdiv-1 xfdiv clearfix">
          <form action="">
            <input type="text" name="" id="" placeholder="请输入参团序列号" class="form-control fl" />
            <a href="#" class="btn btn-danger">查询</a>
          </form>
        </div>
        <div class="alert alert-success" role="alert">该团购券未消费</div>
        <div class="alert alert-info" role="alert">该团购券已消费</div>
        <div class="alert alert-danger" role="alert">该团购券不存在</div>
      </div>

    </div>
  </div>

</div><!-- /中间 -->

<?php include('inc/footer.php') ?>

