<?php
	class PublicAction extends Action{
		function code(){
			import('ORG.Util.Image');
    		Image::buildImageVerify(4,1,'png',80,30,'codename');
		}
	}
?>
