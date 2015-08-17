<? $page='编辑产品-验证管理-我是商家'; include('inc/header.php') ?>

  <div class="main-person container">
    <?php include('inc/nav-pills.php'); ?>
      <div class="row">
        <div class="col-sm-2 left-side person-left-side">
          <?php include('inc/biz-nav.php'); ?>
        </div>
        <div class="col-sm-10 person-right-side person-right-side-jf">
          <?php include('inc/biz-nav-pro.php'); ?>
          <div class=" col-xs-12 col-table pro-add biz-val-fypj-col">
            <form  class="form-pro-add"  method="get" action="">
              <div class="ground-item">
                <label for="">商品名称:</label>
                <input type="text" name="" class="form-control" value="酸奶浴足" id="">
              </div>
              <div class="ground-item">
                <label for="">相关图片:</label>
                <div class="form-control">
                  <input type="file" class="form-control-photo" name="" multiple id="photo" />
                  <div class="imgphoto">
                    <img src="http://www.dpfile.com/gp/cms/1438935379644.png" alt="" widht="60" height="60" />
                  </div>
                </div>
              </div>
              <div class="ground-item">
                <label for="">数　　量:</label>
                <input type="text" name="" class="form-control" id="">
              </div>
              <div class="ground-item">
                <label for="">金　　额:</label>
                <input type="text" name="" class="form-control" id="">
              </div>
              <div class="ground-item">
                <label for="">状　　态:</label>
                <label class="state-ck"><input type="radio" name="state" id="">已开启</label>  
                <label class="state-ck"><input type="radio" name="state" id="">已禁用</label>  
              </div>
              <div class="ground-item">
                <label for="">简　　介:</label>
                <textarea id="" rows="" cols="" class="form-control" placeholder="简介说明"></textarea>
              </div>
              <div class="ground-item">
                <label for="">其他参数:</label>
                <textarea id="" rows="" cols="" class="form-control" placeholder="其他参数"></textarea>
              </div>
              <div class="ground-item-sub ground-item">
                <button class="btn btn-primary" type="submit">保  存</button>      
              </div>
            </form>
            

          </div>

        </div>

      </div>
  </div>

  <!-- /中间 -->


  <?php include('inc/footer.php'); ?>
