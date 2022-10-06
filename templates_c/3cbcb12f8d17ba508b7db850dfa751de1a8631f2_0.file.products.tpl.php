<?php
/* Smarty version 4.2.1, created on 2022-10-06 22:42:29
  from 'C:\xampp\htdocs\WEB2\TPE\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f3db567e638_02599704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cbcb12f8d17ba508b7db850dfa751de1a8631f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\products.tpl',
      1 => 1665088948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633f3db567e638_02599704 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table class='w-75 mx-auto table table-dark table-hover'>
        <thead>
            <tr>
                <th scope="col">Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->brand;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category;?>
</td>
                        <td>
                            <a class='btn btn-success' href='<?php echo BASE_URL;?>
product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>+ Info</a>
                            <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                                <a class='btn btn-warning' href='<?php echo BASE_URL;?>
editProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>Editar Producto</a>
                                <a class='btn btn-danger' href='<?php echo BASE_URL;?>
deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
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
