<?php
	class indexController{
		public function index(){
		    $newsobj = M('news');
		    $data = $newsobj->get_news_list();
			VIEW::assign(array('data'=>$data));
			VIEW::display('index/index.html');
		}

		public function newsshow(){
		    $data = M('news')->getnewsinfo($_GET['id']);
		    VIEW::assign(array('data'=>$data));
		    VIEW::display('index/show.html');
		}

		public function showabout(){
		    $data = M('about')->aboutinfo();
		    VIEW::assign(array('about'=>$data));
		    VIEW::display('index/about.html');
		}
	}
?>