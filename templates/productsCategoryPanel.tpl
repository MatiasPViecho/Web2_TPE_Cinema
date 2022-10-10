<div>
    <table class='mx-auto my-5 table table-dark table-hover'>
        <thead>
            <tr class='row'>
                <th scope="col">Model</th>
                <th scope="col" class='text-center'>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr class='row'>
                    <td>{$product->model}</td>
                    <td class='text-end'>
                        <a class='btn btn-secondary ' href='{BASE_URL}product/modify/{$product->id}'>MODIFICAR</a>
                        <a class='btn btn-danger' href='{BASE_URL}product/delete/{$product->id}'>BORRAR</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
