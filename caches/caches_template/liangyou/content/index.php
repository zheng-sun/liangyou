<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

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
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=758cc409dcb0b06e2a931ef14f8f5bab&action=lists&catid=14&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'id DESC','limit'=>'4',));}?>
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
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4785a5a14b9148df47f3a30461b53ca5&action=lists&catid=15&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','limit'=>'6',));}?>
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
<?php include template("content","footer"); ?>