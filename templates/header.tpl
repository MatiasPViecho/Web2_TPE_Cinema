<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    {assign var='action' value=($smarty.get['action'])}
    {assign var='title' value=explode('/', $action)}
    <title>{$title[0]|upper}</title>
    {* El título de la página en la que se encuentra cambia de manera dinámica
        tomando el título del mismo modo que el route, utilizando el valor 0 *}
</head>
<body class='d-flex flex-column min-vh-100'>
    <div class=' navbar navbar-expand-lg bg-dark mb-3'>
        <div class="container-fluid ">
            <ul class='pe-5 navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link text-white' href='{BASE_URL}home'>PRODUCTOS</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link text-white' href='{BASE_URL}login'>LOGIN</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link text-white' href='{BASE_URL}search'>BUSCAR</a>
                </li>
                {if isset($userName)}
                    <li class='nav-item'>
                        <a class='nav-link text-danger ' href='{BASE_URL}logout'>LOGOUT</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-success disabled' href=''>SESION: {$userName|upper}</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white' href='{BASE_URL}edit'>MODIFICAR</a>
                    </li>
                {/if}
            </ul>
        </div>
    </div>