<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="/Public/Home/new/css/index.css"/>
    <title><?php echo C('sitename');?></title>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
        button,input{outline: none;}
        .alert2{font-size:17px;position:fixed;left:41%;width:14em;height:1.6em;text-align:center;margin-left:-5em;background:#333;color:#fff;padding:.5em 0; border-radius: .5em;display:none;top:40%;}
    </style>
</head>
<script src="http://res.wx.qq.com/open/js/jweixin-1.1.0.js"> </script>
<script>
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('hideOptionMenu');
    });
</script>
<body>
<header>
    <a onclick="history.go(-1)"><i class="ico02 back fl"></i></a>
    <i class="ico null"></i>
    <h1>彩客娱乐</h1>
    <i class="ico plus qx0 fr"></i>
    <i class="ico plus qx45 fr"></i>
    <!-- <a onclick="showMask()"><i class="ico service fr"></i></a> -->
    <a onclick="javascript:window.location.href='/';"><i class="ico service fr"></i></a>
</header>
<div class="headblank">
</div>
<div class="main1">
    <div class="mid" id='03'>
        <div class="midl fl">
            <div class="zuan">
                <i class="icon-i-money"></i><em style="font-style: normal;"> 会员已赚 </em><span>40358138				 元宝</span>
            </div>
            <div class="zhuce">
                <i class="icon-i-people"></i> 注册会员 <span>8093				 人</span>
            </div>
        </div>
        <div class="midr fr">
            <b>99</b>% <br>
            赚钱率
        </div>
    </div>
    
    <div class="game" >

        <!-- 北京28 1111-->
        <?php if(C('is_open_bj28') == '1' && time() > strtotime(C('is_open_bj28_begin_time')) && time() < strtotime(C('is_open_bj28_end_time'))): ?><a href="<?php echo ($url); ?>">
                <div style="width:100%;height:200px;background: url('/public/home/img/chuji.jpg') no-repeat;background-size:cover;position: relative;">
                    <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p1); ?></div>
                    <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">初级房</div>
                    <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：0-10000</div>
                </div>
            </a>
            <?php else: ?>
            <a href="#">
                <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:25.6%;left:16%;transform:translate(-50%,-50%);">
                <img src="http://wx3.sinaimg.cn/large/005FCplygy1fi7jte17hpj306e08mmyb.jpg" style="width:30%;height:140px;" class="fl1">
            </a>
            <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:18%;height:20px;top:40%;left:16.5%;transform:translate(-50%,-50%);"><?php endif; ?>
		<br>
        <!-- PK10 -->
        <?php if(C('is_open_pk10') == '1' && time() > strtotime(C('is_open_pk10_begin_time')) && time() < strtotime(C('is_open_pk10_end_time'))): if($userinfo["points"] > 10000): ?><a href="<?php echo ($url); ?>">
                <div style="width:100%;height:200px;background: url('/public/home/img/zhongji.jpg') no-repeat;background-size:cover;position: relative;">
                    <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p2); ?></div>
                    <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">中级房</div>
                    <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：10001-50000</div>
                </div>
            </a>
			<?php else: ?>
				<a href="javascript:void(0)" onclick="haha()">
                <div style="width:100%;height:200px;background: url('/public/home/img/zhongji.jpg') no-repeat;background-size:cover;position: relative;">
                    <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p2); ?></div>
                    <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">中级房</div>
                    <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：10001-50000</div>
                </div>
            </a><?php endif; ?>
            <?php else: ?>
            <a href="#">
                <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:25.6%;left:49.8%;transform:translate(-50%,-50%);">
                <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jtfckj8j306e08mwfj.jpg" style="width:30%;height:140px;" class="z1">
            </a>
            <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:18%;height:20px;top:40%;left:50%;transform:translate(-50%,-50%);"><?php endif; ?>

        <br>
        <!-- 时时彩113 -->
        <?php if(C('is_open_ssc') == '1' && !(time() < strtotime(C('is_open_ssc_begin_time')) && time() > strtotime(C('is_open_ssc_end_time')))): if($userinfo["points"] > 50000): ?><a href="<?php echo ($url); ?>">
                <div style="width:100%;height:200px;background: url('/public/home/img/gaoji.jpg') no-repeat;background-size:cover;position: relative;">
                    <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p3); ?></div>
                    <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">高级房</div>
                    <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：50001-100000</div>
                </div>
            </a>
     <br/>
     <a href="<?php echo ($urlb); ?>">
         <div style="width:100%;height:200px;background: url('/public/home/img/gaoji.jpg') no-repeat;background-size:cover;position: relative;">
             <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p4); ?></div>
             <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">高赔率房</div>
             <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：50001-100000</div>
         </div>
     </a>
			<?php else: ?>
			 <a href="javascript:void(0)" onclick="haha2()">
                <div style="width:100%;height:200px;background: url('/public/home/img/gaoji.jpg') no-repeat;background-size:cover;position: relative;">
                    <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p3); ?></div>
                    <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">高级房</div>
                    <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：50001-100000</div>
                </div>
            </a>
     <br/>
     <a href="javascript:void(0)" onclick="haha2()">
         <div style="width:100%;height:200px;background: url('/public/home/img/gaoji.jpg') no-repeat;background-size:cover;position: relative;">
             <div style="position: absolute;
top: 85%;
right: 5%;
color: red;">在线人数：<?php echo ($p4); ?></div>
             <div style="position: absolute;
top: 82%;
color: white;
left: 5%;
font-size: 20px;">高赔率房</div>
             <div style="position: absolute;
top: 84%;
left: 25%;
color: yellow;
font-size: 16px;">元宝：50001-100000</div>
         </div>
     </a><?php endif; ?>



            <?php else: ?>
            <a href="#">
                <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:25.6%;left:84%;transform:translate(-50%,-50%);">
                <img src="/Public/Home/new/css/ico/ssc.jpg" style="width:30%;height:140px;" class="z1">
            </a>
            <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:18%;height:20px;top:40%;left:83.5%;transform:translate(-50%,-50%);"><?php endif; ?>
<script>
			  function haha()
			  {
			     alert('您的余额不足，无法进入');
			  }
	
			  function haha2()
			  {  
			     alert('您的余额不足，无法进入');
			  }
			</script>
        <!-- 加拿大28
        <?php if(C('is_open_jnd28') == '1' && !(time() < strtotime(C('is_open_jnd28_begin_time')) && time() > strtotime(C('is_open_jnd28_end_time')))): ?><a href="<?php echo U('Home/Run/jnd28');?>">
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:16%;transform:translate(-50%,-50%);">
        <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi727hbvs4j306e08mjt6.jpg" style="width:30%;height:140px;" class="fl1">
        </a>
        <a href='/Home/Run/rulejnd28.html'>
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727l7zmzj3040019743.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:16.5%;transform:translate(-50%,-50%);">
        </a>
        <?php else: ?>
        <a href="#">
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:16%;transform:translate(-50%,-50%);">
        <img src="/Public/Home/new/css/ico/jnd28.jpg" style="width:30%;height:140px;" class="fl1">
        </a>
        <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:18%;height:20px;top:91%;left:16.5%;transform:translate(-50%,-50%);"><?php endif; ?>		 -->

        <!-- 幸运飞艇
        <?php if(C('is_open_xyft') == '1' && !(time() < strtotime(C('is_open_xyft_begin_time')) && time() > strtotime(C('is_open_xyft_end_time')))): ?><a href="<?php echo U('Home/Run/xyft');?>">
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:49.8%;transform:translate(-50%,-50%);">
        <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi727j7mxzj306e08mq4g.jpg" style="width:30%;height:140px;" class="z1">
        </a>
        <a href='/Home/Run/ruleft.html'>
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727l7zmzj3040019743.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:50%;transform:translate(-50%,-50%);">
        </a>
        <?php else: ?>
        <a href='#'>
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:49.8%;transform:translate(-50%,-50%);">
        <img src="http://wx2.sinaimg.cn/large/005FCplygy1fi7jtgfxnfj306e08mgmf.jpg" style="width:30%;height:140px;" class="z1">
        </a>
        <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:50%;transform:translate(-50%,-50%);"><?php endif; ?>-->

        <!-- 新加坡28 -->
        <!-- <?php if(C('is_open_xjp28') == '1'): ?><a href="<?php echo U('Home/Run/xjp28');?>">
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:83.5%;transform:translate(-50%,-50%);">
        <img src="/Public/Home/new/css/ico/xjp28_open.jpg" style="width:30%;height:140px;" class="z1">
        </a>
        <a href='/Home/Run/rulexjp28.html'>
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727l7zmzj3040019743.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:84%;transform:translate(-50%,-50%);">
        </a>
        <?php else: ?>
        <a href="#">
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:25.6%;left:83.5%;transform:translate(-50%,-50%);">
        <img src="/Public/Home/new/css/ico/xjp28_close.jpg" style="width:30%;height:140px;" class="z1">
        </a>
        <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:84%;transform:translate(-50%,-50%);"><?php endif; ?> -->

        <!-- 六合彩
        <?php if(C('is_open_lhc') == '1'): ?><a href="<?php echo U('Home/Run/lhc');?>">
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:83.5%;transform:translate(-50%,-50%);">
        <img src="/Public/Home/new/css/ico/hk_open.png" style="width:30%;height:140px;" class="z1">
        </a>
        <a href='/Home/Run/rulelhc.html'>
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727l7zmzj3040019743.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:84%;transform:translate(-50%,-50%);">
        </a>
        <?php else: ?>
        <a href='#'>
        <img src="http://wx4.sinaimg.cn/large/005FCplygy1fi727kkkzyj306e08m0rs.jpg" style="position:absolute;z-indent:99999999;width:30%;height:140px;top:76%;left:83.5%;transform:translate(-50%,-50%);">
        <img src="/Public/Home/new/css/ico/hk_close.png" style="width:30%;height:140px;" class="z1">
        </a>
        <img src="http://wx1.sinaimg.cn/large/005FCplygy1fi7jth94n8j3040019t8j.jpg" style="position:absolute;z-indent:99999999;width:19%;height:20px;top:91%;left:84%;transform:translate(-50%,-50%);"><?php endif; ?> -->

    </div><br/><br/><br/>
</div>

<div class="ufix">
    <i class="ico ufmenu"></i>
    <?php if($userinfo): ?><div class="ufmain">
            <div class="head">
                <img src="<?php echo ($userinfo["headimgurl"]); ?>">
                <?php echo ($userinfo["nickname"]); ?>		</div>
            <div class="ufbox">
                <?php if(C('quick_pay') == '1' and $userinfo != null): ?><a class="btn fl" href="<?php echo C('quick_pay_domain');?>/pay/index.php?appid=<?php echo C('quick_pay_appid');?>&payno=<?php echo ($userinfo["id"]); ?>" style="margin-left:3em;border-radius:2px;">充值</a>
                    <?php else: ?>
                    <a class="btn fl" href="/Home/Fen/addpage.html" style="margin-left:3em;border-radius:2px;">充值</a><?php endif; ?>
                <a class="btn fr" href='/Home/Fen/xiapage.html' style="margin-right:3em;border-radius:2px;">提现</a>
                <div class="clearfix">
                </div>
                <p style="margin-top:1em;">
                    <i class="ico"></i> 元宝<span class="fr"><i>
                    <?php echo ($userinfo["points"]); ?>				</i>元宝</span>
                </p>
                <a class="qb" href='/Home/User/index'><i class="ico"></i> 我的钱包</a>
            </div>
            <i class="ico ufup"></i>
        </div>
        <?php else: ?>
        <div class="ufbox">
            <a class="btn fl" href='/Home/Index/login.html' style="margin-left:3em;border-radius:2px;">登录</a>
            <a class="btn fr" href='/Home/Index/register' style="margin-right:3em;border-radius:2px;">注册</a>
            <div class="clearfix">
            </div>
        </div>
        <i class="ico ufup"></i><?php endif; ?>
</div>

<div class="rmenu">
<!--<?php if(C('quick_pay') == '1' and $userinfo != null): ?><a href="<?php echo C('quick_pay_domain');?>/pay/index.php?appid=<?php echo C('quick_pay_appid');?>&payno=<?php echo ($userinfo["id"]); ?>">在线充值</a>
<?php else: ?>
<a href="/Home/Fen/addpage.html">在线充值</a><?php endif; ?>-->
<a href="/Home/Fen/addpage.html">在线充值</a>
    <a href='/Home/Fen/xiapage.html'>提现</a>
</div>
<div id="mask" class="mask" onclick="hideMask()">
    <img src="<?php if($kefu[kefu] != ''): ?>/Uploads/<?php echo ($kefu[kefu]); else: ?>/Public/Admin/img/no_img.jpg<?php endif; ?>" />
</div>
<script type="text/javascript">
    function showMask(){
        $("#mask").css("height",$(document).height());
        $("#mask").css("width",$(document).width());
        $("#mask").show();
    }
    function hideMask(){
        $("#mask").hide();
    }
</script>
<script type="text/javascript">
    window.onload = function(){
        if(false){
            $(".main").css({display:"none"});
            loginbox();
        }else{
            $(".main").css({display:"block"});
        }
    }
    $(".ufmenu, .ufup").click(function(){
        $(".ufix").animate({height:"0"});
        $("header").show();
    });
    $(".menu").click(function(){
        $(".ufix").animate({height:"100%"});
        $("header").hide();
    });
    $(".qx0").click(function(){
        $(".rmenu").show(300);
        $(this).hide();
        $(".qx45").show();
    });
    $(".qx45").click(function(){
        $(".rmenu").hide(300);
        $(this).hide();
        $(".qx0").show();
    });
</script>
</body>
</html>

<!--  -->
<footer>
    <ul class="foot">
        <li><a  href='/Home/Run/record.html'><i class="jl"></i><br>记录</a></li>
        <li><a href="<?php echo U('Home/Run/tui');?>?uid=<?php echo ($userinfo["id"]); ?>"><i class="news" ></i><br>推广</a></li>
        <li><a onclick="showMask()"><i class="kf"></i><br>客服</a></li>
		  <!--<?php if(C('quick_pay') == '1' and $userinfo != null): ?><li><a  href="<?php echo C('quick_pay_domain');?>/pay/index.php?appid=<?php echo C('quick_pay_appid');?>&payno=<?php echo ($userinfo["id"]); ?>"><i class="charge"></i><br>充值</a></li>
		  <?php else: ?>
		  <li><a  href="/Home/Fen/addpage.html"><i class="charge"></i><br>充值</a></li><?php endif; ?>-->
		  <li><a  href="/Home/Fen/addpage.html"><i class="charge"></i><br>充值</a></li>
        <li><a  href='/Home/Fen/xiapage.html'><i class="tx"></i><br>提现</a></li>
        <li><a  href='/Home/User/index'><i class="wd"></i><br>我的</a></li>
    </ul>
</footer>

<div id="04">
    </tbody>
    </table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>