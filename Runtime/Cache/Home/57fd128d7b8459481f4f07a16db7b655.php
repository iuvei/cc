<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta content="target-densitydpi=320,width=750,user-scalable=no" name="viewport" />
    <meta content="no" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title>彩客娱乐</title>	
    <link href="/Public/Home/statics/web/css/css.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/statics/web/css/red.css" rel="stylesheet" type="text/css"><script src="/Public/Home/statics/web/js/jquery.1.8.2.min.js"></script><script src="/Public/Home/statics/web/js/style.js"></script>    <link href="/Public/Home/statics/web/css/swiper.min.css" rel="stylesheet" type="text/css">
    <!--<link href="/statics/web/css/css.css" rel="stylesheet" type="text/css">-->
    <!--<script src="/statics/web/js/jquery.1.8.2.min.js"></script>-->
    <!--<script type="text/javascript" src="/statics/web/js/yxMobileSlider.js"></script>-->
    <script type="text/javascript" src="/Public/Home/statics/web/js/swiper.jquery.min.js"></script>
    <!--<script src="/statics/web/js/style.js"></script>-->
    <script src="/Public/Home/statics/web/extend/layer/mobile/layer.js"></script>

    <style type="text/css">
        .header_wrap .headTop .xiazai {
            background-color: #d22727;
            position: absolute;
            right: 20px;
            width: 190px;
            height: 60px;
            overflow: hidden;
            top: 24px;
        }

        .headTop button {
            width: 190px;
            border-radius: 8px;
            float: right;
            height: 60px;
            font-size: 28px;
            margin-top: 10px;
            /* display: none; */
            line-height: 44px;
            position: absolute;
            top: -8px;
        }
        /*数字滚动插件的CSS可调整样式*/

        .mt-number-animate {
            font-family: '微软雅黑';
            line-height: 70px;
            height: 70px;
            /*设置数字显示高度*/
            ;
            font-size: 85px;
            /*设置数字大小*/
            overflow: hidden;
            display: inline-block;
            position: relative;
        }

        .mt-number-animate .mt-number-animate-dot {
            width: 15px;
            /*设置分割符宽度*/
            line-height: 40px;
            float: left;
            text-align: center;
        }

        .mt-number-animate .mt-number-animate-dom {
            width: 43px;
            /*设置单个数字宽度*/
            text-align: center;
            float: left;
            position: relative;
            top: -700px;
            border: 0;
        }

        .mt-number-animate .mt-number-animate-dom .mt-number-animate-span {
            width: 100%;
            float: left;
            background-color: #d22727;
            font-family: SimHei;
            /*font-size: 94px;*/
            /*text-align: left;*/
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header_wrap .headTop a {
            display: block;
            font-size: 30px;
        }

        .header_wrap .headTop .xiazai {
            background-color: #d22727;
            position: absolute;
            right: 20px;
        }
        .jiaobiao{position: absolute;top: 0;left: 0;}
    </style>

</head>

<body>
<style>
A.applink:hover {border: 2px dotted #DCE6F4;padding:2px;background-color:#ffff00;color:green;text-decoration:none}
A.applink       {border: 2px dotted #DCE6F4;padding:2px;color:#2F5BFF;background:transparent;text-decoration:none}
A.info          {color:#2F5BFF;background:transparent;text-decoration:none}
A.info:hover    {color:green;background:transparent;text-decoration:underline}
</style>




    <script type="text/javascript">
        $(function () {
            //        var u = navigator.userAgent, app = navigator.appVersion;
            ////        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
            //        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
            //        if(isiOS){
            //            $("#download").attr("href",'itms-services://?action=download-manifest&url=https://www.kagah.com/download/pcdd001.plist1');
            //        }else{
            //            $("#download").attr("href",'http://www.kagah.com/download/apk/pcdd/pcdd.apk1');
            //        }
            $(".head-close").on("click", function () {
                $(this).parent().hide(100);
                $("section").css("padding-top", "88px");
            })
        })
    </script>
    <div class="redPacket-mask">
        <div class="redPacket-pop">
            <div class="close-icon"></div>
            <div class="redPacket-head-icon">
                <span class="head-icon"></span>
            </div>
            <div class="redPacket-tit"></div>
            <span class="open-icon"></span>
            <div class="redPacket-copyright">
                <i class="jingbi"></i>本活动最终解释权归彩客娱乐所有</div>
        </div>
    </div>
    <div class="header_wrap">
        <div class="headTop">
            <i class="head-close"></i>
            <div class="headCon">
                <div class="head-logo">
                    <img src="/Public/Home/statics/web/images/avatar.png" /> </div>
                <h1>
                    彩客娱乐                </h1>
                <p>幸运是随时陪伴，走到哪玩到哪</p>
            </div>
          <!--   <div class="xiazai" style=" background-color: #d22727;
            position: absolute;
            right: 20px;
            width: 190px;
            height: 60px;
            overflow: hidden;
            top: 24px;">
                <a id="downIso" data-id="1" href="" class="btn" target="_self" style=" width: 190px;
                border-radius: 8px;
                float: right;
                height: 60px;
                font-size: 28px;
                margin-top: 10px;
                line-height: 44px;
                position: absolute;
                top: -8px;">
             <button class="bgCol">立即下载</button>
                </a>
                <a id="downAndroid" data-id="2" href="#" class="btn" target="_self" style=" width: 190px;
                border-radius: 8px;
                float: right;
                height: 60px;
                font-size: 28px;
                margin-top: 10px;
                /* display: none; */
                line-height: 44px;
                position: absolute;
                top: -8px;">
                <button class="bgCol">立即下载</button>
                </a>
            </div> -->

        </div>
        <script type="text/javascript">
            $("#downIso").click(function () {
                statisticsLinkCount($(this).attr("data-id"));
            });

            $("#downAndroid").click(function () {
                statisticsLinkCount($(this).attr("data-id"))
            });

            function statisticsLinkCount(type) {
                var data = {};
                data.type = type;
                $.ajax({
                    url: "?m=web&c=lobby&a=downloadNum",
                    type: 'POST',
                    data: data,
                    // async: false,
                    dataType: "json",
                    success: function (msg) {
                        console.log(msg);
                    }
                })
            }

            //判断访问终端
            var browser = {
                versions: function () {
                    var u = navigator.userAgent,
                        app = navigator.appVersion;
                    return {
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Adr') > -1, //android终端
                        iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
                        weixin: u.indexOf('MicroMessenger') > -1, //是否微信 （2015-01-22新增）
                        qq: u.match(/\sQQ/i) == " qq" //是否QQ
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }
            var dataNews = {}; //型号
            //判断是否IE内核
            if (browser.versions.android) {
                dataNews.app_type = 2;
            }
            //判断是否webKit内核
            if (browser.versions.ios) {
                dataNews.app_type = 1;
            }
            //判断是否移动端
            if (browser.versions.weixin || browser.versions.qq) {
                $(".mask").show();
                $(".mask").click(function () {
                    $(".mask").hide();
                });
                // return false;
            } else {
                $(".mask").hide();
            }
//            console.log(dataNews);
//            $("#downIso").hide();
//            $("#updateIso").hide();

            if (dataNews.app_type == 1) {
                $("#downIso").show();
                $("#downAndroid").hide();
            }
            if (dataNews.app_type == 2) {
                $("#downIso").hide();
                $("#updateAndroid").show();
            }
        </script>
        <header style="position: inherit; top: auto;">
            <h1>彩客娱乐</h1>
            <div class="headerRight">
                <ul>
                   <!--  <li class="icoNews" data-new="7" data-href="https://1ww-pc3333.com/?m=web&c=message&a=index&type=1&flag_m=1"></li> -->
                    <li class="icoAdd">
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="menu" style="display: none">
                <ul>
                    <li class="icoRecharge" data-href="<?php echo U('Home/user/datoupay2');?>">立即充值</li>
                    <li class="icoWithdraw" data-href="<?php echo U('Home/fen/xiapage');?>">我要提现</li>
                    <!-- <li class="icoRebate" data-href="https://1ww-pc3333.com/?m=web&c=app&a=rebate">天天返利</li> -->
                    <!--<li class="icoResult" data-href="https://1ww-pc3333.com/?m=web&c=openAward&a=openAwardRes">开奖结果</li>-->
                    <!--<li class="icoIntroduce" data-href="https://1ww-pc3333.com/?m=web&c=app&a=gameList">玩法介绍</li>-->
                    <!--<li class="icoTrend" data-href="https://1ww-pc3333.com/?m=web&c=openAward&a=trendChart">开奖走势</li>-->
                </ul>
            </div>
        </header>
        <!--红包浮动图标-->
        <div class="redPacket-ico vibrate" id="drag"></div>

    </div>

    <section style="padding-top:194px;">
        <div class="indexWarp">
            <!--<div class="horn"><p>公告：最新消息，来得及发圣诞节快乐福利送空间。</p></div>-->
            <div class="horn">
                <!--<span style="float: left;">公告：</span>-->
                <div id="maq" style="overflow: hidden;">
                    <div class="widthGonggao">
                        <div id=mtext class="gonggao" style="">
                                                        <p>六合彩第093期特码:20兔(蓝)波</p>
                                                        <p>限时红包活动火热开启中</p>
                                                    </div>

                        <div id="m0" class="gonggao"></div>
                    </div>
                </div>
                <!--<marquee>-->
                <!--<div class="gonggao">-->
                                <!--<p>六合彩第093期特码:20兔(蓝)波</p>-->
                                <!--<p>限时红包活动火热开启中</p>-->
                                <!--</div>-->
                <!--</marquee>-->
            </div>

            <!--旧轮播-->
            <!--<div class="slider">-->
            <!--<ul>-->
                        <!--<li data-href="https://1ww-pc3333.com/?m=web&c=redpacket&a=redPacket_record"><a ><img src="up_files/banner/6427533e4bf1be090adbbee51ecfda31.jpg" alt=""></a></li>-->
                        <!--<li data-href="https://1ww-pc3333.com/?m=web&c=turntable&a=index"><a ><img src="up_files/banner/4dfd3d0179385d5e3aa3054f64e27289.png" alt=""></a></li>-->
                        <!--<li data-href="https://2ww-pc3333.com/?m=web&c=user&a=activityCenter"><a ><img src="up_files/banner/8a51f2d6f6caa2629c15d4987b17e6da.png" alt=""></a></li>-->
                        <!--<li data-href="http://yh.pc3333.com/yh1/"><a ><img src="up_files/banner/7a00991926dbbe9ea98975586b2e19a5.jpg" alt=""></a></li>-->
                        <!--<li data-href="http://yh.pc3333.com/yh3/"><a ><img src="up_files/banner/d030fb1e0e00d783f7ee842ddc0d4589.jpg" alt=""></a></li>-->
                        <!--<li data-href="http://yh.pc3333.com/yh1/"><a ><img src="up_files/banner/9e2252c60dd2bcef79b3b7cd0853219f.jpg" alt=""></a></li>-->
                        <!--<li data-href="https://1ww-pc3333.com/?m=web&c=app&a=gameplay&lottery_type=7&&h5=1"><a ><img src="up_files/banner/94db34afb2530c03e0870bff24fc1c81.jpg" alt=""></a></li>-->
                        <!--</ul>-->
            <!--</div>-->
            <!--<script type="text/javascript">-->
            <!--$(".slider").yxMobileSlider({width:640,height:240,during:3000})-->
            <!--</script>-->

            <!--旧房间列表-->
            <!--<div class="indexContent clearfix">-->
            <!--<div class="indexTab">-->
            <!--<ul>-->
            <!--<li class="active">幸运28</li>-->
            <!--<li>加拿大28</li>-->
            <!--<li>北京PK10</li>-->
            <!--<li>幸运飞艇</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<div class="tabContent">-->
                        <!--<div class="tabC" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="1" lottery_type="1" error_msg="1">-->
            <!--<img src="/up_files/room/20180509110350111.png" />-->
            <!--<p>在线人数：6689</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="4" lottery_type="1" error_msg="1">-->
            <!--<img src="/up_files/room/20180509110432560.png" />-->
            <!--<p>在线人数：3538</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="200000" upper="999999999" room_id="7" lottery_type="1" error_msg="尊敬的会员，您好！进入本房间最低200000元宝。">-->
            <!--<img src="/up_files/room/20180509110517252.png" />-->
            <!--<p>在线人数：1694</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="3" lottery_type="3" error_msg="您所拥有的元宝数不符合房间的元宝限额0-500000">-->
            <!--<img src="/up_files/room/20180509110549435.png" />-->
            <!--<p>在线人数：3874</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="6" lottery_type="3" error_msg="1">-->
            <!--<img src="/up_files/room/20180509110623248.png" />-->
            <!--<p>在线人数：3096</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="200000" upper="999999999" room_id="9" lottery_type="3" error_msg="尊敬的会员，您好！进入本房间最低200000元宝。">-->
            <!--<img src="/up_files/room/20180509110657803.png" />-->
            <!--<p>在线人数：1674</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="16" lottery_type="2" error_msg="您所拥有的元宝数不符合房间的元宝限额。">-->
            <!--<img src="/up_files/room/20180109213300107.png" />-->
            <!--<p>在线人数：6087</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="5000" upper="999999999" room_id="18" lottery_type="2" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间5000以上才可进入。">-->
            <!--<img src="/up_files/room/20180109213335358.png" />-->
            <!--<p>在线人数：5588</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="10000" upper="999999999" room_id="19" lottery_type="2" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间10000以上才可进入。">-->
            <!--<img src="/up_files/room/20180109213352913.png" />-->
            <!--<p>在线人数：2673</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="Private" lower="0" upper="0" room_id="2_3" lottery_type="2" error_msg="">-->
            <!--<img src="/up_files/room/20180509151430886.png" />-->
            <!--<p>在线人数：保密</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="17" lottery_type="4" error_msg="您所拥有的元宝数不符合房间的元宝限额。">-->
            <!--<img src="/up_files/room/20180109214505857.png" />-->
            <!--<p>在线人数：5150</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="5000" upper="999999999" room_id="20" lottery_type="4" error_msg="本房间5000以上才可进入，您所拥有的元宝数不符合房间的限额。">-->
            <!--<img src="/up_files/room/20180109214525716.png" />-->
            <!--<p>在线人数：4080</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="10000" upper="999999999" room_id="21" lottery_type="4" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间10000以上才可进入。">-->
            <!--<img src="/up_files/room/20180109214545444.png" />-->
            <!--<p>在线人数：2365</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="28" lottery_type="5" error_msg="余额不足">-->
            <!--<img src="/up_files/room/20180326111350300.png" />-->
            <!--<p>在线人数：3936</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="5000" upper="999999999" room_id="29" lottery_type="5" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间5000以上才可进入。">-->
            <!--<img src="/up_files/room/20180326111412274.png" />-->
            <!--<p>在线人数：2335</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="10000" upper="999999999" room_id="30" lottery_type="5" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间10000以上才可进入。">-->
            <!--<img src="/up_files/room/20180326111432415.png" />-->
            <!--<p>在线人数：2220</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="31" lottery_type="6" error_msg="余额不足">-->
            <!--<img src="/up_files/room/20180328145931522.png" />-->
            <!--<p>在线人数：3208</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="5000" upper="999999999" room_id="32" lottery_type="6" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间5000以上才可进入。">-->
            <!--<img src="/up_files/room/20180328150002793.png" />-->
            <!--<p>在线人数：2288</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="10000" upper="999999999" room_id="33" lottery_type="6" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间10000以上才可进入。">-->
            <!--<img src="/up_files/room/20180328150031531.png" />-->
            <!--<p>在线人数：1133</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="22" lottery_type="7" error_msg="进入房间余额不足">-->
            <!--<img src="/up_files/room/20180326111247170.png" />-->
            <!--<p>在线人数：1592</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="Private" lower="0" upper="0" room_id="7_1" lottery_type="7" error_msg="">-->
            <!--<img src="/up_files/room/20180525205218298.png" />-->
            <!--<p>在线人数：保密</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="27" lottery_type="8" error_msg="您所拥有的元宝数不符合房间的元宝限额，本房间10000以上才可进入。">-->
            <!--<img src="/up_files/room/20180326111314522.png" />-->
            <!--<p>在线人数：6683</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="37" lottery_type="9" error_msg="1">-->
            <!--<img src="/up_files/room/20180401143605335.png" />-->
            <!--<p>在线人数：6320</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="999999999" room_id="38" lottery_type="10" error_msg="余额不足">-->
            <!--<img src="/up_files/room/20180401144648607.png" />-->
            <!--<p>在线人数：5390</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="0" data-room="" lower="0" upper="9999999" room_id="43" lottery_type="11" error_msg="余额不足">-->
            <!--<img src="/up_files/room/20180609111312130.png" />-->
            <!--<p>在线人数：8091</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--<div class="tabC"  style="display: none" >-->
            <!--<ul>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="64" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：1200</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="65" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="66" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="67" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="68" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="69" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：1800</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="70" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：1800</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="71" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="72" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="73" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="74" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="75" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="76" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="77" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="78" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：1900</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="79" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="80" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="81" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="82" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="83" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="85" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="86" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="87" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="88" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="89" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="90" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="91" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="93" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="94" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="95" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="96" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="97" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="98" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="99" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="100" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="101" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="102" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="103" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="104" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="105" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="106" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="107" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="108" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="109" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="112" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="114" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="120" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="121" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="122" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="123" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="99999" room_id="124" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="1" data-room="" lower="0" upper="9999999" room_id="125" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--<li status="0" data-room="" lower="0" upper="9999999" room_id="126" lottery_type="12" error_msg="1">-->
            <!--<img src="" />-->
            <!--<p>在线人数：0</p>-->
            <!--</li>-->
                        <!--</ul>-->
            <!--</div>-->
                        <!--</div>-->
            <!--</div>-->

            <!--轮播-->
            <div class="swiper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/6427533e4bf1be090adbbee51ecfda31.jpg" alt="" />
                        </div>
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/4dfd3d0179385d5e3aa3054f64e27289.png" alt="" />
                        </div>
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/8a51f2d6f6caa2629c15d4987b17e6da.png" alt="" />
                        </div>
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/7a00991926dbbe9ea98975586b2e19a5.jpg" alt="" />
                        </div>
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/d030fb1e0e00d783f7ee842ddc0d4589.jpg" alt="" />
                        </div>
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/9e2252c60dd2bcef79b3b7cd0853219f.jpg" alt="" />
                        </div>
                                                <div class="swiper-slide" data-href="#">
                            <img src="/Public/Home/up_files/banner/94db34afb2530c03e0870bff24fc1c81.jpg" alt="" />
                        </div>
                                            </div>

                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
            </div>


            <script type="text/javascript">
                var mySwiper = new Swiper('.swiper-container', {
                    direction: 'horizontal',
                    loop: true,
                    autoplay: 3000,
                    slidesPerView: "auto",
                    centeredSlides: true,
                    spaceBetween: 20,

                    // 如果需要分页器
                    pagination: '.swiper-pagination',
                })
            </script>

            <div class="statistics">
                <ul>
                    <li>
                        <i class="totalmoney"></i>
                        <span>用户已赚 </span>
                        <em class="make_money">160369339</em>元宝</li>
                    <li>
                        <i class="person"></i>
                        <span>注册人数 </span>
                        <em class="reg_number">516622</em>人</li>
                </ul>
                <div class="percent">

                    <div class="per_number">
                        <em id="d1" class="numberRun"></em>%</div>
                    <span class="per_info">赚钱率</span>

                </div>
            </div>

            <div class="index_lottery">
                <ul>
                    <!--短图-->
                                         <!-- 
                                         
                    -->
                    <li data-href="<?php echo U('Home/Run/fangjian/game/bj28');?>" lottery_type="幸运28">
                        <a href="<?php echo U('Home/Run/bj28');?>" class="explain">5分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/93a8fb392fd46c9e91cf08335f1c12db.png" alt="幸运28" />
                         
                    </li>

                                                             <!-- 
                                         
                    -->
                    <li data-href="<?php echo U('Home/Run/fangjian/game/jnd28');?>" lottery_type="加拿大28">
                        <a href="<?php echo U('Home/Run/jnd28');?>" class="explain">3分半一期</a>
                        <img src="/Public/Home/up_files/index_lottery/de70bcbfbdbe22757dfeeeaa8df8608c.png" alt="加拿大28" />
                         
                    </li>

                                                             <!-- 
                                         
                    -->
                    <li data-href="<?php echo U('Home/Run/fangjian/game/pk10');?>" lottery_type="北京PK10">
                        <a href="<?php echo U('Home/Run/pk10');?>" class="explain">5分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/8768b4780bf3e1d342e76dc17e4d178f.png" alt="北京PK10" />
                         
                    </li>

                                                             <!-- 
                                         
                    -->
<!--                     <li data-href="?m=web&c=lobby&a=indexSubNav&type=9" lottery_type="急速赛车">
                        <a href="࠭=api&c=app&a=gameplay&lottery_type=9&h5=1.html" class="explain">3分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/3fd164df648114c261f1ea0e7988ab81.png" alt="急速赛车" />
                         
                    </li> -->

                                                             <!-- 
                                         
                    -->
					<li data-href="<?php echo U('Home/Run/fangjian/game/ssc');?>" lottery_type="重庆时时彩">
                        <a href="<?php echo U('Home/Run/ssc');?>" class="explain">10分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/08ff65139fdfb2d829c162edc7159789.png" alt="重庆时时彩" />
                         
                    </li>
                    <li data-href="<?php echo U('Home/Run/fangjian/game/xyft');?>" lottery_type="幸运飞艇">
                        <a href="<?php echo U('Home/Run/xyft');?>" class="explain">5分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/190e728499bfa4bbdda1b348bd2bf0fd.png" alt="幸运飞艇" />
                         
                    </li>

                                                             <!-- 
                                         
                    -->
                <!--     <li data-href="?m=web&c=lobby&a=indexSubNav&type=10" lottery_type="百人牛牛">
                        <a href="?m=web&c=lobby&a=indexSubNav&type=10" class="explain">5分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/0b16e2ce282fdaac7d573a60ded13620.png" alt="百人牛牛" />
                         
                    </li>
 -->
                                                             <!-- 
                                         
                    -->
                    

                                                             <!-- 
                                         
                    -->
<!--                     <li data-href="?m=web&c=lobby&a=indexSubNav&type=6" lottery_type="三分彩">
                        <a href="࠭=api&c=app&a=gameplay&lottery_type=6&h5=1.html" class="explain">3分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/c2f3f4da4dc9c17f105bccd731fd7f20.png" alt="三分彩" />
                         
                    </li> -->

                                                             <!-- 
                                         
                    -->
<!--                     <li data-href="<?php echo U('Home/Run/lhc');?>" lottery_type="急速六合彩">
                        <a href="࠭=api&c=app&a=gameplay&lottery_type=8&h5=1.html" class="explain">5分钟一期</a>
                        <img src="/Public/Home/up_files/index_lottery/f7422b997d18b8e4df79b48c144d0f6e.png" alt="急速六合彩" />
                         
                    </li> -->

                                                             <!-- 
                                         
                    -->
                    <li data-href="<?php echo U('Home/Run/fangjian/game/lhc');?>" lottery_type="香港六合彩">
                        <a href="<?php echo U('Home/Run/lhc');?>" class="explain">每周开奖3期</a>
                        <img src="/Public/Home/up_files/index_lottery/0a06bc6edd5e99e3a573a384893d8af9.png" alt="香港六合彩" />
                         
                    </li>

                                                             
                    <!--长图-->
                                                                                                                                                                                                                                                           <!--
                                                            -->
                        <li class="xy28" data-href="?m=web&c=lobby&a=indexSubNav&type=11" lottery_type="分分彩">
                            <a href="࠭=api&c=app&a=gameplay&lottery_type=11&h5=1.html" class="explain explain_l">1分钟一期</a>
                            <img src="/Public/Home/up_files/index_lottery/6c7cbbd4d803987009c0aa28a4da25d7.png" alt="分分彩" />
                        </li>
						
                                                        </ul>
            </div>
        </div>
    </section>

    <div class="popup" style="display: none">
        <div class="config">
            <h3>请输入房间暗号</h3>
            <i class="configClose"></i>
            <div class="configInput">
                <input type="text" placeholder="" name="secret_pwd" autocomplete="off">
            </div>
            <div class="button" style="margin-top: 30px;">
                <button id="secretBtn">提交</button>
            </div>

        </div>
    </div>
    <textarea style="display:none" id="data_redpacket_info" class="data_redpacket_info">""</textarea>
    <script type="text/javascript">
        var flag = "";
        var money = "0.00";
        var lottery_type;

        //数字滚动动画
        (function ($) {
            $.fn.numberAnimate = function (setting) {
                var defaults = {
                    speed: 1000, //动画速度
                    num: "", //初始化值
                    iniAnimate: true, //是否要初始化动画效果
                    symbol: '', //默认的分割符号，千，万，千万
                    dot: 0 //保留几位小数点
                }
                //如果setting为空，就取default的值
                var setting = $.extend(defaults, setting);

                //如果对象有多个，提示出错
                if ($(this).length > 1) {
                    alert("just only one obj!");
                    return;
                }

                //如果未设置初始化值。提示出错
                if (setting.num == "") {
                    alert("must set a num!");
                    return;
                }
                var nHtml =
                    '<div class="mt-number-animate-dom" data-num="{num}">\
                            <span class="mt-number-animate-span">.</span>\
                            <span class="mt-number-animate-span">9</span>\
                            <span class="mt-number-animate-span">8</span>\
                            <span class="mt-number-animate-span">7</span>\
                            <span class="mt-number-animate-span">6</span>\
                            <span class="mt-number-animate-span">5</span>\
                            <span class="mt-number-animate-span">4</span>\
                            <span class="mt-number-animate-span">3</span>\
                            <span class="mt-number-animate-span">2</span>\
                            <span class="mt-number-animate-span">1</span>\
                            <span class="mt-number-animate-span">0</span>\
                          </div>';

                //数字处理
                var numToArr = function (num) {
                    num = parseFloat(num).toFixed(setting.dot);
                    if (typeof (num) == 'number') {
                        var arrStr = num.toString().split("");
                    } else {
                        var arrStr = num.split("");
                    }
                    //console.log(arrStr);
                    return arrStr;
                }

                //设置DOM symbol:分割符号
                var setNumDom = function (arrStr) {
                    var shtml = '<div class="mt-number-animate">';
                    for (var i = 0, len = arrStr.length; i < len; i++) {
                        if (i != 0 && (len - i) % 3 == 0 && setting.symbol != "" && arrStr[i] != ".") {
                            shtml += '<div class="mt-number-animate-dot">' + setting.symbol + '</div>' +
                                nHtml.replace("{num}", arrStr[i]);
                        } else {
                            shtml += nHtml.replace("{num}", arrStr[i]);
                        }
                    }
                    shtml += '</div>';
                    return shtml;
                }
                
                //执行动画
                var runAnimate = function ($parent) {
                    $parent.find(".mt-number-animate-dom").each(function () {
                        var num = $(this).attr("data-num");
                        num = (num == "." ? 10 : num);
                        var spanHei = $(this).height() / 11; //11为元素个数
                        var thisTop = num * spanHei + "px";
                        if (thisTop != $(this).css("top")) {
                            if (setting.iniAnimate) {
                                //HTML5不支持
                                if (!window.applicationCache) {
                                    $(this).animate({
                                        top: thisTop
                                    }, setting.speed);
                                } else {
                                    $(this).css({
                                        'transform': 'translateY(' + thisTop + ')',
                                        '-ms-transform': 'translateY(' + thisTop + ')',
                                        /* IE 9 */
                                        '-moz-transform': 'translateY(' + thisTop + ')',
                                        /* Firefox */
                                        '-webkit-transform': 'translateY(' + thisTop + ')',
                                        /* Safari 和 Chrome */
                                        '-o-transform': 'translateY(' + thisTop + ')',
                                        '-ms-transition': setting.speed / 1000 + 's',
                                        '-moz-transition': setting.speed / 1000 + 's',
                                        '-webkit-transition': setting.speed / 1000 + 's',
                                        '-o-transition': setting.speed / 1000 + 's',
                                        'transition': setting.speed / 1000 + 's'
                                    });
                                }
                            } else {
                                setting.iniAnimate = true;
                                $(this).css({
                                    top: thisTop
                                });
                            }
                        }
                    });
                }

                //初始化
                var init = function ($parent) {
                    //初始化
                    $parent.html(setNumDom(numToArr(setting.num)));
                    runAnimate($parent);
                };

                //重置参数
                this.resetData = function (num) {
                    var newArr = numToArr(num);
                    var $dom = $(this).find(".mt-number-animate-dom");
                    if ($dom.length < newArr.length) {
                        $(this).html(setNumDom(numToArr(num)));
                    } else {
                        $dom.each(function (index, el) {
                            $(this).attr("data-num", newArr[index]);
                        });
                    }
                    runAnimate($(this));
                }
                //init
                init($(this));
                return this;
            }
        })(jQuery);

        $(function () {
            document.body.addEventListener('touchstart', function () {});

            //数字滚动动画
            var rate = Number("98");
            var numRun = $(".numberRun").numberAnimate({
                num: rate,
                speed: 2000
            });

            //红包
            var redpacketData = JSON.parse($("#data_redpacket_info").html());
            $(".redPacket-tit").html(redpacketData.redpacket_title);
            $(".head-icon").css("background", "url(" + redpacketData.redpacket_pic + ") no-repeat");

            //右侧红包图标点击
            $(".redPacket-ico").click(function () {
                $('.redPacket-mask').fadeIn(function () {
                    $(".redPacket-pop").addClass("scaleBlock");
                })
            })
            $(".redPacket-pop").find('.close-icon').on('click', function () {

                $(".redPacket-pop").removeClass("scaleBlock");
                $('.redPacket-mask').fadeOut();

            })
            //点击领取红包
            $(".open-icon").bind("click", function () {
                //                $('.redPacket-mask').fadeIn(function(){
                $(this).addClass("rotate");

                var timerOpen = setTimeout(function () {
                    //                        window.location.href = "https://1ww-pc3333.com/?m=index&c=user&a=login"
                    window.location.href = "?m=web&c=redpacket&a=redPacket&redpacket_id=" +
                        redpacketData.redpacket_id + "&returnRefresh=1";
                    $(".redPacket-pop").removeClass("scaleBlock");
                    $('.redPacket-mask').hide()
                }, 800)
                //                })
            })

            function getCookie(objName) { //获取指定名称的cookie的值
                var arrStr = document.cookie.split("; ");
                for (var i = 0; i < arrStr.length; i++) {
                    var temp = arrStr[i].split("=");
                    if (temp[0] == objName) return unescape(temp[1]);
                }
                return "";
            }
            //判断用户状态展示红包图标
            var isTourist = Number(getCookie('tourist'));
            if (redpacketData.can_user_join == 1 && redpacketData.redpacket_status == 1 && redpacketData.is_user_already_join ==
                0 && isTourist == 0) {
                $(".redPacket-ico").show();
                if (redpacketData.is_user_already_join == 0) {
                    $(".redPacket-ico").click();
                }
            }

            //玩法说明点击
            //            $(".explain").bind("click", function(){
            //                var msg = '这里是'+$(this).parent().attr('lottery_type')+'的玩法说明！';
            //                var alert ='<div class="popupAlert"><div class="config-alert"><div class="tit">提示</div> <p>'+msg+'</p><div class="btn"><button class="confirm">确定</button></div></div></div>';
            //                var p = $(alert).appendTo($('body'));
            //                p.find('.confirm').off().on('click', function () {
            //                    p.remove();
            //                });
            //                return false
            //            })

            //系统公告滚动消息
            var minWidth = $("#maq").width();
            var index = $(".gonggao p").length;
            var max_width = 0;
            $('#mtext p').each(function () {
                if ($(this).outerWidth() > minWidth) {
                    $(this).width($(this).outerWidth());
                } else {
                    $(this).width(minWidth);
                }
                max_width += $(this).outerWidth();
            })
            $(".gonggao").css({
                "width": max_width,
                "float": "left"
            });
            $(".widthGonggao").width(max_width * 2);
            var speed = 20;
            var MyMar = setInterval(Marquee, speed)
            m0.innerHTML = mtext.innerHTML

            function Marquee() {
                if (m0.offsetWidth - maq.scrollLeft <= 0)
                    maq.scrollLeft -= mtext.offsetWidth
                else {
                    maq.scrollLeft++
                }
            }

        });

        //客服图标 移动
        var bodyWidth = $("body").width();
        var bodyHeight = $("body").height();
        var dragWidth = $("#drag").width();
        var move = false; //移动标记
        var seup = false;
        var _x, _y; //鼠标离控件左上角的相对位置

        var drag = document.getElementById("drag");

        drag.addEventListener("touchstart", function () {
            move = true;
            seup = true;
            _x = event.targetTouches[0].pageX - parseInt($("#drag").css("left"));
            _y = event.targetTouches[0].pageY - parseInt($("#drag").css("top"));
        })
        drag.addEventListener("touchmove", function () {
            if (event.targetTouches.length == 1) {
                event.preventDefault(); // 阻止浏览器默认事件，重要
                if (move) {
                    var x = event.targetTouches[0].pageX - _x; //控件左上角到屏幕左上角的相对位置
                    var y = event.targetTouches[0].pageY - _y;
                    $("#drag").css({
                        "top": y,
                        "left": x
                    });
                }
            }

        })
        drag.addEventListener("touchend", function () {
            if (seup) {
                var left = $("#drag").offset().left;
                var top = $("#drag").offset().top;
                if (top < 200) {
                    $("#drag").css({
                        "top": '200px'
                    });
                }
                // if(top > 44 || top > bodyHeight -102){
                if ((bodyWidth / 2) < left) {
                    $("#drag").css({
                        "left": bodyWidth - 82 + "px"
                    });
                } else {
                    $("#drag").css({
                        "left": "10px"
                    });
                }
                // }
                if (top > bodyHeight - 188) {
                    $("#drag").css({
                        "top": bodyHeight - 188
                    });
                }
            }
            move = false;
            seup = false;
        })
    </script>
    <nav>
    <ul>
        <li class="active" data-href="<?php echo U('Home/run/index');?>">首页</li>
        <!--<li data-href="<?php echo U('Home/User/datoupay2');?>">充值1</li>
        li data-href="https://www.sobot.com/chat/h5/index.html?sysNum=04c67c9f45874e5c85e1456012726b6a&source=2" id="kefuUrl">客服</li-->
        <li data-href="<?php echo U('Home/Fen/addpage');?>">充值</li>
        <li data-href="?m=web&c=user&a=login">客服</li>
         
        
        <li data-href="<?php echo U('Home/User/index');?>">我的</li>
		

    </ul>
</nav><script type="text/javascript">
    $(function() {
        //获取当前选项
        $.ajax({
            url: '?m=api&c=app&a=customerType',
            type: 'post',
            success: function(res){
                res=JSON.parse(res)
                $('#kefuUrl').attr('data-href',res.info[res.info.length-1].value)
            },
            error: function(err){
            }
        })
        var getUrlParam = function(e){
            var array = location.search.slice(1).split('&'), obj = {};
            for (var i = 0; i < array.length; i++){
                var key = array[i].split('=')[0],
                        val = array[i].split('=')[1];
                obj[key] = val;
            }
            return obj[e] || null;
        }
        var getParam = function(url,e){
            //console.log(url);
            var array = url.slice(1).split('&'), obj = {};
            for (var i = 0; i < array.length; i++){
                var key = array[i].split('=')[0],
                        val = array[i].split('=')[1];
                obj[key] = val;
            }
            return obj[e] || null;
        }

        var n_c = getUrlParam('c');
        var n_a = getUrlParam('a');
        var now_href = n_c+n_a;
        //var now_href = window.location.href;
       // console.log(now_href);
        $("nav ul li").each(function() {
            var href =  $(this).attr("data-href");
            var c = getParam(href,'c');
            var a = getParam(href,'a');
            var href = c+a;
            //console.log(href);
            if (now_href == href) {
                $("nav ul li").removeClass("active");
                $(this).addClass("active");
            }
        });
    })


</script>
</body>
</html>