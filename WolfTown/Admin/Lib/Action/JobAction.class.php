<?php

class JobAction extends CommonAction {
	public function index(){
//  		$Job = M('job');
// 		$list = $Job->join('(select IFNULL(count(tb_resum.ID),0) as resumtotal,tb_resum.JobID from tb_resum group by tb_resum.JobID) as tb_count ON tb_job.ID = tb_count.JobID')->join('(select IFNULL(count(tb_resum.ID),0) as resumisread,tb_resum.JobID from tb_resum where tb_resum.IsRead=0 group by tb_resum.JobID) as tb_countR ON tb_job.ID = tb_countR.JobID')->order('EditDate')->select();
//   		echo var_dump($list);
		$this->assign('timestamp','jack');
		$this->assign('unique_salt',md5('unique_salt' . 'jack'));
 		$this->display();
	}
	
	public function editwelcome(){
		$Ptext1=$_POST['wtext1'];
		$Ptext2=$_POST['wtext2'];
		$Ptext3=$_POST['wtext3'];
		$PImage=$_POST['imgw'];
		$m = M('webconfig');
		$data['JOBWELCOMETEXT1'] =$Ptext1;
		$data['JOBWELCOMETEXT2'] =$Ptext2;
		$data['JOBWELCOMETEXT3'] =$Ptext3;
		$data['JOBWELCOMEIMAGE'] =$PImage;
		$count=$m->where('ID=1')->save($data);
		if($count>0){
			parent::clearcache();
			$this->success('数据修改成功','index');
		}else{
			$this->error('数据修改失败');
		}
	}
	
	public function getwelcomehtml(){
		$m = M('webconfig');
		$data = $m->where('ID=1')->field('JOBWELCOMETEXT1,JOBWELCOMETEXT2,JOBWELCOMETEXT3,JOBWELCOMEIMAGE')->select();
		echo json_encode($data);
	}
	
	public function getrolemail(){
		$m = M('webconfig');
		$data = $m->where('ID=1')->field('MANAGEREMAIL')->select();
		echo json_encode($data[0]);
	}
	
	public function saveroleemail(){
		$Ptext1=$_POST['MANAGEREMAIL'];
		$m = M('webconfig');
		$data['MANAGEREMAIL'] =$Ptext1;
		$count=$m->where('ID=1')->save($data);
		if($count>0){
			parent::clearcache();
			$this->success('数据修改成功','index');
		}else{
			$this->error('数据修改失败');
		}
	}
	
	public function deletejob(){
		$PID=$_POST['ID'];
		$m=M('job');
		$count=$m->where('id='.$PID)->delete(); // 根据条件保存修改的数据
		if($count>0){
			$this->success('数据修改成功','index');
		}else{
			$this->error('数据修改失败');
		}
	}
	
	public function ChangeResumStatue(){
		$PID=$_POST['resumID'];
		$m=M('resum');
		$data['IsRead']=1;
		$count=$m->where('RID='.$PID)->save($data); // 根据条件保存修改的数据
		if($count>0){
			$this->success('数据修改成功','index');
		}else{
			$this->error('数据修改失败');
		}
	}
	
	public function resumpage(){
		$startIndex=$_POST['PageIndex'];
		$jobid = $_POST['JobID'];
		if(empty($startIndex) || empty($jobid)){
			$this->error('页面不存在');
		}
		$pageSize=10;
		$startIndex = ($startIndex -1)* $pageSize ;
		$newCount = -1;
		$resum = M('resum');
		$list = $resum->join('tb_job ON tb_resum.JobID = tb_job.ID ')->where('tb_resum.JobID=%d',array($jobid))->order('tb_resum.UploadTime desc')->order('tb_resum.IsRead')->limit($startIndex,$pageSize)->select();
		
		$newCount=$resum->where('JobID='.$jobid)->count("ID");
		
		$this->assign('ResumCount',$newCount);
		$this->assign('ResumList',$list);
		$this->display();
	}
	
	public function jobpage(){
		$startIndex=$_POST['PageIndex'];
		if(empty($startIndex)){
			$this->error('页面不存在');
		}
		$pageSize=10;
		$startIndex = ($startIndex -1)* $pageSize ;
		$newCount = -1;
		$Job = M('job');
		$list = $Job->join('(select IFNULL(count(tb_resum.RID),0) as resumtotal,tb_resum.JobID from tb_resum group by tb_resum.JobID) as tb_count ON tb_job.ID = tb_count.JobID')->join('(select IFNULL(count(tb_resum.RID),0) as resumisread,tb_resum.JobID from tb_resum where tb_resum.IsRead=0 group by tb_resum.JobID) as tb_countR ON tb_job.ID = tb_countR.JobID')->order('EditDate')->limit($startIndex,$pageSize)->select();
		
		$newCount=$Job->count("ID");
		
		$this->assign('JobCount',$newCount);
		$this->assign('JobList',$list);
// 		echo var_dump($list)
		$this->display();
	}
	
	public function ChangeStatue(){
		$PID=$_POST['ID'];
		$m=M('job');
		$data['Status']=$_POST['Status'];
		$data['EditDate']=date('Y-m-d H:i:s');
		$count=$m->where('id='.$PID)->save($data); // 根据条件保存修改的数据
		if($count>0){
			$this->success('数据修改成功','index');
		}else{
			$this->error('数据修改失败');
		}
	}
	
	public function addjob(){
		$JobID=$_POST['JobID'];
		$JobtName=$_POST['JobtName'];
		$JobDescription =$_POST['JobDescription'];
		$JobSkills=$_POST['JobSkills'];
		$JobPay=$_POST['JobPay'];
		$Jobtlocation=$_POST['Jobtlocation'];
		
		$PEditDate= date('Y-m-d H:i:s');
		
		if(!empty($JobID)){
			$m=M('job');
			$data['ID']=$JobID;
			$data['JobName']=$JobtName;
			$data['Description']=$JobDescription;
			$data['Skills']= json_encode($JobSkills) ;
			$data['Pay']=$JobPay;
			$data['joblocation']=$Jobtlocation;
			$data['EditDate']=$PEditDate;
			$count=$m->where('id='.$JobID)->save($data);
			if($count>0){
				$this->success('数据修改成功','index');
			}else{
				$this->error('数据修改失败');
			}
		}
		else{
			$m=M('job');
			$m->ID=$JobID;
			$m->JobName=$JobtName;
			$m->Description=$JobDescription;
			$m->Skills=json_encode($JobSkills);
			$m->Pay=$JobPay;
			$m->joblocation=$Jobtlocation;
			$m->EditDate=$PEditDate;
			$idNum=$m->add();
			if($idNum>0){
				$this->success('数据添加成功','index');
			}else{
				$this->error('数据添加失败');
			}
		}
	}

}