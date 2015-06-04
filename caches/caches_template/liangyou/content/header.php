<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>liangyou/css/layout.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>liangyou/css/lrtk.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>liangyou/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>liangyou/css/jquery.bxslider.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/index.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/pptBox.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/jquery.bxslider.js"></script>

</head>
<body>
<!-- logo 和 搜索连接 -->
<div class="block1 container-900 mg-auto clearfix">
  <h1>良友</h1>
  <div class="block1right">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=70f0453b28d3b62324557276e5c8c8f2&action=category&catid=0&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
      <ul class="ul">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?><span><?php echo $r['description'];?></span></a></li>
          <?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <div class="searchcontent">
          <form id="searchForm" method="get" target="_blank" action="" name="form_search">
              <input id="searchWord" class="searchname fl" type="text" onclick=" document.getElementById('searchWord').style.color='#000000';
    if( this.value == '良友')value=''" onblur=" document.getElementById('searchWord').style.color='#ffffff';if( this.value.replace(/[ ]/g,'') == '')value='良友'" value="良友" name="wd">
              <input id="searchBtn" type="submit" value="" class="searchbtn cursor fl">
          </form>
      </div>

      <div id="dropdown">
          <input class="input_select" type="text" value="类型"/>
          <ul>
              <li><a href="#" rel="2" target="_self">1</a></li>
              <li><a href="#" rel="3" target="_self">12</a></li>
              <li><a href="#" rel="4" target="_self">12</a></li>
              <li><a href="#" rel="5" target="_self">24</a></li>
          </ul>
      </div>

      <div id="dropdown2">
          <input class="input_select" type="text" value="智能"/>
          <ul>
              <li><a href="#" rel="2" target="_self">1</a></li>
              <li><a href="#" rel="3" target="_self">12</a></li>
              <li><a href="#" rel="4" target="_self">12</a></li>
              <li><a href="#" rel="5" target="_self">24</a></li>
          </ul>
      </div>
  </div>
</div>
<!-- 主导航 -->
<div class="block2 container-900 mg-auto overflow clearfix" style="margin-bottom: 0px;">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=49e1cb31e8e8254e69addb9e9ca09791&action=category&catid=0&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
  <ul class="clearfix">
    <?php $i=1;?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <?php if($i > 5){?>
      <li><a <?php if($catid == $r['catid']){?> class="current" <?php }?> href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>" ><?php echo $r['catname'];?><span><?php echo $r['description'];?></span></a></li>
    <?php }
        $i++;
    ?>
    <?php $n++;}unset($n); ?>
  </ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<!-- 头部结束  -->