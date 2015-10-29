
<?php include "inc/header.php";?>
<?php include "inc/user_info.php";?>
<?php include "inc/menu.php";?>
<!--content -->
<link rel="stylesheet" type="text/css" href="../../public/style/q-style.css?t=<?php echo time();?>" />
<link rel="stylesheet" type="text/css" href="../../public/style/invest.css?t=<?php echo time();?>"/>
<!-- 智能投的产品开始 -->
<div class="products common">
    <div class="title_box">
        <img src="../../public/image/invest/products_title.png">
    </div>
    <div class="common_h">
        <!-- 产品内容开始 -->
        <div class="products_con">
            <!--<?php #foreach($product_listByMouth as $val){?>
                <div class="products_con_con m_50">
                    <div class="products_con_con_top">
                        <a href="#"><span><?php #echo $val['product_subtitle'];?></span><?php #echo $val['product_features'];?></a>
                    </div>
                    <div class="products_con_con_con s">
                        <p>预期收益</p>
                        <p class="p_a"><span><?php #echo $val['rate'];?></span>%&nbsp;每月+<span>0.5</span>%</p>
                    </div>
                    <div class="products_con_con_con s">
                        <p>期限</p>
                        <p class="p_a"><span style=""><?php #echo $val['investment_period'];?></span>个月&nbsp;每月可取</p>
                    </div>
                    <div class="products_con_con_con">
                        <p>起投金额</p>
                        <p class="p_a_b"><span>￥<?php #echo $val['min_investment_amount'];?></span>元</p>
                    </div>
                </div>
            <?php #} ?>-->
            <?php #foreach($product_listByBase as $val){?>
               <!-- <div class="products_con_con m_50">
                    <div class="products_con_con_top">
                        <a href="#"><span><?php #echo $val['product_subtitle'];?></span><?php #echo $val['product_features'];?></a>
                    </div>
                    <div class="products_con_con_con s">
                        <p>预期收益</p>
                        <p class="p_a"><span><?php #echo $val['rate'];?></span>%<?php #if($val['mag']!=""){?><?php #}else{?>&nbsp;~<span><?php #echo $val['fluctuate_rate']+$val['rate'];?></span>%<?php #}?></p>
                    </div>
                    <div class="products_con_con_con s">
                        <p>期限</p>
                        <p class="p_a"><span style=""><?php #echo $val['investment_period'];?></span>个月&nbsp;</p>
                    </div>
                    <div class="products_con_con_con">
                        <p>起投金额</p>
                        <p class="p_a_b"><span>￥<?php #echo $val['min_investment_amount'];?></span>元</p>
                    </div>
                </div>-->
            <?php #} ?>

            	<div class="products_con_con m_50">
                    <div class="products_con_con_top">
                        <a href="#"><span><?php echo $product_list1['product_subtitle'];?></span><?php echo $product_list1['product_features'];?></a>
                    </div>
                    <div class="products_con_con_con s">
                        <p>预期收益</p>
                        <p class="p_a"><span><?php echo $product_list1['rate'];?></span>%<?php if($product_list1['mag']!=""){?><?php }else{?>&nbsp;~<span><?php echo $product_list1['fluctuate_rate']+$product_list1['rate'];?></span>%<?php }?></p>
                    </div>
                    <div class="products_con_con_con s">
                        <p>期限</p>
                        <p class="p_a"><span style=""><?php echo $product_list1['investment_period'];?></span>个月&nbsp;</p>
                    </div>
                    <div class="products_con_con_con">
                        <p>起投金额</p>
                        <p class="p_a_b"><span>￥<?php echo $product_list1['min_investment_amount'];?></span>元</p>
                    </div>
                </div>
				<div class="products_con_con m_50">
                    <div class="products_con_con_top">
                        <a href="#"><span><?php echo $product_list2['product_subtitle'];?></span><?php echo $product_list2['product_features'];?></a>
                    </div>
                    <div class="products_con_con_con s">
                        <p>预期收益</p>
                        <p class="p_a"><span><?php echo $product_list2['rate'];?></span>%<?php if($product_list2['mag']!=""){?><?php }else{?>&nbsp;~<span><?php echo $product_list2['fluctuate_rate']+$product_list2['rate'];?></span>%<?php }?></p>
                    </div>
                    <div class="products_con_con_con s">
                        <p>期限</p>
                        <p class="p_a"><span style=""><?php echo $product_list2['investment_period'];?></span>个月&nbsp;</p>
                    </div>
                    <div class="products_con_con_con">
                        <p>起投金额</p>
                        <p class="p_a_b"><span>￥<?php echo $product_list2['min_investment_amount'];?></span>元</p>
                    </div>
                </div>
                <div class="products_con_con m_50">
                    <div class="products_con_con_top">
                        <a href="#"><span><?php echo $product_list3['product_subtitle'];?></span><?php echo $product_list3['product_features'];?></a>
                    </div>
                    <div class="products_con_con_con s">
                        <p>预期收益</p>
                        <p class="p_a"><span><?php echo $product_list3['rate'];?></span>%<?php if($product_list3['mag']!=""){?><?php }else{?>&nbsp;~<span><?php echo $product_list3['fluctuate_rate']+$product_list3['rate'];?></span>%<?php }?></p>
                    </div>
                    <div class="products_con_con_con s">
                        <p>期限</p>
                        <p class="p_a"><span style=""><?php echo $product_list3['investment_period'];?></span>个月&nbsp;</p>
                    </div>
                    <div class="products_con_con_con">
                        <p>起投金额</p>
                        <p class="p_a_b"><span>￥<?php echo $product_list3['min_investment_amount'];?></span>元</p>
                    </div>
                </div>
                <div class="products_con_con m_50">
                    <div class="products_con_con_top">
                        <a href="#"><span><?php echo $product_list4['product_subtitle'];?></span><?php echo $product_list4['product_features'];?></a>
                    </div>
                    <div class="products_con_con_con s">
                        <p>预期收益</p>
                        <p class="p_a"><span><?php echo $product_list4['rate'];?></span>%<?php if($product_list4['mag']!=""){?><?php }else{?>&nbsp;~<span><?php echo $product_list4['fluctuate_rate']+$product_list4['rate'];?></span>%<?php }?></p>
                    </div>
                    <div class="products_con_con_con s">
                        <p>期限</p>
                        <p class="p_a"><span style=""><?php echo $product_list4['investment_period'];?></span>个月&nbsp;</p>
                    </div>
                    <div class="products_con_con_con">
                        <p>起投金额</p>
                        <p class="p_a_b"><span>￥<?php echo $product_list4['min_investment_amount'];?></span>元</p>
                    </div>
                </div>
        </div>
        <!-- 产品内容结束 -->
        <!-- 购买按钮开始 -->
        <div class="products_buy">
            <!--<?php foreach($product_listByMouth as $val){?>
                <div class="products_buy_btn m_50">
                    <a href="/product/buy/<?php echo decoct($val['id']).'9'.time();?>" class="safe_use" style="left: 18px;<?php if ( $val['buy_end_time'] <= time() || $val['total_investment'] == $val['have_purchased'] ) echo 'background:#666;';?>"><?php if (  $val['buy_end_time'] <= time() ) {?>已&nbsp;结&nbsp;束<?php }elseif($val['total_investment'] == $val['have_purchased']){ ?>售&nbsp;&nbsp;&nbsp;罄<?php }elseif($val['buy_start_time'] > time()){ ?>待&nbsp;&nbsp;&nbsp;售 <?php }else {?>购&nbsp;&nbsp;&nbsp;买<?php } ?></a>
                </div>
            <?php } ?>-->
            <?php #foreach($product_listByBase as $val){?>
                <!-- <div class="products_buy_btn m_50">
                    <a href="/product/buy/<?php echo decoct($val['id']).'9'.time();?>" class="safe_use" style="left: 18px;<?php if ( $val['buy_end_time'] <= time() || $val['total_investment'] == $val['have_purchased'] ) echo 'background:#666;';?>"><?php if (  $val['buy_end_time'] <= time() ) {?>已&nbsp;结&nbsp;束<?php }elseif($val['total_investment'] == $val['have_purchased']){ ?>售&nbsp;&nbsp;&nbsp;罄<?php }elseif($val['buy_start_time'] > time()){ ?>待&nbsp;&nbsp;&nbsp;售 <?php }else {?>购&nbsp;&nbsp;&nbsp;买<?php } ?></a>
                </div> -->
            <?php #} ?>
            <div class="products_buy_btn m_50">
                <a href="/product/buy/<?php echo decoct($product_list1['id']).'9'.time();?>" class="safe_use" style="left: 18px;<?php if ( $product_list1['buy_end_time'] <= time() || $product_list1['total_investment'] == $product_list1['have_purchased'] ) echo 'background:#666;';?>"><?php if (  $product_list1['buy_end_time'] <= time() ) {?>已&nbsp;结&nbsp;束<?php }elseif($product_list1['total_investment'] == $product_list1['have_purchased']){ ?>售&nbsp;&nbsp;&nbsp;罄<?php }elseif($product_list1['buy_start_time'] > time()){ ?>待&nbsp;&nbsp;&nbsp;售 <?php }else {?>购&nbsp;&nbsp;&nbsp;买<?php } ?></a>
            </div>
            <div class="products_buy_btn m_50">
                <a href="/product/buy/<?php echo decoct($product_list2['id']).'9'.time();?>" class="safe_use" style="left: 18px;<?php if ( $product_list2['buy_end_time'] <= time() || $product_list2['total_investment'] == $product_list2['have_purchased'] ) echo 'background:#666;';?>"><?php if (  $product_list2['buy_end_time'] <= time() ) {?>已&nbsp;结&nbsp;束<?php }elseif($product_list2['total_investment'] == $product_list2['have_purchased']){ ?>售&nbsp;&nbsp;&nbsp;罄<?php }elseif($product_list2['buy_start_time'] > time()){ ?>待&nbsp;&nbsp;&nbsp;售 <?php }else {?>购&nbsp;&nbsp;&nbsp;买<?php } ?></a>
            </div>
            <div class="products_buy_btn m_50">
                <a href="/product/buy/<?php echo decoct($product_list3['id']).'9'.time();?>" class="safe_use" style="left: 18px;<?php if ( $product_list3['buy_end_time'] <= time() || $product_list3['total_investment'] == $product_list3['have_purchased'] ) echo 'background:#666;';?>"><?php if (  $product_list3['buy_end_time'] <= time() ) {?>已&nbsp;结&nbsp;束<?php }elseif($product_list3['total_investment'] == $product_list3['have_purchased']){ ?>售&nbsp;&nbsp;&nbsp;罄<?php }elseif($product_list3['buy_start_time'] > time()){ ?>待&nbsp;&nbsp;&nbsp;售 <?php }else {?>购&nbsp;&nbsp;&nbsp;买<?php } ?></a>
            </div>
            <div class="products_buy_btn m_50">
                <a href="/product/buy/<?php echo decoct($product_list4['id']).'9'.time();?>" class="safe_use" style="left: 18px;<?php if ( $product_list4['buy_end_time'] <= time() || $product_list4['total_investment'] == $product_list4['have_purchased'] ) echo 'background:#666;';?>"><?php if (  $product_list4['buy_end_time'] <= time() ) {?>已&nbsp;结&nbsp;束<?php }elseif($product_list4['total_investment'] == $product_list4['have_purchased']){ ?>售&nbsp;&nbsp;&nbsp;罄<?php }elseif($product_list4['buy_start_time'] > time()){ ?>待&nbsp;&nbsp;&nbsp;售 <?php }else {?>购&nbsp;&nbsp;&nbsp;买<?php } ?></a>
            </div>
        </div>

        <!-- 购买按钮结束 -->
    </div>
</div>
<!-- 智能投的产品结束 -->

<!--收益计算器开始-->
<link href="../../public/style/calculator.css" type="text/css" rel="stylesheet">
<div class="calculator">
    <div class="calculator_box">
        <div class="calculator_left">
            <img src="../../public/image/product_center/0025_03.png" class="cal_title">
            <img src="../../public/image/product_center/0025_07.png" class="cal_clock">
            <div id="cal_charts1"></div>
            <div id="cal_charts2"></div>
            <div id="cal_charts3"></div>
            <span class="x_text" style="display: none">涨跌幅度(%)</span>

        </div>
        <div class="calculator_right">
            <form>
                <!--<p>你的余额：<a class="sign_box" href="#">登录</a> <a class="sign_box" href="#">注册</a></p>-->
                <p>预计投资：<input type="text" id="invest" value="" style="border-radius: 5px;height: 22px">&nbsp;&nbsp;元 </p>
                <p >
                <div class="cal_product">
                    <span>选择产品：</span>
                    <div class="product_1">
                        <div class="block_1" id="block_1">
                            <p>涨赚钱</p>
                        </div>
                        <?php foreach($product_listByBase as $val){
                            if($val['is_show'] == 1 && $val['product_subtitle'] == '金牛'){ ?>
                                <input type="hidden" gu="<?php echo $val['rate']; ?>" fl="<?php echo $val['fluctuate_rate']; ?>" typeid="<?php echo $val['id']; ?>" id="jinniu_data"  />
                                <input type="hidden" class="chart_line_data" chartline1="<?php echo $val['chart_line_data_1']; ?>" chartline2="<?php echo $val['chart_line_data_2']; ?>" chartline3="<?php echo $val['chart_line_data_3']; ?>" chartlinebase="<?php echo $val['chart_line_base_data']; ?>" id="jinniu_chart_data"/>
                            <?php } }?>
                        <img src="../../public/image/product_center/top-tri.png" class="top_1" id="top_1">
                        <img src="../../public/image/product_center/jinniu1.png" class="six_1" id="six_1">
                    </div>
                    <div class="product_2">
                        <div class="block_2">
                            <p>涨跌赚</p>
                        </div>
                        <?php foreach($product_listByBase as $val){
                            if($val['is_show'] == 1 && $val['product_subtitle'] == '金鲨'){ ?>
                                <input type="hidden" gu="<?php echo $val['rate']; ?>" fl="<?php echo $val['fluctuate_rate']; ?>" typeid="<?php echo $val['id']; ?>" id="jinsha_data"/>
                                <input type="hidden" class="chart_line_data" chartline1="<?php echo $val['chart_line_data_1']; ?>" chartline2="<?php echo $val['chart_line_data_2']; ?>" chartline3="<?php echo $val['chart_line_data_3']; ?>" chartlinebase="<?php echo $val['chart_line_base_data']; ?>" id="jinsha_chart_data" />
                            <?php } }?>
                        <img src="../../public/image/product_center/top-tri.png" class="top_2">
                        <img src="../../public/image/product_center/jinsha1.png" class="six_2">

                    </div>
                    <div class="product_3">
                        <div class="block_3">
                            <p>跌赚钱</p>
                        </div>
                        <?php foreach($product_listByBase as $val){
                            if($val['is_show'] == 1 && $val['product_subtitle'] == '金熊'){ ?>
                                <input type="hidden" gu="<?php echo $val['rate']; ?>" fl="<?php echo $val['fluctuate_rate']; ?>" typeid="<?php echo $val['id']; ?>" id="jinxiong_data"/>
                                <input type="hidden" class="chart_line_data" chartline1="<?php echo $val['chart_line_data_1']; ?>" chartline2="<?php echo $val['chart_line_data_2']; ?>" chartline3="<?php echo $val['chart_line_data_3']; ?>" chartlinebase="<?php echo $val['chart_line_base_data']; ?>" id="jinyan_chart_data" />
                            <?php } }?>
                        <img src="../../public/image/product_center/top-tri.png" class="top_3">
                        <img src="../../public/image/product_center/jinxiong1.png" class="six_3">

                    </div>
                </div>
                <!--<div class="cal_radio">-->
                <!--<input type="radio" name="product_list" value="jinniu" id="jinniu" class="product_list list1" >-->
                <!--<input type="radio" name="product_list" value="jinsha" id="jinsha" class="product_list list2">-->
                <!--<input type="radio" name="product_list" value="jinxiong" id="jinxiong" class="product_list list3">-->
                <!--</div>-->
                <!--<div class="product_box">-->
                <!--<img src="six.png">22222-->
                <!--</div>-->
                </p>
                <div class="choice_box">
                    <div class="cal_choice">
                        <span>投资周期：</span>
                        <div class="cal_date_txt1 "></div>
                        <img src="../../public/image/product_center/flag.png" class="flag1">
                        <div class="cal_date_txt2 "></div>
                        <img src="../../public/image/product_center/flag.png" class="flag2">
                        <div class="cal_date_txt3 "></div>
                        <img src="../../public/image/product_center/flag.png" class="flag3">
                        <input type="hidden" id="date_val" value="0">
                    </div>
                    <!--<div class="choice">套餐 选择</div>-->

                </div>
                <!--<div class="direction_box">-->
                <!--<div class="up_box">-->
                <!--<img name="direction" id="up_btn"  src="cal_up.png" class="up_img">-->
                <!--</div>-->
                <!--<div class="down_box">-->
                <!--<img name="direction" id="down_btn" src="cal_down.png" class="down_img">-->
                <!--</div>-->
                <!--</div>-->

                <div class="change_box">
                    <div class="slider_box">
                        <span><div class="slider_title">投资期指数累计涨幅：</div><b id="slider_left">跌</b>&nbsp;<input id="slider" value="0" type="range" min="-100" max="200" step="1" onmousemove="change()"  />&nbsp;<b id="slider_right">涨</b></span>
                    </div>

                    <br/>
                    <div class="ur_range_box">
                        <input type="text" value="0" id="ur_range" onkeyup="change_slider()"> %
                        <!--<span class="ur_range_per">%</span>-->
                    </div>
                    <div class="min_max">
                        <!--<input type="number" id="min_num" value=""  placeholder="区间最小净值">-->
                        <!--<input type="number" id="max_num" value=""  placeholder="区间最大净值">-->
                        <select name="isout" id="isout" onchange="change_color()" style="width: 96px; height: 26px;border-radius: 5px;margin-right: 150px;margin-top: 20px;" >
                            <option value="out_line">敲出</option>
                            <option value="in_line">不敲出</option>
                        </select>
                        <span class="out_tip" >?</span>
                        <!--<span class="tooltips" tooltip="The right of the element" tooltip-position="right">right</span>-->
                        <div class="out_tip_box" id="out_tip_box">
                                      <span class="out_tip_txt" id="out_tip_txt">
                                             <b style='color: #f56c1b;font-size: 13px'>敲出</b>:若投资期间，指数累计最高涨幅超过21.5%（或最大跌幅超过-21.5%），该投资只能获得固定收益率+补偿收益率”。
                                      </span>
                        </div>
                    </div>
                    </span>
                    <!--<div class="change_des_box">-->
                    <!--最高累计涨幅?-->
                    <!--&lt;!&ndash;<span class="out_tip" >?</span>&ndash;&gt;-->
                    <!--</div>-->
                </div>
                <!--<div class="cal_profit">-->
                <!--你的收益：<span id="ur_profit" style="display: inline-block;width: auto;font-weight: bold"></span> 元。-->
                <!--</div>-->
                <div class="cal_btn">
                    <div id="reset"  style="float: left;">重置</div>
                    <div  id="submit" style="float: right;">计算收益</div>
                </div>
            </form>

        </div>
    </div>
</div>

<!--    <div class="calculator common">-->
<!--        计算器版块-->
<!--    </div>-->
<!--收益计算器结束-->

<!--适用投资者开始-->
<div class="char common" style="margin-top: -3px">
    <div class="common_h">
        <img src="../../public/image/guideline/char_img.png">
        <div class="char_con">
            <div class="char_con_con m_r">
                <div class="char_con_con_top char_1">
                    <span>金羊</span>
                    <div class="char_2_a">
                        <div class="char_2_a_c"></div>
                        <span class="char_2_a_c1"></span>
                        <span class="char_2_a_c2"></span>
                        <span class="char_2_a_c3"></span>
                    </div>
                    <div class="char_2_e"></div>
                </div>
                <div class="char_con_con_bottom m_10">
                    <span>定期取</span>
                    <p class="m_5">适合短期投资,稳定<span>高收益</span></p>
                </div>
            </div>
            <div class="char_con_con m_r">
                <div class="char_con_con_top char_2">
                    <span>金牛</span>
                    <div class="char_2_c"></div>
                    <div class="char_2_e"></div>
                </div>
                <div class="char_con_con_bottom m_10">
                    <span>涨赚钱</span>
                    <p class="m_5">适合股市<span>看涨</span>的投资者</p>
                </div>
            </div>
            <div class="char_con_con m_r">
                <div class="char_con_con_top char_3">
                    <span>金熊</span>
                    <div class="char_2_c"></div>
                    <div class="char_2_e"></div>
                </div>
                <div class="char_con_con_bottom  m_10">
                    <span>跌赚钱</span>
                    <p class="m_5">适合股市<span>看跌</span>的投资者</p>
                </div>
            </div>
            <div class="char_con_con">
                <div class="char_con_con_top char_4">
                    <span>金鲨</span>
                    <div class="char_2_c"></div>
                    <div class="char_2_e"></div>
                </div>
                <div class="char_con_con_bottom m_10">
                    <span>涨跌都赚</span>
                    <p class="m_5">适合股市<span>看波动</span>的投资者</p>
                </div>
            </div>
        </div>
        <!-- 产品特点内容结束 -->
    </div>
</div>
<!--适用投资者结束-->

<!-- 投资效果开始 -->
<div class="effect common">
    <div class="common_h">
        <img src="../../public/image/invest/effect_title.png">
        <!-- 业绩内容开始 -->
        <ul class="effect_con">
            <li class="effect_con_com m_r e_1">
                <p>累计参与人次</p>
                <p><span>约
                        <?php foreach($before_product_list as $key=>$val){
                            $sum += $val['total_investment'];
                        }?>
                        <?php echo ceil(($sum+10000000)/30000);?></span>人</p>
                <!--                    <p><span>1.2万人</span></p>-->
            </li>
            <li class="effect_con_com m_r e_2">
                <p>用户累计收益</p>
                <p><span>约<?php echo $proceeds;?>万元</span></p>

                <!--                    <p>约<span>0.08亿元</span></p>-->
            </li>
            <li class="effect_con_com m_r e_3">
                <p>总投资金额</p>
                <p><span>约
                        <?php 
                             echo $total;
                        ?>千万元</span></p>
                <!--                    <p><span>约1.08亿元</span></p>-->
            </li>
            <li class="effect_con_com e_4">
                <p>延时支付或违约</p>
                <p><span><?php echo $system_info['yanchi_weiyue'];?></span></p>
                <!--                    <p><span>0次</span></p>-->
            </li>
        </ul>
        <!-- 业绩内容结束 -->
    </div>
</div>
<!-- 投资效果结束 -->

<!-- 往期产品开始 -->
<div class="period common">
    <div class="common_h">
        <img src="../../public/image/invest/period_title.png">
        <!-- 产品列表 -->
        <div class="period_con">
            <table>
                <tr>
                    <th width="18%">产品名称</th>
                    <th width="10%">成立日</th>
                    <th width="10%">期限(月)</th>
                    <th width="10%">销售金额（元)</th>
                    <th width="11%">发售金额(元)</th>
                    <th width="7%">进度</th>
                    <th width="13%">固定年化收益(%)</th>
                    <th width="10%">实际浮动年化收益率(%)</th>                    
                </tr>
                <?php foreach($before_product_list as $key=>$val){?>
                    <tr>
                        <td class="p_b" style="text-align:left;"><span class="p_s2"></span><?php echo $val['product_title'];?></td>
                        <td class="p_b"><?php echo date('Y-m-d',$val['start_time']);?></td>
                        <td class="p_b"><?php echo $val['investment_period'];?></td>
                        <td class="p_b"><?php echo $val['have_purchased'];?></td>
                        <td class="p_b"><?php echo $val['total_investment']?></td>
                        <td class="p_b"><?php if ($val['jin_du'] < time()) {?> 已结束 <?php } if($val['jin_du'] > time()) {?>计息中 <?php } ?></td>
                        <td class="p_b"><?php if ($val['product_type']=='mouthup') {?> <?php echo $val['rate'] ?>+0.5/月 <?php } else {?> <?php echo $val['rate'] ?> <?php }?></td>
                        <td class="p_b"><?php if ($val['product_type']=='mouthup') {?> - <?php } else {?>待揭晓 <?php } ?></td>                       
                    </tr>
                <?php } ?>   
            </table>
        </div>
        <!-- 产品列表结束 -->
    </div>
</div>
<!-- 往期产品结束 -->

<!--常见问题开始-->
<div class="questions">
    <div class="questions_box">
        <img src="../../public/image/invest/questions_title.png">
        <div class="questions_list">
            <div class="container">
                <div id="ca-container" class="ca-container">
                    <div class="ca-wrapper">
                        <div class="ca-item ca-item-1">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>智能投的模式</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投的商业模式是在线上对接有投资理财需求的投资人，为投资人提供固定收益加挂钩股票指数的超额收益……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>智能投的模式</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>智能投的商业模式是在线上对接有投资理财需求的投资人，为投资人提供固定收益加挂钩股票指数的超额收益。</p>
                                        <p>在固定收益方向，线下与全国领先的小贷机构达成合作，小贷机构将承担对借款人的实地考察、征信、初步信用评估及贷后管理等工作。合作的小贷机构将筛选出优质的借款人推荐给智能投。</p>
                                        <p>通过第三方投资顾问为投资者获得超额收益。我们对接优秀的拥有多年投资经验的量化算法投资顾问，由投资顾问进行自动算法交易，获得挂钩指数的超额收益，智能投平台为投顾进行全方位风险控制，确保资金和收益安全。同时，由国内领先券商为跟踪收益与约定收益进行差额补偿，确保投资者获得约定超额收益。。</p>
                                        <p>智能投作为一家互联网金融投资理财平台，仅提供信息服务，不介入交易环节，是纯信息中介平台。</p>

                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="ca-item ca-item-2">-->
                        <!--                            <div class="ca-item-main">-->
                        <!--                                <div class="ca-icon"></div>-->
                        <!--                                <h3>智能投是合法的运营网站吗?</h3>-->
                        <!--                                <h4>-->
                        <!--                                    <!--<span class="ca-quote">&ldquo;</span>-->
                        <!--                                    <span>是的，您可以点击查看更多以查看相关认证。-->
                        <!---->
                        <!--                                    </span>-->
                        <!--                                </h4>-->
                        <!--                                <a href="#" class="ca-more">查看更多</a>-->
                        <!--                            </div>-->
                        <!--                            <div class="ca-content-wrapper">-->
                        <!--                                <div class="ca-content">-->
                        <!--                                    <h6>智能投是合法的运营网站吗?</h6>-->
                        <!--                                    <a href="#" class="ca-close">收起</a>-->
                        <!--                                    <div class="ca-content-text">-->
                        <!--                                        <p class="prove"><a href="#">[信用认证]</a></p>-->
                        <!--                                        <p class="prove"><a href="#">[可信网站认证]</a></p>-->
                        <!--                                        <p class="prove"><a href="#">[诚信网站认证]</a></p>-->
                        <!--                                        <p class="prove"><a href="#">[网上交易保障中心认证]</a></p>-->
                        <!--                                        <p class="prove"><a href="#">[ICP证查询]</a></p>-->
                        <!--                                        <p class="prove"><a href="#">[工商企业信用信息查询：北京企业信用信息网]</a></p>-->
                        <!--                                    </div>-->
                        <!--                                    <!--<ul>-->
                        <!--                                    <!--<li><a href="#">Read more</a></li>-->
                        <!--                                    <!--<li><a href="#">Share this</a></li>-->
                        <!--                                    <!--<li><a href="#">Become a member</a></li>-->
                        <!--                                    <!--<li><a href="#">Donate</a></li>-->
                        <!--                                    <!--</ul>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="ca-item ca-item-2">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>智能投的股东背景</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投在2014年10月完成首轮天使投资，获得多位天使投资人千万人民币级别的融资。这些天使投资人包括：央企投资公司董事长,……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>智能投的股东背景</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>智能投在2014年10月完成首轮天使投资，获得多位天使投资人千万人民币级别的融资。这些天使投资人包括：央企投资公司董事长；对冲基金董事长；大型投资集团高管；大型产业集团董事长；基金公司总经理；期货公司高管。</p>
                                        <p>天使投资人在金融行业内积累了极其丰富的经验，他们的投资是对智能投自身实力和安全模式的认可，也使得智能投在投资能力，风控体系，产品研发，技术投入和安全保障等方面达到行业顶尖水平。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="ca-item ca-item-3">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>智能投有资金监管账户么？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投与招商银行达成合作关系，招商银行为智能投开设了第三方专用资金账户，易宝支付的专用资金账户可以对于资金流出进行管理……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>智能投有资金监管账户么？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>智能投与招商银行达成合作关系，招商银行为智能投开设了第三方专用资金账户，易宝支付的专用资金账户可以对于资金流出进行管理，由招商银行对账户资金进行落地审查，确保投资人的资金安全。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="ca-item ca-item-4">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>在智能投投资是否受法律保护？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>投资人在智能投的投资理财受到法律保护，智能投提供的是居间服务……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>在智能投投资是否受法律保护？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>投资人在智能投的投资理财受到法律保护，智能投提供的是居间服务，通俗的说，智能投提供的是平台服务，法律根据有《合同法》和《关于人民法院审理借贷案件的若干意见》。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="ca-item ca-item-5">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>如何保证我们的资金安全？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>招商银行保管：智能投与招商银行达成合作关系，招商银行为智能投开设了第三方专用资金账户，易宝支付的专用资金账户可以对于资金流出进行管理……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>如何保证我们的资金安全？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>a)   招商银行保管：智能投与招商银行达成合作关系，招商银行为智能投开设了第三方专用资金账户，易宝支付的专用资金账户可以对于资金流出进行管理，由招商银行对账户资金进行落地审查，确保投资人的资金安全。</p>
                                        <p>b)	数据安全：三层防火墙隔离系统的访问层、应用层和数据集群层；有效的入侵防范及容灾备份，确保交易数据安全；</p>
                                        <p>c)	隐私安全：智能投在任何情况下都绝不会出售、出租以及以任何其他形式泄露您的信息。您的信息按照《智能投投资咨询协议》中的规定被严格保护。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="ca-item ca-item-6">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>小贷机构合作前如何筛查？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投通过与多家小贷机构的对接，逐步形成一套定性+定量的小额贷款机构评价体系……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>小贷机构合作前如何筛查？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text judge">
                                        <p>智能投通过与多家小贷机构的对接，逐步形成一套定性+定量的小额贷款机构评价体系：</p>
                                        <p>定性评价包括：</p>
                                        <p>外部环境（区域经济、监管、政策支持）；</p>
                                        <p>公司治理（股东背景、管理团队）；</p>
                                        <p>业务模式（是否小微、风险是否充分分散）；</p>
                                        <p>内部管理（流程、内控、IT），管理层访谈 ；</p>
                                        <p>业务发展（发展定位、信贷技术、融资能力）；</p>
                                        <p>借款客户随机抽检。</p>
                                        <p>定量评价包括：</p>
                                        <p>查看小额贷款机构过去3年经审计的财务报表以及向地方金融办提交的数据报告；
                                            重点关注小额贷款机构过去3年外部融资杠杆比例的变化，超过90天逾期数据及坏账数据的变化，以及贷款放款额及在库余额的变化；
                                        </p>
                                        <p>了解小额贷款机构过去3年盈利能力及融资成本的变化，包括利润率，净资产收益率，总资产收益率等。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="ca-item ca-item-7">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>智能投如何审核借款项目？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>小额贷款机构与智能投对每个借款项目经过七重严格审核……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>智能投如何审核借款项目？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>小额贷款机构与智能投对每个借款项目经过七重严格审核。</p>
                                        <p>1)	小额贷款机构针对每笔借款，进行线下实地考察，对借款人信息进行交叉验证以及真实性验证；</p>
                                        <p>2)	审核材料，有包括借款人银行流水、征信报告、财产证明、房产证明、工作证明等15种必备材料的审核；</p>
                                        <p>3)	借款人及联系人背景的详尽调查。借款人需要提供3个联系人，均由小贷公司和借款人电话核实；</p>
                                        <p>4)	借款人还款能力评估。通过上述三项审核（尤其是第1和第2项）还原借款人真实的月净现金流。</p>
                                        <p>通过上述四重审核后，该借款人被推荐到智能投，智能投风控团队根据自身的风控模型对借款人进行二次审核。</p>
                                        <p>1)	再次审核借款资料，以保证合作机构提供的借款真实可信。确认其身份、联系人、还款能力、根据客户的身份信息检索反欺诈数据库及法院被执行人记录；</p>
                                        <p>2)	信用评分。使用智能投自主开发的信用评分卡及决策引擎对借款人进行评分，考核借款人四大类14项信用信息（包括个人信息、征信信息、财产信息、工作信息）保证每笔借款都是优质的；</p>
                                        <p>3)	黑名单管理：借款人黑名单动态数据管理。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="ca-item ca-item-8">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>智能投平台上线后有逾期吗？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投上线至今，平台到目前没有一笔逾期情况，投资人在还款当日都拿到对应的本金和收益……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>智能投平台上线后有逾期吗？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>智能投上线至今，平台到目前没有一笔逾期情况，投资人在还款当日当天都拿到对应的本金和收益。</p>
                                        <p>在与智能投合作的小贷公司推荐的项目逾期还款率低于1%，这在所有网贷平台中是较低的，这部分小贷根据本息担保条款已经进行及时代偿，确保投资人资金的安全性。</p>
                                        <p>对超额收益进行偿付担保的券商具有极高的信用等级，会根据投资顾问量化跟踪效果进行及时差额补偿，确保投资人及时获得超额收益部分。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>

                        </div>
                        <div class="ca-item ca-item-9">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>本金和收益是否可以得到保障？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投所有产品中包含的投资项目均是合作小贷机构推荐的本息安全有保障的项目，充分保障投资人本金及投资收益……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>本金和收益是否可以得到保障？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>智能投所有产品中包含的投资项目均是合作小贷机构推荐的本息安全有保障的项目，充分保障投资人本金及投资收益。</p>
                                        <p>对于超额收益部分，一方面由精选三方投顾进行指数跟踪实现，对未能实现的和约定收益的差额部分，由合作知名证券公司对投资者全额补偿。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>

                        </div>
                        <div class="ca-item ca-item-10">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>借款人逾期了怎么办？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>若借款人逾期，则推荐借款项目的小贷机构会在2个工作日内代偿该期本金、收益和罚息……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>借款人逾期了怎么办？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>若借款人逾期，则推荐借款项目的小贷机构会在2个工作日内代偿该期本金、收益和罚息。</p>
                                        <p>若三方精选投顾逾期，则由资金监管券商会在2个工作日内代偿合同约定的超额投资收益。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>

                        </div>
                        <div class="ca-item ca-item-11">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>
                                <h3>智能投如何保护投资人信息安全性？</h3>
                                <h4>
                                    <!--<span class="ca-quote">&ldquo;</span>-->
                                    <span>智能投将保障投资人的个人隐私及财务信息视为重中之重。投资人的个人隐私及财务信息将被严格保密……</span>
                                </h4>
                                <a href="#" class="ca-more">查看更多</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6>智能投如何保护投资人信息安全性？</h6>
                                    <a href="#" class="ca-close">收起</a>
                                    <div class="ca-content-text">
                                        <p>智能投将保障投资人的个人隐私及财务信息视为重中之重。投资人的个人隐私及财务信息将被严格保密。智能投的数据系统都是由有过大型IT、银行系统开发经验的工程师研发完成，智能投所有的隐私信息都经过MD5加密处理，所有的数据交换均由SGC256位保密处理，并且设置严格权限，防止任何人包括公司员工获取用户信息。再配合完善且有法律效力的公司内控管理制度，确保投资人的信息安全。</p>
                                    </div>
                                    <!--<ul>-->
                                    <!--<li><a href="#">Read more</a></li>-->
                                    <!--<li><a href="#">Share this</a></li>-->
                                    <!--<li><a href="#">Become a member</a></li>-->
                                    <!--<li><a href="#">Donate</a></li>-->
                                    <!--</ul>-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--常见问题结束-->

<!--    &lt;!&ndash; 土豪排行榜开始 &ndash;&gt;-->
<!--    <div class="ranking common">-->
<!--    <div class="common_h">-->
<!--    <p class="common_t w">土豪排行榜</p>-->
<!--    &lt;!&ndash; 排行榜开始 &ndash;&gt;-->
<!--    <div class="ranking_con">-->
<!--    <table cellpadding="0" cellspacing="0">-->
<!--    <tr>-->
<!--    <th width="25%">排名</th>-->
<!--    <th width="20%">用户</th>-->
<!--    <th width="35%">累计投资金额</th>-->
<!--    <th width="20%">累计收益</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ( $rank_list as $key=>$val ) {?>
<!--    <tr class="r_w r_q">-->
<!--    <td>--><?php //echo $key+1;?><!--</td>-->
<!--    <td>--><?php //echo substr($val['user_name'],0,4).'***';?><!--</td>-->
<!--    <td>￥--><?php //echo money_formatByStr($val['consumed']);?><!--</td>-->
<!--    &lt;!&ndash; 如果不变 &ndash;&gt;-->
<!--    &lt;!&ndash; 如果上升 &ndash;&gt;-->
<!--    --><?php //if ($key % 2 == 0){?>
<!--    <td class="t_b"><span style="color:red">↑</span></td>-->
<!--    --><?php //}elseif ($key % 3 == 0){?>
<!--    <td class="t_b"><span style="color:green">↓</span></td>-->
<!--    --><?php //}else { ?>
<!--    <td class="t_b">—</td>-->
<!--    --><?php //} ?>
<!--    &lt;!&ndash; 如果下降 &ndash;&gt;-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--    </table>-->
<!--    </div>-->
<!--    &lt;!&ndash; 排行榜结束 &ndash;&gt;-->
<!--    </div>-->
<!--    </div>-->
<!--    &lt;!&ndash; 土豪排行榜结束 &ndash;&gt;-->
<!--EOF content -->
<?php include "inc/footer.php";?>
<script type="text/javascript" src="../../public/js/common/highcharts.js?t=<?php echo time();?>"></script>
<script type="text/javascript" src="../../public/js/calculator.js"></script>
<script type="text/javascript" src="../../public/js/showBo.js"></script><!--弹出层-->
<script type="text/javascript" src="../../public/js/portal.js"></script>
<script src="/public/js/jquery-1.6.4.min.js?t=<?php echo time();?>"></script>
<script type="text/javascript" src="../../public/js/jquery.easing.1.3.js?t=<?php echo time();?>"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="../../public/js/jquery.mousewheel.js?t=<?php echo time();?>"></script>
<script type="text/javascript" src="../../public/js/jquery.contentcarousel.js?t=<?php echo time();?>"></script>

<script type="text/javascript">
    $('#ca-container').contentcarousel();
</script>