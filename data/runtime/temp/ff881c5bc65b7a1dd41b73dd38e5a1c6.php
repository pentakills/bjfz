<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/default/pc/lists_guestbook.htm";i:1594086313;s:78:"D:\www\web\bjms123_H4yI1YT2aGkYNC2RN6tm\wwwroot\template\default\pc\header.htm";i:1594086312;s:78:"D:\www\web\bjms123_H4yI1YT2aGkYNC2RN6tm\wwwroot\template\default\pc\footer.htm";i:1594086312;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/global.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/widget.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/variouscomponents.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/images.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/theme.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/color_0.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min.js"></script>
<!--[if !IE]><!-->
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/lightbox.min.css" rel="stylesheet">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.superslide.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/common.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/theme.js"></script>
<!-- feib -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/layer.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/language.js"></script>
<!-- plugins -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.formsvalidation.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.nodecommon.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/extend.js"></script>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.min.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/animate.min.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/components.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.menu_style.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.init.js"></script>
<script type="text/javascript">
$(function(){
    dataAnimate();
    (function($,lanno){
        if(lanno === "" || lanno === "default"){
            return '';
        }
        $(".w-languege").each(function(){
            $(this).find("a").each(function(){
                if($(this).data("lanno") === lanno){
                    $(this).addClass("cur");
                }else{
                    if($(this).hasClass("cur")){
                        $(this).removeClass("cur");
                    }
                }
            });
        });
    })(jQuery,"cn");
});
</script>
</head>
<body>
<div class="body"> 	<div class="top" style="height: 38px;line-height: 38px;overflow: hidden;">
	    <div class="g_cw clearfix" style="    width: 1120px;padding: 0 10px;margin: 0 auto;">
	          <p class="left" style="float: left;color: #f65607;font-weight: 700;font-size: 16px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></p>
	          <p class="right" style="float: right;color: #f65607;"><a href="" target="_blank"><img src="template/default/pc/skin/img/alibb.png"   /></a> &nbsp;&nbsp;<span style="color: #f65607;font-weight: 700;font-size: 16px;">咨询热线：<b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></b></span></p>
	        </div>
	  </div>
<div class="w-container w-header top-nav " style="background-color: #f65607;">
  <div class="row clearfix">
    <div class="mobile-nav-toggle"><i class="fa fa-navicon fa-2x"></i></div>
    <div class="nav_right_mask"></div>
    <div class="col-logo">
      <div class="w-logo">
        <h1 style="display:none;"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"></a></h1>
        <a  href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"  class="w-logo-img"  > <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>"/> </a> </div>
    </div>
    <div class="col-right clearfix">
      <div class="w-nav g-active-add">
        <div class="w-nav-in">
          <ul class="nav_inner clearfix" id="g-web-ul-menu" style="display:none;">
            <li  class=""><a href = "<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" >网站首页</a><i class="nav_simpline_cur"></i></li><!--<?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>-->
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li  class="<?php echo $field['currentstyle']; ?>">
              <div class="li-parent-div li-parentOne-div"><a href = "<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><i class="fa fa-plus"></i><?php endif; ?> </a></div>
              <i class="nav_simpline_cur"></i> <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
              <div class="submenu">
                <div class="back-div"><i class="fa fa-angle-left"></i><span>返回</span></div>
                <ul>
                  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,20, true) : $field['children']->slice(0,20, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                  <li><a href = "<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li>
                  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                </ul>
              </div>
              <?php endif; ?> </li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            <div class="nav_moveBox"></div>
          </ul>
        </div>
      </div>
      <div class="topLogBox">
        <div class="topLogBox-in">
          <div class="col-com"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(function(){
        var banOffTop=$(".top-nav").offset().top;//获取到距离顶部的垂直距离
        var scTop=0;//初始化垂直滚动的距离
        $(document).scroll(function(){
            scTop=$(this).scrollTop();//获取到滚动条拉动的距离
         //   console.log(scTop);//查看滚动时，垂直方向上，滚动条滚动的距离
            if(scTop>=banOffTop){
            //核心部分：当滚动条拉动的距离大于等于导航栏距离顶部的距离时，添加指定的样式
                $(".top-nav").addClass("navbar-fixed-top");
            }else{
                $(".top-nav").removeClass("navbar-fixed-top");
            }

        })
    })
</script>


  <section class="w-container bannerBox ">
    <div class="banner"> <img src="<?php if(!(empty($eyou['field']['banner']) || (($eyou['field']['banner'] instanceof \think\Collection || $eyou['field']['banner'] instanceof \think\Paginator ) && $eyou['field']['banner']->isEmpty()))): ?><?php echo $eyou['field']['banner']; else: ?><?php echo gettoptype($eyou['field']['typeid'],'banner'); endif; ?>
" alt="banner" title="" style=""  /> <a href="javascript:void(0);" ><span  style="display:none;">none</span></a> </div>
  </section>
  <div class="w-container w-main">
    <div class="w-section">
      <div class="row" >
        <div class="row-mask" ></div>
        <div class="wrap-content-in">
          <div class="li-div">
            <div class="w-title w-title1"  style="">
              <div class="w-title-in">
                <div class="w-title-inner">
                  <div class="title-h-in">
                    <h2 class="color_main color_h" style=""><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></h2>
                    <span class="color_vice color_span" style=""><?php echo gettoptype($eyou['field']['typeid'],'englist_name'); ?></span>
                    <div class="simpline bg_simpline"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="li-div col-li-div">
            <div class="col-table">
              <table class="div-table div-table-first" width="100%" cellspacing="0"  cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="td-w" width="14.83739837398374%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-space space-b noChoose"  style="height:40px;">
                            <div class="stretch-b"></div>
                          </div>
                        </div>
                      </div></td>
                    <td class="td-w" width="72.81029802027757%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-form"   style=""> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <form method="POST"  enctype="multipart/form-data" action="<?php echo $field['action']; ?>" id="myform">
                              <div class="li-div" >
                                <div class="w-form-section  clearfix" style="">
                                  <div class="w-form-shartText">
                                    <label class="w-label-form"> <span><?php echo $field['itemname_1']; ?></span> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <input class="w-text-form" style="width:100%" type="text"  name="<?php echo $field['attr_1']; ?>" id="attr_1" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="li-div" >
                                <div class="w-form-section  clearfix" style="">
                                  <div class="w-form-tel">
                                    <label class="w-label-form"> <span><?php echo $field['itemname_2']; ?></span> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <input class="w-text-form" style="width:100%" type="tel"  name="<?php echo $field['attr_2']; ?>" id="attr_2" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="li-div" >
                                <div class="w-form-section  clearfix" style="">
                                  <div class="w-form-Email">
                                    <label class="w-label-form"> <span><?php echo $field['itemname_3']; ?></span> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <input class="w-text-form" style="width:100%" type="email"  name="<?php echo $field['attr_3']; ?>" id="attr_3"/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="li-div" >
                                <div class="w-form-section clearfix"  style="">
                                  <div class="w-form-largeText">
                                    <label class="w-label-form"> <?php echo $field['itemname_4']; ?> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <textarea class="w-textarea-form" style="width:100%;"  name="<?php echo $field['attr_4']; ?>" id="attr_4"></textarea>
                                      <input class="w-text-form" type="hidden" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="w-form-submit">
                                <div class="w-buttom" style="text-align: center;">
                                  <div class="btn-default-w g-form-components" onclick="checkForm();"> <span class="btn-inner">提交</span> </div>
                                </div>
                              </div>
                              <?php echo $field['hidden']; ?>
                            </form>
                            <script type="text/javascript">
                            function checkForm()
                            {
                              if(document.getElementById('attr_1').value.length == 0)
                              {
                                alert('请输入您的<?php echo $field['itemname_1']; ?>');
                                return false;
                              }
                              if(document.getElementById('attr_2').value.length == 0)
                              {
                                alert('请输入您的<?php echo $field['itemname_2']; ?>');
                                return false;
                              }
                              document.getElementById('myform').submit();
                            }
                          </script> 
                            <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
                        </div>
                      </div></td>
                    <td class="td-w" width="13.08808117378049%"><div class="div-padding">
                        <div class="li-div" >
                          <div class="w-space space-b noChoose"  style="height:40px;">
                            <div class="stretch-b"></div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--联系我们-->
  <div class="w-container w-main">
    <div class="w-section pdTop-default pdBottom-default" style="background:#f65607;">
      <div class="row" >
        <div class="row-mask" ></div>
        <div class="wrap-content-in  pdTop-large pdBottom-large">
    
          <div class="li-div col-li-div">
            <div class="col-table">
              <table class="div-table div-table-first" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>                    
                    <td class="td-w" width="89.466122014735774%"><div class="div-padding">
                        <div class="li-div">
                          <div class="not-animated w-text" data-animate="" style="">
                            <div style="color:#fff;">
                              <h3 style="font-size:110%;margin:0px 0px 10px 0px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h3> <!--margin:30px 0 40px; --> 
                              <p style="line-height:1.5; font-size:90%;">联系人：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?> &nbsp;&nbsp;手机：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?><br/>
                                传真：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?>&nbsp;&nbsp;地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?><br/>
                                热线电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?><br/>
                            <?php echo htmlspecialchars_decode($global['web_copyright']); ?>--SEO技术支持：<a  href="http://www.0917bjms.com/" style="color: #fff;">麦思科技</a> &nbsp;&nbsp;
			<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>  </p>
                            </div>
                          </div>
                        </div>
                      </div></td>
                      <td class="td-w" width="10.5040650406504%"><div class="div-padding">
                        <div class="li-div">
                          <div class="not-animated w-map" data-animate="" style="">
                            <div class="map">
                           <!-- <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?>" width="100%"  height=" 100px"> -->
                            </div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
  
  
  <div class="w-service-fixed">
    <div class="service-item bg_s_default color_s_default aHoverbg_deepen aHovercolor_deepen service-item-top"> <i class="fa fa-caret-up"></i>
      <div class="top" onclick="$('body,html').animate({scrollTop: 0}, 'normal');">TOP</div>
    </div>
    <script type="text/javascript">
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 20) {
                    $('.w-service-fixed .service-item-top').show();
                } else {
                    $('.w-service-fixed .service-item-top').hide();
                }
            });
        });
    </script> 
  </div>
</div>
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?> 
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
<div id='cs_box'>
   	<span class='cs_title'>在线咨询</span>
   	<span class='cs_close'>x</span>
   	<div class='cs_img'></div>
   	<span class='cs_info'>有什么可以帮到你</span>
   	<div class='cs_btn'>点击咨询</div>
   </div>
   <style>
   	#cs_box {width:120px; height:220px; background:#1692d6; position:fixed; right:10px; top:500px; border-radius:10px; z-index:1000}
   	#cs_box span {color:#fff; height:20px; line-height:20px; font-family:'Arial'; display:block;}
   	.cs_close {position:absolute; right:10px; top:10px; cursor:pointer; font-size:12px;}
   	.cs_title {font-size:14px; margin:10px; font-weight:bold;}
   	.cs_img {width:100px; height:100px; background:#fff; margin:10px;}
   	.cs_info {font-size:12px; margin:0px 10px; overflow:hidden; text-align:center;}
   	.cs_btn {width:100px; height:25px; border: 1px solid #ccc; margin:5px 10px; border-radius:5px; font-size:12px; line-height:25px; color:#fff; text-align:center; cursor:pointer;}
   	.cs_btn:hover{background: #fff;color: #1692d6;}
   </style>
   <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/kf.js","","",""); echo $__VALUE__; ?>
   <script type="text/javascript">
   	myEvent(window,'load',function(){
   		cs_box.set({
   			img_path : '/template/default/pc/skin/img/kf.jpg',		//设置图片路径
   			qq : '346068255',		//设置QQ号码
   		});
   	});
   </script> </div>
<div class="topTel" onclick="$('body,html').animate({scrollTop: 0}, 500);"><i class="fa fa-arrow-up"></i></div>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.global.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.form.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.custom.js"></script>
</body>
</html>