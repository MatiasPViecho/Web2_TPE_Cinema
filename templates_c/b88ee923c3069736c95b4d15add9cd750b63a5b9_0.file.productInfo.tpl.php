<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:00:04
  from 'C:\xampp\htdocs\WEB2\TPE\templates\productInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63434464537599_45486487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b88ee923c3069736c95b4d15add9cd750b63a5b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\productInfo.tpl',
      1 => 1665352803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63434464537599_45486487 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p>
            <p class='pe-5 text-center display-6'>Viendo productos de categoría: <?php echo $_smarty_tpl->tpl_vars['product']->value->category;?>
</p>
        </p>
    </div>
    <div class='card-body'>
        <h5 class='card-title display-6 text-center mb-4'><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
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
    </div>
</div><?php }
}
