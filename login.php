<?php $page='登陆'; include('inc/header.php'); ?>

  <div class="main-box container">
    <div class="login-bk">
      <div class="row">
        <div class="col-md-7 col-lg-8">
          <img width="100%" class="xctp" src="http://si1.s1.dpfile.com/s/c/app/account/i/login-q/login-bg.a2b49bc28d2e326196912f96aaf7573e.png" alt="" />
        </div>

        <div class="col-md-5 col-lg-4 col-login">
          <div class="lg-top-nav clearfix">
            <a href="#" data-target="zhuser-login-tag" class="zh-login active fl">账号登录</a>
            <a href="#" data-target="tel-login-tag" class="tel-login fr">手机动态密码登陆</a>
          </div>
          <div class="tag-section-wrap">
            <div class="zhuser-login-tag tag-section ">
              <form >
               <div class="form-group clearfix">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                 <input type="text" class="form-control" id=""   placeholder="手机号码">
               </div>
               <div class="form-group clearfix" >
                 
                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                     <input type="password" class="form-control " id="inputPassword3"   placeholder="密码">
                 
               </div>
               <div class="form-group-auto form-group clearfix">
                 <label class="fl"><input type="checkbox" name="" id="">一个月内自动登录</label>
                 <a class="pwd-link fr" href="fogpwd.php">忘记密码</a>
               </div>
               <div class="form-sub-bk form-group">
                  
                 <button type="submit" class="btn btn-primary">登　　陆</button>          
                 <a href="reg.php" class="no-zh" >还没有账号?免费注册</a>
               </div>
              </form>
            </div>
            <div class="tel-login-tag tag-section none">
              <form >
               <div class="form-group clearfix">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                 <input type="text" class="form-control" id=""   placeholder="手机号码">
               </div>
               <div class="form-group clearfix">
                 
                 <div class="row row-form-pwd">
                   <div class="col-xs-7 col-1">
                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                     <input type="password" class="form-control " id="inputPassword3"   placeholder="密码">
                   </div>
                   <div class="col-xs-5 col-2">
                     <button class="btn btn-danger">获取验证码</button>
                   </div>
                 </div>
               </div>
               <div class="form-group-auto form-group clearfix">
                 <a class="pwd-link fr" href="fogpwd.php">忘记密码</a>
               </div>
               <div class="form-sub-bk form-group">
                  
                 <button type="submit" class="btn btn-primary">登　　陆</button>          
                 <a href="reg.php" class="no-zh" >还没有账号?免费注册</a>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div> 
        
    </div>


  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
<script type="text/javascript">
<!--
  $(document).ready(function() {
    
    $('.lg-top-nav a').click(function  (e) {
      if ($(this).hasClass('active')) {
        return false;
      }
      var getObj = $(this).data('target');
      $(this).addClass('active').siblings().removeClass('active');
      $('.tag-section').hide();
      $('.'+ getObj).fadeIn();
      e.preventDefault();

    })
  })
//-->
</script>