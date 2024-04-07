<?php

namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        return view("welcome_message");
    }
    public function view($page='home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page .'.php')){
            // whoops, we dont have a page for that!
            throw new PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); //capitalizes the first letter
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
