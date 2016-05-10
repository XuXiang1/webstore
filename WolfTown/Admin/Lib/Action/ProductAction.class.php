<?php
// 本类由系统自动生成，仅供测试用途
class ProductAction extends CommonAction {
	public function index() {
		$this -> display();
	}

	public function editclass() {
		$pclass = M('productclass');
		$parents = $pclass -> where('isparent=1') -> select();
		$childrens = $pclass -> where('isparent=0') -> select();
		$this -> assign('parentdata', $parents);
		$this -> assign('chilrendata', $childrens);

		$pclass2 = M('brand');
		$branddata = $pclass2 -> select();
		$this -> assign('branddata', $branddata);
		$this -> display();
	}

	public function AddBrand() {
		$brandid = $_POST['brandid'];
		$brandname = $_POST['brandname'];

		$pclass = M('brand');
		$pclass -> name = $brandname;
		$pclass -> add();
		$this -> success('数据修改成功', 'index');
	}

	public function EditBrand() {
		$brandid = $_POST['brandid'];
		$brandname = $_POST['brandname'];

		$pclass = M('brand');
		$data['name'] = $brandname;
		$pclass -> where('ID=' . $brandid) -> save($data);
		
		$m = M('product');
		$data1['brandname'] = $brandname;
		$m -> where('brandid=' . $brandid) -> save($data1);
		$this -> success('数据修改成功', 'index');
	}

	public function DeleteBrand() {
		$brandid = $_POST['brandid'];
		$brandname = $_POST['brandname'];
		$pclass = M('brand');
		$pclass -> where('ID=' . $brandid) -> delete();
		$this -> success('数据修改成功', 'index');
	}

	public function productpage() {
		$startIndex = $_POST['PageIndex'];
		if (empty($startIndex)) {
			$this -> error('页面不存在');
		}
		$pageSize = 10;
		$startIndex = ($startIndex - 1) * $pageSize;
		$newCount = -1;
		$User = M('product');
		$list = $User->field('ID,Name,Overview,parentclassid,parentclassname,childclassid,childclassname,brandid,brandname,OrderID,frontimg,EditDate')  -> order('OrderID') -> limit($startIndex, $pageSize) -> select();
		$newCount = $User -> count("ID");
		$this -> assign('ProductCount', $newCount);
		$this -> assign('ProductList', $list);
		$this -> display();
	}

	public function AddClass() {
		$isparent = $_POST['isparent'];
		$classname = $_POST['classname'];
		$parentclass = $_POST['parentclass'];

		$pclass = M('productclass');
		$pclass -> classname = $classname;
		$pclass -> isparent = $isparent;
		$pclass -> parentclass = $parentclass;
		$pclass -> add();
		$this -> success('数据修改成功', 'index');
	}

	public function EditClassname() {
		$classid = $_POST['classid'];
		$isparent = $_POST['isparent'];
		$classname = $_POST['classname'];
		$parentclass = $_POST['parentclass'];

		$pclass = M('productclass');
		$data['classname'] = $classname;
		$pclass -> where('ID=' . $classid) -> save($data);
		$m = M('product');
		$data1['parentclassname'] = $classname;
		$m -> where('parentclassid=' . $classid) -> save($data1);
		$data2['childclassname'] = $classname;
		$pclass -> where('childclassid=' . $classid) -> save($data2);

		$this -> success('数据修改成功', 'index');
	}

	public function DeleteClass() {
		$currentid = $_POST['currentid'];
		$isparent = $_POST['isparent'];
		$pclass = M('productclass');

		if ($isparent == 1) {
			$pclass -> where('ID=' . $currentid . ' and isparent=1') -> delete();
			$pclass -> where('parentclass=' . $currentid . ' and isparent=0') -> delete();
		} else if ($isparent == 0) {
			$pclass -> where('ID=' . $currentid . ' and isparent=0') -> delete();
		}
		$this -> success('数据修改成功', 'index');
	}

	public function DeleteProduct() {
		$PID = $_POST['ID'];
		$m = M('product');
		$m -> delete($PID);
		//删除id为2的数据

		$this -> success('数据修改成功', 'index');
	}

	public function EditProduct() {
		$pid = $_GET['pid'];
		$this -> assign('timestamp', 'jack');
		$this -> assign('unique_salt', md5('unique_salt' . 'jack'));
		$this -> assign('pid', $pid);
		$m = M('product');
		$pimg = M('productimg');
		$productdata;
		$productimgdata;
		if (!empty($pid)) {
			$productdata = $m -> where('ID=' . $pid) -> select();
			$productimgdata = $pimg -> where('pid=' . $pid) -> select();
		}

		$this -> assign('productdata', $productdata[0]);
		$this -> assign('productimgdata', $productimgdata);
		$pclass = M('productclass');
		$parents = $pclass -> where('isparent=1') -> select();
		$this -> assign('parentdata', $parents);

		$pclass2 = M('brand');
		$branddata = $pclass2 -> select();
		$this -> assign('branddata', $branddata);
		$this -> display();
	}

	public function GetChild() {
		$parentid = $_POST['pid'];
		$childid = $_POST['childid'];
		$childname = $_POST['childname'];
		$pclass = M('productclass');
		$child = $pclass -> where('isparent=0 and parentclass=' . $parentid) -> select();
		$this -> assign('childdata', $child);
		$this -> assign('childid', $childid);
		$this -> assign('childname', $childname);
		$this -> display();
	}

	public function AddProduct() {
		$PID = $_POST['productid'];
		$PName = $_POST['ProductName'];
		$OrderID = $_POST['OrderID'];
		$ProductOverView = $_POST['ProductOverView'];
		$Description = $_POST['Description'];
		$PEditDate = date('Y-m-d H:i:s');
		$parentclassid = $_POST['parentclassid'];
		$parentclassname = trim($_POST['parentclassname']);
		$childclassid = $_POST['childclassid'];
		$childclassname = trim($_POST['childclassname']);
		$brandid = $_POST['brandid'];
		$brandname = trim($_POST['brandname']);
		
		$imgpaixu = $_POST['paixu'];
		$fimg = $_POST['fimg'];
		$frontimg = $fimg[0];
		if (!empty($PID)) {
			$m = M('product');
			$data['Name'] = $PName;
			$data['Overview'] = $ProductOverView;
			$data['Description'] = $Description;
			$data['OrderID'] = $OrderID;
			$data['EditDate'] = $PEditDate;

			$data['parentclassid'] = $parentclassid;
			$data['parentclassname'] = $parentclassname;
			$data['childclassid'] = $childclassid;
			$data['childclassname'] = $childclassname;
			$data['brandid'] = $brandid;
			$data['brandname'] = $brandname;
			$data['frontimg'] = $frontimg;
			

			$count = $m -> where('id=' . $PID) -> save($data);
			$pimg = M('productimg');
			$pimg -> where('pid=' . $PID) -> delete();
			for ($i = 0; $i < count($imgpaixu); $i++) {
				$paixu = $imgpaixu[$i];
				$filename = $fimg[$i];
				$pimg -> pid = $PID;
				$pimg -> imgsrc = $filename;
				$pimg -> OrderID = $paixu;
				$pimg -> add();
			}
			if ($count > 0) {
				$this -> success('数据修改成功', 'index');
			} else {
				$this -> error('数据修改失败');
			}
		} else {
			$m = M('product');
			$m -> Name = $PName;
			$m -> Overview = $ProductOverView;
			$m -> Description = $Description;
			$m -> OrderID = $OrderID;
			$m -> EditDate = $PEditDate;

			$m -> parentclassid = $parentclassid;
			$m -> parentclassname = $parentclassname;
			$m -> childclassid = $childclassid;
			$m -> childclassname = $childclassname;
			$m -> brandid = $brandid;
			$m -> brandname = $brandname;
			$m -> frontimg = $frontimg;
			

			$idNum = $m -> add();
			$pimg = M('productimg');
			for ($i = 0; $i < count($imgpaixu); $i++) {
				$paixu = $imgpaixu[$i];
				$filename = $fimg[$i];
				$pimg -> pid = $idNum;
				$pimg -> imgsrc = $filename;
				$pimg -> OrderID = $paixu;
				$pimg -> add();
			}
			if ($idNum > 0) {
				$this -> success('数据添加成功', 'index');
			} else {
				$this -> error('数据添加失败');
			}
		}
	}

}
