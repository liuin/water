<?php $page='购买成功'; include('inc/header.php'); ?>

  <div class="main-box container ">
    <?php include('inc/nav-pills.php'); ?>     
    <div class="car-box box1">
      <div class="car-box-suc car-box-row clearfix">
        <h2 class="car-box-title fl">购买成功</h2>
        <ul class="car-box-step fr">
            <li class="step step-now">
              <div class="num num-a">1.提交订单</div>
              <div class="arrow arrow-a"></div>
            </li>
            <li class="step step-now">
              <div class="num num-b ">2.确认并支付</div>
              <div class="arrow arrow-b"></div>
            </li>
            <li class="step step-now">
              <div class="num num-c">3.购买成功</div>
              <div class="arrow arrow-c"></div>
            </li>
          </ul>
      </div>

       <div class="pay-success alert alert-success" role="alert">
        <p class="p2"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>支付成功,你的订单号为10002</p>
        <a href="#" class="alert-link">查看我的订单</a>
      </div>

    </div>
  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
  