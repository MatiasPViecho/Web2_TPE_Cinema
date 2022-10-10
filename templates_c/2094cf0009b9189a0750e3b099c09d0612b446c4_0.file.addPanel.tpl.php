<?php
/* Smarty version 4.2.1, created on 2022-10-09 21:07:48
  from 'C:\xampp\htdocs\WEB2\TPE\templates\addPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63431c0459f3c7_59520914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2094cf0009b9189a0750e3b099c09d0612b446c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\addPanel.tpl',
      1 => 1665342466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
    'file:addProduct.tpl' => 1,
    'file:addCategory.tpl' => 1,
  ),
),false)) {
function content_63431c0459f3c7_59520914 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <a class='btn btn-success' href='<?php echo BASE_URL;?>
edit'>Go back</a>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class='card'>
        <div class='card-header'>
            <p class='display-6'>PRODUCTOS</p>
        </div>
        <div class='card-body mx-auto'>
            <?php $_smarty_tpl->_subTemplateRender('file:addProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class='card-footer text-muted text-center'>
            <p>Esperando producto a añadir</p>
        </div>
    </div>

    <div class='card'>
        <div class='card-header'>
            <p class='display-6'>CATEGORÍAS</p>
        </div>
        <div class='card-body'>
            <?php $_smarty_tpl->_subTemplateRender('file:addCategory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class='card-footer text-muted text-center'>
            <p>Esperando categoría a añadir</p>
        </div>
    </div>
</div><?php }
}
