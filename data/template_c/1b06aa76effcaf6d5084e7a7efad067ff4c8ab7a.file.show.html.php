<?php /* Smarty version Smarty-3.1.16, created on 2016-12-04 16:11:54
         compiled from "tpl\index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:323895843c900cbb772-62035316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b06aa76effcaf6d5084e7a7efad067ff4c8ab7a' => 
    array (
      0 => 'tpl\\index\\show.html',
      1 => 1480839091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323895843c900cbb772-62035316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5843c900d18c23_54627911',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843c900d18c23_54627911')) {function content_5843c900d18c23_54627911($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
			<p class="author"><?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
&nbsp;&nbsp;发布于<span class="date"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['data']->value['dateline']);?>
</span></p>
			<h1 class="title"><!--文章标题放置到这里--><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
			<div class="entry">
				<!--文章内容放置到这里-->
				<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="article.search.php">
					<fieldset>
					<input type="text" id="s" name="key" value="" />
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
