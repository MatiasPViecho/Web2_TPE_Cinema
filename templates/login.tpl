<div>
    <form action='{BASE_URL}login/verify' method='POST'>
        <div class='form-group w-50 mx-auto mt-5'>
            <label for='username'>Usuario</label>
            <input type='text' name='username' class='form-control' placeholder='Ingrese nombre de usuario'/>
            <label for='password'>Contraseña</label>
            <input type='password' name='password' class='form-control' placeholder='Ingrese Contraseña' />

            <button type='submit' class='mt-3 btn btn-success'>Ingresar</button>
        </div>
    </form>
    {if $error}
    <div>
        <p class='alert alert-warning'>{$error}</p>
    </div>
    {/if}
</div>