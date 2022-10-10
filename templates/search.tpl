{if $error}
    <div>
        {include 'error.tpl'}
    </div>
{/if}
<div class='w-75 mx-auto my-5 card border-secondary '>
    <p class='display-5 text-center card-header'>Ingrese datos para buscar su producto</p>
    <form class='pb-5 form-group card-body' action='{BASE_URL}search/query' method='POST'>
        <div class='row'>
            <div class='col'>
                <label for='name'>Nombre:</label>
                    <input class='form-control' type="text" name="name" />
                <label for='brand'>Marca:</label>
                    <input class='form-control' type='text' name='brand' />
            </div>
            <div class='col row'>
                <div class='col'>
                <label for='price'>Precio Mínimo:</label>
                    <input class='form-control' type="number" name="minPrice" />
                <label for='price'>Precio Máximo:</label>
                    <input class='form-control' type="number" name="maxPrice" />
                </div>
                <div class='col'>
                <label for='country'>País:</label>
                    <input class='form-control' type="text" name="country" />
                    <select name='category' class='my-4 text-center custom-select'>
                        <option name='category' value='' >Ninguna categoría</option>
                    {foreach from=$categories item=$catItem}
                        <option name='category' value='{$catItem->id}'>{$catItem->category}</option>    
                    {/foreach}
                    </select>
                </div>
            </div>
            <button  type="submit" class='mt-3 form-control btn btn-success w-25'>Busque su Producto</button>
        </div>
    </form>
</div>
