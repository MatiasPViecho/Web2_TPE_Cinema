<?php
/* Smarty version 4.2.1, created on 2022-10-08 02:02:58
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340be322b1694_20003524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1183e5698c779abde5ec950d4c236dba4ccdf6c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\header.tpl',
      1 => 1665187377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340be322b1694_20003524 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Header!</title>
</head>
<body class='d-flex flex-column min-vh-100'>
    <div class=' navbar navbar-expand-lg bg-dark '>
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
                <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                    <li class='nav-item'>
                        <a class='nav-link text-white' href='<?php echo BASE_URL;?>
edit'>EDIT</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div><?php }
}
