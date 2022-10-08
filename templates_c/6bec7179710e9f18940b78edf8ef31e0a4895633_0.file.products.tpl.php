<?php
/* Smarty version 4.2.1, created on 2022-10-08 02:02:16
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340be088d0382_50510389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bec7179710e9f18940b78edf8ef31e0a4895633' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\products.tpl',
      1 => 1665187335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340be088d0382_50510389 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table class='w-75 mx-auto my-5 table table-dark table-hover'>
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
search/product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
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
