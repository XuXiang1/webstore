<?php if (!defined('THINK_PATH')) exit(); if($childdata|count < 0): if(empty($childname)): ?><input type="hidden" name="childclassid" id="childclassid" value="<?php echo ($childdata[0][ID]); ?>" /><input type="hidden" name="childclassname" id="childclassname" value="<?php echo ($childdata[0][classname]); ?>" /><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="childclassnametext"><?php echo ($childdata[0][classname]); ?><span class="caret"></span></button><?php else: ?><input type="hidden" name="childclassid" id="childclassid" value="<?php echo ($childid); ?>" /><input type="hidden" name="childclassname" id="childclassname" value="<?php echo ($childname); ?>" /><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="childclassnametext"><?php echo ($childname); ?><span class="caret"></span></button><?php endif; ?><ul class="dropdown-menu" aria-labelledby="dropdownMenu7" style="min-width: 130px !important;"><?php if(is_array($childdata)): $i = 0; $__LIST__ = $childdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datac): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)" onclick="selectchild(<?php echo ($datac[ID]); ?>,this)"><?php echo ($datac[classname]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endif; ?>