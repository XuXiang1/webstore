<?php
$targetFolder = $_POST['currentroot'] . '/Public/UploadFiles';
// Relative to the root
$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
// File extensions
$verifyToken = md5('unique_salt' . $_POST['timestamp']);
$fileName = date('Ymd') . '-' . create_guid() . '.';
if (!empty($_POST['target'])) {
	switch($_POST['target']) {
		case 'addproduct' :
			$targetFolder = $targetFolder . '/ProductImage';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;
		case 'addnews' :
			$targetFolder = $targetFolder . '/NewsImage';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;
		case 'addresum' :
			$targetFolder = $targetFolder . '/Resum';
			$fileTypes = array('doc', 'docx');
			break;
		case 'addmember' :
			$targetFolder = $targetFolder . '/MemberImage';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;
		case 'jobwelcome' :
			$targetFolder = $targetFolder . '/JobWelcome';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;
		case 'addaboutus' :
			$targetFolder = $targetFolder . '/AboutUS';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;
		case 'addslider' :
			$targetFolder = $targetFolder . '/Slider';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;

		case 'addlogo' :
			$targetFolder = $targetFolder . '/logo';
			$fileTypes = array('jpg', 'jpeg', 'gif', 'png');
			break;
		default :
			break;
	}
} else {
	return false;
}

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	$targetFile = rtrim($targetPath, '/') . '/' . $fileName . $fileParts['extension'];
	if (in_array($fileParts['extension'], $fileTypes)) {
		move_uploaded_file($tempFile, $targetFile);
		//生成缩略图
		if($_POST['target'] == 'addproduct'){
			$xiaotupath =  $_SERVER['DOCUMENT_ROOT'].$_POST['currentroot'] . '/Public/UploadFiles' . '/xiaotu';
			$file_new = rtrim($xiaotupath, '/') . '/' .$fileName. $fileParts['extension'];
			img2thumb($targetFile, $file_new);
		}
		
		echo $fileName . $fileParts['extension'];
	} else {
		echo 'Invalid';
	}
} else {
	//echo $verifyToken.'   post token '.$_POST['token'].'  token  '.$_POST['timestamp'];
	//echo $targetFolder;
	echo 'Invalid';
}

function create_guid() {
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $hyphen = chr(45);// "-"
    $uuid = chr(123)// "{"
    .substr($charid, 0, 8).$hyphen
    .substr($charid, 8, 4).$hyphen
    .substr($charid,12, 4).$hyphen
    .substr($charid,16, 4).$hyphen
    .substr($charid,20,12)
    .chr(125);// "}"
    return $uuid;
}

/**
 * 生成缩略图
 * @author yangzhiguo0903@163.com
 * @param string     源图绝对完整地址{带文件名及后缀名}
 * @param string     目标图绝对完整地址{带文件名及后缀名}
 * @param int        缩略图宽{0:此时目标高度不能为0，目标宽度为源图宽*(目标高度/源图高)}
 * @param int        缩略图高{0:此时目标宽度不能为0，目标高度为源图高*(目标宽度/源图宽)}
 * @param int        是否裁切{宽,高必须非0}
 * @param int/float  缩放{0:不缩放, 0<this<1:缩放到相应比例(此时宽高限制和裁切均失效)}
 * @return boolean
 */
function img2thumb($src_img, $dst_img, $width = 330, $height = 325, $cut = 1, $proportion = 0)
{
    if(!is_file($src_img))
    {
        return false;
    }
    $ot = fileext($dst_img);
    $otfunc = 'image' . ($ot == 'jpg' ? 'jpeg' : $ot);
    $srcinfo = getimagesize($src_img);
    $src_w = $srcinfo[0];
    $src_h = $srcinfo[1];
    $type  = strtolower(substr(image_type_to_extension($srcinfo[2]), 1));
    $createfun = 'imagecreatefrom' . ($type == 'jpg' ? 'jpeg' : $type);
 
    $dst_h = $height;
    $dst_w = $width;
    $x = $y = 0;
 
    /**
     * 缩略图不超过源图尺寸（前提是宽或高只有一个）
     */
    if(($width> $src_w && $height> $src_h) || ($height> $src_h && $width == 0) || ($width> $src_w && $height == 0))
    {
        $proportion = 1;
    }
    if($width> $src_w)
    {
        $dst_w = $width = $src_w;
    }
    if($height> $src_h)
    {
        $dst_h = $height = $src_h;
    }
 
    if(!$width && !$height && !$proportion)
    {
        return false;
    }
    if(!$proportion)
    {
        if($cut == 0)
        {
            if($dst_w && $dst_h)
            {
                if($dst_w/$src_w> $dst_h/$src_h)
                {
                    $dst_w = $src_w * ($dst_h / $src_h);
                    $x = 0 - ($dst_w - $width) / 2;
                }
                else
                {
                    $dst_h = $src_h * ($dst_w / $src_w);
                    $y = 0 - ($dst_h - $height) / 2;
                }
            }
            else if($dst_w xor $dst_h)
            {
                if($dst_w && !$dst_h)  //有宽无高
                {
                    $propor = $dst_w / $src_w;
                    $height = $dst_h  = $src_h * $propor;
                }
                else if(!$dst_w && $dst_h)  //有高无宽
                {
                    $propor = $dst_h / $src_h;
                    $width  = $dst_w = $src_w * $propor;
                }
            }
        }
        else
        {
            if(!$dst_h)  //裁剪时无高
            {
                $height = $dst_h = $dst_w;
            }
            if(!$dst_w)  //裁剪时无宽
            {
                $width = $dst_w = $dst_h;
            }
            $propor = min(max($dst_w / $src_w, $dst_h / $src_h), 1);
            $dst_w = (int)round($src_w * $propor);
            $dst_h = (int)round($src_h * $propor);
            $x = ($width - $dst_w) / 2;
            $y = ($height - $dst_h) / 2;
        }
    }
    else
    {
        $proportion = min($proportion, 1);
        $height = $dst_h = $src_h * $proportion;
        $width  = $dst_w = $src_w * $proportion;
    }
 
    $src = $createfun($src_img);
    $dst = imagecreatetruecolor($width ? $width : $dst_w, $height ? $height : $dst_h);
    $white = imagecolorallocate($dst, 255, 255, 255);
    imagefill($dst, 0, 0, $white);
 
    if(function_exists('imagecopyresampled'))
    {
        imagecopyresampled($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    }
    else
    {
        imagecopyresized($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    }
    $otfunc($dst, $dst_img);
    imagedestroy($dst);
    imagedestroy($src);
    return true;
}
function fileext($file)
{
    return pathinfo($file, PATHINFO_EXTENSION);
}
?>
?>