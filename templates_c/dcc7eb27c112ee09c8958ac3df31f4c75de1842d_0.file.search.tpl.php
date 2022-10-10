<?php
/* Smarty version 4.2.1, created on 2022-10-10 02:00:51
  from 'C:\xampp\htdocs\WEB2\TPE\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634360b3733f54_86580094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcc7eb27c112ee09c8958ac3df31f4c75de1842d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\search.tpl',
      1 => 1665360047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_634360b3733f54_86580094 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div>
        <?php $_smarty_tpl->_subTemplateRender('file:error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }?>
<div class='w-75 mx-auto my-5 card border-secondary '>
    <p class='display-5 text-center card-header'>Ingrese datos para buscar su producto</p>
    <form class='pb-5 form-group card-body' action='<?php echo BASE_URL;?>
search/query' method='POST'>
        <div class='row'>
            <div class='col'>
                <label for='name'>Nombre:</label>
                    <input class='form-control' type="text" name="name" />
                <label for='brand'>Marca:</label>
                    <input class='form-control' type='text' name='brand' />
            </div>
            <div class='col row'>
                <div class='col'>
                <label for='price'>Precio Mínimo:</label>
                    <input class='form-control' type="number" name="minPrice" />
                <label for='price'>Precio Máximo:</label>
                    <input class='form-control' type="number" name="maxPrice" />
                </div>
                <div class='col'>
                <label for='country'>País:</label>
                    <input class='form-control' type="text" name="country" />
                    <select name='category' class='my-4 text-center custom-select'>
                        <option name='category' value='' >Ninguna categoría</option>
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
            </div>
            <button  type="submit" class='mt-3 form-control btn btn-success w-25'>Busque su Producto</button>
        </div>
    </form>
</div>
<?php }
}
