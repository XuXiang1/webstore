<?php
class ProductAction extends CommonAction {
	public function index() {
		$parentid = $_GET['d1'];
		$childid = $_GET['d2'];
		$brandid = $_GET['d3'];

		$pclass = M('productclass');
		$parents = $pclass -> where('isparent=1') -> select();
		$this -> assign('parentdata', $parents);

		if (empty($parentid)) {
			$parentid = $parents[0]['ID'];
		}
		$child = $pclass -> where('isparent=0 and parentclass=' . $parentid) -> select();
		$tempchild['ID'] = 0;
		$tempchild['classname'] = '全部';
		array_unshift($child, $tempchild);
		$this -> assign('childdata', $child);
		//		echo "<pre>";
		//		var_dump($child);
		//		echo "</pre>";

		$pclass2 = M('brand');
		$branddata = $pclass2 -> select();
		$tempbrand['ID'] = 0;
		$tempbrand['name'] = '全部';
		array_unshift($branddata, $tempbrand);
		$this -> assign('branddata', $branddata);

		$this -> assign('parentid', $parentid);
		$this -> assign('childid', $childid);
		$this -> assign('brandid', $brandid);

		$this -> display();
	}

	public function productpage() {
		$startIndex = $_POST['PageIndex'];
		$parentid = $_POST['d1'];
		$childid = $_POST['d2'];
		$brandid = $_POST['d3'];
		$where1 = 'where 1=1 ';
		if ($parentid != 0) {
			$where1 = ' tb_product.parentclassid=' . $parentid . ' ';
		}

		$where2 = ' ';
		if ($childid != 0) {
			$where2 = 'and tb_product.childclassid=' . $childid . ' ';
		}

		$where3 = ' ';
		if ($brandid != 0) {
			$where3 = 'and tb_product.brandid=' . $brandid . ' ';
		}

		$where = $where1 . $where2 . $where3;

		if (empty($startIndex)) {
			$this -> error('页面不存在');
		}
		$pageSize = 12;
		$startIndex = ($startIndex - 1) * $pageSize;
		$newCount = -1;
		$User = M('product');
		$list = $User ->field('ID,Name,Overview,parentclassid,parentclassname,childclassid,childclassname,brandid,brandname,OrderID,frontimg,EditDate') -> where($where) -> order('OrderID') -> limit($startIndex, $pageSize) -> select();
		$newCount = $User -> where($where) -> count("ID");
		$this -> assign('ProductCount', $newCount);
		$this -> assign('ProductList', $list);
		//		echo $where;
		$this -> display();
	}

	public function productdetail() {
		$PID = $_GET['PID'];
		$m = M('product');
		$pimg = M('productimg');
		$productdata;
		$productimgdata;
		if (!empty($PID)) {
			$productdata = $m -> where('ID=' . $PID) -> select();
			$productimgdata = $pimg -> where('pid=' . $PID) -> select();
		}
		$productdata[0]['Overview'] = str_replace(PHP_EOL, '<br />', $productdata[0]['Overview']);
		
		$tuquery = M();
		$query = 'SELECT * FROM `tb_product` WHERE id >= ((SELECT MAX(id) FROM `tb_product`)-(SELECT MIN(id) FROM `tb_product`)) * RAND() + (SELECT MIN(id) FROM `tb_product`)  LIMIT 2';
		$rndspots = $tuquery -> query($query);
		$this -> assign('rndspots', $rndspots);
		$this -> assign('productdata', $productdata[0]);
		$this -> assign('productimgdata', $productimgdata);
		$this -> display();
	}

}
