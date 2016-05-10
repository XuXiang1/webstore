<?php
class AboutusAction extends CommonAction {
	public function index() {
		$pagename = $_GET['pid'];
		$m = M('aboutus');
		$data = $m -> where('ID=1') -> select();
		$this -> assign('initdata', $data[0]);
		$data2 = json_decode($data[0]['team']);
		$this -> assign('data2', $data2);
		
		$m = M('member');
		$memberdata = $m -> select();
		$this -> assign('memberdata', $memberdata);
		
		$this -> assign('pid', $pagename);
		$this -> display();
	}

}
