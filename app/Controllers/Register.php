<?php

namespace App\Controllers;

use App\Models\DataModel;

//use App\Models\RegiModel;

use CodeIgniter\Controller;


class Register extends Controller
{
    public function index()
    {
        helper('form');
        return view('register');
    }

    public function add()
    {
        helper('form');
        $rules = [
            'id_card' => 'required',
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
        if ($this->validate($rules)) {
            $modelMember = new DataModel();
            // $modelRegi = new RegiModel();
            $data = [
                'id_card' => $this->request->getVar('id_card'),
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];

            // $data2 = [
            //     'ID' => $this->request->getVar('ID'),
            //     'member' => $this->request->getVar('member'),
            //     'category_run' => $this->request->getVar('category_run'),
            // ];
        
            //var_dump($data);
           
            // $modelRegi->insert($data2);
            $modelMember->insert($data);
            return redirect()->to('/');
        }
    }
}
