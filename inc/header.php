<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="description" content="">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <title><?php if(isset($page)){echo $page;} ?></title>
</head>
<body class="yh home-page">
  <noscript>
    <strong>你的浏览器似乎禁用了 JavaScript。</strong><br />您必须在浏览器中启用JavaScript才能使用本网站的功能。
  </noscript>
  <nav class="top-nav">
    <div class="container">
      <div class="row">
        <div class="col-xs-4  login-box fl">
          <a href="#">水汇网收藏</a>
          <a href="#">登陆</a>
          <a href="#">注册</a>
        </div>
        <div class="col-xs-8  my-peson fr">
          <a href="person-order.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>我的订单</a>
          <a href="my-biz.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>我是商家</a>
          <a href="contact.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>联系客服</a>
          <a href="more.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>更多</a>
        </div>          
      </div>
    </div>
  </nav>

  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-1 col-md-2">
         <div class="col-1-box clearfix">
           <div class="logo fl"><img src="images/logo.png" alt=""></div>
           <div class="header-area fl">
             <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                广州
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li class="dropdown-header">广东地区</li>
                <li><a href="#">广州</a></li>
                <li><a href="#">深圳</a></li>
                <li class="dropdown-header">其他地区</li>
                <li><a href="#">上海</a></li>
                <li><a href="#">北京</a></li>
              </ul>
            </div>
           </div>
         </div>
       </div>
       <div class="col-md-6">
         <div class="form-search">
           <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div><!-- /input-group -->
         </div>
       </div>
       <div class="col-3 col-md-3 col-lg-4">
         <div class="tuikuan-link">
           <a href="#" class="a1"><i class="glyphicon glyphicon-repeat"></i><span class="">随时退</span></a>
           <a href="#" class="a2"><i class="glyphicon glyphicon-ok"></i><span class="">品质</span></a>
           <a href="#" class="a3"><i class="glyphicon glyphicon-remove"></i><span class="">过期</span></a>
         </div>
       </div>
     </div>
    </div>
  </header><!-- /头部 -->