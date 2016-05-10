<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
	public function index() {
		$m = M('webconfig');
		$data = $m -> where('ID=1') -> field('MODELDIC,SITENAME,SITELOGO') -> select();
		$data2 = json_decode($data[0]['MODELDIC'], true);
		$this -> assign('modelname', $data2);
		$this -> assign('timestamp', 'jack');
		$this -> assign('unique_salt', md5('unique_salt' . 'jack'));
		$this -> assign('dname', $data[0]['SITENAME']);
		$this -> assign('dlogo', $data[0]['SITELOGO']);

		//未下载简历
		$resum = M('resum');
		$countresum = $resum -> where('IsRead=0') -> count();
		$this -> assign('countresum', $countresum);
		//未读留言
		$message = M('message');
		$countmessage = $message -> where('IsRead=0') -> count();
		$this -> assign('countmessage', $countmessage);
		//未上线产品
		$product = M('product');
		$countproduct = $product -> where('Statues=0') -> count();
		$this -> assign('countproduct', $countproduct);
		//未上线新闻
		$news = M('news');
		$countnews = $news -> where('Status=0') -> count();
		$this -> assign('countnews', $countnews);
		//		echo var_dump($data2);
		$this -> display();
	}

	public function editslider() {
		$this -> assign('timestamp', 'jack');
		$this -> assign('unique_salt', md5('unique_salt' . 'jack'));

		$m = M('homeslider');
		$sliderdata = $m -> select();
		$this -> assign('sliderdata', $sliderdata);
		$pclass = M('productclass');
		$parents = $pclass -> where('isparent=1') -> select();
		$this -> assign('parentdata', $parents);

		$newsd = M('news');
		$newsdata = $newsd -> where('Status=1') -> field('ID,Name') -> select();
		$this -> assign('newsdata', $newsdata);
		//		echo "<pre>";
		//var_dump($sliderdata);
		//echo "</pre>";
		$this -> display();
	}

	public function getslider() {
		$pid = $_POST['pid'];
		$m = M('homeslider');
		$result = $m -> where('ID=' . $pid) -> select();

		$this -> ajaxReturn($result[0], 'JSON');

	}

	public function GetChild() {
		$parentid = $_POST['pid'];

		$pclass = M('productclass');
		$child = $pclass -> where('isparent=0 and parentclass=' . $parentid) -> select();
		$this -> assign('childdata', $child);

		$this -> display();
	}

	public function editsliderpost() {
		$PID = $_POST['pid'];
		$imgsrc = $_POST['imgsrc'];
		$slidertitle = $_POST['slidertitle'];
		$slideroverview = $_POST['slideroverview'];
		$sliderlinktext = $_POST['sliderlinktext'];
		$sliderlink = $_POST['sliderlink'];

		$linktype = $_POST['linktype'];
		$parentclassid = $_POST['parentclassid'];
		$childclassid = $_POST['childclassid'];
		$newsid = $_POST['newsid'];

		switch ($linktype) {
			case 'product' :
				$sliderlink = '/index.php/Product/index/d1/' . $parentclassid . '/d2/' . $childclassid;
				break;
			case 'news' :
				$sliderlink = '/index.php/News/blogdetail/BID/' . $newsid;
				break;
			case 'joinus' :
				$sliderlink = '/index.php/join';
				break;
			default :
				break;
		}

		if (!empty($PID)) {
			$m = M('homeslider');
			$data['imgsrc'] = $imgsrc;
			$data['overview'] = $slideroverview;
			$data['title'] = $slidertitle;
			$data['linktext'] = $sliderlinktext;
			$data['link'] = $sliderlink;

			$data['linktype'] = $linktype;
			$data['parentid'] = $parentclassid;
			$data['childid'] = $childclassid;
			$data['newsid'] = $newsid;
			$count = $m -> where('id=' . $PID) -> save($data);
			if ($count > 0) {
				$this -> success('数据修改成功', 'editslider');
			} else {
				$this -> error('数据修改失败', 'editslider');
			}
		} else {
			$this -> error('数据修改失败', 'editslider');
		}
	}

}
