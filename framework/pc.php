<?php
    /**
     * 启动引擎
     */
	$currentdir = dirname(__FILE__); //当前框架的目录地址
	include_once($currentdir.'/include.list.php');
	foreach($paths as $path){
		include_once($currentdir.'/'.$path);
	}

	class PC{
		public static $controller; //控制器名称
		public static $method;   //执行的控制器里的方法
		private static $config;  //保存网站的配置数据
		/**
		 * 初始化数据库引擎
		 */
		private static function init_db(){
			DB::init('mysql', self::$config['dbconfig']);
		}
		/**
		 * 初始化试图引擎
		 */
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewconfig']);
		}
		/**
		 * 初始化控制器
		 */
		private static function init_controllor(){
			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
		}
		/**
		 * 初始化方法
		 */
		private static function init_method(){
			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
		}
		/**
		 * 启动
		 * @param array $config
		 */
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			C(self::$controller, self::$method);
		}
	}
?>