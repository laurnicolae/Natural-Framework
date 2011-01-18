<?php /* Smarty version Smarty-3.0.6, created on 2011-01-18 17:58:06
         compiled from "D:\xampp\htdocs\framework/view\main/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298834d35b7f76df995-10680102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb49229e89633828daced153d00007290665aa2a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\main/index.tpl',
      1 => 1295366258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298834d35b7f76df995-10680102',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'has_nocache_code' => true,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include 'D:\xampp\htdocs\framework\library\Smarty\plugins\function.cycle.php';
?><?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<table border="1"><tr><th>&nbsp;</th><th>Column1</th><th>Column2</th><th>Column3</th><th>Column4</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th></tr><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['row']->iteration++;
?><tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#dddddd"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['camp1'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['camp2'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['camp3'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['camp4'];?>
</td><td><a href='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/main/show?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Show</a></td><td><a href='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/main/edit?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Edit</a></td><td><a href='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/main/delete?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Delete</a></td></tr><?php }} ?></table><a href='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/main/add'>Add</a>
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>