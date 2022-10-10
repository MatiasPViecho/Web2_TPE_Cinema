<?php
/* Smarty version 4.2.1, created on 2022-10-09 23:20:59
  from 'C:\xampp\htdocs\WEB2\TPE\templates\categoriesEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63433b3be12d83_22600458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5103eb2043534281f3147d49cf8b51cf00731eac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\categoriesEdit.tpl',
      1 => 1665350458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63433b3be12d83_22600458 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table class='w-75 mx-auto my-5 table table-dark table-hover'>
        <thead>
            <tr>
                <th class='text-center' scope="col">Categories</th>
                <th class='text-center' scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'catItem');
$_smarty_tpl->tpl_vars['catItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catItem']->value) {
$_smarty_tpl->tpl_vars['catItem']->do_else = false;
?>
                <tr>
                    <td class='text-center'><?php echo $_smarty_tpl->tpl_vars['catItem']->value->category;?>
</td>
                    <td class='text-end'>
                        <a class=' btn btn-success' href='<?php echo BASE_URL;?>
search/category/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'>Ver Productos</a>
                        <a class='btn btn-secondary' href='<?php echo BASE_URL;?>
category/modify/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'>MODIFICAR</a>
                        <a class='btn btn-danger' href='<?php echo BASE_URL;?>
category/delete/<?php echo $_smarty_tpl->tpl_vars['catItem']->value->id;?>
'>BORRAR</a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
