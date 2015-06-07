<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 主要内容 -->
<div class="page4-block1 container-900 mg-auto overflow clearfix">
   <div class="left">
       <h2>良友动态</h2>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c31a388af13b5435f168558839a1b8ed&action=lists&catid=18&order=id+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'id DESC','limit'=>'2',));}?>
       <div style="overflow: hidden;">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
           <div class="picdiv"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt=""/></a></div>
            <?php $n++;}unset($n); ?>
       </div>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48668553a582654d4ad3b98a93328e60&action=lists&catid=18&order=id+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'id DESC','limit'=>'5',));}?>
       <div class="picshow">
           <ul class="bxslider">
           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
               <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"/></a></li>
           <?php $n++;}unset($n); ?>
           </ul>
       </div>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
   </div>
   <div class="right">
       <h2>最新推荐</h2>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=daff414d073c3f3392617c5711707f68&action=lists&catid=19&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id DESC','limit'=>'6',));}?>
       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
       <div class="picdiv"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/></a></div>
       <?php $n++;}unset($n); ?>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
   </div>
</div>

<div class="page4-block2 container-900 mg-auto overflow clearfix">
    <div class="picture">
        <a class="title1" href="/liangyou/index.php?m=content&c=index&a=lists&catid=29" title="">良友找良友</a>
        <ul class="clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5fc8612a5c2c571cd3f9f53be7cdad6f&action=lists&catid=29&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'29','order'=>'id DESC','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a class="toptpic" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
                <div class="bottomtext">
                    <a href=""><h2><?php echo $r['title'];?></h2></a>
                    <p><?php echo str_cut($r[description],65);?></p>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    
    <div class="picture">
        <a class="title1" href="/liangyou/index.php?m=content&c=index&a=lists&catid=30" title="">正在发行</a>
        <ul class="clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2af814b602344da7f522d53fc533788&action=lists&catid=30&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','order'=>'id DESC','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a class="toptpic" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
                <div class="bottomtext">
                    <a href=""><h2><?php echo $r['title'];?></h2></a>
                    <p><?php echo str_cut($r[description],65);?></p>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="business">
        <a class="title1" href="" title="">商务合作</a>
        <ul class="clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a146962b0b464f5fc84a580efe3d5b42&action=lists&catid=22&order=id+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','limit'=>'5',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="picture">
        <a class="title1" href="http://www.tvmcloud.com/home/mall/index/s/TWqbL" title="">网上选片</a>
        <ul class="clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b8fe53968eba2d91888bc3cb1c5cef3c&action=lists&catid=31&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'31','order'=>'id DESC','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a class="toptpic" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
                <div class="bottomtext">
                    <a href=""><h2><?php echo $r['title'];?></h2></a>
                    <p><?php echo str_cut($r[description],65);?></p>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<?php include template("content","footer"); ?>

<script>
    $(".alllinks").hover(function() {
        $(this).find("a").css({"visibility":"visible"});
    },function() {
        $(this).find("a").css({"visibility":"hidden"});
    })
    new_slider('#new_slider',3000,150,10);

    $('.bxslider').bxSlider({
        auto: true,
        autoControls: true,
        captions: true
    });
</script>