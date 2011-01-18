<?php /*%%SmartyHeaderCode:304004d358dcf8ed7f2-97609600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f851e9927000f102ae7db4d135e9b4211c3a2c0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\main/edit.tpl',
      1 => 1295353073,
      2 => 'file',
    ),
    '6183e4874b7dd80abcb914791b3f97aab932f02d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\header.tpl',
      1 => 1295366118,
      2 => 'file',
    ),
    '8f4ef433fec39011c447486505cb9f7de9075846' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\main/form.tpl',
      1 => 1295362512,
      2 => 'file',
    ),
    '59bde0d59fc49d477f52dc4bc0014f82b455426b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\footer.tpl',
      1 => 1294823688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304004d358dcf8ed7f2-97609600',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
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
<form id="form" method="post" action="/framework/main/update">
  <input type="hidden" name="id" value="9" />
  
  <span class='row'>
        <label>Camp1</label>
    <input type="text" name="camp1" value="test11" />
  </span>
  
  <span class='row'>
        <label>Camp2</label>
    <input type="text" name="camp2" value="camp22" />
  </span>
  
  <span class='row'>
        <label>Camp3</label>
    <input type="text" name="camp3" value="555" />
  </span>
  
  <span class='row'>
        <label>Camp4</label>
    <input type="text" name="camp4" value="test44" />
  </span>
  
  <input type="submit" value="Send" />
  
</form></div>
</div>
</body>
</html><?php } ?>