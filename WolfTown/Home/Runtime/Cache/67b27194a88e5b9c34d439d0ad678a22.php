<?php if (!defined('THINK_PATH')) exit(); if(is_array($ProductList)): $i = 0; $__LIST__ = $ProductList;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="grid1_of_4"><div class="content_box"><div style="height: 160px;"><a href="__URL__/productdetail/PID/<?php echo ($data["ID"]); ?>"><img style="width: 190px;height: 160px;" src="__PUBLIC__/UploadFiles/xiaotu/<?php echo ($data["frontimg"]); ?>" class="img-responsive" alt="" /></a></div><h4 style="margin-top: 4px;"><a href="__URL__/productdetail/PID/<?php echo ($data["ID"]); ?>"><?php echo (msubstr($data["Name"],0,30)); ?></a></h4><p><?php echo (msubstr($data["Overview"],0,20)); ?></p></div></div><?php endforeach; endif; else: echo "$empty" ;endif; ?><input type="hidden" id="mydatacount" name="name" value="<?php echo ($ProductCount); ?>" />