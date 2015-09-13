<?php $page='登陆'; include('inc/header.php'); ?>

  <div class="main-box container">
    <div class="login-bk">
      <div class="row">
        <div class="col-md-7">
          <img width="100%" src="http://si1.s1.dpfile.com/s/c/app/account/i/login-q/login-bg.a2b49bc28d2e326196912f96aaf7573e.png" alt="" />
        </div>

        <div class="col-md-5">
          <div class="lg-top-nav">
            <a href="#">手机登录</a>
          </div>
          <form >
           <div class="form-group clearfix">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
             <input type="text" class="form-control" id=""   placeholder="手机号码">
           </div>
           <div class="form-group clearfix">
             
             <div class="row">
               <div class="col-xs-8">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                 <input type="password" class="form-control " id="inputPassword3"   placeholder="密码">
               </div>
               <div class="col-xs-4">
                 <button class="btn btn-danger">获取验证码</button>
               </div>
             </div>
           </div>
           <!-- <div class="form-group-auto form-group clearfix">
             <label class="fl"><input type="checkbox" name="" id="">一个月内自动登录</label>
             <a class="pwd-link fr" href="fogpwd.php">忘记密码</a>
           </div> -->
           <div class="form-sub-bk form-group">
              
              <button type="submit" class="btn btn-primary">登　　陆</button>
             <!-- <div class="part-three">
               <a href="#"><img src="images/Connect_logo_6.png" alt=""></a>
               <a href="#"><img src="images/weibo.png" alt=""></a>
             </div> -->
           </div>
          </form>
        </div>
      </div> 
        
    </div>


  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
