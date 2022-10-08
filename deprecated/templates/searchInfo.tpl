<div class='card text-bg-dark mt-5 mb-3 w-75 card mx-auto'>
        <div class='card-header text-center pt-3'>
        <p>
            <p class='pe-5 text-center'>Busqueda</p>
        </p>
    </div>
    <div class='card-body'>
        <ul class='list-group list-group-flush'>
            <li class='text-bg-secondary list-group-item card-text'>Nombre: {$smarty.post.name}</li>
            <li class='text-bg-secondary list-group-item card-text'>País de origen: {$smarty.post.country}</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio Min ($ARS): {$smarty.post.minPrice}$</li>
            <li class='text-bg-secondary list-group-item card-text'>Precio Max ($ARS): {$smarty.post.maxPrice}$</li>
            <li class='text-bg-secondary list-group-item card-text'>Marca: {$smarty.post.brand}:</li>
        <ul>
    </div>
</div>
</div>