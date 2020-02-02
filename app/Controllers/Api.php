<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Api extends \CodeIgniter\Controller
{
    use ResponseTrait;
    
    public function index() {
        return $this->respond(['test' => 'ok']);
    }

    public function user() {
        return $this->respond([
            'method' => $this->request->getMethod(),
            'data' => $this->request->getRawInput()
            ]);
    }
}
