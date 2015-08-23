<?php $page='支付页面'; include('inc/header.php'); ?>

  <div class="main-box container ">
    <?php include('inc/nav-pills.php'); ?>     
    <div class="row">
      <div class="col-md-8">
      <div class="box1 pay-block">
              <div class="car-box-row clearfix">
        <h2 class="car-box-title fl">选择支付方式</h2>
        <ul class="car-box-step fr">
            <li class="step step-now">
              <div class="num num-a">1.提交订单</div>
              <div class="arrow arrow-a"></div>
            </li>
            <li class="step step-now">
              <div class="num num-b ">2.确认并支付</div>
              <div class="arrow arrow-b"></div>
            </li>
            <li class="step ">
              <div class="num num-c">3.购买成功</div>
              <div class="arrow arrow-c"></div>
            </li>
          </ul>
      </div>
            
            <div class="price">
              应付总额： <span class="sp1">¥98.00</span>
            </div>
            <div class="panel-pay panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    网上银行支付
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <ul class="bank-list ">
                                  <li>
                                      <input type="radio" value="ICBC-2-2-166-823" name="paytype" id="check-icbc-2-2-166-823" data-channel-discount="0">
                                      <label class="icon-box" for="check-icbc-2-2-166-823">
                                          <span class="icon ICBC" title="中国工商银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="CMB-2-2-166-824" name="paytype" id="check-cmb-2-2-166-824" data-channel-discount="0">
                                      <label class="icon-box" for="check-cmb-2-2-166-824">
                                          <span class="icon CMB" title="招商银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="CCB-2-2-166-839" name="paytype" id="check-ccb-2-2-166-839" data-channel-discount="0">
                                      <label class="icon-box" for="check-ccb-2-2-166-839">
                                          <span class="icon CCB" title="中国建设银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="ABC-2-2-166-826" name="paytype" id="check-abc-2-2-166-826" data-channel-discount="0">
                                      <label class="icon-box" for="check-abc-2-2-166-826">
                                          <span class="icon ABC" title="中国农业银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="COMM-2-2-166-845" name="paytype" id="check-comm-2-2-166-845" data-channel-discount="0">
                                      <label class="icon-box" for="check-comm-2-2-166-845">
                                          <span class="icon COMM" title="交通银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="BOC-2-2-166-828" name="paytype" id="check-boc-2-2-166-828" data-channel-discount="0">
                                      <label class="icon-box" for="check-boc-2-2-166-828">
                                          <span class="icon BOC" title="中国银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="CIB-2-2-166-846" name="paytype" id="check-cib-2-2-166-846" data-channel-discount="0">
                                      <label class="icon-box" for="check-cib-2-2-166-846">
                                          <span class="icon CIB" title="兴业银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="CEB-2-2-166-830" name="paytype" id="check-ceb-2-2-166-830" data-channel-discount="0">
                                      <label class="icon-box" for="check-ceb-2-2-166-830">
                                          <span class="icon CEB" title="中国光大银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="SPDB-2-2-166-847" name="paytype" id="check-spdb-2-2-166-847" data-channel-discount="0">
                                      <label class="icon-box" for="check-spdb-2-2-166-847">
                                          <span class="icon SPDB" title="上海浦东发展银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="GDB-2-2-166-831" name="paytype" id="check-gdb-2-2-166-831" data-channel-discount="0">
                                      <label class="icon-box" for="check-gdb-2-2-166-831">
                                          <span class="icon GDB" title="广发银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="CITIC-2-2-166-848" name="paytype" id="check-citic-2-2-166-848" data-channel-discount="0">
                                      <label class="icon-box" for="check-citic-2-2-166-848">
                                          <span class="icon CITIC" title="中信银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="CMBC-2-2-166-849" name="paytype" id="check-cmbc-2-2-166-849" data-channel-discount="0">
                                      <label class="icon-box" for="check-cmbc-2-2-166-849">
                                          <span class="icon CMBC" title="中国民生银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="SPABANK-2-2-166-843" name="paytype" id="check-spabank-2-2-166-843" data-channel-discount="0">
                                      <label class="icon-box" for="check-spabank-2-2-166-843">
                                          <span class="icon SPABANK" title="平安银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="PSBC-2-2-166-834" name="paytype" id="check-psbc-2-2-166-834" data-channel-discount="0">
                                      <label class="icon-box" for="check-psbc-2-2-166-834">
                                          <span class="icon PSBC-DEBIT" title="中国邮政储蓄银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="SHRCB-2-2-166-852" name="paytype" id="check-shrcb-2-2-166-852" data-channel-discount="0">
                                      <label class="icon-box" for="check-shrcb-2-2-166-852">
                                          <span class="icon SHRCB" title="上海农商银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="HZCB-2-2-166-851" name="paytype" id="check-hzcb-2-2-166-851" data-channel-discount="0">
                                      <label class="icon-box" for="check-hzcb-2-2-166-851">
                                          <span class="icon HZCBB2C" title="杭州银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="SHBANK-2-2-166-835" name="paytype" id="check-shbank-2-2-166-835" data-channel-discount="0">
                                      <label class="icon-box" for="check-shbank-2-2-166-835">
                                          <span class="icon SHBANK" title="上海银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="BJBANK-2-2-166-821" name="paytype" id="check-bjbank-2-2-166-821" data-channel-discount="0">
                                      <label class="icon-box" for="check-bjbank-2-2-166-821">
                                          <span class="icon BJBANK" title="北京银行">
                                          </span>
                                      </label>
                                  </li>
                                  <li>
                                      <input type="radio" value="HXB-2-2-166-822" name="paytype" id="check-hxb-2-2-166-822" data-channel-discount="0">
                                      <label class="icon-box" for="check-hxb-2-2-166-822">
                                          <span class="icon HXB" title="华夏银行">
                                          </span>
                                      </label>
                                  </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    信用卡直接支付<span class="sp1">(无需开通网上银行)</span>
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                <ul class="bank-list ">
                                          <li>
                                              <input type="radio" value="ICBC-2-2-166-823" name="paytype" id="check-icbc-2-2-166-823" data-channel-discount="0">
                                              <label class="icon-box" for="check-icbc-2-2-166-823">
                                                  <span class="icon ICBC" title="中国工商银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="CMB-2-2-166-824" name="paytype" id="check-cmb-2-2-166-824" data-channel-discount="0">
                                              <label class="icon-box" for="check-cmb-2-2-166-824">
                                                  <span class="icon CMB" title="招商银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="CCB-2-2-166-839" name="paytype" id="check-ccb-2-2-166-839" data-channel-discount="0">
                                              <label class="icon-box" for="check-ccb-2-2-166-839">
                                                  <span class="icon CCB" title="中国建设银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="ABC-2-2-166-826" name="paytype" id="check-abc-2-2-166-826" data-channel-discount="0">
                                              <label class="icon-box" for="check-abc-2-2-166-826">
                                                  <span class="icon ABC" title="中国农业银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="COMM-2-2-166-845" name="paytype" id="check-comm-2-2-166-845" data-channel-discount="0">
                                              <label class="icon-box" for="check-comm-2-2-166-845">
                                                  <span class="icon COMM" title="交通银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="BOC-2-2-166-828" name="paytype" id="check-boc-2-2-166-828" data-channel-discount="0">
                                              <label class="icon-box" for="check-boc-2-2-166-828">
                                                  <span class="icon BOC" title="中国银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="CIB-2-2-166-846" name="paytype" id="check-cib-2-2-166-846" data-channel-discount="0">
                                              <label class="icon-box" for="check-cib-2-2-166-846">
                                                  <span class="icon CIB" title="兴业银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="CEB-2-2-166-830" name="paytype" id="check-ceb-2-2-166-830" data-channel-discount="0">
                                              <label class="icon-box" for="check-ceb-2-2-166-830">
                                                  <span class="icon CEB" title="中国光大银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="SPDB-2-2-166-847" name="paytype" id="check-spdb-2-2-166-847" data-channel-discount="0">
                                              <label class="icon-box" for="check-spdb-2-2-166-847">
                                                  <span class="icon SPDB" title="上海浦东发展银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="GDB-2-2-166-831" name="paytype" id="check-gdb-2-2-166-831" data-channel-discount="0">
                                              <label class="icon-box" for="check-gdb-2-2-166-831">
                                                  <span class="icon GDB" title="广发银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="CITIC-2-2-166-848" name="paytype" id="check-citic-2-2-166-848" data-channel-discount="0">
                                              <label class="icon-box" for="check-citic-2-2-166-848">
                                                  <span class="icon CITIC" title="中信银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="CMBC-2-2-166-849" name="paytype" id="check-cmbc-2-2-166-849" data-channel-discount="0">
                                              <label class="icon-box" for="check-cmbc-2-2-166-849">
                                                  <span class="icon CMBC" title="中国民生银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="SPABANK-2-2-166-843" name="paytype" id="check-spabank-2-2-166-843" data-channel-discount="0">
                                              <label class="icon-box" for="check-spabank-2-2-166-843">
                                                  <span class="icon SPABANK" title="平安银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="PSBC-2-2-166-834" name="paytype" id="check-psbc-2-2-166-834" data-channel-discount="0">
                                              <label class="icon-box" for="check-psbc-2-2-166-834">
                                                  <span class="icon PSBC-DEBIT" title="中国邮政储蓄银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="SHRCB-2-2-166-852" name="paytype" id="check-shrcb-2-2-166-852" data-channel-discount="0">
                                              <label class="icon-box" for="check-shrcb-2-2-166-852">
                                                  <span class="icon SHRCB" title="上海农商银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="HZCB-2-2-166-851" name="paytype" id="check-hzcb-2-2-166-851" data-channel-discount="0">
                                              <label class="icon-box" for="check-hzcb-2-2-166-851">
                                                  <span class="icon HZCBB2C" title="杭州银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="SHBANK-2-2-166-835" name="paytype" id="check-shbank-2-2-166-835" data-channel-discount="0">
                                              <label class="icon-box" for="check-shbank-2-2-166-835">
                                                  <span class="icon SHBANK" title="上海银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="BJBANK-2-2-166-821" name="paytype" id="check-bjbank-2-2-166-821" data-channel-discount="0">
                                              <label class="icon-box" for="check-bjbank-2-2-166-821">
                                                  <span class="icon BJBANK" title="北京银行">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="HXB-2-2-166-822" name="paytype" id="check-hxb-2-2-166-822" data-channel-discount="0">
                                              <label class="icon-box" for="check-hxb-2-2-166-822">
                                                  <span class="icon HXB" title="华夏银行">
                                                  </span>
                                              </label>
                                          </li>
                          </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    支付平台<span class="sp1">(推荐支付宝、微信用户使用)</span>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <ul class="bank-list ">
                                          <li>
                                              <input type="radio" value="alipay-2-12-168-25" name="paytype" id="check-alipay-2-12-168-25" data-channel-discount="0">
                                              <label class="icon-box" for="check-alipay-2-12-168-25">
                                                  <span class="icon alipay" title="支付宝">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="alipaybarcode-2-12-168-56" name="paytype" id="check-alipaybarcode-2-12-168-56" data-channel-discount="0">
                                              <label class="icon-box" for="check-alipaybarcode-2-12-168-56">
                                                  <span class="icon alipay-barcode" title="支付宝扫码">
                                                  </span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" value="weixinbarcode-2-12-168-58" name="paytype" id="check-weixinbarcode-2-12-168-58" data-channel-discount="0">
                                              <label class="icon-box" for="check-weixinbarcode-2-12-168-58">
                                                  <span class="icon weixin-barcode" title="微信扫码">
                                                          <span class="none promo">免费抽Macbook</span>
                                                  </span>
                                              </label>
                                          </li>
                          </ul>
                </div>
              </div>
            </div>
          </div>

          <form class="form-tel form-inline">
            <div class="form-group">
              <label for="exampleInputName2">手机号</label>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入您的手机号">
            </div>            
            <button type="submit" class="btn btn-tel btn-default">验证手机</button>
          </form>      
          <div class="pay-confirm">

                      <h3 class="title ">确认订单</h3>	

                      <table width="100%" class="table table-bordered" cellpadding="0" cellspacing="0"><tbody>

                        <tr>
                        
                          <th width="55%">商品名称</th>
                          
                          <th width="15%">单价</th>
                          
                          <th width="15%">数量</th>
                          
                          <th width="15%">总计</th>
                        
                        </tr>
                        <tr>
                          <td valign="middle" align="left" class="deal">仅售88元，价值100元代金券，可叠加！荟萃岭南艺术与饮食文化，浓缩并创新美食精华！</td>

                          <td align="center" class="Price-font">¥88
                    </td>
                          
                          <td align="center">1</td>
                          
                          <td align="center" class="Price-font">¥88
                    </td>
                        
                        </tr>
                      </tbody></table>
                        
                      <div class="infor">
                        <span class="item">抵用券/优惠代码：<strong class="Price-font" id="J_off-coupon">¥0.00</strong></span>
                        <span class="item">使用余额：<strong class="Price-font" id="J_balance-pay">¥0.00</strong></span>

                        <span class="item">活动立减：<strong class="Price-font" id="J_promo-pay">¥0.00</strong></span>
                        
                        <span class="allprice">还需支付：<strong class="price Price-font" id="J_total-price">¥88.00</strong></span>
                        
                      </div>

                    </div><!-- /确认订单 -->
                <div class="pay-order-bk">
                  <button class="btn btn-danger btn-lg">确认订单，付款</button>
                </div>  
          </div>    

          

      </div>
      <div class="col-md-4 pay-info">
        <div class="box1">
          <h2>请放心购买</h2>
          <p>采用支付宝和网上银行支付，最大限度保障用户交易安全。</p>
          <p>为了方便支付，Windows用户建议使用IE浏览器。</p>
        </div>
      
        <div class="box1">
          <h2>有疑问？</h2>
          <dl>
            <dt><p>什么是抵用券/优惠代码？</p></dt>
            <dd><p>抵用券/优惠代码是点评团发放给会员用于抵扣产品金额的优惠券，用户可通过参与点评团的活动来获得。抵用券在余额与抵用券中可以查看，优惠代码会以邮件形式发放。</p></dd>
          </dl>
                  <dl>
                    <dt><p>什么是抵用券/优惠代码？</p></dt>
                    <dd><p>抵用券/优惠代码是点评团发放给会员用于抵扣产品金额的优惠券，用户可通过参与点评团的活动来获得。抵用券在余额与抵用券中可以查看，优惠代码会以邮件形式发放。</p></dd>
                  </dl>
        </div>
      
      </div>
    </div>

  </div>
  <!-- /中间 -->

  <?php include('inc/footer.php'); ?>
  