<?php
class ContactusAction extends CommonAction {
	public function index(){
		$m = M('companyinfo');
		$data = $m->where('ID=1')->select();
		$this->assign('initdata',$data[0]);
		
		$this->display();
	}

	public function ContactusPage(){
		$startIndex=$_POST['PageIndex'];
		if(empty($startIndex)){
			$this->error('页面不存在');
		}
		$pageSize=10;
		$startIndex = ($startIndex -1)* $pageSize ;
		$newCount = -1;
		$Model = M();
		$list = $Model->query('select * from tb_message order by PostTime desc limit '.$startIndex.','.$pageSize);
		$newCount  = $Model->query('select count(a.ID) as count from tb_message as a');
		$this->assign('MessageList',$list);
		$this->assign('MessageCount',$newCount[0]['count']);
		$this->display();
	}
	
	public function EditCompany(){
	 	$Name = $_POST['Name'];
	 	$Addr = $_POST['Address'];
	 	$pointX = $_POST['pointX'];
	 	$pointY = $_POST['pointY'];
	 	$Email = $_POST['Email'];
	 	$Phone = $_POST['Tel'];
	 	$Fax = $_POST['Fax'];
	 	$m = M('companyinfo');
	 	$data['Name'] = $Name;
	 	$data['Address'] = $Addr;
	 	$data['PointX']=$pointX;
	 	$data['PointY'] = $pointY;
	 	$data['Email']=$Email;
	 	$data['Fax'] = $Fax;
	 	$data['Phone']=$Phone;
	 	$count=$m->where('ID=1')->save($data);
	 	if($count>0){
	 		$this->success('保存成功','index');
	 	}else{
	 		$this->error('保存失败');
	 	}
	}
}