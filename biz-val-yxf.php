<? $page='已消费团购劵-验证管理-我是商家'; include('inc/header.php') ?>

  <div class="main-person container">
    <?php include('inc/nav-pills.php'); ?>
      <div class="row">
        <div class="col-sm-2 left-side person-left-side">
          <?php include('inc/biz-nav.php'); ?>
        </div>
        <div class="col-sm-10 person-right-side person-right-side-jf">
          <?php include('inc/biz-nav-yzgl.php'); ?>
            <div class=" col-xs-12 col-table biz-val-yxf-col">
              <div class="list-val">
                <table class="biz-val-table table table-striped">
                  <tr>
                    <th>套餐信息</th>
                    <th>消费时间</th>
                    <th>消费张数</th>
                    <th>团购券号</th>
                    <th>操作</th>
                  </tr>
                  <tr>
                    <td>砂锅粥</td>
                    <td>2015-10-10</td>
                    <td>10</td>
                    <td>1000</td>
                    <td><a href="#" class="btn btn-default">删除</a></td>
                  </tr>
                  <tr>
                    <td>砂锅粥</td>
                    <td>2015-10-10</td>
                    <td>10</td>
                    <td>1000</td>
                    <td><a href="#" class="btn btn-default">删除</a></td>
                  </tr>

                </table>
                <p class="p1">验证时间超过10分钟的团购券如需退款，请引导会员联系点评客服400-820-5527处理</p>
              </div>

              <a href="#" class="btn btn-default">退款其他团购券</a>
            </div>

        </div>
      </div>

  </div>
  <!-- /中间 -->


  <?php include('inc/footer.php') ?>
