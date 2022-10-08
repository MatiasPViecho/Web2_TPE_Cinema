<div>
    <table class='w-75 mx-auto table table-dark table-hover'>
        <thead>
            <tr>
                <th class='text-center' scope="col">Categories</th>
                <th class='text-center' scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$categories item=$catItem}
                <tr>
                    <td class='text-center'>{$catItem->category}</td>
                    <td class='text-center'>
                    <a class=' btn btn-success' href='{BASE_URL}search/category/{$catItem->id}'>Ver Productos</a>
                    {if $admin == true}
                        <a class='btn btn-warning' href='{BASE_URL}editCategory/{$catItem->id}'>Editar Producto</a>
                        <a class='btn btn-danger' href='{BASE_URL}deleteCategory/{$catItem->id}'>Delete Product</a>
                    {/if}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>