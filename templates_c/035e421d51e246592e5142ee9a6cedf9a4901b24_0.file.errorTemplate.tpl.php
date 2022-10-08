<?php
/* Smarty version 4.2.1, created on 2022-10-08 02:03:28
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\errorTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340be50213cb4_88179224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '035e421d51e246592e5142ee9a6cedf9a4901b24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\errorTemplate.tpl',
      1 => 1665187407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340be50213cb4_88179224 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='w-50 mx-auto my-5'>
<p class='text-center alert alert-danger'><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value ?? '', 'UTF-8');?>
</p>
</div><?php }
}
