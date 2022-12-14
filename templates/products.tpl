<div>
    <table class='w-75 mx-auto my-5 table table-dark table-hover'>
        <thead>
            <tr>
                <th scope="col">Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col" class='text-center'>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td>{$product->model}</td>
                    <td>{$product->brand}</td>
                    <td>{$product->price}</td>
                    <td>{$product->category}</td>
                        <td class='text-end'>
                            <a class='btn btn-success' href='{BASE_URL}search/product/{$product->id}'>+ Info</a>
                        </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
