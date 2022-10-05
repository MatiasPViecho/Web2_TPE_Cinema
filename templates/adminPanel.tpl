{if $warning == true}
    <div>
        <p class='alert alert-warning'>{$warningMsg}</p>
    </div>
{/if}

{* Inicio Add producto *}

<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Añadir Producto
        </h2>
    </div>
    <div class='card-body text-center'>
        <h5 class='card-title'>Producto: </h5>
        <div class='container text-center'>
            <form class='row form-group mx-auto' action='addProduct' method='POST'>
                <div class='col'>
                1 of 3
                    <label for="model">Nombre del Producto</label>
                        <input class='form-control' type="text" name="model" />
                    <label for="price">Ingrese precio (ARS)</label>
                        <input class='form-control' type="number" name='price'/>
                    <label for="country">Ingrese País de origen del producto</label>
                        <input class='form-control' type="text" name='country' />
                </div>
                <div class='col'>
                    2 of 3
                    <label for="brand">Ingrese Marca del producto</label>
                        <input class='form-control' type="text" name='brand'/>
                    <label for="characteristics">Ingrese las características del producto</label>
                        <textarea name="characteristics" cols="35" rows="4"></textarea>
                </div>
                <div class='col'>
                3 of 3
                <select name='category' class='my-4 text-center custom-select'>
                <option value='null' selected>Seleccione Categoría</option>
                    {foreach from=$categories item=$catItem}
                        <option value='{$catItem->id}'>{$catItem->category}</option>    
                    {/foreach}
                </select>
                </div>
                <button  type="submit" class='mt-3 form-control btn btn-warning'>Añadir Producto</button>
            </form>
        </div>
    </div>
</div>

{* Inicio add Categoría  *}


<div class='card text-bg-dark mb-3 w-50 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Añadir Categoría
        </h2>
    </div>
    <div class='card-body text-center'>
        <div class='container text-center'>
            <form class='w-50 row form-group mx-auto' action='{BASE_URL}addCategory' method='POST'>
                <div class='col'>
                    <label for="category">Nombre de la categoría</label>
                        <input class='form-control' type="text" name="category" />
                </div>
                <button  type="submit" class='mt-3 form-control btn btn-warning'>Añadir Categoría</button>
            </form>
        </div>
    </div>
</div>

{* inicio edit products *}

<div class='card text-bg-dark mb-3 w-100 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Editar Productos
        </h2>
    </div>
    <div class='card-body text-center'>
        {include file='products.tpl'}
    </div>
</div>

<div class='card text-bg-dark mb-3 w-100 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <h2>
            Editar Categorías
        </h2>
    </div>
    <div class='card-body text-center'>
        {include file='categories.tpl'}
    </div>
</div>