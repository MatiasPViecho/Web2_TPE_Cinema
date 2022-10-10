<?php
/* Smarty version 4.2.1, created on 2022-10-10 01:24:43
  from 'C:\xampp\htdocs\WEB2\TPE\templates\addCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343583b932dd8_39954817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6cb5193b1250c2fd0bf6ff03290539af7c01d9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\addCategory.tpl',
      1 => 1665357882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343583b932dd8_39954817 (Smarty_Internal_Template $_smarty_tpl) {
?><form class='w-50 row form-group mx-auto mb-5' action='<?php echo BASE_URL;?>
category/add' method='POST'>
    <div class='col'>
        <label for="category">Nombre de la categoría</label>
            <input class='form-control' type="text" name="category" />
    </div>
    <button  type="submit" class='mt-3 form-control btn btn-dark'>Añadir Categoría</button>
</form><?php }
}
