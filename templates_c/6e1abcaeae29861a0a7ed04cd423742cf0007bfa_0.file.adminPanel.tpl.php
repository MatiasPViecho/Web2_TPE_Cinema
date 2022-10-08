<?php
/* Smarty version 4.2.1, created on 2022-10-07 23:45:32
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63409dfc5f0612_06593863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1abcaeae29861a0a7ed04cd423742cf0007bfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\adminPanel.tpl',
      1 => 1665176516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products.tpl' => 1,
    'file:categories.tpl' => 1,
  ),
),false)) {
function content_63409dfc5f0612_06593863 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['warning']->value == true) {?>
    <div>
        <p class='alert alert-warning'><?php echo $_smarty_tpl->tpl_vars['warningMsg']->value;?>
</p>
    </div>
<?php }?>


<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Añadir Producto
        </h2>
    </div>
    <div class='card-body text-center'>
        <h5 class='card-title'>Producto: </h5>
        <div class='container text-center'>
            <form class='row form-group mx-auto' action='addProduct' method='POST'>
                <div class='col'>
                1 of 3
                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' />
                </div>
                <div class='col'>
                    2 of 3
                    <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand'/>
                    <label for="characteristics">Ingrese las características del producto</label>
                        <textarea name="characteristics" cols="35" rows="4"></textarea>
                </div>
                <div class='col'>
                3 of 3
                <select name='category' class='my-4 text-center custom-select'>
                <option value='null' selected>Seleccione Categoría</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'catItem');
$_smarty_tpl->tpl_vars['catItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catItem']->value) {
$_smarty_tpl->tpl_vars['catItem']->do_else = false;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['catItem']->value->category;?>
</option>    
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                </div>
                <button  type="submit" class='mt-3 form-control btn btn-warning'>Añadir Producto</button>
            </form>
        </div>
    </div>
</div>



<div class='card text-bg-dark mb-3 w-50 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Añadir Categoría
        </h2>
    </div>
    <div class='card-body text-center'>
        <div class='container text-center'>
            <form class='w-50 row form-group mx-auto' action='<?php echo BASE_URL;?>
addCategory' method='POST'>
                <div class='col'>
                    <label for="category">Nombre de la categoría</label>
                        <input class='form-control' type="text" name="category" />
                </div>
                <button  type="submit" class='mt-3 form-control btn btn-warning'>Añadir Categoría</button>
            </form>
        </div>
    </div>
</div>


<div class='card text-bg-dark mb-3 w-100 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Editar Productos
        </h2>
    </div>
    <div class='card-body text-center'>
        <?php $_smarty_tpl->_subTemplateRender('file:products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>

<div class='card text-bg-dark mb-3 w-100 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Editar Categorías
        </h2>
    </div>
    <div class='card-body text-center'>
        <?php $_smarty_tpl->_subTemplateRender('file:categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
