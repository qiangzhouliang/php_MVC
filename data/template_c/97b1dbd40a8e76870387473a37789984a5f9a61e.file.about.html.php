<?php /* Smarty version Smarty-3.1.16, created on 2016-12-04 16:05:47
         compiled from "tpl\index\about.html" */ ?>
<?php /*%%SmartyHeaderCode:167685843cd5a61b420-99455671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b1dbd40a8e76870387473a37789984a5f9a61e' => 
    array (
      0 => 'tpl\\index\\about.html',
      1 => 1480838684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167685843cd5a61b420-99455671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5843cd5a654c50_38054703',
  'variables' => 
  array (
    'about' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843cd5a654c50_38054703')) {function content_5843cd5a654c50_38054703($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>文章发布系统</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="img/css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">文章发布系统<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="index.php?controller=index">文章</a></li>
			<li><a href="index.php?controller=index&method=showabout">关于我们</a></li>
			<li><a href="#">联系我们</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">

		<div class="post">
			<h1 class="title">关于我们</h1>
			<div class="entry">
				<?php echo $_smarty_tpl->tpl_vars['about']->value;?>

			</div>

		</div>

	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p id="legal"></p>
</div>
<!-- end footer -->
</body>
</html><?php }} ?>
