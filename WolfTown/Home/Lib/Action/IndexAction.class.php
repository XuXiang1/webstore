<?php
class IndexAction extends CommonAction {
	public function Index() {
		$m = M('homeslider');
		$sliderdata = $m -> select();
		$this -> assign('sliderdata', $sliderdata);
		$this -> display();
	}

}
