<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    private $username;
    private $password;
    private $userModel;
    private $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = session();
    }

    public function index()
    {
        return view('login/index');
    }
    
    public function login()
    {
        $this->username = $this->request->getPost('username');
        $this->password = $this->request->getPost('password');

        $validate = $this->userModel
            ->where(['username' => $this->username, 'password' => $this->password])
            ->first();

        if($validate > 0) {
            $sessiondata = [
                'isLogin' => true,
                'username' => $validate['username'],
            ];

            $this->session->set($sessiondata);

            return redirect()->to('http://localhost:8080/');
        }
    }

    public function logout() 
    {
        $this->session->destroy();
        return redirect()->to('http://localhost:8080/');    
    }
}
