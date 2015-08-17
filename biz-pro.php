<? $page='商品管理-验证管理-我是商家'; include('inc/header.php') ?>

  <div class="main-person container">
    <?php include('inc/nav-pills.php'); ?>
      <div class="row">
        <div class="col-sm-2 left-side person-left-side">
          <?php include('inc/biz-nav.php'); ?>
        </div>
        <div class="col-sm-10 person-right-side person-right-side-jf">
          <?php include('inc/biz-nav-pro.php'); ?>
          <div class=" col-xs-12 col-table biz-pro biz-val-fypj-col">
            <div class="choose-bar">
              <label class="label1"><input type="checkbox" name="" id="">全选</label>
              <a href="#" class="a3">选中删除</a>
            </div>
            <div class="person-order-hd">
              <span class="sp1">商品信息</span>
              <span class="sp2">下单时间</span>
              <span class="sp3">数量</span>
              <span class="sp4">金额</span>
              <span class="sp5">状态</span>
              <span class="sp6">操作</span>
            </div>
            <div class="preson-order-item">
              <div class="d1">
                <input class="fl" type="checkbox" name="" id="">
                <div class="img fl"><img src="http://i2.s2.dpfile.com/pc/mc/113f268f16bcbb72e4cbb519cfa6e99e(246c184)/thumb.jpg" alt="" width="85" height="53"></div>
                <div class="msg">
                  <h4><a href="javascript:void(0);">九毛九山西手工面:代金券</a></h4>
                </div>
              </div>
              <div class="d2 d2-1"><span class="sp1">创建时间:</span>2015-07-26</div>
              <div class="d2 d2-1 d2-count"><span class="sp1">总数量:</span>100</div>
              <div class="d2 d2-1"><span class="sp1">金额:</span> ¥99.99</div>
              <div class="d2 d2-1"><span class="sp1">状态:</span>已启用</div>
              <div class="d2 control">
                <a href="#" class="btn btn-default">编辑</a>
                <a href="#" class="btn btn-default">删除</a>
              </div>
            </div>
            <div class="preson-order-item">
              <div class="d1">
                <input class="fl" type="checkbox" name="" id="">
                <div class="img fl"><img src="http://i2.s2.dpfile.com/pc/mc/113f268f16bcbb72e4cbb519cfa6e99e(246c184)/thumb.jpg" alt="" width="85" height="53"></div>
                <div class="msg">
                  <h4><a href="javascript:void(0);">九毛九山西手工面:代金券</a></h4>
                </div>
              </div>
              <div class="d2 d2-1"><span class="sp1">创建时间:</span>2015-07-26</div>
              <div class="d2 d2-1 d2-count"><span class="sp1">总数量:</span>100</div>
              <div class="d2 d2-1"><span class="sp1">金额:</span> ¥99.99</div>
              <div class="d2 d2-1"><span class="sp1">状态:</span>未启用</div>
              <div class="d2 control">
                <a href="#" class="btn btn-default">编辑</a>
                <a href="#" class="btn btn-default">删除</a>
              </div>
            </div>

          </div>


        </div>

      </div>
  </div>

  <!-- /中间 -->


  <?php include('inc/footer.php'); ?>
