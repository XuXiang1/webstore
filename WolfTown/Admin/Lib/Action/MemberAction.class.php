<?php
class MemberAction extends CommonAction {
	public function index() {
		$this -> display();
	}

	public function EditMember() {
		$pid = $_GET['pid'];
		$this -> assign('timestamp', 'jack');
		$this -> assign('unique_salt', md5('unique_salt' . 'jack'));
		$this -> assign('pid', $pid);
		$m = M('member');

		$memberdata = $m -> where('ID=' . $pid) -> select();

		$this -> assign('memberdata', $memberdata[0]);

		$this -> display();
	}
	
	public function AddMember(){
		$PID = $_POST['memberid'];
		$membername = $_POST['membername'];
		$location = $_POST['location'];
		$myimgfilename = $_POST['myimgfilename'];
		
		if (!empty($PID)) {
			$m = M('member');
			$data['name'] = $membername;
			$data['location'] = $location;
			$data['imgsrc'] = $myimgfilename;
			$count = $m -> where('id=' . $PID) -> save($data);
			
			if ($count > 0) {
				$this -> success('数据修改成功', 'index');
			} else {
				$this -> error('数据修改失败');
			}
		} else {
			$m = M('member');
			$m -> name = $membername;
			$m -> location = $location;
			$m -> imgsrc = $myimgfilename;
			$idNum = $m -> add();
			
			if ($idNum > 0) {
				$this -> success('数据添加成功', 'index');
			} else {
				$this -> error('数据添加失败');
			}
		}
	}

	public function DeleteMember() {
		$PID = $_POST['ID'];
		$m = M('member');
		$m -> delete($PID);
		//删除id为2的数据

		$this -> success('数据修改成功', 'index');
	}

	public function memberpage() {
		$startIndex = $_POST['PageIndex'];
		$startContent = $_POST['searchContent'];
		$startContent = trim($startContent);
		if (empty($startIndex)) {
			$this -> error('页面不存在');
		}
		$pageSize = 10;
		$startIndex = ($startIndex - 1) * $pageSize;
		$Model = M();
		$memberdata = '';
		$newCount = -1;
		$memberdata = $Model -> query('select * from tb_member as a  limit ' . $startIndex . ',' . $pageSize);
		$newCount = $Model -> query('select count(a.UserID) as count from tb_member as a');

		$this -> assign('MemberCount', $newCount[0]['count']);
		$this -> assign('MemberList', $memberdata);
		$this -> display();
	}

}
