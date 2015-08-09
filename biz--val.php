<? $page='我的积分-我的账户-个人中心'; include('inc/header.php') ?>

<div class="main-person container">
  <?php include('inc/nav-pills.php'); ?>
  <div class="row">
    <div class="col-sm-2 left-side person-left-side">
      <?php include('inc/person-nav.php'); ?>
    </div>
    <div class="col-sm-10 person-right-side person-right-side-jf">
      <?php include('inc/person-nav-zh.php'); ?>
      <div class=" col-xs-12 col-table">
        <h1 class="jf-title">可用积分：<span class="sp1">100</span></h1>
        <div class="jf-list">
          <h3>积分记录</h3>
          <table class="table">
            <tr>
              <th width="90">日期</th>
              <th>详情</th>
              <th width="80">金额</th>
            </tr>
            <tr>
              <td>2015.07.28</td>
              <td>消费,桑拿,泡妞,去东莞</td>
              <td><span class="color-red">-650.00</span></td>
            </tr>
            <tr>
              <td>2015.07.28</td>
              <td>收到</td>
              <td><span class="color-green">+650.00</span></td>
            </tr>
          </table>
        </div>
        <div class="box-cont">
          <h2>关于积分</h2>
          <h4 class="sub">1、 怎样获得积分？</h4>
          <p class="b-20">
            1）在APP上购买团购并完成消费，即有机会获得大众点评送出的现金红包，分享到微信后自己和好友都能随机抢到积分。<br>
            2）参与0元抽奖，立即获得积分。<br>
            3）其他优惠活动的现金返还。
          </p>
          <h4 class="sub">2、 积分怎么使用？有什么限制吗？</h4>
          <p class="b-20">
            积分在下单支付时勾选“我的积分”即可，没有限制。
          </p>
          <h4 class="sub">3、 如果团购订单退款了，积分会还给我吗？</h4>
          <p class="b-20">
            积分的部分不支持退款。
          </p>
          <h4 class="sub">4、 积分余额可以提现吗？</h4>
          <p class="b-20">
            不支持提现。
          </p>
          <h4 class="sub">5、 积分余额可以叠加使用吗？</h4>
          <p class="b-20">
            可以。
          </p>
          <h4 class="sub">6、 积分会过期吗？</h4>
          <p class="b-20">
            会过期，每张积分都有使用期限。
          </p>
          <h4 class="sub">7、 积分余额可以找零吗？</h4>
          <p class="b-20">
            可以，例如购买一笔10元的团购单，但我的账户中有20元的积分余额，
            如果我选择使用积分余额抵扣，即本单全部抵扣且我的积分账户余额变为10元。
          </p>
          <h4 class="sub">8、“返现”自2015年2月6日起升级为“积分”。2015年2月6日之前获得的团购返现，您可在“我的钱包”-“积分”中查看。</h4>
        </div>
      </div>

    </div>
  </div>

</div><!-- /中间 -->


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-1 col-xs-6 col-sm-2 ft-link1">
        <a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>意见反馈</a>
        <a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>客服电话</a>
      </div>
      <div class="col-2 col-xs-6 col-sm-2 ft-link2">
        <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>商务合作</a>
        <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>在线客服</a>
      </div>
      <div class="col-3 col-xs-12 col-sm-8 ">
        <div class="row">
          <div class="col-xs-4 ft-link3">
            <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>公司信息</a>
            <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>关于我们</a>
            <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>联系我们</a>
            <a href="#"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>加入我们</a>
            <a href="#"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>法律声明</a>
          </div>
          <div class="col-xs-4 ft-link4">
            <a href="#"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>用户帮助</a>
            <a href="#"><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>如何使用</a>
            <a href="#"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span>常见问题</a>
            <a href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>意见反馈</a>
          </div>
          <div class="col-xs-4 ft-link45">
            <a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>获取更新</a>
            <a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>邮件订阅</a>
            <a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>咨询订阅</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copy-right">
    <div class="container">
      ©2003-2014 dianping.com, All Rights Reserved.<br />本站发布的所有内容，未经许可，不得转载，详见《知识产权声明》《用户使用协议》
    </div>
  </div>
</footer>

<!--   <div class="fix-right-code"> -->
<!--     <img src="http://www.fxauto.com.cn/images/ydgw-code2.jpg" width="100" height="100" alt="" title="二维码"> -->
<!--   </div> -->

<script type="text/javascript" src="js/asset.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>

