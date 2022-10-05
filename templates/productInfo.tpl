<div class='card text-bg-dark mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p>
            Categoría: {$category|upper}
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
    </div>
</div>