<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');?>
<form name="myform" action="?m=content&c=type_manage&a=listorder" method="post">
<div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0" >
        <thead>
	<tr>
	<th width="5%">ID</th>
		<th width="20%"><?php echo '活动名称';?></th>
	<th width="20%"><?php echo '手机';?></th>
	<th width="*"><?php echo '邮箱';?></th>
    <th width="*"><?php echo '姓名';?></th>
    <th width="*"><?php echo '单位';?></th>
	<th width="30%"><?php echo L('operations_manage');?></th>
	</tr>
        </thead>
    <tbody>
    

<?php
foreach($datas as $r) {
?>
<tr>
<td align="center"><?php echo $r['id']?></td>
<td align="center"><?php echo $r['activity_name']?></td>
<td align="center"><?php echo $r['phone']?></td>
<td align="center"><?php echo $r['email']?></td>
<td align="center"><?php echo $r['name']?></td>
<td align="center"><?php echo $r['unit']?></td>
<td align="center"><a href="javascript:;" onclick="data_delete(this,'<?php echo $r['id']?>','<?php echo trim(new_addslashes($r['name']));?>')"><?php echo L('delete')?></a> </td>
</tr>
<?php } ?>
	</tbody>
    </table>
	<div id="pages"><?php echo $pages;?></div>
</div>

</div>
</form>

<script type="text/javascript"> 
<!--
window.top.$('#display_center_id').css('display','none');
function data_delete(obj,id,name){
	window.top.art.dialog({content:name, fixed:true, style:'confirm', id:'data_delete'}, 
	function(){
	$.get('?m=content&c=content&a=enroll_delete&id='+id+'&pc_hash='+pc_hash,function(data){
				if(data) {
					$(obj).parent().parent().fadeOut("slow");
				}
			}) 	
		 }, 
	function(){});
};
//-->
</script>
</body>
</html>
