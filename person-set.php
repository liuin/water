<? $page='已评价-账户设置-个人中心'; include('inc/header.php') ?>

  <div class="main-person ">
         <div class="container"><?php include('inc/nav-pills.php'); ?></div>

      <div class="container-outdoor">
      <div class="container">
        <div class="row">
      <div class="col-sm-2 left-side person-left-side">
        <?php include('inc/person-nav.php'); ?>
      </div> 
      <div class="col-sm-10 person-right-side person-right-side-jf">
        <?php include('inc/person-nav-zh.php'); ?>

        <div class="col-xs-12 col-table col-person-set" >
          <form action="#">
             <div class="form-group">
                <label class="fgtxt fl" for="exampleInputEmail1">Email:</label>
                <p class="p1">d****1@dpmobile.com (未验证) 未验证 <a href="javascript:void(0);"  section-target="section-form-mail"  class="btn btn-section btn-default">立刻验证</a> <a href="javascript:void(0);"  section-target="section-form-val" class="btn btn-section btn-default">修改</a></p>
              </div>
              
              <div class="section-form section-form-mail none">
                 <h2>修改邮箱</h2>
                 <h3>身份验证成功，请输入新邮箱</h3>
                 <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">新邮箱：</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                    </div>
                  </div>
                   <div class="form-group-col">
                      <label class="fl" for="exampleInputPassword1"></label>
                      <div class="form-group-col-lf">
                        <button class="btn btn-default">确定</button>
                      </div>
                    </div>


              </div><!-- /修改邮箱 -->

              <div class="section-form-val section-form none">
                 <h3>修改邮箱，请先进行身份验证</h3>
                 <div class="form-group-col">
                    <p class="p-email">通过<span class="sp1">d***1@dpmobile.com</span>接收邮件进行验证</p>
                    <button class="btn btn-default">邮箱验证</button>
                  </div>
              </div><!-- /身份验证 -->

              <div class="form-group">
                <label class="fl" for="exampleInputPassword1">用户名</label>
                <p class="p1">QQ_7404829030 <a href="javascript:void(0);" section-target="section-form-base"  class="btn btn-default btn-section">修改</a></p>
              </div>

              <div class="section-form section-form-base none">
                 <h2>基本信息</h2>
                 <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">昵称:</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">性别:</label>
                    <div class="form-group-col-lf">
                      <label><input type="radio" name="sex" id="" /> 男</label>
                      <label><input type="radio" name="sex" id="" /> 女</label>
                    </div>
                  </div>
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">*常居地:</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                    </div>
                  </div>
                  <!-- <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">*活动区域:</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="住处地址">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="工作地点">
                    </div>
                  </div> -->
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">*自我介绍：</label>
                    <div class="form-group-col-lf">
                      <textarea id="" rows="" cols="" class="form-control" placeholder="简单介绍下自己，让更多Dper了解你吧~~"></textarea>
                    </div>
                  </div>
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1"></label>
                    <div class="form-group-col-lf">
                      <button class="btn btn-default">保存</button>
                    </div>
                  </div>
              </div>


              <div class="form-group">
                <label class="fl" for="exampleInputPassword1">登录密码</label>
                <p class="p1">****** <a href="javascript:void(0);" section-target="section-form-pwd"  class="btn btn-default btn-section">修改</a></p>
              </div>

              <div class="section-form section-form-pwd none">
                <h2>修改密码</h2>
                <h3>为了您的账户安全，请尽量避免使用与其他网站相同的密码</h3>
                 <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">新密码:</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">确认密码:</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1"></label>
                    <div class="form-group-col-lf">
                      <button class="btn btn-default">保存</button>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                <label class="fl" for="exampleInputPassword1">手机绑定</label>
                <p class="p1">****** <a href="javascript:void(0);" section-target="section-form-ban" class="btn btn-default btn-section">修改</a></p>
              </div>

              <div class="section-form section-form-ban none">
                <h2>绑定手机号码</h2>
                <h3>绑定手机号码可以提高您账户的安全性，同时方便获取优惠券、团购订单等信息</h3>
                 <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">手机号码：</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control-tel form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                      <button class="getcode btn btn-default">获取验证码</button>
                    </div>
                  </div>
                 <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1">验证码：</label>
                    <div class="form-group-col-lf">
                      <input type="text" class="form-control" id="exampleInputPassword1" value="name" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group-col">
                    <label class="fl" for="exampleInputPassword1"></label>
                    <div class="form-group-col-lf">
                      <button class="btn btn-default">确认</button>
                    </div>
                  </div>
              </div>

          </form>
        </div>
            </div>
      </div>
    </div>
</div></div>
  <!-- /中间 -->
  

  <?php include('inc/footer.php'); ?>
 
  <script type="text/javascript">
  <!--
    $(document).ready(function() {
      //改变切换
      $('.btn-section').on('click',function  () {
        var obj = $(this).attr('section-target');
        obj = $('.' + obj);
        $('.section-form').hide();
        obj.show();
      })
    })
  //-->
  </script>
