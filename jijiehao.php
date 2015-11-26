<?php $page='活动结集号'; include('inc/header.php'); ?>

  <div class="main-box container">
    <?php include('inc/nav-pills.php'); ?>
      <div id="carousel-example-generic-jjh" class="banner carousel-1 carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic-jjh" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic-jjh" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic-jjh" data-slide-to="2"></li>
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
        <a class="left carousel-control" href="#carousel-example-generic-jjh" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic-jjh" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- /海报 -->

      <div class="jijiehao ">
        <div class="title1"><span class="glyphicon glyphicon-bullhorn"></span>活动结集号</div>
        <div class="box1">
          <div class="row">
            <div class="col-md-4 img">
              <img src="http://p0.meituan.net/366.220/deal/c793fbe40fc9ccccd294574cc2060bb686133.jpg" alt="">
            </div>
            <div class="col-md-8 col-2">
              <h3>自驾峨眉山：“盛夏避暑地 养生峨眉山”主题自驾游活动</h3>
              <p class="p1">吃在峨眉 耍在峨眉 成都全搜索邀请您周末峨眉山自驾游，体验峨眉山清凉夏日之旅。自峨眉山脚至金顶不到50公里的盘山公路，沿途享受峨眉山绮丽，峻险的风光，感受成都周边最刺激，最安全的山...</p>
              <p class="p2">
                地点：四川成都市峨眉山
                <br /> 活动结束：2014-08-03 , 17:00:00
                <br /> 参与人数：0人
              </p>
              <div class="start-bk">
                <a href="#" class="btn btn-primary btn-lg fl">我要报名</a>
                <div class="time-count">
                  <span class="start fl"></span>
                  <span class="lb2 fl"></span> <!-- / lb1 距开始样式， lb2 进行中样式 -->
                  <div class="fl counttime" style="display:none;" countTime="2015/11/12 14:40:53,2015/11/15 11:00:00">
                    <span class="c-day" countDay ></span>天<span class="sp1"></span><span class="c-hour" countHour ></span>时<span class="sp1"></span><span class="c-min" countMin ></span>分<span class="sp1"></span><span class="c-sec" countSec ></span>秒
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <!-- /当次活动 -->

      <div class="jjh-active">
        <ul class="nav nav-tabs">
          <li role="presentation" data-totlepage="5" data-ckurl="ajax/jjh-data.html" data-cktarget=".tag-part1"><a href="#">所有活动</a></li>
          <li role="presentation" data-totlepage="3" data-ckurl="ajax/jjh-data.html" data-cktarget=".tag-part2"><a href="#">精彩活动</a></li>
          <li role="presentation" data-totlepage="3" data-ckurl="ajax/jjh-data.html" data-cktarget=".tag-part3"><a href="#">往期活动</a></li>
        </ul>
        <div class="box1">
          <div class="row" class="jjh">
            <div class="row-tag">
              <div class="tag-part1 clearfix">
                
              </div>
              <div class="tag-part2 clearfix"></div>
              <div class="tag-part3 clearfix"></div>
            </div>
            <div id="load-tag" class="none"><img src="images/spinner_tra.gif" alt=""></div>
          <div class="tag-part-more none"><div class="spinner1"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><a href="#" page="2" class="btn btn-primary">加载更多</a></div>  
            
          </div>
        </div>
      </div>


  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>

<script type="text/javascript">
<!--

  /*-- 
    anchor:cuki13
    use:data-cktarget
   --*/
  
  +(function($) {

    'use strict';
    var selectString = '[data-cktarget]';  

    function Cktarget(obj) {
      this.obj = obj;
      this.addClass = 'active';
      this.index = obj.index();
      this.targetObj = $(obj.data('cktarget'));
      this.ajaxPro = false;
      this.loadObj = $('#load-tag');
      this.ajaxUrl = obj.data('ckurl');
      this.curPage = 0;
      this.totlePage = obj.data('totlepage');
      this.end = false;

      var $this = this;

      //点击事件
      this.obj.on('click',function  (e) {
       if ($this.obj.hasClass($this.addClass) || $this.ajaxPro) {
        return false;
       }else {         
         $this.obj.addClass($this.addClass).siblings().removeClass($this.addClass);
         $this.curPage = 0;
         $this.end = false;
         $('.tag-part-more').find('a').removeClass('end');
         if ($this.ajaxUrl != '' && (!$this.end)) {
          
          $this.ajaxLoad();
         }else {
           $this.showIn();           
         }
       }
       return false;
      })
    }

    Cktarget.prototype.ajaxLoad = function  () {     

      var $this = this;
      
      if ($this.end) {
       
        return false
      }
      var url = $this.ajaxUrl + '?p =' + $this.curPage;
      var arg = arguments[0];
      
      $this.ajaxPro = true;
      $.ajax({
          type: "GET",
          url: url,
          dataType: 'html',
          success: function(data){
            if ($this.curPage == 0) {
              $this.targetObj.empty();
            }              
            
            $this.targetObj.append(data);
            

            if ($this.curPage == $this.totlePage) {
              $this.end = true;
            }else {
              $this.curPage++;
            }
            
            $this.showIn(); 
            $this.afterAjax();
            $this.loadObj.fadeOut();

            $this.ajaxPro = false;

            
          },
          error:function  () {
          },
          beforeSend:function  () {
              if (arg != 'moreload') {
                $this.loadObj.show();
              }
          }
      });      
    }

    Cktarget.prototype.afterAjax = function  () {
      
    } 
  
    Cktarget.prototype.showIn = function  () {
      if (this.targetObj.hasClass(this.addClass)) {
        return false;
      }
      this.targetObj.addClass(this.addClass).fadeIn().siblings().removeClass(this.addClass).hide();
    }

    $(document).ready(function() {
      $(selectString).each(function () {
        $(this).data('cktarget',new Cktarget($(this)))          
      })

      $(selectString).eq(0).trigger('click');
    })
  })(jQuery);





  $(document).ready(function() {
    //加载更多    
    $('.nav-tabs li').each(function () {
      $(this).data('cktarget').afterAjax = function  () {
        $('.tag-part-more').show();
        $('.tag-part-more').find('a').html('加载更多')
        $('.tag-part-more').find('.spinner1').hide();
        if (this.end == true) {
          $('.tag-part-more').find('a').addClass('end').html('到底啦');
          return false;
        }
      }
    })
    
    $('.tag-part-more a').on('click',function  (e) {
      e.preventDefault();

      
      if ($('.nav-tabs .active').data('cktarget').end == true) {
        
        return false;
      }else {
        $(this).text('').prev().show();      
        $('.nav-tabs .active').data('cktarget').ajaxLoad('moreload');      
      }


    })
  })





//-->
</script>
