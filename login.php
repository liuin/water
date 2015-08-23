<?php $page='登陆'; include('inc/header.php'); ?>

  <div class="main-box container">
    <?php include('inc/nav-pills.php'); ?>
    <div class="login-bk">
       <h1>账号登陆</h1>
              <form >
         <div class="form-group clearfix">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
           <input type="email" class="form-control" id="inputEmail3"   placeholder="账号">
         </div>
         <div class="form-group clearfix">
           <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
           <input type="password" class="form-control" id="inputPassword3"   placeholder="密码">
         </div>  
         <div class="form-sub-bk form-group">
              <a class="pwd-link" href="fogpwd.php">忘记密码</a>

             <button type="submit" class="btn btn-primary">登　　陆</button>
           <div class="part-three">
             <a href="#"><img src="images/Connect_logo_6.png" alt=""></a>
             <a href="#"><img src="images/weibo.png" alt=""></a>
           </div>
         </div>
       </form>
    </div>


  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
