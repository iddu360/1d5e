<?php

namespace App\Controllers\Ci4login;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('ci4login/login');
    }
    public function show($id=null){

    }
    public function new()
    {

    }
    public function create()
    {

    }
    public function edit($id=null)
    {

    }
    public function update($id=null)
    {

    }
    public function delete($id=null)
    {

    }
    public function authenticate()
    {
    $session = session();
    $userModel = new UserModel();
        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]'
        ]);

        if (!$inputs) {
            return view('login', [
                'validation' => $this->validator
            ]);
        }
        
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');



        $user = $userModel->where('email', $email)->first();


        if (is_null($user)) {
            session()->setFlashdata('failed', 'Failed! incorrect email');
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        $pwd_verify = password_verify($password, $user['password']);

        //         if ($pwd_verify) {
        //             echo 'Hello';
        //         } else {
        //             echo 'Not Working';
        //         }
        // exit();
        if (!$pwd_verify) {
            session()->setFlashdata('failed', 'Failed! incorrect password');
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        $ses_data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'isLoggedIn' => true
        ];

        $session->set($ses_data);
        return redirect()->to(base_url('/dashboard'));
    
}
    public function logout()
    {
        $session = session();
        session_destroy();
        return redirect()->to(base_url('/login'));
    }
}
