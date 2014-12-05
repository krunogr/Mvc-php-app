<?php

include_once './controller.php';
include_once './model.php';

class View {

    private $model;
    private $controller;

    public function __construct(Controller $controller, Model $model) {
        $this->controller = $controller;
        $this->model = $model;
    }

//    public function output() {
//        return '<h1>' . $this->model->text . '</h1>';
//    }


    public function output() {
        if (isset($_POST['delete'])) {
            $this->controller->deleteCar(substr($_POST['delete'], 7));
    
        }

         if (isset($_POST['insert_data']) && !empty($_POST['brand']) && !empty($_POST['type']) &&
                !empty($_POST['color']) && !empty($_POST['price'])) {
            $this->controller->insertNewCar($_POST['brand'], $_POST['type'], $_POST['color'], $_POST['price']);
        }
        $string = "<form action='index.php' method='post'><table style='border-collapse: collapse; text-align: center; font-size:20px' border='1' align='center'>
            <tr  style='font-weight: bold;'>
                <td style='width:100px'>Car ID</td>
                <td style='width:100px'>Brand</td>
                <td style='width:100px'>Type</td>
                <td style='width:100px'>Color</td>
                <td style='width:100px'>Price</td>
                <td style='width:100px'>Action</td>
            </tr>";
        foreach ($this->model->cars as $car) {

            $string.= '<tr>';
            $string.= '<td>' . $car['id'] . '</td>';
            $string.= '<td>' . $car['brand'] . '</td>';
            $string.= '<td>' . $car['type'] . '</td>';
            $string.= '<td>' . $car['color'] . '</td>';
            $string.= '<td>' . $car['price'] . '</td>';
            $string.= '<td>' . "<input type='submit' name='delete'  value=Delete_"  . $car['id'] . " /> " . '</td>';
            $string.= '<tr>';
        }
        $string.="<tr  style='font-weight: bold;'>
                <td></td>
                <td><input type='text' name='brand' placeholder='Insert brand'></td>
                  <td><input type='text' name='type' placeholder='Insert type'></td>
                  <td><input type='text' name='color' placeholder='Insert color'></td>
                 <td><input type='text' name='price' placeholder='Insert price'></td>
                <td><input type='submit' value='Submit' name='insert_data'/>
            </tr></table>";

        return $string;
    }

}
?>
