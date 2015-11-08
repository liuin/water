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

