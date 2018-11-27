<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>后台 - pc蛋蛋加拿大28高赔率房下注配置</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/Public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>pc蛋蛋加拿大28下注配置 </h5><span>（修改后需要重启服务生效）</span>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form id="signform" action="<?php echo U('Admin/Site/xiazhu_jnd28b');?>" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">单笔最低点数</label>
                            <div class="col-sm-6">
                                <input type="text" name="jnd28bqi_min_point" value="<?php echo C('jnd28bqi_min_point');?>" placeholder="单笔最低点数" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">用户每期最高点数</label>
                            <div class="col-sm-6">
                                <input type="text" name="jnd28bqi_max_point" value="<?php echo C('jnd28bqi_max_point');?>" placeholder="用户每期最高点数" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">特码大小单双</label>
                            <div class="col-sm-4">
                                <input type="text" name="jnd28b_dxds" value="<?php echo C('jnd28b_dxds');?>" placeholder="输入赔率" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" value="1" <?php if(C('jnd28b_xz_open')['dxds'] == 1): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[dxds]">开启&nbsp;&nbsp;
                                <input type="radio" value="0" <?php if(C('jnd28b_xz_open')['dxds'] == 0): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[dxds]">关闭
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="jnd28b_xz_max[dxds]" value="<?php echo C('jnd28b_xz_max')['dxds'];?>" placeholder="当前玩法每期最高点数" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">特码大小单双(开13.14赔率)选择</label>
                            <div class="col-sm-4">
                                <select class="form-control 1314_open_select" name="jnd28b_1314_open">
                                    <option <?php if(C('jnd28b_1314_open') == 0): ?>selected<?php endif; ?>  value="0" >开13.14赔率(1个倍率设置)</option>
                                    <option <?php if(C('jnd28b_1314_open') == 1): ?>selected<?php endif; ?>  value="1">开13.14赔率总注明细(3个倍率设置）</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group 1314_open_1" <?php if(C('jnd28b_1314_open') == 1): ?>style="display:none"<?php endif; ?>>
                        <label class="col-sm-2 control-label">特码大小单双(开13.14赔率)</label>
                        <div class="col-sm-4">
                            <input type="text" name="jnd28b_dxds_md" value="<?php echo C('jnd28b_dxds_md');?>" placeholder="输入赔率" class="form-control">
                        </div>
                </div>
                <div class="form-group 1314_open_2" <?php if(C('jnd28b_1314_open') == 0): ?>style="display:none"<?php endif; ?>>
                <label class="col-sm-2 control-label">总注<</label>
                <div class="col-sm-2"><input type="text" name="jnd28b_dxds_1314zz" value="<?php echo C('jnd28b_dxds_1314zz');?>" placeholder="输入总注" class="form-control"></div>
                <div class="col-sm-3">
                    <input type="text" name="jnd28b_dxds_md1" value="<?php echo C('jnd28b_dxds_md1');?>" placeholder="输入赔率" class="form-control">
                </div>
            </div>
            <div class="form-group 1314_open_2" <?php if(C('jnd28b_1314_open') == 0): ?>style="display:none"<?php endif; ?>>
            <label class="col-sm-2 control-label">总注>=<?php echo C('jnd28b_dxds_1314zz');?> 总注<</label>
            <div class="col-sm-2"><input type="text" name="jnd28b_dxds_1314zz2" value="<?php echo C('jnd28b_dxds_1314zz2');?>" placeholder="输入总注" class="form-control"></div>
            <div class="col-sm-3">
                <input type="text" name="jnd28b_dxds_md2" value="<?php echo C('jnd28b_dxds_md2');?>" placeholder="输入赔率" class="form-control">
            </div>
        </div>
        <div class="form-group 1314_open_2" <?php if(C('jnd28b_1314_open') == 0): ?>style="display:none"<?php endif; ?>>
        <label class="col-sm-2 control-label">总注>=<?php echo C('jnd28b_dxds_1314zz2');?></label>
        <div class="col-sm-3">
            <input type="text" name="jnd28b_dxds_md3" value="<?php echo C('jnd28b_dxds_md3');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>

    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">特码猜组合(大单,小双)</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_zuhe_1" value="<?php echo C('jnd28b_zuhe_1');?>" placeholder="输入赔率" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="radio" value="1" <?php if(C('jnd28b_xz_open')['zuhe_1'] == 1): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[zuhe_1]">开启&nbsp;&nbsp;
            <input type="radio" value="0" <?php if(C('jnd28b_xz_open')['zuhe_1'] == 0): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[zuhe_1]">关闭
        </div>
        <div class="col-sm-2">
            <input type="text" name="jnd28b_xz_max[zuhe]" value="<?php echo C('jnd28b_xz_max')['zuhe'];?>" placeholder="当前玩法每期最高点数" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">1~10名猜组合(小单,大双)</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_zuhe_2" value="<?php echo C('jnd28b_zuhe_2');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">特码猜组合(开13，14赔率)</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_zuhe_md" value="<?php echo C('jnd28b_zuhe_md');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">猜极大、极小</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_jdx" value="<?php echo C('jnd28b_jdx');?>" placeholder="输入赔率" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="radio" value="1" <?php if(C('jnd28b_xz_open')['jdx'] == 1): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[jdx]">开启&nbsp;&nbsp;
            <input type="radio" value="0" <?php if(C('jnd28b_xz_open')['jdx'] == 0): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[jdx]">关闭
        </div>
        <div class="col-sm-2">
            <input type="text" name="jnd28b_xz_max[jdx]" value="<?php echo C('jnd28b_xz_max')['jdx'];?>" placeholder="当前玩法每期最高点数" class="form-control">
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="form-group">
        <label class="col-sm-2 control-label">猜庄闲和(庄闲)</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_zx_1" value="<?php echo C('jnd28b_zx_1');?>" placeholder="输入赔率" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="radio" value="1" <?php if(C('jnd28b_xz_open')['zx'] == 1): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[zx]">开启&nbsp;&nbsp;
            <input type="radio" value="0" <?php if(C('jnd28b_xz_open')['zx'] == 0): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[zx]">关闭
        </div>
        <div class="col-sm-2">
            <input type="text" name="jnd28b_xz_max[zx]" value="<?php echo C('jnd28b_xz_max')['zx'];?>" placeholder="当前玩法每期最高点数" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">猜庄闲和(和)</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_zx_2" value="<?php echo C('jnd28b_zx_2');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">豹子</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_bds_1" value="<?php echo C('jnd28b_bds_1');?>" placeholder="输入赔率" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="radio" value="1" <?php if(C('jnd28b_xz_open')['bds'] == 1): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[bds]">开启&nbsp;&nbsp;
            <input type="radio" value="0" <?php if(C('jnd28b_xz_open')['bds'] == 0): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[bds]">关闭
        </div>
        <div class="col-sm-2">
            <input type="text" name="jnd28b_xz_max[bds]" value="<?php echo C('jnd28b_xz_max')['bds'];?>" placeholder="当前玩法每期最高点数" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">顺子</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_bds_2" value="<?php echo C('jnd28b_bds_2');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">对子</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_bds_3" value="<?php echo C('jnd28b_bds_3');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">半顺</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_bds_4" value="<?php echo C('jnd28b_bds_4');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">杂六</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_bds_5" value="<?php echo C('jnd28b_bds_5');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">猜和值(特码)数字 (数字0,27)</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_0" value="<?php echo C('jnd28b_tema_0');?>" placeholder="输入赔率" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="radio" value="1" <?php if(C('jnd28b_xz_open')['tema'] == 1): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[tema]">开启&nbsp;&nbsp;
            <input type="radio" value="0" <?php if(C('jnd28b_xz_open')['tema'] == 0): ?>checked<?php endif; ?> class="i-checks" name="jnd28b_xz_open[tema]">关闭
        </div>
        <div class="col-sm-2">
            <input type="text" name="jnd28b_xz_max[tema]" value="<?php echo C('jnd28b_xz_max')['tema'];?>" placeholder="当前玩法每期最高点数" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字1,26</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_1" value="<?php echo C('jnd28b_tema_1');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">数字2,25</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_2" value="<?php echo C('jnd28b_tema_2');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字3,24</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_3" value="<?php echo C('jnd28b_tema_3');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字4,23</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_4" value="<?php echo C('jnd28b_tema_4');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字5,22</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_5" value="<?php echo C('jnd28b_tema_5');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字6,21</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_6" value="<?php echo C('jnd28b_tema_6');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字7,20</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_7" value="<?php echo C('jnd28b_tema_7');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字8,19</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_8" value="<?php echo C('jnd28b_tema_8');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字9,18</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_9" value="<?php echo C('jnd28b_tema_9');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字10,17</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_10" value="<?php echo C('jnd28b_tema_10');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字11,16</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_11" value="<?php echo C('jnd28b_tema_11');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字12,15</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_12" value="<?php echo C('jnd28b_tema_12');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">数字13,14</label>
        <div class="col-sm-4">
            <input type="text" name="jnd28b_tema_13" value="<?php echo C('jnd28b_tema_13');?>" placeholder="输入赔率" class="form-control">
        </div>
    </div>
    <span style="color: red;">*赔率为含本赔率</span>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-primary" type="submit">保存信息</button>&nbsp;&nbsp;&nbsp;
            <a class="btn btn-danger" href="<?php echo U('Index/index');?>">取消</a>
        </div>
    </div>
    </form>
</div>
</div>
</div>
</div>
</div>

<script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/Public/Admin/js/content.min.js?v=1.0.0"></script>
<script src="/Public/Common/js/ajaxForm.js"></script>
<script src="/Public/Common/layer/layer.js"></script>
<script src="/Public/Admin/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $('.1314_open_select').change(function(){
        if ($(this).val() == 0) {
            $('.1314_open_2').hide();
            $('.1314_open_1').show();
        }else {
            $('.1314_open_1').hide();
            $('.1314_open_2').show();
        }
    });

    $(document).ready(function() {
        $(".i-checks").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green",
        })
    });
</script>
<script>
    $(function(){
        $('#signform').ajaxForm({
            success: complete,
            dataType: 'json'
        });
        function complete(data){
            if(data.status==1){
                $('.btn-primary').attr('disabled','disabled');
                layer.msg(data.info, function(index){
                    layer.close(index);
                    window.location.href=data.url;
                });
            }else{
                layer.msg(data.info);
                return false;
            }
        }
    });
</script>
</body>

</html>