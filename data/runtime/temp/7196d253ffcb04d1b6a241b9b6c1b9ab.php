<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:45:"./application/admin/template/product\edit.htm";i:1594086341;s:92:"D:\www\web\bjms123_H4yI1YT2aGkYNC2RN6tm\wwwroot\application\admin\template\public\layout.htm";i:1594086342;s:97:"D:\www\web\bjms123_H4yI1YT2aGkYNC2RN6tm\wwwroot\application\admin\template\field\addonextitem.htm";i:1594086336;s:105:"D:\www\web\bjms123_H4yI1YT2aGkYNC2RN6tm\wwwroot\application\admin\template\diy_extend\archives_extend.htm";i:1594086335;s:92:"D:\www\web\bjms123_H4yI1YT2aGkYNC2RN6tm\wwwroot\application\admin\template\public\footer.htm";i:1594086342;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="/public/plugins/laydate/laydate.js"></script>

<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?v=v1.4.7"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?v=v1.4.7"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?v=v1.4.7"></script>

<body style="background-color: #FFF; overflow: auto;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>编辑产品</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>常规选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>参数选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>SEO选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='4' class="tab"><span>其他选项</span></a></li>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Product/edit'); ?>" method="post">
        <!-- 常规信息 -->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" class="input-txt" maxlength="100">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>所属栏目</label>
                </dt>
                <dd class="opt"> 
                    <select name="typeid" id="typeid">
                        <?php echo $arctype_html; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>文档属性</label>
                </dt>
                <dd class="opt">
                    <label><input type="checkbox" name="is_head" value="1" <?php if($field['is_head'] == 1): ?>checked<?php endif; ?>>头条[h]</label>&nbsp;
                    <label><input type="checkbox" name="is_recom" value="1" <?php if($field['is_recom'] == 1): ?>checked<?php endif; ?>>推荐[c]</label>&nbsp;
                    <label><input type="checkbox" name="is_special" value="1" <?php if($field['is_special'] == 1): ?>checked<?php endif; ?>>特荐[a]</label>&nbsp;
                    <label><input type="checkbox" name="is_b" value="1" <?php if($field['is_b'] == 1): ?>checked<?php endif; ?>>加粗[b]</label>&nbsp;
                    <label><input type="checkbox" name="is_litpic" value="1" <?php if($field['is_litpic'] == 1): ?>checked<?php endif; ?>>图片[p]</label>&nbsp;
                    <label><input type="checkbox" name="is_jump" value="1" <?php if($field['is_jump'] == 1): ?>checked<?php endif; ?>>跳转[j]</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if($field['is_jump'] != 1): ?>none<?php endif; ?> dl_jump">
                <dt class="tit">
                    <label>跳转网址</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['jumplinks']; ?>" name="jumplinks" id="jumplinks" class="input-txt" placeholder="http://">
                    <span class="err"></span>
                    <p class="notic">请输入完整的URL网址（包含http或https），设置后访问该条信息将直接跳转到设置的网址</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>缩略图</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" <?php if($field['is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                 title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" <?php if($field['is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                    <p class="notic">当没有手动上传图片时候，会自动提取正文的第一张图片作为缩略图</p>
                    &nbsp;<a href="javascript:void(0);" onclick="system_thumb();" class="ncap-btn ncap-btn-green">缩略图配置</a>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>图片集</label>
                </dt>
                <dd class="opt">          
                    <div class="tab-pane pics" id="tab_proimg">
                        <a href="javascript:void(0);" onClick="GetUploadify(30,'','allimg','proimg_call_back');" class="imgupload">
                            <i class="fa fa-photo"></i>上传图片
                        </a>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="sort-list">
                                    <?php if(is_array($proimg_list) || $proimg_list instanceof \think\Collection || $proimg_list instanceof \think\Paginator): $k = 0; $__LIST__ = $proimg_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <div class="images_upload" style="display:inline-block;">
                                        <div style="position: relative; height: 130px;">
                                            <input type="hidden" name="proimg[]" value="<?php echo $vo['image_url']; ?>">
                                            <a href="<?php echo $vo['image_url']; ?>" onclick="" class="upimg" target="_blank" title="拖动修改排序">
                                                <img src="<?php echo $vo['image_url']; ?>" width="120" height="120">
                                            </a>
                                            <a href="javascript:void(0)" onclick="ClearPicArr2(this,'<?php echo $vo['image_url']; ?>')" class="delect">删除</a>
                                        </div>
                                        <textarea rows="5" cols="60" name="imgintro[]" style="height:28px; width: 136px;" placeholder="图片注释"><?php echo $vo['intro']; ?></textarea>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="images_upload">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 上传图片显示的样板 start -->
                    <div class="images_upload_tpl none">
                        <div class="images_upload">
                            <div style="position: relative; height: 130px;">
                                <input type="hidden" name="proimg[]" value="" />
                                <a href="javascript:void(0);" onClick="" class="upimg" title="拖动修改排序">
                                    <img src="/public/static/admin/images/add-button.jpg" width="120" height="120" />
                                </a>
                                <a href="javascript:void(0)" class="delect">&nbsp;&nbsp;</a>
                            </div>
                            <textarea rows="5" cols="60" name="imgintro[]" style="height:28px; width: 136px;" placeholder="图片注释"></textarea>
                        </div>
                    </div>
                    <!-- 上传图片显示的样板 end -->
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>

        <?php if(!empty($shopConfig['shop_open']) && 1 == $shopConfig['shop_open']): ?>
            <!-- 产品价格属性 -->
            <?php if($shopConfig['shop_type'] == '2'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="uname">产品类型</label>
                    </dt>
                    <dd class="opt">
                        <label>
                            <input type="radio" name="prom_type" value="0" onclick="change_prom_type(0)" <?php if($field['prom_type'] == '0'): ?> checked="checked" <?php endif; ?> />普通产品
                        </label>
                        <br/>
                        <label>
                            <input type="radio" name="prom_type" value="1" onclick="change_prom_type(1)" <?php if(in_array(($field['prom_type']), explode(',',"1,2,3"))): ?> checked="checked" <?php endif; ?>/>虚拟产品
                        </label>
                    </dd>
                </dl>
            <?php else: if(empty($IsSame) || (($IsSame instanceof \think\Collection || $IsSame instanceof \think\Paginator ) && $IsSame->isEmpty())): ?>
                    <input type="hidden" name="prom_type" value="<?php echo $field['prom_type']; ?>"/>
                <?php else: ?>
                    <dl class="row">
                        <dt class="tit">
                            <label for="uname">产品类型</label>
                        </dt>
                        <dd class="opt">
                            <label>
                                <input type="radio" name="prom_type" value="0" onclick="change_prom_type(0)" <?php if($field['prom_type'] == '0'): ?> checked="checked" <?php endif; ?> />普通产品
                            </label>
                            <br/>
                            <label>
                                <input type="radio" name="prom_type" value="1" onclick="change_prom_type(1)" <?php if(in_array(($field['prom_type']), explode(',',"1,2,3"))): ?> checked="checked" <?php endif; ?>/>虚拟产品
                            </label>
                        </dd>
                    </dl>
                <?php endif; endif; endif; ?>

        <dl class="row" id="fahuoxingshi" <?php if(empty($field['prom_type']) || (($field['prom_type'] instanceof \think\Collection || $field['prom_type'] instanceof \think\Paginator ) && $field['prom_type']->isEmpty())): ?> style="display: none;" <?php endif; ?>>
            <dt class="tit">
                <label for="fahuo">发货形式</label>
            </dt>
            <dd class="opt">
                <label>
                    <input type="radio" name="prom_type_vir" value="1" onclick="change_prom_type(2)" <?php if($field['prom_type'] == '1'): ?> checked="checked" <?php endif; ?>/>手动发货
                </label>
                &nbsp;
                <label>
                    <input type="radio" name="prom_type_vir" value="2" onclick="change_prom_type(3)" <?php if($field['prom_type'] == '2'): ?> checked="checked" <?php endif; ?>/>网盘下载
                </label>
                &nbsp;
                <label>
                    <input type="radio" name="prom_type_vir" value="3" onclick="change_prom_type(4)" <?php if($field['prom_type'] == '3'): ?> checked="checked" <?php endif; ?>/>文本内容
                </label>
            </dd>
        </dl>
        <div id="wangpanxiazai" <?php if($field['prom_type'] != '2'): ?> style="display: none;" <?php endif; ?>>
            <dl class="row">
                <dt class="tit">
                    <label for="netdisk_url"><em>*</em>网盘地址</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="netdisk_url" id="netdisk_url" value="<?php echo (isset($netdisk['netdisk_url']) && ($netdisk['netdisk_url'] !== '')?$netdisk['netdisk_url']:''); ?>" class="input-txt" placeholder="http://">
                    <span class="err"></span>
                    <p class="notic">输入完整的URL网址（包含http或https）</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="netdisk_pwd">提取码</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="netdisk_pwd" value="<?php echo (isset($netdisk['netdisk_pwd']) && ($netdisk['netdisk_pwd'] !== '')?$netdisk['netdisk_pwd']:''); ?>" id="netdisk_pwd" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="unzip_pwd">解压密码</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="unzip_pwd" value="<?php echo (isset($netdisk['unzip_pwd']) && ($netdisk['unzip_pwd'] !== '')?$netdisk['unzip_pwd']:''); ?>" id="unzip_pwd" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
        </div>
        <dl class="row" id="wenbenneirong" <?php if($field['prom_type'] != '3'): ?> style="display: none;" <?php endif; ?>>
            <dt class="tit">
                <label for="text_content"><em>*</em>文本内容</label>
            </dt>
            <dd class="opt">
                <textarea rows="5" cols="80" id="text_content" name="text_content" style="width: 375px;height:160px;"><?php echo (isset($netdisk['text_content']) && ($netdisk['text_content'] !== '')?$netdisk['text_content']:''); ?></textarea>
                <p class="notic"></p>
            </dd>
        </dl>
        
        <?php if(1 == $shopConfig['shop_open'] && !empty($ifcontrolRow['users_price'])): if(!isset($shopConfig['shop_open_spec']) || 0 == $shopConfig['shop_open_spec']): else: ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="users_price">商品规格</label>
                    </dt>
                    <dd class="opt">
                        <div>
                            <div>
                                <input type="hidden" id="spec_mark_id_arr" value="<?php echo $spec_mark_id_arr; ?>">
                                <select name="spec_value" id="spec_value" onchange="SpecSelectName(this)">
                                    <option value="0">选择规格名称</option>
                                    <?php if(is_array($preset_value) || $preset_value instanceof \think\Collection || $preset_value instanceof \think\Paginator): $i = 0; $__LIST__ = $preset_value;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['preset_mark_id']; ?>"><?php echo $vo['preset_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <a href="javascript:void(0);" onclick="SpecTempLate();" class="ncap-btn ncap-btn-green">规格模板库</a>
                            </div><br/>
                            <div id='SpecSelectName'><?php if(is_array($SpecSelectName) || $SpecSelectName instanceof \think\Collection || $SpecSelectName instanceof \think\Paginator): $i = 0; $__LIST__ = $SpecSelectName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><?php echo $vo; endforeach; endif; else: echo "" ;endif; ?></div>
                        </div>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="users_price">价格/库存</label>
                    </dt>
                    <dd class="opt">
                        <div id='SpecTempLateDiv'>
                            <?php echo $HtmlTable; ?>
                        </div>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
            <?php endif; endif; if(!empty($ifcontrolRow['users_price'])): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="users_price">
                        <?php if(1 == $shopConfig['shop_open']): ?><em>*</em><?php endif; ?>价格
                    </label>
                </dt>
                <dd class="opt">
                    <input type="text" name="users_price" id="users_price" maxlength="100" placeholder="原价" style="width: 10%;" value="<?php echo $field['users_price']; ?>">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
        <?php endif; if(1 == $shopConfig['shop_open'] && !empty($ifcontrolRow['users_price'])): if(empty($shopConfig['shop_open_spec'])): ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="stock_count">库存</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" name="stock_count" style="width: 10%;" value="<?php if(empty($field['stock_count']) || (($field['stock_count'] instanceof \think\Collection || $field['stock_count'] instanceof \think\Paginator ) && $field['stock_count']->isEmpty())): ?>99999<?php else: ?><?php echo $field['stock_count']; endif; ?>">
                        <label>
                            <input type="checkbox" name="stock_show" value='1' <?php if($field['stock_show'] == '1'): ?>checked<?php endif; ?>>页面显示商品库存
                        </label>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
            <?php else: ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="stock_count">库存</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" name="stock_count" <?php if(!(empty($spec_mark_id_arr) || (($spec_mark_id_arr instanceof \think\Collection || $spec_mark_id_arr instanceof \think\Paginator ) && $spec_mark_id_arr->isEmpty()))): ?>readonly="readonly"<?php endif; ?> id="stock_count" style="width: 10%;" maxlength="100" value="<?php echo $field['stock_count']; ?>">
                        <label>
                            <input type="checkbox" name="stock_show" value='1' <?php if($field['stock_show'] == '1'): ?>checked<?php endif; ?>>页面显示商品库存
                        </label>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    // 规格列表管理
                    var TemplateUrl = "<?php echo url('Shop/spec_template'); ?>";
                    // 规格选择
                    var SelectUrl = "<?php echo url('Shop/spec_select'); ?>";
                    // 获取规格名称规格值框架URL
                    var GetHtmlUrl = "<?php echo url('Shop/assemble_spec_data'); ?>";
                    // 当规格库更新后，调用此方式及时更新选择规格名称的下拉框信息
                    var GetPresetSpecUrl = "<?php echo url('Shop/update_spec_info'); ?>";
                    // 同步更新规格库数据到产品规格中，单条操作
                    var RefreshSpecUrl = "<?php echo url('Shop/refresh_spec_value'); ?>";
                </script>
                <script type="text/javascript">
                    $(function () {
                        var stock_count = 0;
                        $('.stock_count').each(function(){
                            stock_count +=+ $(this).val();
                        })
                        if (0 === stock_count) {
                            stock_count = '<?php echo $field['stock_count']; ?>';
                        }
                        $('#stock_count').val(stock_count);
                        // 取最小值价格
                        UpPrice();
                        // 合并单元格
                        MergeCells();
                    });

                    // 规格列表管理
                    function SpecTempLate() {
                        //iframe窗
                        layer.open({
                            type: 2,
                            title: '规格模板库',
                            shadeClose: false,
                            maxmin: false, //开启最大化最小化按钮
                            area: ['90%', '90%'],
                            content: TemplateUrl
                        });
                    }

                    // 更新同步规格值信息
                    function RefreshSpecValue(obj) {
                        layer.confirm('此操作将会把规格库<span style="color:red;">'+$(obj).data('name')+'</span>的规格数据同步更新！操作不可逆，确认同步？', {
                            title: false,
                            btn: ['确定', '取消']
                        }, function () {
                            layer_loading('正在处理');
                            var mark_id = $(obj).data('mark_id');
                            if (mark_id) {
                                var aid = $("input[name=aid]").val();
                                $.ajax({
                                    type : 'post',
                                    url  : RefreshSpecUrl,
                                    data : {spec_mark_id:mark_id, aid:aid, _ajax:1},
                                    dataType : 'json',
                                    success : function(res){
                                        layer.closeAll();
                                        if (res.data) {
                                            // 更新规格值下拉框
                                            if (res.data.ValueOption) {
                                                $('#spec_value_'+mark_id).empty().html(res.data.ValueOption);
                                            }

                                            // 更新页面上已选的规格名称及规格值
                                            if (res.data.UpData) {
                                                for (var i = 0; i < res.data.UpData.length; i++) {
                                                    /*替换已选商品规格名称及规格值*/
                                                    // 替换规格名称
                                                    $('.spec_name_span_'+res.data.UpData[i]['spec_mark_id']).html(res.data.UpData[i]['spec_name']);
                                                    $('.spec_name_input_'+res.data.UpData[i]['spec_mark_id']).val(res.data.UpData[i]['spec_name']);
                                                    if (res.data.UpData[i]['spec_value_id']) {
                                                        // 替换规格值
                                                        $('.spec_value_span_'+res.data.UpData[i]['spec_value_id']).html(res.data.UpData[i]['spec_value']);
                                                        $('.spec_value_input_'+res.data.UpData[i]['spec_value_id']).val(res.data.UpData[i]['spec_value']);    
                                                    }
                                                    /* END */
                                                }
                                            }
                                            
                                            // 清除页面上已选的规格数据
                                            if (res.data.SpecIds) {
                                                if (res.data.DelAllSpec) {
                                                    $('#spec_'+res.data.DelAllSpec).remove();
                                                }else{
                                                    for (var i = 0; i < res.data.SpecIds.length; i++) {
                                                        $('#preset-bt2_'+res.data.SpecIds[i]).remove();
                                                    }    
                                                }
                                            }

                                            // 重新加载规格价格库存填写栏
                                            if (res.data.HtmlTable && res.data.SpecMarks) {
                                                // 加载规格框架
                                                $('#SpecTempLateDiv').html(res.data.HtmlTable);
                                                // 合并单元格
                                                MergeCells();
                                                $('#spec_mark_id_arr').val(res.data.SpecMarks);
                                            }
                                        }
                                        layer.msg(res.msg, {time:1500, icon: 1});
                                    },
                                    error : function() {
                                        layer.closeAll();
                                        layer.alert('未知错误，无法继续！', {icon: 5});
                                    }
                                });
                            }else{
                                layer.closeAll();
                                layer.msg('数据有误，同步失败，请刷新重试！', {time:2000, icon: 2});
                            }
                        }, function (index) {
                            // 取消
                            layer.closeAll(index);
                        });
                    }

                    // 加载下拉框
                    function SpecSelectName(obj) {
                        var aid              = $("input[name=aid]").val();
                        var spec_mark_id     = $(obj).val();
                        var spec_mark_id_arr = $('#spec_mark_id_arr').val();
                        var aid = $("input[name=aid]").val();

                        $.ajax({
                            type : 'post',
                            url  : SelectUrl,
                            data : {aid:aid,spec_mark_id:spec_mark_id,spec_mark_id_arr:spec_mark_id_arr,preset_mark_id_arr:spec_mark_id_arr,_ajax:1},
                            dataType : 'json',
                            success : function(res){
                                if (0 == res.code) {
                                    showErrorMsg(res.msg);
                                }else{
                                    var html = [];
                                    // 主DIV加载
                                    html += [
                                        '<div class="prset-box" id="preset_'+spec_mark_id+'">'+
                                            '<div id="div_'+spec_mark_id+'">'+
                                                '<div><span class="preset-bt"><span class="spec_name_span_'+spec_mark_id+'">'+res.data.preset_name+'</span><em data-name="'+res.data.preset_name+'" data-mark_id="'+spec_mark_id+'" onclick="DelDiv(this)"><i class="fa fa-times-circle" title="关闭"></i></em></span>'+
                                                    '<span id="SelectEd_'+spec_mark_id+'"></span> &nbsp; &nbsp;'+
                                                    '<select name="spec_value" id="spec_value_'+spec_mark_id+'" onchange="AppEndPreset(this,'+spec_mark_id+')">'+
                                                    '</select> &nbsp; <span title="同步规格值" data-mark_id="'+spec_mark_id+'" data-name="'+res.data.preset_name+'" onclick="RefreshSpecValue(this);"><i class="fa fa-refresh"></i></span>'+
                                                '</div>'+
                                            '</div><br/>'+
                                        '</div>'
                                    ];
                                    $('#SpecSelectName').append(html);
                                    // 预设值加载
                                    $('#spec_value_'+spec_mark_id).empty().html(res.data.preset_value_option);
                                    // 更新预设名称下拉框
                                    res.data.preset_name_option = '<option value="0">选择规格名称</option>'+ res.data.preset_name_option;
                                    $('#spec_value').empty().html(res.data.preset_name_option);
                                    $('#spec_mark_id_arr').val(res.data.spec_mark_id_arr); 
                                }
                            }
                        });
                    }

                    // 清除session中的指定数据，同时对数据库进行操作
                    function DelDiv(obj) {
                        var del_mark_id = $(obj).attr('data-mark_id');
                        var spec_mark_id_arr = $('#spec_mark_id_arr').val();
                        var aid = $("input[name=aid]").val();
                        $.ajax({
                            type : 'post',
                            url  : GetHtmlUrl,
                            data : {aid:aid,del_mark_id:del_mark_id,spec_mark_id_arr:spec_mark_id_arr,_ajax:1},
                            dataType : 'json',
                            success : function(res){
                                layer.closeAll();
                                // 清除页面html
                                $(obj).parent().parent().parent().parent().remove();
                                if (res.data.HtmlTable) {
                                    // 加载规格框架
                                    $('#SpecTempLateDiv').html(res.data.HtmlTable);
                                    // 合并单元格
                                    MergeCells();
                                }
                                // 更新预设名称下拉框
                                res.data.PresetNameOption = '<option value="0">选择规格名称</option>'+ res.data.PresetNameOption;
                                $('#spec_value').empty().html(res.data.PresetNameOption);
                                $('#spec_mark_id_arr').val(res.data.PresetMarkIdArray);
                            }
                        });
                    }

                    // 清除session中的指定数据，同时对数据库进行操作
                    function DelValue(obj) {
                        var del_mark_id   = $(obj).attr('data-mark_id');
                        var del_preset_id = $(obj).attr('data-preset_id');
                        var aid = $("input[name=aid]").val();

                        $.ajax({
                            type : 'post',
                            url  : GetHtmlUrl,
                            data : {aid:aid,del_preset_id:del_preset_id,del_mark_id:del_mark_id,_ajax:1},
                            dataType : 'json',
                            success : function(res){
                                layer.closeAll();
                                // 清除页面html
                                $(obj).parent().remove();
                                if (res.data.PresetValueOption) {
                                    $('#spec_value_'+del_mark_id).empty().html(res.data.PresetValueOption);
                                }
                                if (res.data.HtmlTable) {
                                    // 加载规格框架
                                    $('#SpecTempLateDiv').html(res.data.HtmlTable);
                                    // 合并单元格
                                    MergeCells();
                                }
                            }
                        });
                    }

                    // 追加预设规格名称和规格值
                    function AppEndPreset(obj, preset_mark_id) {
                        var preset_id = $(obj).val();
                        var aid = $("input[name=aid]").val();
                        $.ajax({
                            type : 'post',
                            url  : GetHtmlUrl,
                            data:{aid:aid,preset_id:preset_id,preset_mark_id:preset_mark_id,_ajax:1},
                            dataType : 'json',
                            success : function(res){
                                if (0 == res.code) {
                                    showErrorMsg(res.msg);
                                }else{
                                    // 追加选中的值
                                    $('#SelectEd_'+preset_mark_id).append(
                                        '<span class="preset-bt2" id="preset-bt2_'+preset_id+'"><span class="spec_value_span_'+preset_id+'">'+res.data.SelectPresetValue+'</span><em data-value="'+res.data.SelectPresetValue+'" data-mark_id="'+preset_mark_id+'" data-preset_id="'+preset_id+'" onclick="DelValue(this)"><i class="fa fa-times-circle" title="关闭"></i></em> &nbsp; </span>'
                                    );
                                    if (res.data.PresetValueOption) {
                                        $('#spec_value_'+preset_mark_id).empty().html(res.data.PresetValueOption);
                                    }
                                    if (res.data.HtmlTable) {
                                        // 加载规格框架
                                        $('#SpecTempLateDiv').html(res.data.HtmlTable);
                                        // 合并单元格
                                        MergeCells();
                                    }
                                }
                            }
                        });
                    }

                    // 当规格库更新后，调用此方式及时更新选择规格名称的下拉框信息及规格框信息
                    function UpPresetSpecData(preset_mark_id) {
                        var spec_mark_id_arr = $('#spec_mark_id_arr').val();
                        var aid = $("input[name=aid]").val();
                        $.ajax({
                            type : 'post',
                            url  : GetPresetSpecUrl,
                            data : {aid:aid,preset_mark_id:preset_mark_id,spec_mark_id_arr:spec_mark_id_arr,preset_mark_id_arr:spec_mark_id_arr,_ajax:1},
                            dataType : 'json',
                            success : function(res){
                                // 更新规格名称下拉框
                                res.data.spec_name_option = '<option value="0">选择规格名称</option>'+ res.data.spec_name_option;
                                $('#spec_value').empty().html(res.data.spec_name_option);
                            }
                        });
                    }

                    function RefreshPresetValue(preset_id, preset_mark_id) {
                        // 编辑产品时，无需处理
                    }

                    // 批量设置价格
                    function BulkSetPrice(obj) {
                        layer.prompt({
                            title: false, 
                            formType: 3,
                            id: 'BulkSetPrice',
                            btn: ['确定', '关闭'],
                            closeBtn: 0,
                            success: function(layero, index){
                                $("#BulkSetPrice").find('input').attr('placeholder', '批量设置价格');
                                $("#BulkSetPrice").find('input').attr('onkeyup', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                $("#BulkSetPrice").find('input').attr('onpaste', "this.value=this.value.replace(/[^\\d.]/g,'')");
                            }
                        }, function(price, index){
                            layer.close(index);
                            // 规格中的价格
                            $('.users_price').val(price);
                            // 产品价格
                            $('#users_price').val(price);
                        });
                    }

                    // 更新价格，取出最小的值赋值到价格中
                    function UpPrice(obj) {
                        var UsersPriceArray = new Array();
                        $('.users_price').each(function(){
                            UsersPriceArray.push($(this).val());
                        });
                        if (UsersPriceArray.length != 0) {
                            // 取出最小值
                            var MinValue = Math.min.apply(Math, UsersPriceArray);
                            // 禁用库存框
                            $('#users_price').attr('readonly','readonly');
                        }else{
                            var MinValue = '<?php echo $field['users_price']; ?>';
                        }
                        $('#users_price').val(MinValue);
                    }

                    // 批量设置库存
                    function BulkSetStock(obj) {
                        layer.prompt({
                            title: false, 
                            formType: 3,
                            id: 'BulkSetStock',
                            btn: ['确定', '关闭'],
                            closeBtn: 0,
                            success: function(layero, index){
                                $("#BulkSetStock").find('input').attr('placeholder', '批量设置库存');
                                $("#BulkSetStock").find('input').attr('onkeyup', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                $("#BulkSetStock").find('input').attr('onpaste', "this.value=this.value.replace(/[^\\d.]/g,'')");
                            }
                        }, function(stock, index){
                            layer.close(index);
                            // 单个库存
                            $('.stock_count').val(stock);
                            $('.stock_count').attr('data-old_stock',stock);
                            stock_count = Number($('.stock_count').length) * Number(stock);
                            $('#stock_count').val(stock_count);
                            // 禁用库存框
                            $('#stock_count').attr('readonly','readonly');
                        });
                    }

                    // 更新库存量
                    function UpStock(obj) {
                        var stock_count = $('#stock_count').val();
                        var new_stock = $(obj).val();
                        var old_stock = $(obj).attr('data-old_stock');
                        $(obj).attr('data-old_stock',new_stock);
                        if (Number(old_stock) > Number(new_stock)) {
                            new_stock   = Number(old_stock) - Number(new_stock);
                            stock_count = Number(stock_count) - Number(new_stock);
                        }else{
                            new_stock   = Number(new_stock) - Number(old_stock);
                            stock_count = Number(stock_count) + Number(new_stock);
                        }
                        $('#stock_count').val(stock_count);
                    }

                    // 合并单元格
                    function MergeCells() {
                        var tab = document.getElementById("spec_input_tab");
                        var maxCol = 2, val, count, start; 
                        if (tab != null) {
                            for (var col = maxCol - 1; col >= 0; col--) {
                                count = 1;
                                val = "";
                                for (var i = 0; i < tab.rows.length; i++) {
                                    if (val == tab.rows[i].cells[col].innerHTML) {
                                        count++;
                                    } else {
                                        if (count > 1) { //合并
                                            start = i - count;
                                            tab.rows[start].cells[col].rowSpan = count;
                                            for (var j = start + 1; j < i; j++) {
                                                tab.rows[j].cells[col].style.display = "none";
                                            }
                                            count = 1;
                                        }
                                        val = tab.rows[i].cells[col].innerHTML;
                                    }
                                }
                                if (count > 1) { //合并，最后几行相同的情况下
                                    start = i - count;
                                    tab.rows[start].cells[col].rowSpan = count;
                                    for (var j = start + 1; j < i; j++) {
                                        tab.rows[j].cells[col].style.display = "none";
                                    }
                                }
                            }
                        }
                    }
                </script>
            <?php endif; ?>
            <!-- 产品价格属性 -->
        <?php endif; ?>

            
<!-- 用户自定义扩展模板文件 -->

<!-- 用户自定义扩展模板文件，仅用于文档的新增和编辑页面 -->

<?php 
    // 这里可以实现原生php代码
    $diyExtendLogic = new \app\admin\logic\DiyExtendLogic;
 ?>

<!-- 这里自定义HTML表单代码 -->

<!-- end -->

<?php if(is_array($addonFieldExtList) || $addonFieldExtList instanceof \think\Collection || $addonFieldExtList instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!isset($vo['ifeditable']) || $vo['ifeditable']): switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <dl class="row" style="display: none;">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="hidden" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 隐藏域 start -->
            <?php break; case "region": ?>
                <!-- 区域选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <label>
                                <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2['id']; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2['id'], $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><?php echo $v2['name']; ?>
                            </label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 区域选项 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">          
                        <textarea rows="5" cols="60" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" style="height:60px;"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?> onclick="func_<?php echo $vo['name']; ?>_eyempty();"><?php echo $v2; ?></label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]" value="<?php if(!empty($vo['trueValue'])): ?>1<?php else: ?>0<?php endif; ?>">
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    function func_<?php echo $vo['name']; ?>_eyempty()
                    {
                        var len = $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>][]']:checked").length;
                        $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]']").val(len);
                    }
                </script>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <label><input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><?php echo $v2; ?></label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 单选项 end -->
            <?php break; case "switch": ?>
                <!-- 开关 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="onoff">
                            <label for="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>1" class="cb-enable <?php if(0 != $vo['dfvalue']): ?>selected<?php endif; ?>">是</label>
                            <label for="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>0" class="cb-disable <?php if(0 == $vo['dfvalue']): ?>selected<?php endif; ?>">否</label>
                            <input id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>1" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="1" type="radio" <?php if(0 != $vo['dfvalue']): ?>checked="checked"<?php endif; ?>>
                            <input id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>0" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="0" type="radio" <?php if(0 == $vo['dfvalue']): ?>checked="checked"<?php endif; ?>>
                        </div>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 开关 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 下拉框 end -->
            <?php break; case "img": ?>
                <!-- 单张图 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="input-file-show div_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                            <span class="show">
                                <a id="img_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:'javascript:void(0);'); ?>">
                                    <i id="img_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="fa fa-picture-o" <?php if(!(empty($vo[$vo['name'].'_eyou_local']) || (($vo[$vo['name'].'_eyou_local'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_local'] instanceof \think\Paginator ) && $vo[$vo['name'].'_eyou_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $vo[$vo['name'].'_eyou_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                                </a>
                            </span>
                            <span class="type-file-box">
                                <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="type-file-text">
                                <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                                <input class="type-file-file" onClick="GetUploadify(1,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back')" size="30" hidefocus="true" nc_type="change_site_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>"
                                     title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                            </span>
                        </div>
                        <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote]" value="<?php echo (isset($vo[$vo['name'].'_eyou_remote']) && ($vo[$vo['name'].'_eyou_remote'] !== '')?$vo[$vo['name'].'_eyou_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                        &nbsp;
                        <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote" value="1" <?php if($vo[$vo['name'].'_eyou_is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, '<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou');">远程图片</label>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(fileurl_tmp)
                    {
                      $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(fileurl_tmp);
                      $("#img_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href', fileurl_tmp);
                      $("#img_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
                    }
                </script>
                <!-- 单张图 end -->
            <?php break; case "file": ?>
            <!-- 单个文件 start -->
            <dl class="row">
                <dt class="tit">
                    <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="nyroModal" rel="gal" href="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:'javascript:void(0);'); ?>" download="<?php echo get_filename($vo[$vo['name'].'_eyou_local']); ?>">
                                <i id="file_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="layui-icon layui-icon-file-b" ></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="type-file-text">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input title="点击前方文件图标可下载文件，点击按钮选择文件并提交表单后上传生效" class="type-file-file" type="file" onchange="upload_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_1585641737(this)" size="30" hidefocus="true" nc_type="change_site_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                        </span>
                    </div>
                    <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote]" value="<?php echo (isset($vo[$vo['name'].'_eyou_remote']) && ($vo[$vo['name'].'_eyou_remote'] !== '')?$vo[$vo['name'].'_eyou_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote" value="1" <?php if($vo[$vo['name'].'_eyou_is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, '<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou');">远程文件</label>
                    <span class="err"></span>
                    <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                </dd>
            </dl>
            <script type="text/javascript">
                function upload_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_1585641737(e){
                    var file = $(e)[0].files[0]
                    var formData = new FormData();
                    formData.append('file',file);
                    $.ajax({
                        type: 'post',
                        url: "<?php echo url('Ueditor/DownloadUploadFileAjax'); ?>",
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function (res) {
                            if (res.code==0){
                                layer.msg(res.msg)
                            }else {
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(res.file_url);
                                $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href',res.file_url);
                                var  arr = res.file_url.split("/");
                                var download = arr[arr.length-1];
                                $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('download',download);
                            }
                        }
                    })
                }
            </script>
            <!-- 单个文件 end -->
            <?php break; case "imgs": ?>
                <!-- 多张图 start -->
                <dl class="row" id="dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="tab-pane pics" id="tab_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <a href="javascript:void(0);" onClick="GetUploadify(100,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back');" class="imgupload">
                                <i class="fa fa-photo"></i>上传图片
                            </a>
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td class="sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                                        <?php if(is_array($vo[$vo['name'].'_eyou_imgupload_list']) || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Paginator): $k2 = 0; $__LIST__ = $vo[$vo['name'].'_eyou_imgupload_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($k2 % 2 );++$k2;?>
                                        <div class="images_upload" style="display:inline-block;">
                                            <div style="position: relative; height: 130px;">
                                                <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2['image_url']; ?>">
                                                <a href="<?php echo $v2['image_url']; ?>" onclick="" class="upimg" target="_blank" title="拖动修改排序">
                                                    <img src="<?php echo $v2['image_url']; ?>" width="100" height="100">
                                                </a>
                                                <a href="javascript:void(0)" onclick="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'<?php echo $v2['image_url']; ?>')" class="delect">删除</a>
                                            </div>
                                            <textarea rows="5" cols="60" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_intro][]" style="height:28px; width: 136px;" placeholder="图片注释"><?php echo $v2['intro']; ?></textarea>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <div class="images_upload">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 上传图片显示的样板 start -->
                        <div class="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl none">
                            <div class="images_upload" style="display:inline-block;">
                                <div style="position: relative; height: 130px;">
                                    <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="" />
                                    <a href="javascript:void(0);" onClick="" class="upimg" title="拖动修改排序">
                                        <img src="/public/static/admin/images/add-button.jpg" width="100" height="100" />
                                    </a>
                                    <a href="javascript:void(0)" class="delect">&nbsp;&nbsp;</a>
                                </div>
                                <textarea rows="5" cols="60" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_intro][]" style="height:28px; width: 136px;" placeholder="图片注释"></textarea>
                            </div>
                        </div>
                        <!-- 上传图片显示的样板 end -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    // 上传多图回调函数
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(paths){
                        
                        var  last_div = $(".<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl").html();
                        for (var i=0;i<paths.length ;i++ )
                        {
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images_upload:eq(0)").before(last_div);  // 插入一个 新图片
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images_upload:eq(0)").find('a:eq(0)').attr('href',paths[i]).attr('onclick','').attr('target', "_blank");// 修改他的链接地址
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images_upload:eq(0)").find('img').attr('src',paths[i]);// 修改他的图片路径
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images_upload:eq(0)").find('a:eq(1)').attr('onclick',"<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'"+paths[i]+"')").text('删除');
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images_upload:eq(0)").find('input').val(paths[i]); // 设置隐藏域 要提交的值
                        }             
                    }
                    /*
                     * 上传之后删除组图input     
                     * @access   public
                     * @val      string  删除的图片input
                     */
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(obj,path)
                    {
                        // 删除数据库记录
                        $.ajax({
                            type:'GET',
                            url:"<?php echo url('Field/del_channelimgs', ['_ajax'=>1]); ?>",
                            data:{filename:path,channel:"<?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>",fieldname:"<?php echo $vo['name']; ?>",aid:"<?php echo (isset($aid) && ($aid !== '')?$aid:'0'); ?>"},
                            success:function(){
                                $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                                $.ajax({
                                    type:'GET',
                                    url:"<?php echo url('Uploadify/delupload', ['_ajax'=>1]); ?>",
                                    data:{action:"del", filename:path},
                                    success:function(){}
                                });
                            }
                        });    
                    }

                    /** 以下 产品相册的拖动排序相关 js*/

                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).sortable({
                        start: function( event, ui) {
                        
                        }
                        ,stop: function( event, ui ) {

                        }
                    });
                    //因为他们要拖动，所以尽量设置他们的文字不能选择。 
                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).disableSelection();
                </script>
                <!-- 多张图 end -->
            <?php break; case "int": ?>
                <!-- 整数类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="只允许纯数字" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 整数类型 end -->
            <?php break; case "float": ?>
                <!-- 小数类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的数值" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 小数类型 end -->
            <?php break; case "decimal": ?>
                <!-- 金额类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的金额" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 金额类型 end -->
            <?php break; case "datetime": ?>
                <!-- 日期和时间 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" class="input-txt" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" value="<?php echo $vo['dfvalue']; ?>" autocomplete="off">        
                        <span class="add-on input-group-addon">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </span> 
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    $(function () {
                        $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>').layDate();   
                    });
                </script>
                <!-- 日期和时间 end -->
            <?php break; case "htmltext": ?>
                <!-- HTML文本 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">          
                        <textarea class="span12 ckeditor" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" data-func="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" title=""><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
						<div class="opt-moreOper">
							<p>
							    <a href="javascript:void(0);" onclick="remote_to_local_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();" class="ncap-btn2 ncap-btn-green">远程图片本地化</a>&nbsp;
							    <a href="javascript:void(0);" onclick="replace_links_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();" class="ncap-btn2 ncap-btn-green">清除非本站链接</a>&nbsp;
							</p>
						</div>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    UE.getEditor('<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>',{
                        serverUrl :"<?php echo url('Ueditor/index',array('savepath'=>'ueditor')); ?>",
                        zIndex: 999,
                        initialFrameWidth: "100%", //初化宽度
                        initialFrameHeight: 450, //初化高度            
                        focus: false, //初始化时，是否让编辑器获得焦点true或false
                        maximumWords: 99999,
                        removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
                        pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
                        autoHeightEnabled: false,
                        toolbars: ueditor_toolbars
                    });

                    //必须在提交前渲染编辑器；
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                        //判断编辑模式状态:0表示【源代码】HTML视图；1是【设计】视图,即可见即所得；-1表示不可用
                        if(UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").queryCommandState('source') != 0) {
                            UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").execCommand('source'); //切换到【设计】视图
                        }
                    }

                    // 远程图片本地化
                    function remote_to_local_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                        var body = UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").getContent();
                        layer_loading('下载中');
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo url('Archives/ajax_remote_to_local'); ?>",
                            data: {body:body,_ajax:1},
                            dataType: "JSON",
                            success: function(res){
                                layer.closeAll();
                                if (res.code == 1) {
                                    UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").setContent(res.data.body);
                                    layer.msg(res.msg, {icon: 1, time:1000});
                                } else {
                                    showErrorMsg(res.msg);
                                }
                            },
                            error: function(e){
                                layer.closeAll();
                                showErrorMsg(res.msg);
                            }
                        });
                    }

                    // 清除非本站链接
                    function replace_links_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                        var body = UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").getContent();
                        layer_loading('正在处理');
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo url('Archives/ajax_replace_links'); ?>",
                            data: {body:body,_ajax:1},
                            dataType: "JSON",
                            success: function(res){
                                layer.closeAll();
                                if (res.code == 1) {
                                    UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").setContent(res.data.body);
                                    layer.msg(res.msg, {icon: 1, time:1000});
                                } else {
                                    showErrorMsg(res.msg);
                                }
                            },
                            error: function(e){
                                layer.closeAll();
                                showErrorMsg(res.msg);
                            }
                        });
                    }
                </script>
                <!-- HTML文本 end -->
            <?php break; ?>

            <!-- 多媒体类型 start -->
            <?php case "media": ?>
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                            <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" style="width: 400px !important;" >
                            <!--<input  id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_click" type="file"  onchange="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload();" style="display: none;"/>-->
                            <!--<button type="button" class="layui-btn layui-btn-xs layui-btn-normal" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_upload_media" onclick="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_click_qiniu()">七牛云上传</button>-->
                            <button type="button" class="layui-btn" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media">本地上传</button>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script>
                    layui.use('upload', function(){
                        var upload = layui.upload;
                        // var load;
                        //执行实例

                        //创建监听函数
                        var xhrOnProgress=function(fun) {
                            xhrOnProgress.onprogress = fun; //绑定监听
                            //使用闭包实现监听绑
                            return function() {
                                var xhr = $.ajaxSettings.xhr(); //通过此方法获得XMLHttpRequest对象
                                //判断监听函数是否为函数
                                if (typeof xhrOnProgress.onprogress !== 'function') {
                                    return xhr;
                                }
                                //如果有监听函数并且xhr对象支持绑定时就把监听函数绑定上去
                                if (xhrOnProgress.onprogress && xhr.upload) {
                                    xhr.upload.onprogress = xhrOnProgress.onprogress;
                                }
                                return xhr;
                            }
                        };

                        upload.render({
                            elem: "#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media" //绑定元素
                            ,url: "<?php echo url('Ueditor/upVideo'); ?>" //上传接口
                            ,accept: 'file' //普通文件
                            ,before: function(obj){
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media").text('等待中...');
                            }
                            ,xhr:xhrOnProgress
                            ,progress: function(percent) {
                                //上传进度回调 value进度值
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media").text('上传中...'+percent+'%');
                            }
                            ,done: function(res){
                                if ("SUCCESS" == res.state) {
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url").val(res.url);
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media").text('上传成功');
                                    setTimeout(function(){
                                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media").text('本地上传');
                                    }, 3000 )
                                }else {
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media").text('上传失败');
                                    setTimeout(function(){
                                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media").text('本地上传');
                                    }, 3000 )
                                    layer.msg(res.state,{icon: 2});
                                }
                            }
                            ,error: function(){
                                // layer.close(load); //关闭loading
                            }
                        });
                    });

                    // function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_click_qiniu()
                    // {
                    //     $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_click").trigger("click");
                    // }
                    //
                    // function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload()
                    // {
                    //     $.ajax({
                    //         type: 'POST',
                    //         url: "<?php echo url('Media/qiniu_upload'); ?>",
                    //         data: {_ajax:1},
                    //         dataType: "JSON",
                    //         success: function(res){
                    //             if (1 == res.code){
                    //                 var token  = res.token;
                    //                 var formData = new FormData();
                    //                 var file = $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_click")[0].files[0];  //获取文件路径名
                    //                 formData.append('file', file);
                    //                 formData.append('token', token);
                    //
                    //                 var fileName = file.name;
                    //                 var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                    //                 var fileName = randomString()+fileExt;
                    //                 formData.append('key', fileName);
                    //                 $.ajax({
                    //                     url: "http://up-z2.qiniup.com/",
                    //                     type: 'POST',
                    //                     dataType: 'JSON',
                    //                     data: formData,
                    //                     timeout: 1200000,
                    //                     cache: false,  //默认是true，但是一般不做缓存
                    //                     processData: false, //用于对data参数进行序列化处理，这里必须false；如果是true，就会将FormData转换为String类型
                    //                     contentType: false,  //一些文件上传http协议的关系，自行百度，如果上传的有文件，那么只能设置为false
                    //                     xhr: function () { //获取ajaxSettings中的xhr对象，为它的upload属性绑定progress事件的处理函数
                    //                         myXhr = $.ajaxSettings.xhr();
                    //                         if (myXhr.upload) { //检查upload属性是否存在
                    //                             //绑定progress事件的回调函数
                    //                             // myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                    //                             myXhr.upload.addEventListener('progress', function(e){
                    //                                 var curr = e.loaded;
                    //                                 var total = e.total;
                    //                                 process = parseInt(curr / total * 100);
                    //                                 $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_upload_media").text('上传中...'+process+"%");
                    //                             });
                    //                         }
                    //
                    //                         return myXhr; //xhr对象返回给jQuery使用
                    //                     },
                    //                     success: function(res){
                    //                         $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url").val("http://qiniu.ebuycms.com/"+res.key);
                    //                         $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_upload_media").text('上传成功');
                    //                         setTimeout(function(){
                    //                             $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qiniu_upload_media").text('七牛云上传');
                    //                         }, 3000 )
                    //                     },
                    //                     error: function(e){
                    //                         showErrorMsg('请求上传失败！');
                    //                         return false;
                    //                     }
                    //                 });
                    //             }else{
                    //                 showErrorMsg(res.msg);
                    //             }
                    //         },
                    //         error: function(e){
                    //             showErrorMsg(e);
                    //         }
                    //     });
                    // }
                </script>
            <?php break; ?>
            <!-- 多媒体类型 end -->
        <?php endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 常规信息 -->
        <!-- 产品参数 -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
            <dl class="row">
                <div class="tab-pane" id="tab_product_spec">
                    <table class="table table-bordered" width="100%">
                        <tr>
                            <td>
                                <!-- 操作说明 -->
                                <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
                                    <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
                                        <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                                        <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <?php if(empty($typeid) || (($typeid instanceof \think\Collection || $typeid instanceof \think\Paginator ) && $typeid->isEmpty())): ?>
                                            请先在【常规选项】里选择产品主栏目，再点击【<a href="<?php echo url('Product/attribute_index', array('typeid'=>$field['typeid'])); ?>">参数选项</a>】进行更多操作。
                                            <?php else: ?>
                                            如果想对产品参数进行新增、修改、删除等操作，请点击【<a href="<?php echo url('Product/attribute_index', array('typeid'=>$field['typeid'])); ?>">参数选项</a>】进行更多操作。
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </dl>
            <dl class="row" style="margin-top: 10px;" id="product_attr_table">
                <?php if(empty($canshu) || (($canshu instanceof \think\Collection || $canshu instanceof \think\Paginator ) && $canshu->isEmpty())): ?>
                <div style="color: red;font-size: 12px;text-align: center;">提示：该主栏目还没有参数值，若有需要请点击【<a href="<?php echo url('Product/attribute_index', array('typeid'=>$field['typeid'])); ?>">参数选项</a>】进行更多操作。</div>
                <?php else: ?>
                <?php echo $canshu; endif; ?>
            </dl> 
        </div>
        <!-- 产品参数 -->
        <!-- SEO参数 -->
        <div class="ncap-form-default tab_div_3" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label>TAG标签</label>
                </dt>
                <dd class="opt">          
                    <input type="text" value="<?php echo $field['tags']; ?>" name="tags" id="tags" class="input-txt">
                    &nbsp;<a href="javascript:void(0);" onclick="tags_list(this);" class="ncap-btn ncap-btn-green">管理</a>
                    <span class="err"></span>
                    <p class="notic">多个标签用英文逗号（,）分开，单个标签小于12字节</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="seo_title">SEO标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['seo_title']; ?>" name="seo_title" id="seo_title" class="input-txt">
                    <p class="notic">一般不超过80个字符，为空时系统自动构成，可以到 <a href="<?php echo url('Seo/index', array('inc_type'=>'seo')); ?>">SEO设置 - SEO基础</a> 中设置构成规则。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO关键词</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:40px;"><?php echo $field['seo_keywords']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic">一般不超过100个字符，多个关键词请用英文逗号（,）隔开，建议3到5个关键词。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO描述</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:60px;"><?php echo $field['seo_description']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic">一般不超过200个字符，不填写时系统自动提取正文的前200个字符</p>
                </dd>
            </dl>
        </div>
        <!-- SEO参数 -->
        <!-- 其他参数 -->
        <div class="ncap-form-default tab_div_4" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label for="author">作者</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['author']; ?>" name="author" id="author" class="input-txt">
                    &nbsp;<a href="javascript:void(0);" onclick="set_author();" class="ncap-btn ncap-btn-green">设置</a>
                    <p class="notic">设置作者默认名称（将同步至管理员笔名）</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>浏览量</label>
                </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $field['click']; ?>" name="click" id="click" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>阅读权限</label>
                </dt>
                <dd class="opt">
                    <select name="arcrank" id="arcrank">
                        <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['rank']; ?>" <?php if($vo['rank'] == $field['arcrank']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>    
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="articleForm">发布时间</label>
                </dt>
                <dd class="opt">
                    <input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s',$field['add_time']); ?>" autocomplete="off">        
                    <span class="add-on input-group-addon">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    </span> 
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="tempview">文档模板</label>
                </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                        <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row" <?php if($seo_pseudo != '2'): ?>style="display: none;"<?php endif; ?>>
                <dt class="tit">
                    <label>自定义文件名</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['htmlfilename']; ?>" name="htmlfilename" id="htmlfilename" style="width: 120px;" onkeyup="this.value=this.value.replace(/[^\w\-]/g,'');" onpaste="this.value=this.value.replace(/[^\w\-]/g,'');">.html
                    <span class="err"></span>
                    <p class="notic">自定义文件名可由字母/数字/'_'/'-'等符号组成</p>
                </dd>
            </dl>
<!--             <dl class="row">
                <dt class="tit">
                    <label>排序号</label>
                </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $field['sort_order']; ?>" name="sort_order" id="sort_order" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">越小越靠前</p>
                </dd>
            </dl> -->
        </div>
        <!-- 其他参数 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="gourl" value="<?php echo $gourl; ?>">
                <input type="hidden" name="aid" value="<?php echo $field['aid']; ?>">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">

    $(function () {
        $('#add_time').layDate();   
     
        //选项卡切换列表
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2, .tab_div_3, .tab_div_4").hide();          
            $(".tab_div_"+tab_index).show();
        });

        $('input[name=is_jump]').click(function(){
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        $('#typeid').change(function(){
            var current_channel = $(this).find('option:selected').data('current_channel');
            if (0 < $(this).val() && <?php echo $channeltype; ?> != current_channel) {
                showErrorMsg('请选择对应模型的栏目！');
                $(this).val(dftypeid);
            } else if (<?php echo $channeltype; ?> == current_channel) {
                layer.closeAll();
            }
        });
    });

    function change_prom_type(val) {
        if ( val == 1 ){
            $("input[name=prom_type_vir]:eq(0)").attr("checked",'checked');
            $("#fahuoxingshi").show();
        } else if ( val == 2 ){
            $("#wangpanxiazai").hide();
            $("#wenbenneirong").hide();
        } else if ( val == 3 ){
            $("#wangpanxiazai").show();
            $("#wenbenneirong").hide();
        } else if( val == 4 ){
            $("#wangpanxiazai").hide();
            $("#wenbenneirong").show();
        }
        else {
            $("#wangpanxiazai").hide();
            $("#wenbenneirong").hide();
            $("#fahuoxingshi").hide();
        }
    }

    function set_author()
    {
        layer.prompt({
                title:'<font color="red">设置作者默认名称</font>'
            },
            function(val, index){
                var admin_id = '<?php echo \think\Session::get('admin_info.admin_id'); ?>';
                $.ajax({
                    url: "<?php echo url('Admin/ajax_setfield'); ?>",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {id_name:'admin_id',id_value:admin_id,field:'pen_name',value:val,_ajax:1},
                    success: function(res){
                        if (res.code == 1) {
                            $('#author').val(val);
                            layer.msg(res.msg, {icon: 1, time:1000});
                        } else {
                            showErrorMsg(res.msg);
                            return false;
                        }
                    },
                    error: function(e){
                        showErrorMsg(ey_unknown_error);
                        return false;
                    }
                });
                layer.close(index);
            }
        );
    }

    function tags_list(obj)
    {
        var url = "<?php echo url('Tags/index'); ?>";
        //iframe窗
        layer.open({
            type: 2,
            title: 'TAG标签管理',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: true, //开启最大化最小化按钮
            area: ['80%', '80%'],
            content: url
        });
    }

    function system_thumb()
    {
        var url = "<?php echo url('System/thumb', ['tabase'=>-1]); ?>";
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '缩略图配置',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            content: url
        });
        layer.full(iframes);
    }

    // 判断输入框是否为空
    function check_submit(){
        if($.trim($('input[name=title]').val()) == ''){
            showErrorMsg('标题不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        if ($('#typeid').val() == 0) {
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        if ($('input[name=prom_type]:checked').val() == 1) {
            if($('input[name=prom_type_vir]:checked').val() == 2 && $.trim($('input[name=netdisk_url]').val()) == ''){
                showErrorMsg('网盘地址不能为空！');
                $('input[name=netdisk_url]').focus();
                return false;
            }
            if($('input[name=prom_type_vir]:checked').val() == 3 && $.trim($('textarea[name=text_content]').val()) == ''){
                showErrorMsg('虚拟文本内容不能为空！');
                $('textarea[name=text_content]').focus();
                return false;
            }
        }
        layer_loading('正在处理');
        $('#post_form').submit();
    }

    function img_call_back(fileurl_tmp)
    {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
    }

    // 上传产品相册回调函数
    function proimg_call_back(paths){
        
        var  last_div = $(".images_upload_tpl").html();
        // var  last_div = $(".images_upload:last").prop("outerHTML");  
        for (var i=0;i<paths.length ;i++ )
        {
            $(".images_upload:eq(0)").before(last_div);  // 插入一个 新图片
            $(".images_upload:eq(0)").find('a:eq(0)').attr('href',paths[i]).attr('onclick','').attr('target', "_blank");// 修改他的链接地址
            $(".images_upload:eq(0)").find('img').attr('src',paths[i]);// 修改他的图片路径
            $(".images_upload:eq(0)").find('a:eq(1)').attr('onclick',"ClearPicArr2(this,'"+paths[i]+"')").text('删除');
            $(".images_upload:eq(0)").find('input').val(paths[i]); // 设置隐藏域 要提交的值
        }            
    }
    
    /*
     * 上传之后删除组图input     
     * @access   public
     * @val      string  删除的图片input
     */
    function ClearPicArr2(obj,path)
    {
        // 删除数据库记录
        $.ajax({
            type:'POST',
            url:"<?php echo url('Product/del_proimg'); ?>",
            data:{filename:path,_ajax:1},
            success:function(){
                $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                $.ajax({
                    type:'POST',
                    url:"<?php echo url('Uploadify/delupload'); ?>",
                    data:{action:"del", filename:path,_ajax:1},
                    success:function(){}
                });      
            }
        });     
    }

    /** 以下 产品参数相关 js*/
    $(document).ready(function(){
        // 产品栏目切换时 ajax 调用  返回不同的属性输入框
        $("#typeid").change(function(){
            get_attr_input();
        });
        // 触发产品栏目
        // $("#typeid").trigger('change'); 
    });

    // 产品栏目切换时 ajax 调用  返回不同的属性输入框
    function get_attr_input()
    {
        var aid = $("input[name=aid]").val();
        var typeid = $("#typeid").val();
        if (parseInt(typeid) < 1) {
            return false;
        }
        $('#product_attr_table').html('<div style="color: red;font-size: 12px;text-align: center;">加载中……</div>');
        // 产品栏目切换时 ajax 调用  返回不同的属性输入框     
        $.ajax({
            type:'GET',
            data:{aid:aid,typeid:typeid,_ajax:1}, 
            url:"<?php echo url('Product/ajax_get_attr_input'); ?>",
            success:function(data){
                $("#product_attr_table").html('').append(data);
            },
            error: function(e){
                $('#product_attr_table').html('<div style="color: red;font-size: 12px;text-align: center;">加载失败，点击此处<a href="javascript:void(0);" onClick="get_attr_input();">刷新</a></div>');
            }
       });
    }

    /** 以下 图集相册的拖动排序相关 js*/
    
    $( ".sort-list" ).sortable({
        start: function( event, ui) {
        
        }
        ,stop: function( event, ui ) {
            // var rdata = '', url="<?php echo url('Product/ajax_sort_proimg'); ?>";
            // var container = $(ui.item).closest("TB");
            // var LIs = $(container).find("DIV");
            // $(LIs).each(function(){
            //     console.log($(this))
            //     rdata += $(this).attr('rel') + ',' + $(this).index() + '|';
            // });
            // rdata = rdata.substr(0, (rdata.length-1));
            // console.log(rdata)
            // $.post(url, {str:rdata}, function(){
            
            // });
        }
    });
    //因为他们要拖动，所以尽量设置他们的文字不能选择。 
    $( ".sort-list" ).disableSelection();
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>