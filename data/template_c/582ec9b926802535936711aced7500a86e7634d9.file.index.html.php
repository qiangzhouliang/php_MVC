<?php /* Smarty version Smarty-3.1.16, created on 2016-12-04 16:20:23
         compiled from "tpl\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:160735843c08d9f82c4-65082679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582ec9b926802535936711aced7500a86e7634d9' => 
    array (
      0 => 'tpl\\index\\index.html',
      1 => 1480839620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160735843c08d9f82c4-65082679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5843c08da44450_97785347',
  'variables' => 
  array (
    'data' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843c08da44450_97785347')) {function content_5843c08da44450_97785347($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
			<li><a href="contact.php">联系我们</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
	<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
		<div class="post">
			<p class="author"><?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
&nbsp;&nbsp;发布于<span class="date"><?php echo $_smarty_tpl->tpl_vars['news']->value['dateline'];?>
</span></p>
			<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h2>
			<div class="entry">
				<?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>

			</div>
			<div class="meta">
				<p class="links"><a href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="">
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
