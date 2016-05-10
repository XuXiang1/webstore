<?php
class JobAction extends CommonAction {
    public function index(){
    	$jobm = M('job');
        $jobdata=	$jobm->where('Status = 1')->order('EditDate desc')->select();
    	$this->assign('joblist',$jobdata);
		$data =S('table_webconfig');
    	$this->assign('jobwelcome',$data[0]);
    	$this->display();
    }
	
    public function jobdetail(){
    	$jobID = $_GET['jid'];
    	if(empty($jobID) || !is_numeric($jobID)){
    		$this->myalert('页面不存在');
    	}
    	else{
    		$jobm = M('job');
    		$jobdata = $jobm->find($jobID);
    	
    		$jobdata['Description'] = str_replace(PHP_EOL, '<br />', $jobdata['Description']);
				$this->assign('jobdata',$jobdata);
    		$skilldata = json_decode($jobdata['Skills']);
    		$this->assign('skilldata',$skilldata);
    		$this->assign('timestamp','jack');
    		$this->assign('unique_salt',md5('unique_salt' . 'jack'));
    		$m = M('webconfig');
    		$data = S('table_webconfig');
    		$this->assign('jobwelcome',$data[0]);
    		$this->display();
    	}
    }
    
    public function addresum(){
    	$jobID = $_POST['JobID'];
    	$resumName = $_POST['resumName'];
    	$resumEmail = $_POST['resumEmail'];
    	$fileName = $_POST['resumFileName'];
    	if(empty($jobID) || !is_numeric($jobID)){
    		$this->myalert('页面不存在');
    	}
    	if(empty($fileName)){
    		$this->myalert('简历上传失败');
    	}

    	$PEditDate= date('Y-m-d H:i:s');
    	
    	$m=M('resum');
    	$m->JobID=$jobID;
    	$m->FileName=$fileName;
    	$m->Uploader=empty($resumName)? '匿名用户':$resumName ;
    	$m->Email=$resumEmail;
    	$m->UploadTime=$PEditDate;
    	$m->IsRead=0;
    	$idNum=$m->add();
    	if($idNum>0){
    		$this->myalert('简历上传成功,管理员会第一时间联系您','index');
    	}else{
    		$this->myalert('简历上传失败');
    	}
    	
    }
}