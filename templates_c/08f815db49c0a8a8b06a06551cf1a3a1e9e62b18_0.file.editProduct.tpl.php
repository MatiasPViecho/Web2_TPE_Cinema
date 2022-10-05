<?php
/* Smarty version 4.2.1, created on 2022-10-05 22:58:48
  from 'C:\xampp\htdocs\WEB2\TPE\templates\editProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df008837dc8_19425562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f815db49c0a8a8b06a06551cf1a3a1e9e62b18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\editProduct.tpl',
      1 => 1665003524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633df008837dc8_19425562 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p class="display-4">
            Editando: <?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>

        </p>
    </div>
    <div class='card-body'>
        <h5 class='card-title'><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
</h5>
        <ul class='list-group list-group-flush'>
            <li class='text-bg-secondary list-group-item card-text'>Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->brand;?>
</li>
            <li class='text-bg-secondary list-group-item card-text'>País de origen: <?php echo $_smarty_tpl->tpl_vars['product']->value->country;?>
</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio ($ARS): <?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
$</li>
            <li class='text-bg-secondary list-group-item card-text'>Características Técnicas: <p class=''><?php echo $_smarty_tpl->tpl_vars['product']->value->techChar;?>
</p></li>
        <ul>

        <form class='container' action='edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
' method='POST'>
            <div class='row'>
                <div class='col'>
                                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" value='<?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
' />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price' value='<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' value='<?php echo $_smarty_tpl->tpl_vars['product']->value->country;?>
'/>
                </div>
                <div class='col'>
                                        <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand' value='<?php echo $_smarty_tpl->tpl_vars['product']->value->brand;?>
'/>
                    <label for="characteristics">Ingrese las características del producto</label>
                        <textarea name="characteristics" cols="35" rows="4" value='<?php echo $_smarty_tpl->tpl_vars['product']->value->techChar;?>
'><?php echo $_smarty_tpl->tpl_vars['product']->value->techChar;?>
</textarea>
                </div>
                <div class='col'>
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
                </div>
            </div>
            <button  type="submit" class='mt-3 form-control btn btn-warning'>Editar Producto</button>
        </form>
    </div>
</div><?php }
}
