<?php

namespace App\Controllers\Ci4login;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('ci4login/dashboard');
    }
    public function show($id=null)
    {
        //
    }
    public function new()
    {
        //
    }
    public function create()
    {
        //
    }
    public function edit()
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
}
