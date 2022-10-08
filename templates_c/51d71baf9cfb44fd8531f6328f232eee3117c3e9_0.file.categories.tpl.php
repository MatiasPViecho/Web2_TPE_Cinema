<?php
/* Smarty version 4.2.1, created on 2022-10-08 00:53:25
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340ade544e8c8_30870313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d71baf9cfb44fd8531f6328f232eee3117c3e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\categories.tpl',
      1 => 1665183204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340ade544e8c8_30870313 (Smarty_Internal_Template $_smarty_tpl) {
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
search/category/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
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
