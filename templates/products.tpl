<div>
    <table class='w-75 mx-auto table table-dark table-hover'>
        <thead>
            <tr>
                <th scope="col">Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td>{$product->model}</td>
                    <td>{$product->brand}</td>
                    <td>{$product->price}</td>
                    <td>{$product->category}</td>
                        <td>
                            <a class='btn btn-success' href='{BASE_URL}product/{$product->id}'>+ Info</a>
                            {if $admin == true}
                                <a class='btn btn-warning' href='{BASE_URL}editProduct/{$product->id}'>Editar Producto</a>
                                <a class='btn btn-danger' href='{BASE_URL}deleteProduct/{$product->id}'>Delete Product</a>
                            {/if}
                        </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>