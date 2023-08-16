<?php

namespace App\Controllers;

//exit('No direct script access allowed');
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// error_reporting(0);

use App\Models\UserModel;

class User extends BaseController
{

    private $data;
    private $userModel;
    protected $validation;

    function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $this->data['users'] = $this->userModel->getData();
        $this->data['title'] = 'Users';
        echo view('include/navbar');
        return view('user', $this->data);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->validation->setRule('name', 'Name', 'required|max_length[30]|min_length[3]');
            $this->validation->setRule('email', 'Email', 'required|valid_email');
            $this->validation->setRule('age', 'Age', 'required');
            $this->validation->setRule('number', 'Phone Number', 'required|exact_length[10]');
            if ($this->validation->withRequest($this->request)->run()) {
                $insertData = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'age' => $this->request->getVar('age'),
                    'number' => $this->request->getVar('number'),
                ];
                $response = $this->userModel->addData($insertData);
                return redirect()->to('/');
            } else {
                $this->data['validation'] = $this->validation;
            }
        }
        $this->data['title'] = 'Add User';
        echo view('include/navbar');
        return view('addUser', $this->data);
    }
}
