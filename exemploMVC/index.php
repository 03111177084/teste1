<html>
    <head>
        <title>FORGE</title>
    </head>
    <body>
<?php 
    include_once("controller/Controller.php");
    $controller = new Controller();
    // para as demais paginas, o login vai funcionar como um dispatcher
    // onde os elementos buscados sao passados por GET.
    if (isset($_GET['acao'])) {
       $controller->invoke($_GET['acao']);
   } else {
       $controller->invoke();
   }
?>
    </body>
</html>