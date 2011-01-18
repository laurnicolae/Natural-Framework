<?php /* Smarty version Smarty-3.0.6, created on 2011-01-18 17:00:13
         compiled from "D:\xampp\htdocs\framework/view\main/delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173274d35aafd4443d3-38306874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520625f5d949fe1d56046997fac92f454b6e73dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\main/delete.tpl',
      1 => 1295362812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173274d35aafd4443d3-38306874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<form method="post" action="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('controller')->value;?>
/delete">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" />
    <p>Sunteti sigur ca doriti sa stergeti inregistrarea?</p>
    <input type="submit" name="delete" value="Sterge" />
    <a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('controller')->value;?>
/">Nu, du-ma inapoi.</a>
    
</form>    
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>