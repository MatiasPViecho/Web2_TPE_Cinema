<div>
    <a class='btn btn-success' href='{BASE_URL}edit'>Go back</a>
    {if $error}
        {include 'error.tpl'}
    {/if}
    <div class='card'>
        <div class='card-header'>
            <p class='display-6'>PRODUCTOS</p>
        </div>
        <div class='card-body mx-auto'>
            {include 'addProduct.tpl'}
        </div>
        <div class='card-footer text-muted text-center'>
            <p>Esperando producto a añadir</p>
        </div>
    </div>

    <div class='card'>
        <div class='card-header'>
            <p class='display-6'>CATEGORÍAS</p>
        </div>
        <div class='card-body'>
            {include 'addCategory.tpl'}
        </div>
        <div class='card-footer text-muted text-center'>
            <p>Esperando categoría a añadir</p>
        </div>
    </div>
</div>