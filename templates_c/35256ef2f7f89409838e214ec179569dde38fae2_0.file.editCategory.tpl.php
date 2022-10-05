<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:20:01
  from 'C:\xampp\htdocs\WEB2\TPE\templates\editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df501a0cc16_46073684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35256ef2f7f89409838e214ec179569dde38fae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\editCategory.tpl',
      1 => 1665004800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products.tpl' => 1,
  ),
),false)) {
function content_633df501a0cc16_46073684 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p class="display-4">
            Editando: <?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>

        </p>
    </div>
    <div class='card-body'>
            <?php $_smarty_tpl->_subTemplateRender('file:products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <form class='w-50 mx-auto' action='edit/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
' method='POST'>
        <label for='category'>Ingrese Nuevo nombre de Categoría!</label>
        <input class='form-control' type='text' name='category' />
        <button  type="submit" class='mt-3 form-control btn btn-warning'>Editar Producto</button>
    </form>
</div><?php }
}
