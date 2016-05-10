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
		$list = $Model -> query('select ID,Overview,Name,Status,EditDate,ODate,OverView,TitleImage,ShowHome from tb_news where Status=1 order by ODate desc limit ' . $startIndex . ',' . $pageSize);
		$newCount = $Model -> query('select count(a.ID) as count from tb_news as a where a.Status=1 ');
		$this -> assign('NewsList', $list);
		$this -> assign('NewsCount', $newCount[0]['count']);
		$this -> display();
	}

	public function BlogDetail() {
		$News = M('news');
		$PID = $_GET['BID'];
		$mydata = $News -> where('Status =1 and ID=' . $PID) -> select();
		$this -> assign('newsdata', $mydata[0]);
		$this -> display();
		//echo var_dump($mydata);
	}

}
