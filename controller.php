<?php

include_once './model.php';

class Controller {

    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function insertNewCar($brand, $type, $color, $price) {
        global $pdo;
        $query = $pdo->prepare("INSERT INTO cars_data (brand, type, color, price) VALUES (?, ?, ?, ?)");
        $query->bindValue(1, $brand);
        $query->bindValue(2, $type);
        $query->bindValue(3, $color);
        $query->bindValue(4, $price);
        $query->execute();
        header("Refresh:0");
    }

    public function deleteCar($id) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM cars_data WHERE id=?");
        $query->bindValue(1, $id);
        $query->execute();
        header("Refresh:0");
    }

}

?>
