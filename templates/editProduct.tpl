<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p class="display-4">
            Editando: {$product->model}
        </p>
    </div>
    <div class='card-body'>
        <h5 class='card-title'>{$product->model}</h5>
        <ul class='list-group list-group-flush'>
            <li class='text-bg-secondary list-group-item card-text'>Marca: {$product->brand}</li>
            <li class='text-bg-secondary list-group-item card-text'>País de origen: {$product->country}</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio ($ARS): {$product->price}$</li>
            <li class='text-bg-secondary list-group-item card-text'>Características Técnicas: <p class=''>{$product->techChar}</p></li>
        <ul>

        <form class='container' action='edit/{$product->id}' method='POST'>
            <div class='row'>
                <div class='col'>
                {* 1 of 3 *}
                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" value='{$product->model}' />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price' value='{$product->price}'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' value='{$product->country}'/>
                </div>
                <div class='col'>
                    {* 2 of 3 *}
                    <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand' value='{$product->brand}'/>
                    <label for="characteristics">Ingrese las características del producto</label>
                        <textarea name="characteristics" cols="35" rows="4" value='{$product->techChar}'>{$product->techChar}</textarea>
                </div>
                <div class='col'>
                {* 3 of 3 *}
                <select name='category' class='my-4 text-center custom-select'>
                    {foreach from=$categories item=$catItem}
                        {if $product->id == $catItem->id}
                            <option selected value='{$catItem->id}'>{$catItem->category}</option>    
                        {else}
                            <option value='{$catItem->id}'>{$catItem->category}</option>    
                        {/if}
                    {/foreach}
                </select>
                </div>
            </div>
            <button  type="submit" class='mt-3 form-control btn btn-warning'>Editar Producto</button>
        </form>
    </div>
</div>