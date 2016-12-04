<?php

class VIEW {

	public static $view;

	public static function init($viewtype,$config){
		self::$view = new $viewtype;
		/*$smarty = new Smarty();//实例化smarty
		$smarty->left_delimiter=$config["left_delimiter"];//左定界符
		$smarty->right_delimiter=$config["right_delimiter"];//右定界符
		$smarty->template_dir=$config["template_dir"];//html模板地址ַ
		$smarty->compile_dir=$config["compile_dir"];//模板编译生成的文件
		$smarty->cache_dir=$config["cache_dir"];//缓存*/
		foreach($config as $key=>$value){
			self::$view -> $key = $value;
		}

	}

	public static function assign($data){
		foreach($data as $key=>$value){
			self::$view->assign($key, $value);
		}
	}

	public static function display($template){
		self::$view->display($template);
	}
}