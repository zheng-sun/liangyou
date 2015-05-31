<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

  <!-- 面包屑 -->
  <div class="block3 container-900 mg-auto overflow clearfix">
      <a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 正文</div>
  </div>

  <!-- 主要内容 -->
  <div class="block4 container-900 mg-auto overflow clearfix">
      <div class="left">
          <div class="article">
              <h2 class="big"><?php echo $title;?></h2>
              <div class="author"><span>责任编辑：<?php echo $username;?></span> <span>发布时间：<?php echo $inputtime;?></span></div>
              <div class="author-detail">
              <?php echo $content;?>
              </div>
          </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
        <?php if($data) { ?>
          <div class="links">
              <h2 class="linls-title">相关阅读</h2>
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
              <ul class="clearfix">
                  <li><a href="" title=""><img src="images/pic.jpg"><span>在马奥维和任务区</span></a></li>
                  <li><a href="" title=""><img src="images/pic.jpg"><span>在马奥维和任务区</span></a></li>
              </ul>
          </div>
          <div class="links links2">
              <h2 class="linls-title">热门点击</h2>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=58900d29a2d86f6669bfff23ba8fcaf2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'58900d29a2d86f6669bfff23ba8fcaf2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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