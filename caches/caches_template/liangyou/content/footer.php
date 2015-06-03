<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--友情连接-->
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