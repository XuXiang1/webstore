<?php
class AboutusAction extends CommonAction {
	public function index() {
		$this -> assign('timestamp', 'jack');
		$this -> assign('unique_salt', md5('unique_salt' . 'jack'));
		$m = M('aboutus');
		$data = $m -> where('ID=1') -> select();
		if (empty($data[0]['team'])) {
			$data[0]['team'] = '[]';
		}
		$this -> assign('initdata', $data[0]);
		$this -> display();
	}

	public function editaboutus() {
		$profile = $_POST['profile'];
		$history = $_POST['history'];
		$competence = $_POST['competence'];
		$honor = $_POST['honor'];

		$imagegroup = $_POST['Igroup'];
		$ImageG = json_encode($imagegroup);
		$m = M('aboutus');
		$data['profile'] = $profile;
		$data['history'] = $history;
		$data['competence'] = $competence;
		$data['honor'] = $honor;
		$data['team'] = $ImageG;
		$count = $m -> where('ID=1') -> save($data);
		if ($count > 0) {
			$this -> success('保存成功', 'index');
		} else {
			$this -> error('保存失败');
		}
	}

}
