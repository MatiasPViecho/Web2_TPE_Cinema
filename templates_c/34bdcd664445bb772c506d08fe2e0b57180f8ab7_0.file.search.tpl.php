<?php
/* Smarty version 4.2.1, created on 2022-10-08 02:21:12
  from 'C:\xampp\htdocs\TPE\Web2_TPE_Cinema\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340c278db30e8_90208529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34bdcd664445bb772c506d08fe2e0b57180f8ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\Web2_TPE_Cinema\\templates\\search.tpl',
      1 => 1665188471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340c278db30e8_90208529 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='w-75 mx-auto my-5 card border-secondary '>
    <p class='display-5 text-center card-header'>Ingrese datos para buscar su producto</p>
    <form class='pb-5 form-group card-body' action='<?php echo BASE_URL;?>
search/query' method='POST'>
        <div class='row'>
            <div class='col'>
                <label for='name'>Nombre:</label>
                    <input class='form-control' type="text" name="name" />
                <label for='brand'>Marca:</label>
                    <input class='form-control' type='text' name='brand' />
            </div>
            <div class='col row'>
                <div class='col'>
                <label for='price'>Precio Mínimo:</label>
                    <input class='form-control' type="number" name="minPrice" />
                <label for='price'>Precio Máximo:</label>
                    <input class='form-control' type="number" name="maxPrice" />
                </div>
                <div class='col'>
                <label for='country'>País:</label>
                    <input class='form-control' type="text" name="country" />
                </div>
            </div>
            <button  type="submit" class='mt-3 form-control btn btn-success w-25'>Busque su Producto</button>
        </div>
    </form>
</div>
<?php }
}
