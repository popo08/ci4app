<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function register()
    {
        if ($this->request->getPost()) {

            //lakukan validasi untuk data yang dipost
            $data = $this->request->getPost();
            $validdate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();

            //jika tidak ada errors jalankan
            if (!$errors) {
                $userModel = new \App\Models\UserModel();

                $user = new \App\Entities\User();

                $user->username = $this->request->getPost('username');
                $user->password = $this->request->getPost('password');

                $user->created_by = 0;
                $user->created_date = date("Y-m-d H:i:s");

                $userModel->save($user);

                return view('login');
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
    }
}
