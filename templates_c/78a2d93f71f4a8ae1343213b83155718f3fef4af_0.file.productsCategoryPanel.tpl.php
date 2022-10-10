<?php
/* Smarty version 4.2.1, created on 2022-10-10 01:35:51
  from 'C:\xampp\htdocs\WEB2\TPE\templates\productsCategoryPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63435ad7e488e9_03670830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a2d93f71f4a8ae1343213b83155718f3fef4af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\productsCategoryPanel.tpl',
      1 => 1665358550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63435ad7e488e9_03670830 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table class='mx-auto my-5 table table-dark table-hover'>
        <thead>
            <tr class='row'>
                <th scope="col">Model</th>
                <th scope="col" class='text-center'>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr class='row'>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
</td>
                    <td class='text-end'>
                        <a class='btn btn-secondary ' href='<?php echo BASE_URL;?>
product/modify/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>MODIFICAR</a>
                        <a class='btn btn-danger' href='<?php echo BASE_URL;?>
product/delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>BORRAR</a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}
