<? $page='上传审核-团购项目-我是商家'; include('inc/header.php') ?>

  <div class="main-person container">
    <?php include('inc/nav-pills.php'); ?>
      <div class="row">
        <div class="col-sm-2 left-side person-left-side">
          <?php include('inc/biz-nav.php'); ?>
        </div>
        <div class="col-sm-10 person-right-side person-right-side-jf">
          <ul class="person-tabs nav nav-tabs">
            <li role="presentation" class="active">
              <a href="biz-scsh.php">上传审核</a>
            </li>
          </ul>
          <div class="col-xs-12 col-table biz-scsh-col">
            <div class="scsh-bk">
              <label for="scsh-lb">上传审核</label>
              <input type="text" class="form-control" placeholder="请上传您的资料">
              <button class="btn btn-drang">上传</button>
            </div>

          </div>
        </div>
      </div>
  </div>

  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
