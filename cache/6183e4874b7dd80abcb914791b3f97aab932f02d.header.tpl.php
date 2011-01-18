<?php /*%%SmartyHeaderCode:161084d35b7c186be43-63672922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6183e4874b7dd80abcb914791b3f97aab932f02d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\header.tpl',
      1 => 1295366264,
      2 => 'file',
    ),
    '5e60fc3a22f63f8709542ef04429038d0d49fb3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\menu.tpl',
      1 => 1295366283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161084d35b7c186be43-63672922',
  'cache_lifetime' => 500,
  'has_nocache_code' => true,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Page title</title>
  <link href="/framework/public/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="center">
<div id="wrapper">
<?php $_template = new Smarty_Internal_Template('menu.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, 500);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?><?php } ?>