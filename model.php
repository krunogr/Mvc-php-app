
<?php

include_once './sqlConnection.php';

class Model {

    public $text;
    public $cars;

    public function __construct() {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM cars_data");
        $query->execute();
        $this->text = 'Hello world!';
        $this->cars = $query->fetchAll();
//        print_r($this->cars);
    }



}
?>

