<div class='card bg-dark text-white mt-5'>
    <div class='card-header'>
        <p class='display-6'>Editando: {$category->category}</p>
    </div>
    <div class='card-body'>
    <form class='w-50 mx-auto' action='edit/{$category->id}' method='POST'>
            <label for='category'>Ingrese Nuevo nombre de Categoría!</label>
            <input class='form-control' type='text' name='category' />
            <button  type="submit" class='mt-3 form-control btn btn-warning'>Editar Producto</button>
    </form>
    </div>
</div>