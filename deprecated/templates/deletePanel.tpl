<div>
    <a class='btn btn-success' href='{BASE_URL}edit'>Go back</a>
    {if $error}
        {include 'error.tpl'}
    {/if}
    <div class='card'>
        <div class='card-header'>
            <p class='display-6'>PRDOCUTOS</p>
        </div>
            {include 'products.tpl'}
        </div>
        <div class='card-footer text-muted'>
            <p>Los productos eliminados no se pueden restaurar</p>
        </div>
    </div>
    <div class='category'>
        <div class='card-header'>
            <p class='display-6'>CATEGORIAS</p>
        </div>
        <div class='card-body'>
            {include 'categories.tpl'}
        </div>
        <div class='card-footer text-muted'>
            <p>Las categorías eliminadas no se pueden restaurar</p>
        </div>
    <div>
</div>