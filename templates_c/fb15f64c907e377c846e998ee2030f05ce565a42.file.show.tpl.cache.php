<?php /* Smarty version Smarty-3.0.6, created on 2011-01-18 17:55:37
         compiled from "D:\xampp\htdocs\framework/view\main/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240244d35b7f9835691-90117049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb15f64c907e377c846e998ee2030f05ce565a42' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\main/show.tpl',
      1 => 1295361879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240244d35b7f9835691-90117049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<p><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp1'];?>
</p>
<p><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp2'];?>
</p>
<p><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp3'];?>
</p>
<p><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp4'];?>
</p>
<a href='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/main/edit?id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
'>Edit</a>

<a href='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/main/delete?id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
'>Delete</a>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>