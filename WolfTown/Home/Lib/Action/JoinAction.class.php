<?php
class JoinAction extends CommonAction {
	public function index() {
		$m = M('join');
		$data = $m -> where('ID=1') -> select();
		
		$this -> assign('initdata', $data[0]);
		
			$m = M('member');
		$memberdata = $m -> select();
		$this -> assign('memberdata', $memberdata);
		$this -> display();
	}
}