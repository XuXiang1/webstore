<?php
class ContactusAction extends CommonAction {
	public function index() {
		$m = M('companyinfo');
		$data = $m -> where('ID=1') -> select();
		$this -> assign('initdata', $data[0]);
		$this -> display();
	}

	public function sendmessage() {
		$name = $_POST['Name'];
		$Email = $_POST['contact-email'];
		$reg = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
		if (preg_match($reg, $Email)) {
			$Message = $_POST['contact-message'];
			$comment = M('message');
			$comment -> Name = $name;
			$comment -> Email = $Email;
			$comment -> Message = $Message;
			$comment -> PostTime = date('y-m-d H:i:s', time());
			$idNum = $comment -> add();
			if ($idNum > 0) {
				$this -> myalert('发送成功，管理员会通过邮箱联系您');
			} else {
				$this -> myalert('发送失败');
			}
		} else {
			$this -> myalert('请填写正确的邮箱地址！');
		}
	}

}
