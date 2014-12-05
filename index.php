<?php
include_once './controller.php';
include_once './model.php';
include_once './view.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //initiate the triad
        $model = new Model();
//It is important that the controller and the view share the model
        $controller = new Controller($model);
        $view = new View($controller, $model);
        echo $view->output();
        ?>
    </body>
</html>
