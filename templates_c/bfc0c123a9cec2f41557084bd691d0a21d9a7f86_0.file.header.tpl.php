<?php
/* Smarty version 4.2.1, created on 2022-10-05 15:42:19
  from 'C:\xampp\htdocs\WEB2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633d89bbc0e5f5_43010162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc0c123a9cec2f41557084bd691d0a21d9a7f86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\header.tpl',
      1 => 1664977338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633d89bbc0e5f5_43010162 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Header!</title>
</head>
<body>
    <div class=' navbar navbar-expand-lg bg-light'>
        <div class="container-fluid">
            <ul class='pe-5 mx-auto navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link' href='home'>PRODUCTS</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='login'>LOGIN</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='categories'>CATEGORIES</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                    <li class='nav-item'>
                        <a class='nav-link' href='edit'>EDIT</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div><?php }
}
