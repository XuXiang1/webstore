<?php
class SearchAction extends CommonAction {
	public function index() {
		$searchword = $_POST['searchkey'];
		$Model = M();
		$listProduct = $Model -> query("select ID,Overview,Name,frontimg from tb_product where Name like '%" . $searchword . "%' or Overview like '%" . $searchword . "%'  limit 10 ");
		$this -> assign('ProductList', $listProduct);
		
		$listNews = $Model -> query("select ID,Overview,Name,ODate,TitleImage from tb_news where Name like '%" . $searchword . "%' or Overview like '%" . $searchword . "%' order by ODate limit 10 ");
		$this -> assign('NewsList', $listNews);
		
		
		$this -> display();
	}

}
