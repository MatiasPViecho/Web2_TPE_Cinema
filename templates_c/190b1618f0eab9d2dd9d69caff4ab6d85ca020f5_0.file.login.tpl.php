<?php
/* Smarty version 4.2.1, created on 2022-10-08 23:16:58
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341e8ca62e7c7_75370012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '190b1618f0eab9d2dd9d69caff4ab6d85ca020f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\login.tpl',
      1 => 1665263814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6341e8ca62e7c7_75370012 (Smarty_Internal_Template $_smarty_tpl) {
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
        <p class='alert alert-warning'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    </div>
    <?php }?>
</div><?php }
}
