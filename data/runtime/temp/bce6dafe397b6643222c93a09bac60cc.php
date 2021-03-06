<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"./application/admin/template/archives\move.htm";i:1594086333;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>移动文档</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" type="text/css" href="/public/plugins/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/public/static/common/js/jquery.min.js?v=v1.4.7"></script>
    <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=v1.4.7"></script>
    <style type="text/css">
        .container-fluid {
            padding: 10px 10px;
            overflow: hidden;
        }
        .control-group {
            padding: 5px 0px;
        }
        .input{
            width: 200px;
        }
        .select {
            height: 28px;
            font-size: 12px;
			border: 1px solid #ddd;
			border-radius:4px;
        }
        .btn{
            background-color: #4fc0e8;
            color: #FFF;
			border-radius: 4px;
			padding: 6px 20px;
        }
        .btn:hover {
            color: #FFF;
            background-color: #3aa8cf;

        }
		.controls{
			margin: 0 auto;
		}
		.notic{
			border:1px dashed #cae9f5;
			border-radius:6px;
			padding: 10px 16px;
			margin-top: 10px;
			background-color:#e7f6fc;
			color: #0d7fca;
		}
        em{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <form class="form-horizontal" id="post_form" method="POST" action="<?php echo (isset($form_action) && ($form_action !== '')?$form_action:''); ?>" onsubmit="check_submit();">
                    <div class="control-group">
                        <div class="controls"><label class="control-label" for="inputEmail"><em>*</em> 目标栏目：</label>
                            <select id="typeid" name="typeid" class="select">
                                <?php echo $arctype_html; ?>
                            </select>
                            <input type="hidden" name="aids" id="aids" value="" class="input">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <p class="notic">移动到的目标栏目必须和当前模型类型一致，否则程序会自动忽略不符合的文档。</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="hidden" name="_ajax" value="1">
                                <input type="button" class="btn" value="确认提交" onclick="check_submit();" />
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
        $('#aids').val(parent.get_aids());


        function check_submit()
        {
            layer_loading('正在处理');
            $.ajax({
                url: $('#post_form').attr('action'),
                type: 'POST',
                dataType: 'JSON',
                data: $('#post_form').serialize(),
                success: function(res){
                    layer.closeAll();
                    if (res.code == 1) {
                        parent.layer.msg(res.msg, {shade: 0.3, time: 1000}, function(){
                            parent.window.location.reload();
                            parent.layer.close(parentObj);
                        });
                    } else {
                        layer.alert(res.msg, {icon:5, title:false});
                    }
                    return false;
                },
                error: function(e){
                    layer.closeAll();
                    layer.alert('操作失败', {icon:5, title:false});
                    return false;
                }
            });
        }

        /**
         * 封装的加载层
         */
        function layer_loading(msg){
            var loading = layer.msg(
            msg+'...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请勿刷新页面', 
            {
                icon: 1,
                time: 3600000, //1小时后后自动关闭
                shade: [0.2] //0.1透明度的白色背景
            });
            //loading层
            var index = layer.load(3, {
                shade: [0.1,'#fff'] //0.1透明度的白色背景
            });

            return loading;
        }
    </script>
</body>
</html>