<?php
/* Smarty version 4.2.1, created on 2022-10-08 02:18:45
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\searchInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340c1e5170415_30479320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '287a7574e6c2d48c6ae7e0549ae0f9bf8c5baf2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\searchInfo.tpl',
      1 => 1665188323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340c1e5170415_30479320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='card text-bg-dark mt-5 mb-3 w-75 card mx-auto'>
        <div class='card-header text-center pt-3'>
        <p>
            <p class='pe-5 text-center'>Busqueda</p>
        </p>
    </div>
    <div class='card-body'>
        <ul class='list-group list-group-flush'>
            <li class='text-bg-secondary list-group-item card-text'>Nombre: <?php echo $_POST['name'];?>
</li>
            <li class='text-bg-secondary list-group-item card-text'>País de origen: <?php echo $_POST['country'];?>
</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio Min ($ARS): <?php echo $_POST['minPrice'];?>
$</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio Max ($ARS): <?php echo $_POST['maxPrice'];?>
$</li>
            <li class='text-bg-secondary list-group-item card-text'>Marca: <?php echo $_POST['brand'];?>
:</li>
        <ul>
    </div>
</div>
</div><?php }
}
