<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BookController extends BaseController
{
    private $BookModel;
    public function index()
    {
        helper(["form","url"]);
        $this->BookModel = new BookModel();
        $data['books']=$this->BookModel->get_all_books();
        return view('book_view',$data);
    }
    public function book_add(){
        //http://localhost:8080/booktable
    }
}
