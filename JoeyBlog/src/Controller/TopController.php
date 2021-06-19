<?php
namespace App\Controller;

use App\Controller\AppController;

class TopController extends AppController {
    public function index() {
        $this->loadModel('Posts');
        $data = $this->Posts->find('all');
        $this->set(compact('data'));
    }
}