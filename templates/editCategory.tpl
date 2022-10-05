
<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p class="display-4">
            Editando: {$category->category}
        </p>
    </div>
    <div class='card-body'>
            {include file='products.tpl'}
    </div>
    <form class='w-50 mx-auto' action='edit/{$category->id}' method='POST'>
        <label for='category'>Ingrese Nuevo nombre de Categoría!</label>
        <input class='form-control' type='text' name='category' />
        <button  type="submit" class='mt-3 form-control btn btn-warning'>Editar Producto</button>
    </form>
</div>