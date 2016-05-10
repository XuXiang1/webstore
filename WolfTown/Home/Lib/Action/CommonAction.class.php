<?php
class CommonAction extends Action {
	Public function _initialize() {
		// 网页配置数据缓存
		$Model = M('webconfig');
		$Model -> cache('table_webconfig', 30 * 60) -> select();

		//导航条模块名称
		$data = S('table_webconfig');
		$data2 = json_decode($data[0]['MODELDIC'], true);
		$modelname = strtolower($Think . MODULE_NAME);
		$actionname = strtolower($Think . ACTION_NAME);
		switch ($modelname) {
			case 'index' :
				$modelname = '首页';
				break;
			case 'aboutus' :
				$modelname = '走进狼堡';
				break;
			case 'product' :
				$modelname = '狼堡产品';
				break;
			case 'fenxiao' :
				$modelname = '商品分销';
				break;
			case 'join' :
				$modelname = '加盟狼堡';
				break;
			case 'contactus' :
				$modelname = '联系我们';
				break;
			case 'job' :
				$modelname = '诚聘英才';
				break;
			default :
				break;
		}
		$this -> assign('ModelName', $modelname);
		$this -> assign('ActionName', $data2[$actionname]);
		$this -> assign('ModelKey', strtolower($Think . MODULE_NAME));
		$this -> assign('ActionKey', strtolower($Think . ACTION_NAME));
		$this -> assign('IndexName', $data2['index']);
		$this -> assign('modeldata', $data2);

		$this -> assign('dname', $data[0]['SITENAME']);
		$this -> assign('dlogo', $data[0]['SITELOGO']);
		$this -> assign('returnurl1', urlencode('__SELF__'));
		$this -> assign('empty', '<p class="listempty">非常抱歉，这里没有数据</p>');

		$pclass = M('productclass');
		$parents = $pclass -> where('isparent=1') -> select();
		$childrens = $pclass -> where('isparent=0') -> select();
		$this -> assign('parentdata', $parents);
		$this -> assign('chilrendata', $childrens);

		//		//如果登陆，显示登陆信息
		//		$setUserID = session('username');
		//		if (!isset($setUserID) || $setUserID == '') {
		//			//$this->redirect('Login/login');
		//			$this -> assign('loginUserName', '');
		//		} else {
		//			$this -> assign('loginUserName', session('username'));
		//			$this -> assign('loginUserHead', session('userhead'));
		//		}
	}

	public function myalert($msg, $jumpurl = '__URL__', $time = 3) {
		$this -> assign('mymsg', $msg);
		$this -> assign('jumpurl', $jumpurl);
		$this -> assign('time', $time);
		$this -> display('Common:index');
		exit ;
	}

}
?>
