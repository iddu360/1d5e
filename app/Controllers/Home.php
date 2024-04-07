<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function contr()
    {
        $data=array(
            'title'=>'shitty crap',
            'heading'=>'real Shit',
            'message'=>'Here goes the stuff everyones been talking about, its codeigniter 4 rn!!!!'
        );
        echo view('frmcontr', $data);
    }
}
