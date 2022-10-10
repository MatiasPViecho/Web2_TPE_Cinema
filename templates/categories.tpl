<div>
    <table class='w-75 mx-auto my-5 table table-dark table-hover'>
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
                    <td class='text-end'>
                    <a class=' btn btn-success' href='{BASE_URL}search/category/{$catItem->id}'>Ver Productos</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>