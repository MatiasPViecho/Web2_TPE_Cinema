<div>
    <table class='w-75 mx-auto table table-dark table-hover'>
        <thead>
            <tr>
                <th scope="col">Categories</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td>{$product->model}</td>
                    <td>{$product->brand}</td>
                    <td>{$product->price}</td>
                    <td>
                    <a class='btn btn-warning' href='{BASE_URL}characteristics/{$product->id}'>+ Info</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>