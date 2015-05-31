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
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/index.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>liangyou/js/pptBox.js"></script>
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
<!-- 内容部分开始  -->
<div class="content" style="margin-top:0px;">
	<div class="xxl_clear"></div>
	<div id="xxx">
		 <script>
		 var box =new PPTBox();
		 box.width = 900; //宽度
		 box.height = 350;//高度
		 box.autoplayer = 3;//自动播放间隔时间

		 box.add({"url":"images/tu1.jpg","href":"http://www.hebei130.com/","title":"笑天游工作室1"})
		 box.add({"url":"images/tu2.jpg","href":"http://www.hebei130.com/","title":"笑天游工作室2"})
		 box.add({"url":"images/tu3.jpg","href":"http://www.hebei130.com/","title":"笑天游工作室3"})
		 box.add({"url":"images/tu4.jpg","href":"http://www.hebei130.com/","title":"笑天游工作室4"})
		 box.show();
		</script>
	</div>
	<div class="xxl_clear"></div>
	<div class="zx">
		<p class="xxl_title">最新 News</p>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=758cc409dcb0b06e2a931ef14f8f5bab&action=lists&catid=14&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'id DESC','limit'=>'4',));}?>
		<ul class="xxl_clear">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
				<div class="pic">
					<a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="225px" /></a>
				</div>
				<div class="title"><a href="#" ><?php echo $r['title'];?></a></div>
				<div class="xxl_line"></div>
				<div class="zx_message"><a href="#" ><?php echo $r['description'];?></a></div>
			</li>
        <?php $n++;}unset($n); ?>
		</ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<div class="xxl_clear"></div>
	<div class="zx">
		<p class="xxl_title">记录时间 Doc Time</p>	
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4785a5a14b9148df47f3a30461b53ca5&action=lists&catid=15&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','limit'=>'6',));}?>
		<ul class="xxl_clear">
        <?php $i=1;?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
        <?php if($i < 3){?>
            <li class="art_top">
				<div class="art_top_pic">
					<a href="<?php echo $r['url'];?>">
						<img src="<?php echo $r['thumb'];?>" width="450px" height="250px" />
					</a>
				</div>
			</li>
        <?php }else{?>
			<li>
				<div class="pic">
					<a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="225px" /></a>
				</div>
				<div class="title"><a href="#" ><?php echo $r['title'];?></a></div>
				<div class="xxl_line"></div>
				<div class="zx_message"><a href="#" ><?php echo $r['description'];?></a></div>
			</li>
        <?php }
            $i++;
        ?>
        <?php $n++;}unset($n); ?>
		</ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<!-- 文化活动 -->
	<div class="page3-block1 container-900 mg-auto overflow clearfix">
		<p class="xxl_title">文化活动 Activity</p>
		<p class="xxl_title activity_nav">
			<span>沙龙&nbsp;&nbsp;|</span>
			<span>公益讲堂&nbsp;&nbsp;|</span>
			<span>音乐会&nbsp;&nbsp;|</span>
			<span>课程</span>
		</p>
	    <div class="slideinner overflow">
		    <ul class="clearfix overflow">
		        <li>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                        <div class="text">
		                            <a href=""><h2>《中国记录人》</h2></a>
		                            <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                        </div>

		                </div>
		            </div>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>

		        </li>
		        <li>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>
		            <div class="list-inner fl tianstion">
		                <div class="time">6月1 Mon</div>
		                <a href="" class="imgCon" title="">
		                    <img src="images/pic.jpg" alt=""  />
		                </a>
		                <div class="priceCon">

		                    <div class="text">
		                        <a href=""><h2>中国记录人</h2></a>
		                        <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
		                    </div>

		                </div>
		            </div>
		        </li>
		    </ul>
	    </div>
	</div>

</div>
<div class="xxl_clear"></div>
<!--友情连接-->
<div class="block5" style="margin-top:50px;">
  <div class="container-900 mg-auto overflow clearfix">
      <div class="title">与良友成为合作伙伴 <span>Work with COMPANION</span></div>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=c270e0c2f135675a089f5171c4fa94dc&action=type_lists&listorder=asc&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_lists')) {$data = $link_tag->type_lists(array('listorder'=>'asc','siteid'=>$siteid,'limit'=>'20',));}?>
      <ul>
      <?php $n=1;if(is_array($data)) foreach($data AS $type_v) { ?>
          <li>
          <div><?php echo $type_v['name'];?></div>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=a7972e18684e67dc7ef29f103b8a17e7&action=lists&typeid=%24type_v%5B%27typeid%27%5D&siteid=%24siteid&linktype=0&num=4&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'lists')) {$dat = $link_tag->lists(array('typeid'=>$type_v['typeid'],'siteid'=>$siteid,'linktype'=>'0','limit'=>'4',));}?>
          <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
          <a href="<?php echo $v['url'];?>" title=""><?php echo $v['name'];?></a>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </li>
      <?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
  <div class="footer">
      <div><a href="" title="影像制品营业许可证">影像制品营业许可证</a><a href="" title="影像制品营业许可证">影像制品营业许可证</a><a href="" title="影像制品营业许可证">影像制品营业许可证</a></div>
      <p>中国赴马里维和部队在马里加奥维部队在马里加奥维和任务区正式完成第二次轮换交接任务区正式完成第二次轮换交接</p>
      <p>中国赴马里维和部队在马里加奥维和任务区正式完成第二次轮换交接</p>
      <p>中国赴马里维和部队在马里加奥维和任务区正式完成第二次轮换交接</p>
  </div>
</div>

<script>
    slideSwitch3(".slideinner","slidehover");
</script>
</body>
</html>