<? $page='待评价-我的评价-个人中心'; include('inc/header.php') ?>

  <div class="main-person container">
    <?php include('inc/nav-pills.php'); ?>
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
                <span class="fl">我要评价:</span><div class="star fl">
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
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
                <span class="fl">我要评价:</span><div class="star fl">
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
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
                <span class="fl">我要评价:</span><div class="star fl">
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
                  <span class="sp1"><input type="radio" name="start" id=""></span>
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



  </div><!-- /中间 -->
  

<?php include('inc/footer.php'); ?>

<script type="text/javascript">
<!--
  $(document).ready(function() {
    //评价
    $('.star .sp1').hover(function  () {
      $(this).addClass('active-sp1').prevAll().addClass('active-sp1').end().nextAll().removeClass('active-sp1');
    },function  () {
      $('.star .sp1').not('.sp-checked').removeClass('active-sp1');
    })
    $('.star .sp1').on('click',function  () {
      $(this).addClass('sp-checked').prevAll().addClass('sp-checked');
      $(this).nextAll().removeClass('sp-checked')
      $('.form-pj .pj-sub').hide();
      $(this).parents('.form-pj').find('.pj-sub').show();
    })
  })
//-->
</script>