<!DOCTYPE html>
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
    <div class=' navbar navbar-expand-lg bg-light'>
        <div class="container-fluid">
            <ul class='pe-5 mx-auto navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link' href='{BASE_URL}home'>PRODUCTS</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{BASE_URL}login'>LOGIN</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{BASE_URL}categories'>CATEGORIES</a>
                </li>
                {if $admin == true}
                    <li class='nav-item'>
                        <a class='nav-link' href='{BASE_URL}edit'>EDIT</a>
                    </li>
                {/if}
            </ul>
        </div>
    </div>