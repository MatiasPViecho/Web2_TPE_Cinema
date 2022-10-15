<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p>
            <p class='pe-5 text-center display-6'>Viendo productos de categoría: {$product->category}</p>
        </p>
    </div>
    <div class='card-img-top text-center'>
        {if isset($product->imgPath) && $product->imgPath}
                <img class='w-50 h-50' src='{BASE_URL}{$product->imgPath}' alt='Foto de producto {$product->model}'/>
            {else}
                <img class='w-50 h-50' src='https://images.pexels.com/photos/159868/lost-cat-tree-sign-fun-159868.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' alt='No hay foto disponible'/>
                <p>No hay imagen disponible para este producto</p>
        {/if}
    </div>
    <div class='card-body'>
        <h5 class='card-title display-6 text-center mb-4'>{$product->model}</h5>
        <ul class='list-group list-group-flush'>
            <li class='text-bg-secondary list-group-item card-text'>Marca: {$product->brand}</li>
            <li class='text-bg-secondary list-group-item card-text'>País de origen: {$product->country}</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio ($ARS): {$product->price}$</li>
            <li class='text-bg-secondary list-group-item card-text'>Características Técnicas: <p class=''>{$product->techChar}</p></li>
        <ul>
    </div>
</div>