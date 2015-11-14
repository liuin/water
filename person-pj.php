<? $page='待评价-我的评价-个人中心'; include('inc/header.php') ?>

  <div class="main-person ">
          <div class="container"><?php include('inc/nav-pills.php'); ?></div>

      <div class="container-outdoor">
      <div class="container">
        <div class="row">
      <div class="col-sm-2 left-side person-left-side">
        <?php include('inc/person-nav.php'); ?>
      </div>
      <div class="col-sm-10 person-right-side person-right-side-pj">
        <?php include('inc/person-nav-pj.php'); ?>

        <div class="col-xs-12 col-table">
          <div class="person-order-hd">
            <span class="sp1">项目</span>
            <span class="sp2">购买时间</span>
          </div>

          <div class="preson-order-item first">
            <div class="d1">
              <div class="s fl"><a href="#"><img src="http://i2.s2.dpfile.com/pc/mc/113f268f16bcbb72e4cbb519cfa6e99e(246c184)/thumb.jpg" alt="" width="85" height="53"></a></div>
              <div class="msg">
                <h4><a href="javascript:void(0);">九毛九山西手工面:代金券</a></h4>
              </div>
              <div class="clear"></div>
              
            </div>
            <div class="d2 d2-1"><span class="sp1">购买时间:</span>2015-07-26</div>            
          </div>
            <form action="" class="form-pj">                
              <div class="star-wp-add star-wp clearfix">
                <span class="fl">我要评价:</span>
                <div class="star fl">
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                </div>
                <div class="star-lab">
                  
                </div>
              </div>
              <div class="pj-sub ">                   
                <div class="d1"><textarea name="" class="form-control" placeholder="说点啥呢"></textarea>  </div>    
                <button type="button" class="btn btn-primary">发表评论</button>
              </div>
            </form>
          


          <div class="preson-order-item first">
            <div class="d1">
              <div class="s fl"><a href="#"><img src="http://i2.s2.dpfile.com/pc/mc/113f268f16bcbb72e4cbb519cfa6e99e(246c184)/thumb.jpg" alt="" width="85" height="53"></a></div>
              <div class="msg">
                <h4><a href="javascript:void(0);">九毛九山西手工面:代金券</a></h4>
              </div>
              <div class="clear"></div>
              
            </div>
            <div class="d2 d2-1"><span class="sp1">购买时间:</span>2015-07-26</div>            
          </div>
            <form action="" class="form-pj">                
              <div class="star-wp-add star-wp clearfix">
                <span class="fl">我要评价:</span>
                <div class="star fl">
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                </div>
                <div class="star-lab">
                  
                </div>
                <div class="star-txt"></div>
              </div>
              <div class="pj-sub ">                   
                <div class="d1"><textarea name="" class="form-control" placeholder="说点啥呢"></textarea>  </div>    
                <button type="button" class="btn btn-primary">发表评论</button>
              </div>
              
            </form>

          <div class="preson-order-item first">
            <div class="d1">
              <div class="s fl"><a href="#"><img src="http://i2.s2.dpfile.com/pc/mc/113f268f16bcbb72e4cbb519cfa6e99e(246c184)/thumb.jpg" alt="" width="85" height="53"></a></div>
              <div class="msg">
                <h4><a href="javascript:void(0);">九毛九山西手工面:代金券</a></h4>
              </div>
              <div class="clear"></div>
              
            </div>
            <div class="d2 d2-1"><span class="sp1">购买时间:</span>2015-07-26</div>            
          </div>
            <form action="" class="form-pj">                
              <div class="star-wp-add star-wp clearfix">
                <span class="fl">我要评价:</span>
                <div class="star fl">
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                  <label class="sp1"><input type="radio" name="start" id=""></label>
                </div>
                <div class="star-lab">
                  
                </div>
              </div>
              <div class="pj-sub ">                   
                <div class="d1"><textarea name="" class="form-control" placeholder="说点啥呢"></textarea>  </div>    
                <button type="button" class="btn btn-primary">发表评论</button>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
            </form>



          <nav class="pagenation-nav">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>


</div></div>
  </div><!-- /中间 -->
  

<?php include('inc/footer.php'); ?>

<script type="text/javascript">
<!--
  $(document).ready(function() {
    //评价

    

    $('.star .sp1').hover(function  () {
      var getInd = $(this).index() + 1;
      var starLab = $(this).parent().next('.star-lab');
      var getClass = 'active-sp' + getInd;
      var txtLab = 0;


      $(this).addClass(getClass).prevAll().addClass(getClass).end().nextAll().removeClass('active-sp1 active-sp2 active-sp3 active-sp4 active-sp5 active-no');
      $(this).nextAll().removeClass('active-sp1 active-sp2 active-sp3 active-sp4 active-sp5 active-no').addClass('active-no');

      

      if (starLab.length > 0) {
        switch (getInd) {
        case 1:
          txtLab = '非常不满';
          starLab.removeClass('star-lab1 star-lab2 star-lab3').addClass('star-lab1');
        break
        case 2:
          txtLab = '不满';
          starLab.removeClass('star-lab1 star-lab2 star-lab3').addClass('star-lab1');
        break
        case 3:
          txtLab = '一般';
          starLab.removeClass('star-lab1 star-lab2 star-lab3').addClass('star-lab2');
        break
        case 4:
          txtLab = '满意';
          starLab.removeClass('star-lab1 star-lab2 star-lab3').addClass('star-lab2');
        break
        case 5:
          txtLab = '十分满意';
          starLab.removeClass('star-lab1 star-lab2 star-lab3').addClass('star-lab3');
        break
        default:
        }
        starLab.show().html(txtLab);
      }

    },function  () {
      var starLab = $(this).parent().next('.star-lab');
      $('.star .sp1').removeClass('active-sp1 active-sp2 active-sp3 active-sp4 active-sp5 active-no');
      starLab.hide();
    })
    $('.star .sp1').on('click',function  () {
      var getInd = $(this).index() + 1;
      var getClass = 'sp-checked-' + getInd;
      $(this).removeClass('sp-checked-1 sp-checked-2 sp-checked-3 sp-checked-4 sp-checked-5 sp-checked-no');
      $(this).addClass('sp-checked-' + getInd).prevAll().removeClass('sp-checked-1 sp-checked-2 sp-checked-3 sp-checked-4 sp-checked-5 sp-checked-no').addClass('sp-checked-' + getInd);
      $(this).nextAll().removeClass('sp-checked-1 sp-checked-2 sp-checked-3 sp-checked-4 sp-checked-5').addClass('sp-checked-no ');
      $('.form-pj .pj-sub').hide();
      $(this).parents('.form-pj').find('.pj-sub').show();
    })
  })
//-->
</script>