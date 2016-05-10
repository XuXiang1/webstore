<?php
class FenxiaoAction extends CommonAction {
	public function index() {
		$m = M('fenxiao');
		$data = $m -> where('ID=1') -> select();
		
		$this -> assign('initdata', $data[0]);
		$this -> display();
	}

	public function editjoin() {
		$content = $_POST['content'];

		$m = M('fenxiao');
		$data['content'] = $content;
		
		$count = $m -> where('ID=1') -> save($data);
		if ($count > 0) {
			$this -> success('保存成功', 'index');
		} else {
			$this -> error('保存失败');
		}
	}

}