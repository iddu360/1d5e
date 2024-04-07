<?php

namespace App\Controllers\Ci4login;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    protected $UserModel;
    protected $security;
    public function __construct()
    {
        helper(['form', 'url','file','date']);
        $this->UserModel = new UserModel();
        $this->security =  \Config\Services::security();
    }
    public function index()
    {
        $data = [];
        return view('register', $data);
    }
    public function show($id = null)
    {
        //
    }
    public function new()
    {
        //
    }
    public function create()
    {
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        $response['security'] = $this->security;
        $result = $this->UserModel->save($data);
        if ($result) {
            // session()->setFlashdata('success', 'Success! registration completed.');
            return $this->response->setJSON(['status' => 'success', 'message' => 'User registered successfully']);
        }
        return $this->response->setJSON(['status' => 'failed', 'message' => 'Failed to register']);
    }
    public function edit($id = null)
    {
        //
    }
    public function update($id = null)
    {
        //
    }
    public function delete($id = null)
    {
        //
    }
    public function register()
    {
        $rules = [
            'firstname' => 'required|min_length[3]',
            'lastname' => 'required|min_length[3]',
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[tblusers.email]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'confirm_password'  => ['label' => 'confirm password', 'rules' => 'matches[password]']
        ];


        if ($this->validate($rules)) {
            $model = new UserModel();
            $data['token'] = csrf_hash();
            $data = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('success', 'Success! registration completed.');
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }
    public function email_exists($email)
    {
        $db = \Config\Database::connect(); // 
        //  $db = db_connect();
        $builder = $db->table('tblusers');
        $builder->where('email', $email);
        if ($builder->countAllResults() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function register_email_exists()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tblusers');
        $request = \Config\Services::request();
        if (array_key_exists('email', $_POST)) {
            if ($this->email_exists($request->getVar('email')) == TRUE) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }
}
