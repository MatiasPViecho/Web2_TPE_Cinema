
        <form class='container' action='{BASE_URL}product/modify/edit/{$product->id}' method='POST'>
            <div class='w-75 mx-auto'>
            <div>
                {* 1 of 3 *}
                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" value='{$product->model}' />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price' value='{$product->price}'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' value='{$product->country}'/>
                    {* 2 of 3 *}
                    <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand' value='{$product->brand}'/>
            </div>
                    <label for="characteristics">Ingrese las características del producto</label>
                        <textarea name="characteristics" cols="35" rows="4" value='{$product->techChar}'>{$product->techChar}</textarea>
                {* 3 of 3 *}
            <div>
                <select name='category' class='my-4 text-center custom-select'>
                    {foreach from=$categories item=$catItem}
                        {if $product->id == $catItem->id}
                            <option selected value='{$catItem->id}'>{$catItem->category}</option>    
                        {else}
                            <option value='{$catItem->id}'>{$catItem->category}</option>    
                        {/if}
                    {/foreach}
                </select>
                <button  type="submit" class='w-50 text-center form-control btn btn-warning'>Editar Producto</button>
            </div>
            </div>
        </form>