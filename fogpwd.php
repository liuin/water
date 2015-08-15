<?php $page='登陆'; include('inc/header.php'); ?>

  <div class="main-box container">
    <?php include('inc/nav-pills.php'); ?>
    <div class="find-pwd login-bk">
      <h1>找回密码</h1>
       <p class="p1">请输入你的电子邮箱：</p>
       <p class="p2 p1">修改密码地址将发送到您的邮箱</p>
              <form >
         <div class="form-group clearfix">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
           <input type="email" class="form-control" id="inputEmail3"   placeholder="您的邮箱">
         </div>
         
         <div class="form-sub-bk form-group">

             <button type="submit" class="btn btn-primary">确　　定</button>
           
         </div>
       </form>
    </div>


  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
