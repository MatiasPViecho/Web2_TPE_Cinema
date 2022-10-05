<?php
/* Smarty version 4.2.1, created on 2022-10-05 22:54:36
  from 'C:\xampp\htdocs\WEB2\TPE\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633def0c2a9760_75874746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1225c5c18ff4b942fdb8c488a380bc815025d074' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\categories.tpl',
      1 => 1665003275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633def0c2a9760_75874746 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table class='w-75 mx-auto table table-dark table-hover'>
        <thead>
            <tr>
                <th class='text-center' scope="col">Categories</th>
                <th class='text-center' scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'catItem');
$_smarty_tpl->tpl_vars['catItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catItem']->value) {
$_smarty_tpl->tpl_vars['catItem']->do_else = false;
?>
                <tr>
                    <td class='text-center'><?php echo $_smarty_tpl->tpl_vars['catItem']->value->category;?>
</td>
                    <td class='text-center'>
                    <a class=' btn btn-success' href='<?php echo BASE_URL;?>
showProducts/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'>Ver Productos</a>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                        <a class='btn btn-warning' href='<?php echo BASE_URL;?>
editCategory/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'>Editar Producto</a>
                        <a class='btn btn-danger' href='<?php echo BASE_URL;?>
deleteCategory/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'>Delete Product</a>
                    <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
