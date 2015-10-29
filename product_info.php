<?php include "inc/header.php";?>
<?php include "inc/user_info.php";?>
<?php include "inc/menu.php";?>
<!--content -->
<link rel="stylesheet" href="/public/style/common/util.css?t=<?php echo time();?>"/>
<link rel="stylesheet" href="/public/style/common/pagination.css?t=<?php echo time();?>" />
<link rel="stylesheet" href="/public/style/invest.css?t=<?php echo time();?>"/>
<link rel="stylesheet" href="/public/style/coupon.css?t=<?php echo time();?>"/>


<!-- 把加密后的产品id传到invest.js中 -->
<input type="hidden" name="pid" id="pid" value="<?php echo checkBrush($product_info['id'],'','test',7200);?>">


<!--选择优惠券-->
<div id="dia-cou" class="dia-cou">
    <div class="dia-con-head">
        <h2>可选红包<span style="font-weight:normal; color:#f00; margin-left:5px;">（每次投资只限用一张红包）</span></h2>
        <a href="javascript:;" id="cou_close">×</a>
    </div>
    <div id="dia-con-c">
        <div class="cou_data"></div>
    </div>
    <div class="dia-con-foot">
        <div class="dia-con-foot-action">
            <a id="cou_jump" href="javascript:;" class="cou_sub">取消</a>
            <a id="cou_sure" href="javascript:;" class="cou_sub">确认</a>
        </div>
    </div>
</div>

<div class="ui-widget-overlay"></div>
<!--选择优惠券结束-->
<div class="invest">
<div class="invest-content">
<div class="invest-title">
    <a href="/product" class="toback"><i class="icons arrow-gray-dotl"></i>返回</a>
    <h2>产品详情</h2>
    <div class="login-tip">
        <!-- 如果还没登录 显示这里
        <b>您尚未登录</b>  -->
        可用余额 <span>￥<?php echo money_formatByStr($user_info['user_money'],0);?></span>
        <a href="/user/incharge" class="icons"></a>
    </div>
    <div class="youhui-tip">
        <!-- 如果还没登录 显示这里
        <b>您尚未登录</b>  -->
        红包余额 <span>￥<?php echo money_formatByStr($newMon,0);?> </span>
        <a href="/user/user_coupon">去查看</a>&nbsp;&nbsp;（每次投资只限用一张红包）
    </div>
</div>
<div class="invest-top">
    <div class="profit-plan">
    <p class="head" id="product_title"><?php echo $product_info['product_title'];?></p>
        <!-- 利率的显示   start-->
        <div class="profit">
            <dl class="f1">
                <dt>总额度</dt>
                <dd>
                    <span>￥</span>
                    <em><?php echo money_formatByStr($product_info['total_investment'],0);?></em>
                </dd>
            </dl>
            <dl class="f2">
                <dt><?php if ( $product_info['product_type'] == 'mouthup'){?>单月递增年化收益率<a href="#" class="icons yhelp ToolTips ToolTipCol"  data-container="body" data-toggle="popover" data-placement="top" data-text="递增收益,6~11.5%,每月递增0.5%<br/><span style='color:#fe6e00;'>3个月累计年化收益7%；<br/>6个月累计年化收益8.5%；<br/>12个月累计年化收益11.5%。</span>">帮助</a><?php } else {?>年化收益率<a href="#" class="icons yhelp ToolTips ToolTipCol"  data-container="body" data-toggle="popover" data-placement="top" data-text="投资智能投可获得的收益率，以年度百分比表示">帮助</a><?php } ?>
                </dt>
                <dd>
<?php if ( $product_info['product_type'] == 'mouthup'){?>
                <em class="persents">6~11.5</em>
<?php } else {?>		
                <em class="persent"><?php echo $product_info['rate'];?><?php if($product_info['mag']!=""){?><?php }else{?>~<?php echo $product_info['rate'] +$product_info['fluctuate_rate'];?><?php }?></em>

<?php } ?>
                    <em class="persent-tag">%</em>
                </dd>
            </dl>
            <dl>
                <dt>投资期限</dt>
                <div class="time_tip" style="position: absolute;left: 76px;top: 1px;">
                    <?php if ( $product_info['product_type'] == 'mouthup'){?> <a href="#" class="icons yhelp ToolTips ToolTipCol"  data-container="body" data-toggle="popover" data-placement="top" data-text="本产品默认投资期限为12个月，您可以在每个月的开放日选择退出。">帮助</a><?php } ?>
                </div>
                <dd><em id="touziqixian_id"><?php echo $product_info['investment_period'];?></em>个月</dd>
            </dl>
        </div>
        <!--利率的显示  end-->
        <p class="working-day"></p>
        <div class="expl">
            <ul>
                <li>
                    <span style="float: left;margin-left: 15px;margin-top: -18px;">剩余金额</span>
                    <dd style="font-size: 20px;color: #fe6e00;font-weight: 600;float: right;margin-right: 25px;"><?php if( $product_info['buy_end_time'] <=time() ){echo 0;}else{echo money_formatByStr($product_info['total_investment'] - $product_info['have_purchased'],0);} ?></dd>
                    <span style="font-size: 20px;color:#fe6e00;float: right; ">￥</span>

                </li>
                <li class="ratio-per">
                    <div class="per" data-rel="0">
                    <div style="width: <?php echo  $product_info['buy_end_time'] > time() ?  $product_info['processing'] : 100;?>%;"></div>
                    </div>
                    <strong class="ratio" style="position: absolute;bottom: 113px;left:540px;width: 40px;"><?php echo $product_info['buy_end_time'] > time() ? $product_info['processing'] : 100;?>%</strong>
                </li>
                <li>发布时间：<?php echo date("Y-m-d",$product_info['create_time']);?></li>
                <li><span class="vouch"><i class="icons ver-green-down"></i>100%本息担保<a href="#" class="icons yhelp ToolTips ToolTipCol" style="left: 120px;top:4px;"  data-container="body" data-toggle="popover" data-placement="top" data-text="100%本金及最低收益保障：<br/>第一重保障：债务人到期还款；<br/>第二重保障：精选坏账率低的合作机构，合作机构风险准备金逾期垫付。风险准备金账户资金完全能覆盖逾期产生的坏账；<br/>第三重保障：智能投为用户开立专属风险准备金账户。
">帮助</a></span></li>
            </ul>
        </div>
    </div>
    <div class="invest-sum-plan">
    <p class="head">投资金额</p>
    <?php if($product_info['buy_end_time'] <=time() || $product_info['total_investment'] == $product_info['have_purchased'] ){?>
            <div class="doned" style="display:block;height: 240px;
              line-height: 240px;text-align: center;  color: #1bb363;
                font-size: 14px;
                  font-weight: 700;
                    position: relative;
                      padding-left: 18px;">投资已经结束</div>
    <?php }elseif($product_info['buy_start_time'] >time()){ ?>
            <div class="doned" style="display:block;height: 240px;
              line-height: 240px;text-align: center;  color: #1bb363;
                font-size: 14px;
                  font-weight: 700;
                    position: relative;
                      padding-left: 18px;">待发售</div>
    <?php }else{ ?>
        <span id="money_tip" style="color:red;position: absolute;margin-left : 30px;"></span>
        <div class="input-sum">
        <input type="text" maxlength="10" class="input" placeholder="请输入 <?php echo $product_info['min_investment_amount'];?> 的整数倍" id="investInput"/> 元
        </div>

        <p class="exp">预期收益 ¥ <em>0.00</em></p>
        <div class="var-code">
            <span class="var_code_png"></span>
            <input type="text" id="authCode" name="authCode" class="input" maxlength="4" placeholder="验证码">
            <img id="verifycode" src="/codeCenter/buyCode" alt="验证码" title="验证码" class="verifycode">
            <a href="#" class="refreshCode r3"><i class="icons refresh-todo"></i><p>刷新</p></a>
        </div>
        <div class="agreement">
            <div class="yCheckbox">
                <span id="agreeContract" class="ico selected"></span>
            </div>
            我同意<a href="/content/contract/<?php echo $product_info['product_contract']."?i={$product_info['id']}";?>" style="color:#fe6e00;">《<?php echo $product_info['product_title'];?>协议》</a>
        </div>
        <div class="error">请输入验证码</div>
        <a href="#" class="gbtn" id="yxtInvestBtn" >我要投资</a>
        <div style="display: block"  class="cou_use_num">
            <p style="height: 20px" for="mouth-select" class="select-label">
                预计开始计息时间：
                <b style="color: #fc8936;font-weight: 600;" id="jixi">
                   <?php
                       echo date('Y-m-d',$product_info['start_time']);
                   ?>
                </b></p>
            <p for="mouth-select" class="select-label">
                <!--<span id="touzi-fanxi"></span>-->
                <?php
                    if($product_info['product_type'] == 'mouthup'){
                        echo "预计首次返息时间：";
                    }else if($product_info['mag']!=""){
						echo "首次利息到账时间：";
						}
                    else{
                        echo "预计收益到账时间：" ;
                    }
                ?>

                <b style="color: #fc8936;font-weight: 600;">
                   <?php
                   if( $product_info['product_type'] == 'mouthup'){
                       $theweek = date('w',strtotime("+1 month".date('Y-m-d',$product_info['start_time']) ));
                       $theday = date('Y-m-d',strtotime("+1 month".date('Y-m-d',$product_info['start_time']) ));
                       if($theweek==0){
                           echo(strtotime("+1 day".$theday));
                       }
                       else if($theweek==6){
                           echo(strtotime("+2 day".$theday));
                       }
                       else{
                           echo($theday);
                       }
//                       echo date('Y-m-d',strtotime("+1 month".date('Y-m-d',$product_info['start_time']) ));
//                    strtotime('+1 month 2015-2-28')
                   }
                   else{
//                    echo date('Y-m-d',strtotime("+1 month" ,date('Y-m-d',$product_info['start_time']) ));
                       $theweek = date('w',strtotime("+".$product_info['investment_period']. "month".date('Y-m-d',$product_info['start_time'])));
                       $theday= date('Y-m-d',strtotime("+".$product_info['investment_period']. "month".date('Y-m-d',$product_info['start_time'])));
                       if($theweek==0){
                           echo(date('Y-m-d',strtotime("+1 day".$theday)));
                       }
                       else if($theweek==6){
                           echo(date('Y-m-d',strtotime("+2 day".$theday)));
                       }
                       else{
                           echo(date('Y-m-d',strtotime($theday)));
                       }
//                       echo date('Y-m-d',strtotime("+".$product_info['investment_period']. "month".date('Y-m-d',$product_info['start_time']))) ;
                   }
                   ?>
                </b>
                </p>
        </div>
    <?php } ?>
    </div>
</div>

<div class="jTabs" id="tabs">
    <ul id="investTabs" class="nav-tabs" style="left:30px">
        <li class="jTab"><a href="#announce">收益介绍</a></li>
        <?php if($product_info['mag']!=""){
        }else{echo '<li class="jTab" id="hushen_tab"><a href="#announce" id="hushen">沪深300</a></li>';};?>

        <li class="jTab"><a href="#product">产品详情</a></li>
        <li class="jTab"><a href="#record">加入记录<span class="r5" id="investorCount">0</span></a></li>
    </ul>
</div>
<div class="model-auto tab-content" >
    <div class="jPanel tab-pane active" id="announce" >
        <div class="model-box">
             <?php if($product_info['mag']!=""){?>
				 <div class="asked-items1"><img style="width:920px; margin-left:10px; margin-top:40px;" src="/public/image/jinyang-img.png"/></div>
        <?php }else{?><div id="charts"></div><?php }?>
            <dl class="asked-items" style="margin-top: 20px;">
            <?php echo $product_info['product_publish_desc'];?>
            <br><br><br>
            <?php echo $product_info['product_qa'];?>
            </dl>
            <dl class="model-xtxt1" style="position:absolute; top:400px;right:155px;display: none;">涨跌幅度（‰）</dl>
            <dl class="model-xtxt3" style="position:absolute; top:400px;right:155px;display: none">涨跌幅度（%）</dl>
            <dl class="model-xtxt2" style="position:absolute; top:400px;right:155px;display: none">月份</dl>
        </div>
    </div>
    <?php if($product_info['mag']!=""){?>
    <?php } else {?>
        <div class="jPanel tab-pane" id="hushen">
        <div class="hushen_right">
            <h1 style="color: #4191F0;">沪深300指数-走势图</h1>
            <img src="/public/image/invest/hushen300.png" style="float: left;width: 450px;margin-top: 10px;">
        </div>
        <div class="hushen_box">
            <p class="hushen_txt"><?php $thistime = date("Y年m月d日");  $thisday = date("Y-m-d",strtotime("-1 day"));echo date("Y年m月d日",strtotime("-".$product_info['investment_period']."month".$thisday)) ?>，沪深300指数为：<span id="zhishu1" ><?php if($product_info['investment_period']==1){echo sprintf("%.2f", $hs_lmonth);}elseif($product_info['investment_period']==3){echo sprintf("%.2f", $hs_l3month);}  else{echo sprintf("%.2f", $hs_l6month);}?></span></p>
            <p class="hushen_txt " id="spec_text"  ><?php echo date("Y年m月d日",strtotime("-1 day")) ?>，沪深300指数为：<span id="zhishu2"  ><?php echo substr($hs_today,0,-2) ?></span></p>
            <p class="hushen_txt">该期<span class="hushen_type" style="color: #FF6F1B"></span>产品的预期年化收益率约为：<span style="color: #FF6F1B"><span id="yuqilv"></span></span>%</p>
            <p class="hushen_txt">如果<?php echo $product_info['investment_period'] ?>个月前您购买了<span id="touzi" style="color: #FF6F1B">100,000</span>元该产品，</p>
            <p style="margin-top:0px;">目前将获得收益约：<span style="color: #FF6F1B" id="shouyi"></span>元</p>
        </div>
    </div>
    <?php }?>

    <div class="jPanel tab-pane" id="product">
        <?php echo $product_info['product_info'];?>
    </div>
    <div class="jPanel tab-pane" id="record">
        <div class="model-box rec-plan-items">
            <ul class="items title">
                <li>投资人</li>
                <li>加入金额(￥)</li>
                <li>加入时间</li>
                <li>状态</li>
            </ul>
            <div id="invest"></div>
            <div id="pagination" class="pagination"></div>
        </div>
    </div>

</div>
</div>
</div>
<script id="template" type="x-tmpl-mustache">
 <ul class="items">
    <li>{{ user_name }}</li>
    <li>{{ buy_money }}</li>
    <li>{{ create_time }}</li>
    <li>{{ state }}</li>
 </ul>
</script>

	<div id="Prompt" class="dialog-main" style="width: 400px; left: 474.5px; top: 389px; z-index: 9999; display: none;"><div class="dialog-head"><h2>提示</h2></div><div id="dialogCont"><div style="min-height: 100px;position:relative;height:60px;line-height:20px;text-align:left;padding:1px 30px 20px 120px; overflow:hidden"><p id="cont" style="padding-top:33px;display:inline-block;color:#475058">投资成功！</p><i class="icons success-green60" id="success-green60" style="position:absolute; left:50px; top:50%; margin-top:-30px"></i></div><div class="dialog-foot"><div class="bank-action"><a href="javascript:;" class="radius3 bank-bind verifyModal" id="confirm"><i class="icons cm-white"></i>确认</a></div></div></div></div>

<div style="display:none;">
<input type="hidden" value="<?php echo $product_info['id']?>" id="hide_product_id"/>
<input type="hidden" value="<?php echo $product_info['rate']?>" id="hide_product_rate"/>
<input type="hidden" value="<?php echo $product_info['fluctuate_rate']?>" id="hide_product_frate"/>
<input type="hidden" value="<?php echo $product_info['investment_period']?>" id="hide_product_count"/>
<input type="hidden" value="<?php echo $product_info['max_investment_amount']?>" id="hide_product_max"/>
<input type="hidden" value="<?php echo $product_info['min_investment_amount']?>" id="hide_product_min"/>
<input type="hidden" value="<?php echo $product_info['product_type']?>" id="product_type"/>
<input type="hidden" value="<?php echo $product_info['total_investment'] - $product_info['have_purchased'];?>" id="have_invest"/>
</div>
 
<script type="text/javascript" >
(function(){
		$("#confirm").on("click",function(){
		window.location.href = "/user/investlist"
	})
})()
</script>
<!--EOF content -->

<?php include "inc/footer.php";?>
<script type="text/javascript" src="/public/js/common/utils.js"></script>
<script type="text/javascript" src="/public/js/common/mustache.min.js"></script>
<script type="text/javascript" src="/public/js/common/highcharts.js"></script>
<script type="text/javascript" src="/public/js/common/jquery.pagination.js"></script>
<script type="text/javascript" src="/public/js/invest.js?t=<?php echo time();?>"></script>


