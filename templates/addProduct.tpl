<form class='row form-group mx-auto w-50' action='{BASE_URL}product/add' method='POST'>
                <div class='col'>
                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' />
                </div>
                <div class='col'>
                    <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand'/>
                    <select name='category' class='my-4 text-center custom-select'>
                        {foreach from=$categories item=$catItem}
                            <option name='category' value='{$catItem->id}'>{$catItem->category}</option>    
                        {/foreach}
                        </select>
                </div>
                        <label for="characteristics">Ingrese las características del producto</label>
                            <textarea name="characteristics" cols="35" rows="4"></textarea>
                <button  type="submit" class='w-50 mb-5 mt-3 mx-auto form-control btn btn-dark'>Añadir Producto</button>
</form>