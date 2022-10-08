<div class='card text-bg-dark mt-5 mb-3 w-75 card mx-auto'>
    <div class='card-header text-center pt-3'>
        <p>
            <p class='pe-5 text-center display-6'>Viendo productos de categoría: {$product->category}</p>
        </p>
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