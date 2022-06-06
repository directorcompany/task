<?php
      require_once('model/model.php');

class Controller {
    private $model;
    // Присваиваем на переменную модель ы
    public function __construct() {

        $this->model = new Model();

    }
    public function show() {
        $result = $this->model->insertData();
        require_once('view/index.php');
        return $result;
    }
}
?>