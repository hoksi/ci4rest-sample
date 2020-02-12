<?php

namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;

class User extends \CodeIgniter\Controller
{

    use ResponseTrait;
    protected $userModel;
    protected $data;

    public function __construct()
    {
        $this->userModel = new \App\Models\Api\User();
    }

    public function _remap(...$params)
    {
        $method = $this->request->getMethod();
        $this->data =$this->request->getJSON();

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], [($params[0] !== 'index' ? $params[0] : false)]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    protected function get($id = false)
    {
        if($id) {
            $data = $this->userModel->find($id);
        } else {
            $data = $this->userModel->findAll();
        }

        return $this->respond($data);
    }

    protected function put($id = false)
    {
        $ret = false;
        if($id && !empty($this->data)) {
            $ret = true;
            $this->userModel->update($id, $this->data);
        }

        return $this->respond($ret);
    }

    protected function post()
    {
        $ret = false;
        if(!empty($this->data)) {
            $ret = true;
            $this->userModel->insert($this->data);
        }

        return $this->respond($ret);
    }

    protected function delete($id = false)
    {
        $ret = false;
        
        if($id) {
            $ret = true;
            $this->userModel->delete($id);
        }

        return $this->respond($ret);
    }
}