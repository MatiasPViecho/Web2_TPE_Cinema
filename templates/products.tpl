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
                    <td>{$product->price}$</td>

                    {assign var=id value=$product->id_categories_fk}
                    {foreach from=$categories item=$catItem}
                        {if $catItem->id == $id}
                            <td>{$catItem->category}</td>
                        {/if}
                    {/foreach}
                    
                        <td>
                            <a class='btn btn-warning' href='{BASE_URL}characteristics/{$product->id}'>+ Info</a>
                        </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>