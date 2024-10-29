<?php
require_once 'apps/models/Barang.php';

class HomeController {
    private $model;

    public function __construct() {
        $this->model = new Barang();
    }

    public function index() {
        $data = $this->model->getAll();
        require 'apps/views/home/listbarang.php';
    }

    public function insertbarang() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->insert($_POST['nama'], $_POST['qty']);
            header('Location: ' . BASE_URL . 'index.php?r=home/index');
        } else {
            require 'apps/views/home/insertbarang.php';
        }
    }

    public function updatebarang($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST['nama'], $_POST['qty']);
            header('Location: ' . BASE_URL . 'index.php?r=home/index');
        } else {
            $item = $this->model->find($id);
            require 'apps/views/home/updatebarang.php';
        }
    }

    public function deletebarang($id) {
        $this->model->delete($id);
        header('Location: ' . BASE_URL . 'index.php?r=home/index');
    }
}
