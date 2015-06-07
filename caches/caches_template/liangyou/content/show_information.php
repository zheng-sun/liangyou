<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 面包屑 -->
<div class="block3 container-900 mg-auto overflow clearfix">
    <a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 正文</div>
</div>

<!-- 搜素+面包 -->
<div class="xxl_stop container-900 mg-auto overflow clearfix">
    <div class="xxl_asear xxl_clear">
      <div class="xxl_search">
          <input id="searchWord2" class="xxl_searchname fl" type="text" onclick=" document.getElementById('searchWord2').style.color='#000000';
          if( this.value == '良友')value=''" onblur=" document.getElementById('searchWord2').style.color='#ffffff';if( this.value.replace(/[ ]/g,'') == '')value='良友'" value="良友" name="wd">
          <input id="searchBtn2" type="submit" value="" class="xxl_searchbtn cursor fl">
      </div>
    </div>
    <div class="xxl_bsear">
      <a href="">全部</a>&nbsp;|
      <a href="" class="xxl_font">历史</a>&nbsp;|
      <a href="">人文</a>&nbsp;|
      <a href="">军事</a>&nbsp;|
      <a href="">自然</a>&nbsp;|
      <a href="">社会</a>
    </div>
</div>
<!-- 主要内容 -->
<div class="block4 container-900 mg-auto overflow clearfix page5">
    <div class="left">
        <div class="article-detail">
            <h2><?php echo $title;?></h2>
            <a class="pic-left" href="" title=""><img src="<?php echo $thumb;?>" alt=""></a>
            <div class="content-right">
                <p>中文片名: <?php echo $title;?></p>
                <p>英文片名: <?php echo $en_title;?></p>
                <p>导演: <a href="" title=""><?php echo $director;?></a></p>
                <p>国家/地区: <?php echo $area;?></p>
                <p>出品: <?php echo $produced;?></p>
                <p>摘要:</p>
                <p><?php echo $description;?></p>
                <p>标签：<a href="" title=""><?php echo $title;?></a></p>
                <a class="abutton" href="<?php echo $link_url;?>" title="<?php echo $title;?>" target="_blank"></a>
            </div>
        </div>
        <div class="article">
            <h2>影片简介</h2>
            <p class="xxl_content"><?php echo $content;?></p>
        </div>
        <div class="xxl_juzhao">
            <h2>剧照</h2>
            <ul class="clearfix">
                <?php $n=1;if(is_array($stills)) foreach($stills AS $r) { ?>
                <li><img src="<?php echo $r['url'];?>" alt="剧照" width="170" height="170"></li>
                <?php $n++;}unset($n); ?>
            </ul>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
        <?php if($data) { ?>
        <div class="links">
            <h2 class="linls-title">看更多</h2>
            <ul class="clearfix">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
            <?php $n++;}unset($n); ?>   
            </ul>
        </div>
        <?php } ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>
    <div class="right">
        <div class="links links1">
            <h2 class="linls-title">相关推荐</h2>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3a882aa0ef04096b878fc95374daa518&action=lists&catid=19&num=2&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id DESC','limit'=>'2',));}?>
            <ul class="clearfix">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                 <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>"/><span><?php echo $r['title'];?></span></a></li>
            <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="links links2">
            <h2 class="linls-title">热门点击</h2>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=81d8e876dcbe9358c156dbb75066833f&action=hits&catid=%24catid&num=5&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'81d8e876dcbe9358c156dbb75066833f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <ul class="clearfix">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
            <?php $n++;}unset($n); ?>    
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="links links3">
            <h2 class="linls-title">最新活动</h2>
            <a href="" title=""><img src="images/pic.jpg"></a>
            <ul class="clearfix">
                <li><a href="" title="">在马奥维和任务区</a></li>
                <li><a href="" title="">在马奥维和任务区</a></li>
                <li><a href="" title="">在马奥维和任务区</a></li>
                <li><a href="" title="">在马奥维和任务区</a></li>
                <li><a href="" title="">在马奥维和任务区</a></li>
            </ul>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>