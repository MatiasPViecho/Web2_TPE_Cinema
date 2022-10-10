<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:20:04
  from 'C:\xampp\htdocs\WEB2\TPE\templates\productsEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63434914768e85_43270400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5858efeaaff94005839882163fc2249543b51233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\productsEdit.tpl',
      1 => 1665354003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:addProduct.tpl' => 1,
  ),
),false)) {
function content_63434914768e85_43270400 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <p class='alert alert-warning'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>
<div>
    <table class='w-75 mx-auto my-5 table table-dark table-hover'>
        <thead>
            <tr>
                <th scope="col">Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col" class='text-center'>Actions</th>
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
                        <td class='text-end'>
                            <a class='btn btn-success' href='<?php echo BASE_URL;?>
search/product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>+ Info</a>
                            <a class='btn btn-secondary' href='<?php echo BASE_URL;?>
product/modify/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>MODIFICAR</a>
                            <a class='btn btn-danger' href='<?php echo BASE_URL;?>
product/delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>BORRAR</a>
                        </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<div>
    <?php $_smarty_tpl->_subTemplateRender('file:addProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
