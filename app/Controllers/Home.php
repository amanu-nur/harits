<?php

namespace App\Controllers;
use App\Models\PortoModel;

class Home extends BaseController
{
    public function index()
    {
        $Porto = new PortoModel();
        // $product = $this->ProductModel->findAll();
        $data = [
            'title' => 'CV | Belajar CI4',
            'page'  => 'home',
            'edu'   => $Porto->getEdu(),
            'orga'   => $Porto->getOrga()
        ];
        return view('view/index',$data);
    }
}