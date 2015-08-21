<?php $page='购物车'; include('inc/header.php'); ?>

  <div class="main-box container ">
    <?php include('inc/nav-pills.php'); ?>     
    <div class="car-box box1">
      <div class="car-box-row clearfix">
        <h2 class="car-box-title fl">购物车</h2>
        <ul class="car-box-step fr">
            <li class="step step-now">
              <div class="num num-a">1.提交订单</div>
              <div class="arrow arrow-a"></div>
            </li>
            <li class="step ">
              <div class="num num-b ">2.确认并支付</div>
              <div class="arrow arrow-b"></div>
            </li>
            <li class="step ">
              <div class="num num-c">3.购买成功</div>
              <div class="arrow arrow-c"></div>
            </li>
          </ul>
      </div>

      <div class="car-box-list">
      <table class="table table-condensed table-striped">
                <thead>
                  <tr class="head">
                    <th width="40"><input type="checkbox" class=""></th>
                    <th width="90" class="left">项目</th>
                    <th width=""></th>
                    <th width="60">状态</th>
                    <th width="60">单价</th>
                    <th width="150">数量/类型</th>
                    <th width="">小计</th>
                    <th width="50"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>
                      <input type="checkbox" value="5222119" class="">
                    </td>
                    <td class="left">
                      <a href="#" class="deal" target="_blank">
                        <img src="http://i2.s1.dpfile.com/pc/mc/3a5ff749e88cc8ba20ebece686d3ae2f(80c50)/thumb.jpg" alt="万达希尔顿酒店感趣自助餐厅:周一至周四自助晚餐1位">
                      </a>
                    </td>
                    <td class="left">
                      <a href="#" target="_blank">
                        万达希尔顿酒店感趣自助餐厅:周一至周四自助晚餐1位
                      </a>
                    </td>
                    <td dealstatus="1">
                      可购买
                    </td>
                    <td class="price">¥258</td>
                    <td>
                    <div class="pro-detail-box-car pro-detail-box"><div class="count">
                                <a class="c-sub" href="#">-</a> <input class="form-control" type="text" name="" id=""> <a href="#" class="c-add">+</a>
                              </div> </div>                   
                    </td>
                    <td class="price-xj">
                      ¥258</td>
                    <td>
                      <div>
                        <a href="javascript:void(0);" class="J_delete" data-id="5222119">删除</a>
                      </div>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      <input type="checkbox" value="5222119" class="">
                    </td>
                    <td class="left">
                      <a href="#" class="deal" target="_blank">
                        <img src="http://i2.s1.dpfile.com/pc/mc/3a5ff749e88cc8ba20ebece686d3ae2f(80c50)/thumb.jpg" alt="万达希尔顿酒店感趣自助餐厅:周一至周四自助晚餐1位">
                      </a>
                    </td>
                    <td class="left">
                      <a href="#" target="_blank">
                        万达希尔顿酒店感趣自助餐厅:周一至周四自助晚餐1位
                      </a>
                    </td>
                    <td dealstatus="1">
                      可购买
                    </td>
                    <td class="price">¥258</td>
                    <td>
                    <div class="pro-detail-box-car pro-detail-box"><div class="count">
                                <a class="c-sub" href="#">-</a> <input class="form-control" type="text" name="" id=""> <a href="#" class="c-add">+</a>
                              </div> </div>                   
                    </td>
                    <td class="price-xj">
                      ¥258</td>
                    <td>
                      <div>
                        <a href="javascript:void(0);" class="J_delete" data-id="5222119">删除</a>
                      </div>
                    </td>
                  </tr>
                  <tr class="">
                                      <td>
                                        <input type="checkbox" value="5222119" class="">
                                      </td>
                                      <td class="left">
                                        <a href="#" class="deal" target="_blank">
                                          <img src="http://i2.s1.dpfile.com/pc/mc/3a5ff749e88cc8ba20ebece686d3ae2f(80c50)/thumb.jpg" alt="万达希尔顿酒店感趣自助餐厅:周一至周四自助晚餐1位">
                                        </a>
                                      </td>
                                      <td class="left">
                                        <a href="#" target="_blank">
                                          万达希尔顿酒店感趣自助餐厅:周一至周四自助晚餐1位
                                        </a>
                                      </td>
                                      <td dealstatus="1">
                                        可购买
                                      </td>
                                      <td class="price">¥258</td>
                                      <td>
                                      <div class="pro-detail-box-car pro-detail-box"><div class="count">
                                                  <a class="c-sub" href="#">-</a> <input class="form-control" type="text" name="" id=""> <a href="#" class="c-add">+</a>
                                                </div> </div>                   
                                      </td>
                                      <td class="price-xj">
                                        ¥258</td>
                                      <td>
                                        <div>
                                          <a href="javascript:void(0);" class="J_delete" data-id="5222119">删除</a>
                                        </div>
                                      </td>
                                    </tr>
                </tbody>
              </table>        
      </div>

      <div class="cart-box-tj">
        总价：<span class="price">¥258</span> <button class="btn btn-danger btn-lg" type="submit">提交订单</button>
      </div>
    </div>
  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
  