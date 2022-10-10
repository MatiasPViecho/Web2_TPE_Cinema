<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:04:30
  from 'C:\xampp\htdocs\WEB2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343456eb28377_75110528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc0c123a9cec2f41557084bd691d0a21d9a7f86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\header.tpl',
      1 => 1665353069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343456eb28377_75110528 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <?php $_smarty_tpl->_assignInScope('action', ($_GET['action']));?>
    <?php $_smarty_tpl->_assignInScope('title', explode('/',$_smarty_tpl->tpl_vars['action']->value));?>
    <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value[0] ?? '', 'UTF-8');?>
</title>
    </head>
<body class='d-flex flex-column min-vh-100'>
    <div class=' navbar navbar-expand-lg bg-dark mb-3'>
        <div class="container-fluid ">
            <ul class='pe-5 navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link text-white' href='<?php echo BASE_URL;?>
home'>PRODUCTOS</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link text-white' href='<?php echo BASE_URL;?>
login'>LOGIN</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link text-white' href='<?php echo BASE_URL;?>
search'>BUSCAR</a>
                </li>
                <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
                    <li class='nav-item'>
                        <a class='nav-link text-danger ' href='<?php echo BASE_URL;?>
logout'>LOGOUT</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-success disabled' href=''>SESION: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['userName']->value ?? '', 'UTF-8');?>
</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white' href='<?php echo BASE_URL;?>
edit'>MODIFICAR</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div><?php }
}
