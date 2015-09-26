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
  <!--[if lt IE 8]>
    <div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>

    <div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
    <div style='width: 75px; float: left;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg ' alt='Warning!'/></div>
    <div style='width: 275px; float: left; font-family: Arial, sans-serif;'>
    <div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>发现你的浏览器需要升级</div>
    <div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>为达最佳呈现效果,请升级至最新式浏览器.</div>
    </div>

    <div style='width: 75px; float: left;'><a href='http://www.firefox.com ' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg ' style='border: none;' alt='Get Firefox 3.5'/></a></div>
    <div style='width: 75px; float: left;'><a href='http://www.browserforthebetter.com/download.html ' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg ' style='border: none;' alt='Get Internet Explorer 8'/></a></div>
    <div style='width: 73px; float: left;'><a href='http://www.apple.com/safari/download/ ' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg ' style='border: none;' alt='Get Safari 4'/></a></div>
    <div style='float: left;'><a href='http://www.google.com/chrome ' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg ' style='border: none;' alt='Get Google Chrome'/></a></div>
    </div>
    </div>
  <![endif]-->

  <title>
    <?php if(isset($page)){echo $page;} ?>
  </title>
</head>

<body class="yh home-page">
  <noscript>
    <strong>你的浏览器似乎禁用了 JavaScript。</strong>
    <br />您必须在浏览器中启用JavaScript才能使用本网站的功能。
  </noscript>
  <nav class="top-nav">
    <div class="container">
      <div class="row">
        <div class="col-xs-4  login-box fl">
          <a href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>收藏水汇网</a>
          <a href="login.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> 登陆</a>
          <!-- <a href="reg.php">注册</a> -->
          <a href="reg.php"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>手机端</a>
        </div>
        <div class="col-xs-8  my-peson fr">
          <div class="link ">
            <a href="person-order.php">我的订单<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
            <div class="my-peson-sbnav">
              <a href="person-order.php">团购订单团购订单团购订单</a>
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
            </div>
          </div>
          <span class="sp1">|</span>
          <a href="person-order.php">最新浏览<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a>
          <span class="sp1">|</span>
          <a href="person-order.php">购物车<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
          <span class="sp1">|</span>
          <a href="contact.php">联系客服<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
          <span class="sp1">|</span>
          <div class="link ">
            <a href="biz-val-tgj.php">我是商家<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
            <div class="my-peson-sbnav">
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
              <a href="person-order.php">团购订单</a>
            </div>
          </div>
          <span class="sp1">|</span>
          <a href="more.php">更多</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-hd1"><div class="container">
          <div id="carousel-example-generic" class="banner carousel-1 carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://aecpm.alicdn.com/simba/img/TB1mEPBHVXXXXaVXVXXSutbFXXX.jpg" width="100%" height="95" alt="">
          </div>
          <div class="item">
            <img src="https://aecpm.alicdn.com/simba/img/TB1mEPBHVXXXXaVXVXXSutbFXXX.jpg" width="100%" height="95" alt="">
          </div>
          <div class="item">
            <img src="https://aecpm.alicdn.com/simba/img/TB1mEPBHVXXXXaVXVXXSutbFXXX.jpg" width="100%" height="95" alt="">
          </div>
        </div>
    
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- /海报 -->
    </div>  </div>

  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-1 col-md-2">
          <div class="col-1-box clearfix">
            <div class="logo fl"><a href="home.php"><img src="images/logo.png" alt="" /></a></div>
            <div class="header-area fl">
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  广州
                  <span class="caret">切换城市</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <div class="city-list J-city-list ">
        <div class="group clearfix">
            <h3 class="title">华北东北：</h3>
                <a href="#" >北京</a>
                <a href="#">天津</a>
                <a href="#" >沈阳</a>
                <a href="#" >大连</a>
                <a href="#" >长春</a>
                <a href="#" >哈尔滨</a>
                <a href="#" >石家庄</a>
                <a href="#" >太原</a>
                <a href="#" >呼和浩特</a>
                <a href="#" >廊坊</a>
        </div>
        <div class="group clearfix">
            <h3 class="title">华东地区：</h3>
                <a href="#" >上海</a>
                <a href="#" >杭州</a>
                <a href="#" >南京</a>
                <a href="#" >苏州</a>
                <a href="#" >无锡</a>
                <a href="#" >济南</a>
                <a href="#" >厦门</a>
                <a href="#" >宁波</a>
                <a href="#" >福州</a>
                <a href="#" >青岛</a>
                <a href="#" >合肥</a>
                <a href="#" >常州</a>
                <a href="#" >扬州</a>
                <a href="#" >温州</a>
                <a href="#" >绍兴</a>
                <a href="#" >嘉兴</a>
                <a href="#" >烟台</a>
                <a href="#" >威海</a>
                <a href="#" >镇江</a>
                <a href="#" >南通</a>
                <a href="#" >金华</a>
                <a href="#" >徐州</a>
                <a href="#" >潍坊</a>
                <a href="#" >淄博</a>
                <a href="#" >临沂</a>
                <a href="#" >马鞍山</a>
                <a href="#" >台州</a>
                <a href="#" >泰州</a>
                <a href="#" >济宁</a>
                <a href="#" >泰安</a>
        </div>
        <div class="group clearfix">
            <h3 class="title">中部西部：</h3>
                <a href="#" >成都</a>
                <a href="#" >武汉</a>
                <a href="#" >郑州</a>
                <a href="#" >长沙</a>
                <a href="#" >南昌</a>
                <a href="#" >贵阳</a>
                <a href="#" >西宁</a>
                <a href="#" >重庆</a>
                <a href="#" >西安</a>
                <a href="#" >昆明</a>
                <a href="#" >兰州</a>
                <a href="#" >乌鲁木齐</a>
                <a href="#" >银川</a>
        </div>
        <div class="group clearfix">
            <h3 class="title">华南地区：</h3>
                <a href="#" >广州</a>
                <a href="#" >深圳</a>
                <a href="#" >佛山</a>
                <a href="#" >珠海</a>
                <a href="#" >东莞</a>
                <a href="#" >三亚</a>
                <a href="#" >海口</a>
                <a href="#" >南宁</a>
                <a href="#" >惠州</a>
        </div>
        <div class="group clearfix">
            <h3 class="title">港澳台：</h3>
                <a href="#" >香港</a>
                <a href="#" >澳门</a>
                <a href="#" >台北</a>
                <a href="#" >高雄</a>
                <a href="#" >垦丁</a>
                <a href="#" >花莲</a>
        </div>
        <div class="group clearfix">
            <h3 class="title">国外热门：</h3>
                <a href="#" >东京</a>
                <a href="#" >首尔</a>
                <a href="#" >曼谷</a>
                <a href="#" >新加坡</a>
                <a href="#" >吉隆坡</a>
                <a href="#" >墨尔本</a>
                <a href="#" >京都</a>
                <a href="#" >大阪</a>
                <a href="#" >北海道</a>
                <a href="#" >清迈</a>
                <a href="#" >芭堤雅</a>
                <a href="#" >普吉岛</a>
                <a href="#" >济州岛</a>
                <a href="#" >长滩岛</a>
                <a href="#" >巴厘岛</a>
                <a href="#" >沙巴</a>
                <a href="#" >纽约</a>
                <a href="#" >洛杉矶</a>
                <a href="#" >巴黎</a>
                <a href="#" >伦敦</a>
                <a href="#" >悉尼</a>
                <a href="#" >奥克兰</a>
        </div>
        <a class="all" href="#" >全部城市</a>
    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-search">
            <form action="search.php">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="输入关键词进行搜索...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div>
            </form>
            <div class="hot-key"><a href="#">水上乐园</a><a href="#">面包</a><a href="#">日料</a><a href="#">油条</a><a href="#">豆浆</a></div>
            <!-- /input-group -->
          </div>
        </div>
        <div class="col-3 col-md-3 col-lg-4">
          <div class="tuikuan-link">
            <span href="#" class="alink a1"><i class="F-glob F-glob-commitment-retire"></i><span class="">随时退</span></span>
            <span href="#" class="alink a2"><i class="F-glob F-glob-commitment-free"></i><span class="">不满意免单</span></span>
            <span href="#" class="alink a3"><i class="F-glob F-glob-commitment-expire"></i><span class="">过期退</span></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /头部 -->


