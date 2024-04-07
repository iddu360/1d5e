<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CustomHelper extends BaseController
{
    public function index()
    {
        helper('custom_helper');
        return view('customhelper');
    }
}
