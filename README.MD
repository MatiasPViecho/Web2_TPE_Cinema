Falta refactor de panel de admin, se cambio el modo en el que se llama a 
los controladores, donde antes existían 6 caminos de router ahora son 2 con
sub-caminos (en lugar de "home" "product" "productInfo" "categories", etc.)
Ahora es ("home", "search", "search/product" "search/product/x")

Falta refactorizar parte de admin y su panel, de igual manera para esto
haría falta hacer la parte de login de usuario, así se comienzan a hacer
las autenticaciones desde 0.

La clase user.controller.php no existe mas, ha sido reemplazada por:
home controller (que controla el header y la vista del home)

search controller (que controla las peticiones que se le hacen a la pagina, esto siendo busquedas generales, información detallada de X producto o cateogría)

a su vez, se creó la clase login controller, la cual deberá encargarse de manejar la autentificación de usuarios)

la clase admin controller seguirá existiendo, pero se debe refactorizar como esta recibe mensajes a través del router
(de un mismo modo que se refactorizó search controller), donde en lugar de 
"addProduct", "editProduct", etc. Podríamos encontrar:
"panel", "panel/action", "panel/action/add", "panel/action/edit", "panel/action/delete", etc.
