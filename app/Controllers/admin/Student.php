<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Student extends BaseController
{
    public function __construct()
    {
        helper(['html','form']);
    }
    public function showme($page)
    {
        return view('admin/'.$page);
        // echo $page;
    }
    // public function index()
    // {
    //     echo view("layout/header");
    //     echo view("admin/index");
    //     echo view("layout/footer");
    // }
    // public function aboutus()
    // {
    //     echo view("layout/header");
    //     echo view("admin/about");
    //     echo view("layout/footer");
    // }
    // public function contactus()
    // {
    //     echo view("layout/header");
    //     echo view("admin/contact");
    //     echo view("layout/footer");
    // }
}
