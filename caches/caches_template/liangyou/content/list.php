<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 内容部分开始  -->
<div class="xxl_clear"></div>
<div class="zxzx">
	<div class="xxl_top_5">
		<p class="xxl_top5_title">TOP 5</p>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4888eb439e1b1be3a81bd5d4d22e4d09&sql=select+%2A+from+v9_news+where+catid+%3D+%24catid+order+by+id+desc&start=0&num=5&cache=3600&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'select * from v9_news where catid = $catid order by id desc',)).'4888eb439e1b1be3a81bd5d4d22e4d09');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid = $catid order by id desc LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
		<ul class="xxl_clear" style="float:left;">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
				<div class="pic">
					<a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="180px" /></a>
				</div>
				<div class="top5_title"><a href="<?php echo $r['url'];?>" ><?php echo $r['title'];?></a></div>
				<div class="xxl_line"></div>
				<div class="zx_message top5_message"><a href="#" ><?php echo $r['description'];?></a></div>
			</li>
        <?php $n++;}unset($n); ?>
		</ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dbbcefa52392e930f8a0fa58081709b3&sql=select+%2A+from+v9_news+where+catid+%3D+%24catid+order+by+id+desc&start=6&num=1&cache=3600&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1 ) * $pagesize + 6;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (select * from v9_news where catid = $catid order by id desc LIMIT $offset,$pagesize) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("select * from v9_news where catid = $catid order by id desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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