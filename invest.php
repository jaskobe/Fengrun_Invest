<link rel="stylesheet" href="/public/smart/css/results.css?t=<?php echo time(); ?>" type="text/css" />

		<table class="rper_con_table">
            <tr>
                <th width="21%">资产类别</th>
                <th width="35%">基金选择(代码)</th>
                <th width="25%" class="rper_con_th">权重分配</th>
                <th width="19%" class="rper_con_th1">分配额度(元)</th>
            </tr>
            <tr>
                <td><i class="i1"></i>中国大盘股</td>
                <td class="rper_con_cx">嘉实沪深300ETF（<a target="_blank" href="http://www.jsfund.cn/Services/cn/jsp/product/basic.jsp?SiteID=1&FundCode=159919">159919</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['hs'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g1"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['hs'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i2"></i>中国中小盘股</td>
                <td class="rper_con_cx">嘉实中证500ETF（<a target="_blank" href="http://www.jsfund.cn/Services/cn/jsp/product/basic.jsp?SiteID=1&FundCode=159922">159922</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['zz'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g2"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['zz'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i3"></i>中国创业板</td>
                <td class="rper_con_cx">易方达创业板ETF（<a target="_blank" href="http://www.efunds.com.cn/html/menu/655.htm">159915</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['cyb'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g3"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['cyb'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i4"></i>中国短债</td>
                <td class="rper_con_cx">银华多利宝A（<a target="_blank" href="http://www.yhfund.com.cn/main/qxjj/000604/fndFacts.shtml">000604</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['hbjj'],3)*100,1); ?>%</span>
            <div class="rper_con_bg">
                        <div class="rper_con_b g4"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['hbjj'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i5"></i>中国国债</td>
                <td class="rper_con_cx">国泰国债ETF（<a target="_blank" href="http://www.gtfund.com/product/productlist/zhishu/511010/index.html">511010</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['zzgz'],3)*100,1); ?>%</span>
            <div class="rper_con_bg">
                        <div class="rper_con_b g5"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['zzgz'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i6"></i>中国企业债</td>
                <td class="rper_con_cx">博时上证企业债30ETF（<a target="_blank" href="http://www.bosera.com/fund/boshishangzhengqizhai.html">511210</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['zzqy'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g6"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['zzqy'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i7"></i>中国可转债</td>
                <td class="rper_con_cx">富国可转换债券基金（<a target="_blank" href="http://www.fullgoal.com.cn/funds/zhaiquan/100051/index.html">100051</a>）</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['zzzz'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g7"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['zzzz'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i8"></i>美国股票</td>
                <td class="rper_con_cx">先锋全美股票ETF(<a target="_blank" href="https://personal.vanguard.com/us/funds/snapshot?FundId=0970&FundIntExt=INT">VTI</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['mggp'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g8"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['mggp'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i9"></i>美国房地产</td>
                <td class="rper_con_cx">先锋美国REIT ETF(<a target="_blank" href="https://personal.vanguard.com/us/funds/snapshot?FundId=0986&FundIntExt=INT">VNQ</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['mgfdc'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g9"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['mgfdc'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i10"></i>发达除美国股票</td>
                <td class="rper_con_cx">先锋富时发达除美国股票ETF(<a target="_blank" href="https://personal.vanguard.com/us/funds/snapshot?FundId=0936&FundIntExt=INT">VEA</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['fdcmggp'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g10"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['fdcmggp'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i11"></i>新兴市场股票</td>
                <td class="rper_con_cx">先锋富时新兴股票ETF(<a target="_blank" href="https://personal.vanguard.com/us/funds/snapshot?FundId=0964&FundIntExt=INT">VWO</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['xxsc'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g11"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['xxsc'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i12"></i>美国国债</td>
                <td class="rper_con_cx">安硕美国国债ETF(<a target="_blank" href="http://www.ishares.com/us/products/239456/IEF">IEF</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['mggz'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g12"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['mggz'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i13"></i>美国企业债</td>
                <td class="rper_con_cx">安硕美国企业债ETF(<a target="_blank" href="http://www.ishares.com/us/products/239566/LQD">LQD</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['mgqy'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g13"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['mgqy'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i14"></i>发达除美国债券</td>
                <td class="rper_con_cx">SPDR巴克莱发达债券ETF(<a target="_blank" href="https://www.spdrs.com/product/fund.seam?ticker=BWX">BWX</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['fdcmgzq'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g14"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['fdcmgzq'],3))); ?>
                </td>
            </tr>
            <tr>
                <td><i class="i15"></i>新兴债券</td>
                <td class="rper_con_cx">安硕摩根大通新兴市场债券ETF(<a target="_blank" href="http://www.ishares.com/us/products/239572/EMB">EMB</a>)</td>
                <td class="rper_con_td">
                    <span><?php echo number_format(round($map[0]['xxzq'],3)*100,1); ?>%</span>
                    <div class="rper_con_bg">
                        <div class="rper_con_b g15"></div>
                    </div>
                </td>
                <td class="rper_con_ty">
                    <?php echo (($smart[0]['money']) * (round($map[0]['xxzq'],3))); ?>
                </td>
            </tr>
           <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
<script type="text/javascript" src="/public/smart/js/results_1.js?t=<?php echo time(); ?>"></script>
<script type="text/javascript" src="/public/smart/js/highcharts.js"></script>
<script>
    $(function () {
        $('.ratio_con_r_c').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '您的资产配比'
            },
            colors: [
                '#40b874',
                '#feaa00',
            ],
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            exporting: { enabled:false },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        color: '#000000',
                        connectorColor: '#000000',
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: '资产比例',
                data: [
                    ['权益',      <?php echo (100-$map[0]['gdsy']); ?>],
                    ['固定收益',    <?php echo $map[0]['gdsy']; ?>],
                ]
            }]
        });
    });
    $(function () {
        var ranges = [
                <?php
                    for($i=0; $i<=10; $i++){
                        if($i==0) echo '['.$smart[0]['money'].','.$smart[0]['money'].'],';
                        if($i==1) echo '['.ceil($smart[0]['money']*(1+$tzsy-1.64*$tzbz)).','.ceil($smart[0]['money']*(1+$tzsy+1.64*$tzbz)).'],';
                        if($i>1) echo '['.ceil($smart[0]['money']*pow(M_E,($tzsy*$i-1.64*$tzbz*sqrt($i)))).','.ceil($smart[0]['money']*pow(M_E,($tzsy*$i+1.64*$tzbz*sqrt($i)))).'],';
                    }
                ?>
            ],
            averages = [
                <?php
                    for($i=0; $i<=10; $i++){
                        if($i==0) echo '['.$smart[0]['money'].'],';
                        if($i==1) echo '['.ceil($smart[0]['money']*(1+$tzsy)).'],';
                        if($i>1) echo '['.ceil($smart[0]['money']*pow(M_E,($tzsy*$i))).'],';

                    }
                ?>

            ];


        $('.rset_con_pic_c').highcharts({

            title: {
                text: ''
            },

            xAxis: {
                categories: ['2015年','2016年','2017年','2018年','2019年','2020年','2021年','2022年','2023年','2024年','2025年','2026年','2027年','2028年','2029年','2030年','2031年','2032年','2033年','2034年']
            },

            yAxis: {
                title: {
                    text: ''
                }
            },
            exporting: { enabled:false },
            tooltip: {
                crosshairs: true,
                shared: true,
                valueSuffix: ''
            },

            legend: {
            },

            series: [{
                name: '资产预期均值',
                data: averages,
                zIndex: 0,
                marker: {
                    fillColor: 'white',
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[0]
                }
            }, {
                name: '90%可能性落在',
                data: ranges,
                type: 'arearange',
                lineWidth: 0.2,
                linkedTo: ':previous',
                color: Highcharts.getOptions().colors[0],
                fillOpacity: 0.3,
                zIndex: 0
            }]

        });

    });
</script>


