<? $page='子账号管理(包括权限分配)-团购项目-我是商家'; include('inc/header.php') ?>

  <div class="main-person">
      
      <div class="container"><?php include('inc/nav-pills.php'); ?></div>
        
      <div class="container-outdoor">
      <div class="container">
        <div class="row">        <div class="col-sm-2 left-side person-left-side">
          <?php include('inc/biz-nav.php'); ?>
        </div>
        <div class="col-sm-10 person-right-side person-right-side-jf">
          <ul class="person-tabs nav nav-tabs">
            <li role="presentation" class="active">
              <a href="biz-scsh.php">子账号管理(包括权限分配)</a>
            </li>
          </ul>
          <div class="col-xs-12 col-table biz-zzhgl-col">
            <div class="zzhgl-box">
              <table class="tabel table-striped">
                <tr> 
                  <th>名字</th>
                  <th>只读</th>
                  <th>读写</th>
                  <th>删除</th>
                </tr>
                <tr>
                  <td>刘旭</td>
                  <td><input type="checkbox" name="" id=""></td>
                  <td><input type="checkbox" name="" id=""></td>
                  <td><button class="btn btn-default">删除</button></td>
                </tr>
                <tr>
                  <td>刘旭</td>
                  <td><input type="checkbox" name="" id=""></td>
                  <td><input type="checkbox" name="" id=""></td>
                  <td><button class="btn btn-default">删除</button></td>
                </tr>
                <tr>
                  <td>刘旭</td>
                  <td><input type="checkbox" name="" id=""></td>
                  <td><input type="checkbox" name="" id=""></td>
                  <td><button class="btn btn-default">删除</button></td>
                </tr>
              </table>
              <div class="zzhgl-box-footer">
                <button class="btn-primary btn">新增</button>
              </div>
            </div>
          </div>
          <!-- 消息中心 -->
        </div>
      </div>
  </div>
  </div>
  </div>

  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
