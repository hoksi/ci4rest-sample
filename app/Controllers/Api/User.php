<?php

namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;

class User extends \CodeIgniter\Controller {

    use ResponseTrait;

    public function _remap() {
        return $this->respond([
                    'method' => $this->request->getMethod(),
                    'data' => $this->request->getRawInput()
        ]);
    }

}
