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
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('login/index', $data);
    }

    public function logout() 
    {
        $this->session->destroy();
        return redirect()->to('http://localhost:8080/');    
    }

    public function login()
    {
        $this->username = $this->request->getPost('username');
        $this->password = $this->request->getPost('password');

        if(!$this->validate([
            'username' => [
                'rules' => 'required|is_not_unique[user.username]',
                'errors' => [
                    'required' => 'please provide a username',
                    'is_not_unique' => 'username does not exist',
                ]
            ],
            'password' => 'required'
        ])) {
            return redirect()->to('http://localhost:8080/login')->withInput();
        }

        $validate = $this->userModel
        ->where(['username' => $this->username, 'password' => $this->password])
        ->first();

        $sessiondata = [
            'isLogin' => true,
            'username' => $validate['username'],
        ];

        $this->session->set($sessiondata);

        return redirect()->to('http://localhost:8080/');
    }
}
