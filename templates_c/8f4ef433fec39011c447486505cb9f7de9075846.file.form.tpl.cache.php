<?php /* Smarty version Smarty-3.0.6, created on 2011-01-18 17:55:41
         compiled from "D:\xampp\htdocs\framework/view\main/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300014d35b7fd430ef2-35900200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4ef433fec39011c447486505cb9f7de9075846' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framework/view\\main/form.tpl',
      1 => 1295362512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300014d35b7fd430ef2-35900200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="form" method="post" action="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('controller')->value;?>
/<?php if ($_smarty_tpl->getVariable('action')->value=='add'){?>create<?php }elseif($_smarty_tpl->getVariable('action')->value=='edit'){?>update<?php }?>">
  <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value[0]['id'])){?><?php echo $_smarty_tpl->getVariable('data')->value[0]['id'];?>
<?php }?>" />
  
  <span class='row<?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp1'])){?> error<?php }?>'>
    <?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp1'])){?>
       <span><?php echo $_smarty_tpl->getVariable('error')->value['camp1'];?>
</span>    
    <?php }?>
    <label>Camp1</label>
    <input type="text" name="camp1" value="<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value[0]['camp1'])){?><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp1'];?>
<?php }?>" />
  </span>
  
  <span class='row<?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp2'])){?> error<?php }?>'>
    <?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp2'])){?>
       <span><?php echo $_smarty_tpl->getVariable('error')->value['camp2'];?>
</span>    
    <?php }?>
    <label>Camp2</label>
    <input type="text" name="camp2" value="<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value[0]['camp2'])){?><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp2'];?>
<?php }?>" />
  </span>
  
  <span class='row<?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp3'])){?> error<?php }?>'>
    <?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp3'])){?>
       <span><?php echo $_smarty_tpl->getVariable('error')->value['camp3'];?>
</span>    
    <?php }?>
    <label>Camp3</label>
    <input type="text" name="camp3" value="<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value[0]['camp3'])){?><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp3'];?>
<?php }?>" />
  </span>
  
  <span class='row<?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp4'])){?> error<?php }?>'>
    <?php if (isset($_smarty_tpl->getVariable('error',null,true,false)->value['camp4'])){?>
       <span><?php echo $_smarty_tpl->getVariable('error')->value['camp4'];?>
</span>    
    <?php }?>
    <label>Camp4</label>
    <input type="text" name="camp4" value="<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value[0]['camp4'])){?><?php echo $_smarty_tpl->getVariable('data')->value[0]['camp4'];?>
<?php }?>" />
  </span>
  
  <input type="submit" value="Send" />
  
</form>