/*-- 
  anchor:cuki13
  use:LazyLoad //图片延迟加载
 --*/

+(function($) {
  'use strict';
  var selectString = '[cklazyload]';

  function LazyLoad() {
    this.run();
  }

  LazyLoad.prototype.delayload = function  () {
    var $this = this;
    
    $(selectString).each(function () {
      
      var imgItem = $(this),
          eleTop = imgItem.offset().top,
          eleHeight = imgItem.outerHeight(),
          winTop = $(window).scrollTop(),
          winHeight = $(window).height()      
      if(winTop === 0){ //修正chrome下取不到的問題
          winTop = document.body.scrollTop;
      }
      
      
      //加载正确的图片,条件是屏幕范围内并且要防止重复设置
      if (eleTop < winTop + winHeight && eleTop + eleHeight > winTop && imgItem.data('lazyload') == undefined) {
          //加载开动        
          $this.reloadImg(imgItem);
      }      
    })
  }

  LazyLoad.prototype.reloadImg = function  (obj) {
    var gSrc = obj.data('src');
    var img = $('<img src="'+ gSrc +'" alt="" />');
    if (img[0].complete) {
      obj.attr('src',gSrc);
    }else {
      img.load(function  () {
        obj.attr('src',gSrc);
        $(img).remove();
      })
    }   
    obj.data('lazyload','compelete');
  }

  LazyLoad.prototype.run = function  (obj) {
    var $this = this;
    setInterval(
      function(){
        
        $this.delayload();
      },400
    )
  }

  $(document).ready(function() {
    new LazyLoad();  
  })


})(jQuery);



//返回顶部
(function() {
  var $backToTopTxt = "返回顶部", 
    $backToTopEle = $('<div class="back-top"></div>').appendTo($("body"))
    .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
        $("html, body").animate({ scrollTop: 0 }, 300);
    });

    $backToTopFun = function() {          
      var st = $(document).scrollTop(), winh = $(window).height();
      if(st > 200)
      {
        if($backToTopEle.data('pos') == 'top'){return false;} $backToTopEle.data('pos','top').stop().css('opacity','1').fadeIn();
      }else{
        if($backToTopEle.data('pos') == 'scroll'){return false;}
        $backToTopEle.data('pos','scroll').stop().fadeOut()
      }
    
      //IE6下的定位
      if (!window.XMLHttpRequest) {
        $backToTopEle.css("top", st + winh - 166);
      }
    };
  $(window).bind("scroll", $backToTopFun);
  $(function() { $backToTopFun(); });
})();


/*-- 
  anchor:cuki13
  countTime = "startTime endTime"
  bydtime:
  var startTime = new Date("<?php date_default_timezone_set('Asia/Shanghai'); echo date('Y/m/d H:i:s'); ?>").getTime();
  var endTime = new Date("<?=str_replace('-', '/', $btime)?>").getTime();

  exmaple:
  <div class="counttime" countTime="2015/05/14 14:40:53,2015/05/08 11:00:00">
    <span countDay ></span>
    <span countHour ></span>
    <span countMin ></span>
    <span countSec ></span>
  </div>

  use:
 --*/

+(function() {
  'use strict';

  var selectString = '[countTime]';

  function CountTime (startTime,endTime,obj) {
    this.startTime = startTime;
    this.endTime = endTime;
    this.sbTime = Math.floor((this.endTime - this.startTime) / 1e3);
    this.second = obj.find('[countSec]');
    this.minite = obj.find('[countMin]');
    this.hour = obj.find('[countHour]');
    this.day = obj.find('[countDay]');
    this.el = obj;
  }

  CountTime.prototype.countPro = function  () {

    this.el.trigger('countPro');
    var getSbTime = this.sbTime;
    this.second.html(checkSimple(Math.floor(getSbTime % 60)));
    this.minite.html(checkSimple(Math.floor(getSbTime / 60 % 60)));
    this.hour.html(checkSimple(Math.floor(getSbTime / 3600 % 24)));
    this.day.html(checkSimple(Math.floor(getSbTime / 3600 / 24)));
    

    if (this.el.is(':hidden')) {
      this.el.show();
    }

    if (this.sbTime == 0) {
      this.el.trigger('countEnd');
    }
    this.sbTime--;

  }

  function checkSimple (num) {
    num = num.toString();

    
    if (num.length < 2) {
      num = '<span class="num-ib">0</span>' + '<span class="num-ib">' + num + '</span>';
    }else {
      var arry = '';
      for (var i = 0;  i<num.length ; i++) {
        arry += '<span class="num-ib">' + num.charAt(i) + '</span>';
      }  
      num = arry;
    }
    return num
  }

  CountTime.prototype.end = function  () {
    this.el.trigger('countEnd');
    this.second.html(0);
    this.minite.html(0);
    this.hour.html(0);
    this.day.html(0);
  }

  CountTime.prototype.init = function  () {
    if (this.sbTime <= 0) {
      this.end();
    }else {
      var $this = this;
      setInterval(
        function(){
          $this.countPro();        
        },1e3
      )
    }
  }

  $(selectString).each(function () {
    var attrpro = $(this).attr('countTime').split(',');
    for (var i = 0;  i<attrpro.length ; i++) {
      if (attrpro[i] == 'now') {
        attrpro[i] = new Date().getTime();
      }else {
        attrpro[i] = new Date(attrpro[i]).getTime();
      }
    }
    var timmer = new CountTime(attrpro[0],attrpro[1],$(this));
    timmer.init();
  })
})(jQuery);

$(document).ready(function() {
  $('.my-peson .link,.my-peson-sbnav').hover(function  () {
    $(this).find('.my-peson-sbnav').show();
  },function  () {
    $(this).find('.my-peson-sbnav').hide();
  })

  $('#carousel-example-generic .glyphicon-remove').on('click',function  () {
    $('.container-hd1').slideUp(function  () {
      $(this).remove();
    });
  })
})

