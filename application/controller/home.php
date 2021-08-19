<?php
class Home extends Controller {

    public function index() {
        $model = $this->loadModel('Home_Model');
        $mungu = $model->test("오하요");
        echo $mungu;
        require 'application/view/home/home.php';
    }
}