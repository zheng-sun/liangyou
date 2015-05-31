<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 内容部分开始  -->
<div class="xxl_clear"></div>
<div class="zxzx">
	<div class="xxl_top_5">
		<p class="xxl_top5_title">TOP 5</p>	
		<ul class="xxl_clear" style="float:left;">
			<li>
				<div class="pic">
					<a href="http://sc.admin5.com/jiaoben" target="_blank"><img src="images/tu5.jpg" width="180px" /></a>
				</div>
				<div class="top5_title"><a href="#" >《记录时间》</a></div>
				<div class="xxl_line"></div>
				<div class="zx_message top5_message"><a href="#" >第五届广州纪录片节第五届广州纪第五届广州纪第五届广州纪开幕</a></div>
			</li>
			<li>
				<div class="pic">
					<a href="http://sc.admin5.com/jiaoben" target="_blank"><img src="images/tu5.jpg" width="180px" /></a>
				</div>
				<div class="top5_title"><a href="#" >《记录时间》</a></div>
				<div class="xxl_line"></div>
				<div class="zx_message top5_message"><a href="#" >第五届广州纪录片节第五届广州纪第五届广州纪第五届广州纪开幕</a></div>
			</li>
			<li>
				<div class="pic">
					<a href="http://sc.admin5.com/jiaoben" target="_blank"><img src="images/tu5.jpg" width="180px" /></a>
				</div>
				<div class="top5_title"><a href="#" >《记录时间》</a></div>
				<div class="xxl_line"></div>
				<div class="zx_message top5_message"><a href="#" >第五届广州纪录片节第五届广州纪第五届广州纪第五届广州纪开幕</a></div>
			</li>
			<li>
				<div class="pic">
					<a href="http://sc.admin5.com/jiaoben" target="_blank"><img src="images/tu5.jpg" width="180px" /></a>
				</div>
				<div class="top5_title"><a href="#" >《记录时间》</a></div>
				<div class="xxl_line"></div>
				<div class="zx_message top5_message"><a href="#" >第五届广州纪录片节第五届广州纪第五届广州纪第五届广州纪开幕</a></div>
			</li>
			<li>
				<div class="pic">
					<a href="http://sc.admin5.com/jiaoben" target="_blank"><img src="images/tu5.jpg" width="180px" /></a>
				</div>
				<div class="top5_title"><a href="#" >《记录时间》</a></div>
				<div class="xxl_line"></div>
				<div class="zx_message top5_message"><a href="#" >第五届广州纪录片节第五届广州纪第五届广州纪第五届广州纪开幕</a></div>
			</li>
		</ul>
	</div>
</div>
<div class="xxl_clear"></div>
<div class="content">
	<div class="searchcontent">
          <form id="searchForm" method="get" target="_blank" action="" name="form_search">
              <input id="searchWord" class="searchname fl" type="text" onclick=" document.getElementById('searchWord').style.color='#000000';
    if( this.value == '良友')value=''" onblur=" document.getElementById('searchWord').style.color='#ffffff';if( this.value.replace(/[ ]/g,'') == '')value='良友'" value="良友" name="wd">
              <input id="searchBtn" type="submit" value="" class="searchbtn cursor fl">
          </form>
    </div>
    <div class="xxl_clear"></div>
	<div class="zx-con">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20d4e2ae1f91ae804a512503d2bd2285&action=lists&catid=%24catid&num=5&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<ul>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
				<div class="zx-con-1">
					<img src="<?php echo $r['thumb'];?>" />
				</div>
				<div class="zx-con-2">
					<div class="con_title"><a href="#" ><?php echo $r['title'];?></a></div>
					<div class="xxl_line"></div>
					<div class="con_time"><a href="#" ><?php echo $r['inputtime'];?></a></div>
					<div class="con_message"><?php echo $r['description'];?></div>
				</div>
				<div class="clear"> </div>
			</li>
        <?php $n++;}unset($n); ?>
		</ul>
	</div>
	<div class="paging"><?php echo $pages;?></div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="xxl_clear"></div>

<?php include template("content","footer"); ?>