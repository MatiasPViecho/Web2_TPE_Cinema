<?php
/* Smarty version 4.2.1, created on 2022-10-10 02:26:09
  from 'C:\xampp\htdocs\WEB2\TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634366a1d0a544_83286915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c3d14205243e92f99a8cee436066d1b38e3074e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\login.tpl',
      1 => 1665361567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_634366a1d0a544_83286915 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <form action='<?php echo BASE_URL;?>
login/verify' method='POST'>
        <div class='form-group w-50 mx-auto mt-5'>
            <label for='username'>Usuario</label>
            <input type='text' name='username' class='form-control' placeholder='Ingrese nombre de usuario'/>
            <label for='password'>Contraseña</label>
            <input type='password' name='password' class='form-control' placeholder='Ingrese Contraseña' />

            <button type='submit' class='mt-3 btn btn-success'>Ingresar</button>
        </div>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div>
        <?php $_smarty_tpl->_subTemplateRender('file:error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php }?>
</div><?php }
}
