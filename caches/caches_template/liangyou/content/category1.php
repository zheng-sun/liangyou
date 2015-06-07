<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="page3-block1 container-900 mg-auto overflow clearfix">
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

<div class="page3-block2 container-900 mg-auto overflow clearfix">
   <div class="pictext">
       <a class="title1" href="" title="">纪录片沙龙</a>
       <a class="title2" href="" title="">[良友纪录片沙龙简介]</a>
       <ul class="clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b04198c1eae3c21b57d1905e3b9c9304&action=lists&catid=25&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'id DESC','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
           <li>
               <a class="leftpic" href="" class="title"><img src="<?php echo $r['thumb'];?>" alt=""></a>
               <div class="righttext">
                   <a href=""><h2><?php echo $r['title'];?></h2></a>
                   <p><?php echo str_cut($r[description],110);?></p>
               </div>
           </li>
           <?php $n++;}unset($n); ?>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </ul>
   </div>
    <div class="pictext">
        <a class="title1" href="" title="">纪录片沙龙</a>
        <a class="title2" href="" title="">[良友纪录片沙龙简介]</a>
        <ul class="clearfix">
            <li>
                <a class="leftpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="righttext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="leftpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="righttext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="leftpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="righttext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="leftpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="righttext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
        </ul>
    </div>

    <div class="picture">
        <a class="title1" href="" title="">纪录片沙龙</a>
        <a class="title2" href="" title="">[良友纪录片沙龙简介]</a>
        <ul class="clearfix">
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="picture">
        <a class="title1" href="" title="">纪录片沙龙</a>
        <a class="title2" href="" title="">[良友纪录片沙龙简介]</a>
        <ul class="clearfix">
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
            <li>
                <a class="toptpic" href="" class="title"><img src="images/pic.jpg" alt=""></a>
                <div class="bottomtext">
                    <a href=""><h2>中国记录人</h2></a>
                    <p>5月26日，在马是，新一批维和官兵胸前英、法三种文字标记姓名、血</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php include template("content","footer"); ?>