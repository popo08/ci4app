<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Etalase extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $barang = new \App\Models\BarangModel();
        $model = $barang->findAll();
        return view('etalase/index', [
            'model' => $model,
        ]);
    }

    public  function beli()
    {
        $id = $this->request->uri->getSegment(3);

        $modelBarang = new \App\Models\BarangModel();

        $model = $modelBarang->find($id);

        return view('etalase/beli',[
            'model'=>$model
        ]);
    }
    
}
