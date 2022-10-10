<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:39:28
  from 'C:\xampp\htdocs\WEB2\TPE\templates\editProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63434da05917e7_82958660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f815db49c0a8a8b06a06551cf1a3a1e9e62b18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\editProduct.tpl',
      1 => 1665355093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63434da05917e7_82958660 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <form class='container' action='<?php echo BASE_URL;?>
product/modify/edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
' method='POST'>
            <div class='w-75 mx-auto'>
            <div>
                                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" value='<?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
' />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price' value='<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' value='<?php echo $_smarty_tpl->tpl_vars['product']->value->country;?>
'/>
                                        <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand' value='<?php echo $_smarty_tpl->tpl_vars['product']->value->brand;?>
'/>
            </div>
                    <label for="characteristics">Ingrese las características del producto</label>
                        <textarea name="characteristics" cols="35" rows="4" value='<?php echo $_smarty_tpl->tpl_vars['product']->value->techChar;?>
'><?php echo $_smarty_tpl->tpl_vars['product']->value->techChar;?>
</textarea>
                            <div>
                <select name='category' class='my-4 text-center custom-select'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'catItem');
$_smarty_tpl->tpl_vars['catItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catItem']->value) {
$_smarty_tpl->tpl_vars['catItem']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->id == $_smarty_tpl->tpl_vars['catItem']->value->id) {?>
                            <option selected value='<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['catItem']->value->category;?>
</option>    
                        <?php } else { ?>
                            <option value='<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['catItem']->value->category;?>
</option>    
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <button  type="submit" class='w-50 text-center form-control btn btn-warning'>Editar Producto</button>
            </div>
            </div>
        </form><?php }
}
