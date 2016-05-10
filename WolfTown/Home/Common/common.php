<?php
function MSendEmail($smtpemailto,$mailtitle,$mailcontent){
	require_once "email.class.php";
	$smtpserver = "smtp.qq.com";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = "502815987@qq.com";//SMTP服务器的用户邮箱
	$smtpuser = "502815987";//SMTP服务器的用户帐号
	$smtppass = "AAA@jason";//SMTP服务器的用户密码
	$m = M('webconfig');
	$configList = $m->select();
	$configList=$configList[0];
	$smtpserver =$configList['MAILSERVER'];
	$smtpserverport =$configList['MAILPORT'];
	$smtpusermail =$configList['MAILUSER'];
	$smtpuser =$configList['MAILACCOUNT'];
	$smtppass =$configList['MAILPASSWORD'];
	$mailtitle = "=?UTF-8?B?".base64_encode($mailtitle)."?=";
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	if($state==""){
		return false;
	}
	return true;

}

function make_password($length = 8)
{

	$chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
			'i', 'j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r', 's',
			't', 'u', 'v', 'w', 'x', 'y','z', 'A', 'B', 'C', 'D',
			'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L','M', 'N', 'O',
			'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y','Z',
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9');	
	$carcount =count($chars);
	$password = "";
	for($i = 0; $i < $length; $i++)
	{
		$key = rand(0,$carcount-1);
		$password .= $chars[$key];
	}
	return $password;
}