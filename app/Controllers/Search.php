<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DataModel;

class Search extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function searchMember()
    {
        $model = new DataModel();
        $data['member'] = $model->orderBy('id_card', 'DESC')->findAll();
        return view('/search', $data);
    }

}
