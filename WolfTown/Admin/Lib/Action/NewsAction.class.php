<?php
class NewsAction extends CommonAction {
	public function index() {

		$this -> display();
	}

	public function NewsPage() {
		$startIndex = $_POST['PageIndex'];
		if (empty($startIndex)) {
			$this -> error('页面不存在');
		}
		$pageSize = 10;
		$startIndex = ($startIndex - 1) * $pageSize;
		$newCount = -1;
		$Model = M();
		$list = $Model -> query('select ID,Overview,Name,Status,EditDate,ODate,OverView,TitleImage,ShowHome from tb_news order by ODate desc limit ' . $startIndex . ',' . $pageSize);
		$newCount = $Model -> query('select count(a.ID) as count from tb_news as a');
		$this -> assign('NewsList', $list);
		$this -> assign('NewsCount', $newCount[0]['count']);
		$this -> display();
	}

	public function AddNews() {
		$PID = $_POST['NID'];
		$PImage = $_POST['TitleImage'];
		$PName = $_POST['NewsName'];
		$PODate = $_POST['NewsDate'];
		$POverview = $_POST['NewsOverView'];
		$PContent = $_POST['NewsContent'];
		$PStatues = $_POST['NStatues'];
		$PEditDate = date('Y-m-d H:i:s');
		if (!empty($PID)) {
			$m = M('news');
			$data['Name'] = $PName;
			$data['TitleImage'] = $PImage;
			$data['OverView'] = $POverview;
			$data['Content'] = $PContent;
			$data['EditDate'] = $PEditDate;
			$data['ODate'] = $PODate;
			$count = $m -> where('id=' . $PID) -> save($data);
			$slider = M('homeslider');
			$slidata['Image'] = 'NewsImage/' . $PImage;
			$slider -> where('Link = \'/company/Blog/blogdetail/BID/' . $PID . '\'') -> save($slidata);
			if ($count > 0) {
				$this -> success('数据修改成功', 'index');
			} else {
				$this -> error('数据修改失败');
			}
		} else {
			$m = M('news');
			$m -> Name = $PName;
			$m -> TitleImage = $PImage;
			$m -> ODate = $PODate;
			$m -> OverView = $POverview;

			$m -> Content = $PContent;
			$m -> EditDate = $PEditDate;
						$m -> Status = 1;
			$idNum = $m -> add();
			if ($idNum > 0) {
				$this -> success('数据添加成功', 'index');
			} else {
				$this -> error('数据添加失败');
			}
		}
	}

	public function EditNews() {
		$NID = $_GET['nid'];
		$m = M('news');
		$this -> assign('nid', $NID);
		$newsdata;
		if (!empty($NID)) {
			$newsdata = $m -> where('ID=' . $NID) -> select();

		}
//		echo "<pre>";
//		var_dump($newsdata);
//		echo "</pre>";
		$this -> assign('newsdata', $newsdata[0]);
		$this -> assign('timestamp', 'jack');
		$this -> assign('unique_salt', md5('unique_salt' . 'jack'));
		$this -> display();
	}

	public function DeleteNews() {
		$PID = $_POST['ID'];
		$m = M('news');
		$m -> delete($PID);
		//删除id为2的数据
		parent::clearcache();
		$this -> success('数据修改成功', 'index');
	}

	public function ChangeStatue() {
		$PID = $_POST['ID'];
		$m = M('news');
		$data['Status'] = $_POST['Status'];
		$data['EditDate'] = date('Y-m-d H:i:s');
		$count = $m -> where('id=' . $PID) -> save($data);
		// 根据条件保存修改的数据
		if ($count > 0) {
			parent::clearcache();
			$this -> success('数据修改成功', 'index');
		} else {
			$this -> error('数据修改失败');
		}
	}

	public function ChangeShow() {
		$PID = $_POST['ID'];
		$m = M('news');
		$data['ShowHome'] = $_POST['ShowHome'];
		$data['EditDate'] = date('Y-m-d H:i:s');
		$count = $m -> where('id=' . $PID) -> save($data);
		// 根据条件保存修改的数据
		if ($count > 0) {
			parent::clearcache();
			$this -> success('数据修改成功', 'index');
		} else {
			$this -> error('数据修改失败');
		}
	}

}
