<?php
class LoginAction extends Action {
	public function index() {
		$this -> display();
	}

	public function dologin() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = trim($username);
		$password = trim($password);
		$code = $_POST['login-code'];
		if (md5(trim($code)) != session('codename')) {
			$this -> error('验证码不正确', 'index');
		}

		if ($username == 'wolftown' && $password == 'wt147123') {
			session('username', $username);
			$this -> redirect('/');
		} else {
			$this -> error('用户名或密码错误', 'index');
		}
	}

}
