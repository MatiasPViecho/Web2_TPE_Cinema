<?php
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './app/views/edit.view.php';

class editController{

    private $editView;
    private $productsModel;
    private $categoriesModel;
    private $authHelper;

    function __construct(){
        $this->editView = new editView();
        $this->productsModel = new productsModel();
        $this->categoriesModel = new categoriesModel();
        $this->authHelper = new AuthHelper();
    }

    function showEditPanel(){
        $this->authHelper->checkLoggedIn();
        $this->editView->showEditMenu();
    }
    // PRODUCT EDIT FUNCTIONS
    // main view function
    function showProductsPanel($msg = null){
        $this->authHelper->checkLoggedIn();
        $productsdb = $this->getProductsWithCategory();
        $dbCategories = $this->categoriesModel->getAll();
        $this->editView->showProductsPanel($productsdb, $dbCategories, $msg);
    }
    //add products
        function addProduct(){
            $this->authHelper->checkLoggedIn();
            $model = $_POST['model'];
            $price = $_POST['price'];
            $country = $_POST['country'];
            $brand = $_POST['brand'];
            $characteristics = $_POST['characteristics'];
            $categoryFK = $_POST['category'];

            if($this->succesfulProductPost()){
                if(($categoryFK == null)){
                    echo $_POST['category'];
                    $this->showProductsPanel('Falta agregar categoría');    
                }else{
                    $this->productsModel->addProduct($model, $price, $country, $brand, $characteristics, $categoryFK);
                    $this->showProductsPanel();
                }
            }else{
                $this->showProductsPanel('Hay campos sin completar');
                }
        }
    //modify product
        //view, shows modify screen
        function showModifyProductPanel($productID = null){
            $this->authHelper->checkLoggedIn();

            if($productID == null){
                $this->showProductsPanel('No se puede modificar el producto (id no seleccionado)');
            }else{
                if($this->productExistsDB($productID)){
                    $this->callViewProductModifyPanel($productID);
                }else{
                    $this->showProductsPanel('El producto a modificar no existe');
                }
            }
        }
        // action, modifies the product
        function modifyProduct($productID = null){
            $this->authHelper->checkLoggedIn();

            if($productID == null){
                $this->showProductsPanel('No se pudo procesar la modificación al producto (falta id)');
            }else{
                if($this->productExistsDB($productID)){
                    if($this->succesfulProductPost()){
                        $model = $_POST['model'];
                        $price = $_POST['price'];
                        $country = $_POST['country'];
                        $brand = $_POST['brand'];
                        $characteristics = $_POST['characteristics'];
                        $categoryFK = $_POST['category'];
                        
                        $this->productsModel->editProduct($model, $price, $country, $brand, $characteristics, $categoryFK, $productID);
                        $this->callViewProductModifyPanel($productID);
                    }else{
                        $this->callViewProductModifyPanel($productID, 'Faltan campos a agregar para editar correctamente');
                    }
                }else{
                    $this->showProductsPanel('El producto a modificar no existe');
                }
            }
        }
    // delete product
        function deleteProduct($productID = null){
            // verifica si el usuario está logeado, caso contrario lo hecha a la pantalla de login
            $this->authHelper->checkLoggedIn();
            // si el parametro de la url no existe, es porque el usuario ingresó manualmente la url, por lo que 
            // genero un mensaje de error mandando el parametro "null" a la función
            if($productID == null){
                $this->showProductsPanel('No se pudo eliminar ningún producto (id no seleccionado)');
            }else{
                // si la función recibe un parametro, es que ingresó manualmente o apretó uno de los botones de eliminar
                // ahora hay que corroborar si el producto en cuestión existe, para no intentar eliminar algo que no existe
                if($this->productExistsDB($productID)){
                    //caso true, el producto existe, se procede a eliminarlo
                    $this->productsModel->deleteProduct($productID);
                    $this->showProductsPanel();
                }else{
                    //caso false, el producto no existe, se procede a mostrar un mensaje de error
                    $this->showProductsPanel('El producto a eliminar no existe');
                }
            }
        }
    // CATEGORY EDIT FUNCTIONS
        // main category panel view function
        function showCategoryPanel($msg = null){
            $this->authHelper->checkLoggedIn();
            $dbCategories = $this->categoriesModel->getAll();
            $this->editView->showCategoryPanel($dbCategories, $msg);
        }
        // add category
            function addCategory(){
                $this->authHelper->checkLoggedIn();
                $category = $_POST['category'];
                $emptyCheck = rtrim($_POST['category']);
            if(!empty($emptyCheck)){
                $this->categoriesModel->addCategory($category);
               $this->showCategoryPanel();
            }
            else
                $this->showCategoryPanel('No se colocó nada en el campo categoría!');
            }
        // modify category
            function showModifyCategoryPanel($categoryID){
                $this->authHelper->checkLoggedIn();
                if($categoryID == null){
                    $this->showCategoryPanel('No se puede modificar la categoría (id no seleccionado)');
                }else{
                    if($this->categoryExistsDB($categoryID)){
                        $this->callViewCategoryModifyPanel($categoryID);
                    }else{
                        $this->showCategoryPanel('La categoría a modificar no existe');
                    }
                }
            }
        // modify category action
            function modifyCategory($id){
                $this->authHelper->checkLoggedIn();
                $newCategory = $_POST['category'];
                $emptyCheck = rtrim($_POST['category']);
                if(empty($emptyCheck)){
                    $this->showCategoryPanel('No se puede editar la categoría, no hay nombre nuevo');
                }else{
                    $this->categoriesModel->editCategory($id, $newCategory); 
                    $this->showCategoryPanel();
                }
            }
        //delete category
            function deleteCategory($id){
                $this->authHelper->checkLoggedIn();
                if($id == null){
                    $this->showCategoryPanel('No se puede eliminar la categoría, falta id');
                }else{
                    if(!$this->categoryExistsDB($id)){
                        $this->showCategoryPanel('No se puede eliminar la categoría, no existe');
                    }else{
                        if(!$this->categoryHasProducts($id)){
                            $this->categoriesModel->deleteCategory($id);
                            $this->showCategoryPanel();
                        }else{
                            $this->showCategoryPanel('No se puede eliminar la categoría, tiene productos');
                        }
                    }
                    }
                }
    //function for error msg


    private function callViewProductModifyPanel($productID, $msg = null){
                        $product = $this->productsModel->getProductById($productID);
                        $dbCategories = $this->categoriesModel->getAll();
                        $dbProducts = $this->getProductsWithCategory();
                        $product = $this->addCategoryNameProduct($product, $dbCategories);
                        $this->editView->showModifyProductPanel($product, $dbProducts, $dbCategories, $msg);
    }
    private function callViewCategoryModifyPanel($categoryID, $msg = null){
                        $category = $this->categoriesModel->getCategory($categoryID);
                        $dbProducts = $this->productsModel->getProductsByCategory($categoryID);
                        $dbCategories = $this->categoriesModel->getAll();
                        $dbProducts = $this->addCategoryNameDB($dbProducts, $dbCategories);

                        $this->editView->showModifyCategoryPanel($category, $dbCategories, $dbProducts, $msg);
    }

    private function succesfulProductPost(){
        $model = rtrim($_POST['model']);
        $price = rtrim($_POST['price']);
        $country = rtrim($_POST['country']);
        $brand = rtrim($_POST['brand']);
        $characteristics = rtrim($_POST['characteristics']);
        $category = rtrim($_POST['category']);


        if(!empty($model) && !empty($price)
            && !empty($country) && !empty($brand)
            && !empty( $characteristics) && !empty($category)){
                return true;
            }else{
                return false;
            }
    }
    private function addCategoryNameDB($dbProducts, $dbCategories){
        //Asigno a cada item de productos una nueva variable "category" que muestre
        // el nombre a la categoría que pertenecen
        for ($i=0; $i < count($dbProducts); $i++) { 
            foreach ($dbCategories as $catItem) {
                if($dbProducts[$i]->id_categories_fk == $catItem->id){
                    $dbProducts[$i]->category = $catItem->category;
                }
            }
        }
        return $dbProducts;
    }

    private function addCategoryNameProduct($product, $dbCategories){
        foreach ($dbCategories as $category) {
            if($category->id == $product->id_categories_fk)
                $product->category = $category->category;
        }

        return $product;
    }

    private function productExistsDB($id){
        $product = $this->productsModel->getProductById($id);
        if($product == false){
            return false;
        }else{
            return true;
        }
    }
    private function categoryExistsDB($id){
        $category = $this->categoriesModel->getCategory($id);
        if($category == false)
            return false;
        else
            return true;
    }
    private function getProductsWithCategory(){
        $dbCategories = $this->categoriesModel->getAll();
        $dbProducts = $this->productsModel->getAll();
        $dbProducts = $this->addCategoryNameDB($dbProducts, $dbCategories);
        return $dbProducts;
    }

    private function categoryHasProducts($id){
        $dbProducts = $this->productsModel->getProductsByCategory($id);
        if($dbProducts == false){
            return false;
        }else{
            return true;
        }
    }

    
}