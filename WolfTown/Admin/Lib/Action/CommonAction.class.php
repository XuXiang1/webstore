<?php
class CommonAction extends Action {
	Public function _initialize() {

		//如果登陆，显示登陆信息
		$setUserID = session('username');
		if (!isset($setUserID) || $setUserID == '') {
			$this -> redirect('Login/index');
		}
//		}
	}

	public function clearcache() {
		$svndir = $_SERVER['DOCUMENT_ROOT'] . __ROOT__ . '/Home/Runtime/Temp';
		//先删除目录下的文件：
		$dh = opendir($svndir);
		while ($file = readdir($dh)) {
			if ($file != "." && $file != "..") {
				$fullpath = $svndir . "/" . $file;
				if (is_dir($fullpath)) {
					delsvndir($fullpath);
				} else {
					unlink($fullpath);
				}
			}

		}
		closedir($dh);
		return 1;
	}

}
?>
