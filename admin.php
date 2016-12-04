<?php
    /**
     * 入口文件
     */
	header("Content-type: text/html; charset=utf-8");
	//url形式  index.php?controller=控制器名&method=方法名
	session_start();
	require_once('config.php');
	require_once('framework/pc.php');
	PC::run($config);
?>