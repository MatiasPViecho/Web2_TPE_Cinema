<?php
/* Smarty version 4.2.1, created on 2022-10-09 23:14:10
  from 'C:\xampp\htdocs\WEB2\TPE\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634339a2b77558_30540170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1225c5c18ff4b942fdb8c488a380bc815025d074' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\categories.tpl',
      1 => 1665350044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634339a2b77558_30540170 (Smarty_Internal_Template $_smarty_tpl) {
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
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
