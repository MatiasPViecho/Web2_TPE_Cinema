<?php
/* Smarty version 4.2.1, created on 2022-10-09 23:20:19
  from 'C:\xampp\htdocs\WEB2\TPE\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63433b133aa712_93486650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adedd35f124231848fc3a9acb172f55cff71bad0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\edit.tpl',
      1 => 1665350418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63433b133aa712_93486650 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class='row mx-5 my-5 text-center'>
        <div class='col'>
        <a href='<?php echo BASE_URL;?>
product' class='nav-link text-white'>
            <div class='card text-white bg-primary mb-3'>
            <img src='https://images.pexels.com/photos/1205022/pexels-photo-1205022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='card-img-top ' alt='cameras' />
                <div class='card-header'>Productos</div>
                <div class='card-body p-5'>
                    <p class='card-text'>Modificación, agregar y eliminar productos</p>
                </div>
            </div>
        </a>
        </div>
        <div class='col'>
        <a href='<?php echo BASE_URL;?>
category' class='text-white nav-link'>
            <div class='card text-white bg-primary mb-3'>
            <img src='https://images.pexels.com/photos/1422220/pexels-photo-1422220.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='card-img-top' alt='cameras' />
            <div class='card-header'>Categorías</div>
            <div class='card-body p-5'>
            <p class='card-text'>Modificación, agregar y eliminar categorías</p>
            </div>
        </a>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <p class='alert alert-warning'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>
</div><?php }
}
