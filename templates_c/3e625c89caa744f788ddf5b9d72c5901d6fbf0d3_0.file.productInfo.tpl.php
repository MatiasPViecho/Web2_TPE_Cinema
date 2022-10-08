<?php
/* Smarty version 4.2.1, created on 2022-10-08 02:04:24
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\productInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340be88640393_30973370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e625c89caa744f788ddf5b9d72c5901d6fbf0d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\productInfo.tpl',
      1 => 1665187463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340be88640393_30973370 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='card text-bg-dark mt-5 mb-3 w-75 card mx-auto'>
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
