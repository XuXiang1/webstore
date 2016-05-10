<?php
$targetFolder = '/Company/Public/UploadFiles'; // Relative to the root
$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
$verifyToken = md5('unique_salt' . $_POST['timestamp']);
if(!empty($_POST['target'])){
	switch($_POST['target']){
		case 'addproduct':
			$targetFolder = $targetFolder.'/ProductImage';
			$fileTypes = array('jpg','jpeg','gif','png');
			break;
		default :
		break;
	}
}
else {
	return false;
}

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];		
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		echo '1'.$targetFile;
	} else {
		echo 'Invalid file type.';
	}
}
else {
	echo $verifyToken.'   post token '.$_POST['token'].'  token  '.$_POST['timestamp'];
}
?>