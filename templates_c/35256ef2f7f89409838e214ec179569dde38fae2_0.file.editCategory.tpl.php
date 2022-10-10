<?php
/* Smarty version 4.2.1, created on 2022-10-10 01:31:43
  from 'C:\xampp\htdocs\WEB2\TPE\templates\editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634359df464d42_15427992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35256ef2f7f89409838e214ec179569dde38fae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\editCategory.tpl',
      1 => 1665358302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634359df464d42_15427992 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='card bg-dark text-white mt-5'>
    <div class='card-header'>
        <p class='display-6'>Editando: <?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</p>
    </div>
    <div class='card-body'>
    <form class='w-50 mx-auto' action='edit/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
' method='POST'>
            <label for='category'>Ingrese Nuevo nombre de Categoría!</label>
            <input class='form-control' type='text' name='category' />
            <button  type="submit" class='mt-3 form-control btn btn-warning'>Editar Producto</button>
    </form>
    </div>
</div><?php }
}
