<div>
    <div class='row mx-5 my-5 text-center'>
        <div class='col'>
        <a href='{BASE_URL}product' class='nav-link text-white'>
            <div class='card text-white bg-primary mb-3'>
            <img src='https://images.pexels.com/photos/1205022/pexels-photo-1205022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='card-img-top ' alt='cameras' />
                <div class='card-header'>Productos</div>
                <div class='card-body p-5'>
                    <p class='card-text'>Modificación, agregar y eliminar productos</p>
                </div>
            </div>
        </a>
        </div>
        <div class='col'>
        <a href='{BASE_URL}category' class='text-white nav-link'>
            <div class='card text-white bg-primary mb-3'>
            <img src='https://images.pexels.com/photos/1422220/pexels-photo-1422220.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='card-img-top' alt='cameras' />
            <div class='card-header'>Categorías</div>
            <div class='card-body p-5'>
            <p class='card-text'>Modificación, agregar y eliminar categorías</p>
            </div>
        </a>
        </div>
    </div>
    {if $error}
        <p class='alert alert-warning'>{$error}</p>
    {/if}
</div>