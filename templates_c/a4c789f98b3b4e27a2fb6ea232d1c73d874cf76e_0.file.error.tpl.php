<?php
/* Smarty version 4.2.1, created on 2022-10-09 21:05:31
  from 'C:\xampp\htdocs\WEB2\TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63431b7bd1ddd3_65451920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c789f98b3b4e27a2fb6ea232d1c73d874cf76e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\error.tpl',
      1 => 1665342169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63431b7bd1ddd3_65451920 (Smarty_Internal_Template $_smarty_tpl) {
?><p class='text-center alert alert-danger'><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['error']->value ?? '', 'UTF-8');?>
</p><?php }
}
