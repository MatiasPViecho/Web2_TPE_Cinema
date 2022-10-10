<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:39:17
  from 'C:\xampp\htdocs\WEB2\TPE\templates\addProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63434d95187ba0_21300188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b853e81c36a7f7cb99c9c21124472e93c3360c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\addProduct.tpl',
      1 => 1665355155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63434d95187ba0_21300188 (Smarty_Internal_Template $_smarty_tpl) {
?><form class='row form-group mx-auto w-50' action='<?php echo BASE_URL;?>
product/add' method='POST'>
                <div class='col'>
                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' />
                </div>
                <div class='col'>
                    <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand'/>
                    <select name='category' class='my-4 text-center custom-select'>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'catItem');
$_smarty_tpl->tpl_vars['catItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catItem']->value) {
$_smarty_tpl->tpl_vars['catItem']->do_else = false;
?>
                            <option name='category' value='<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['catItem']->value->category;?>
</option>    
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                </div>
                        <label for="characteristics">Ingrese las características del producto</label>
                            <textarea name="characteristics" cols="35" rows="4"></textarea>
                <button  type="submit" class='w-50 mb-5 mt-3 mx-auto form-control btn btn-dark'>Añadir Producto</button>
</form><?php }
}
