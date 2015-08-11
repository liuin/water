<? $page='我的余额-我的账户-个人中心'; include('inc/header.php') ?>

  <div class="main-person container">
    <?php include('inc/nav-pills.php'); ?>
    <div class="row">
      <div class="col-sm-2 left-side person-left-side">
        <?php include('inc/person-nav.php'); ?>
      </div> 
      <div class="col-sm-10 person-right-side person-right-side-jf">
        <?php include('inc/person-nav-zh.php'); ?>

        <div class="col-xs-12 col-table">
          <h1 class="jf-title">余额：<span class="sp1">￥1000元</span></h1>
          <div class="jf-list">
            <h3>消费记录</h3>
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
  

  <?php include('inc/footer.php'); ?>


