<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\View\Table;

class RegisterController extends BaseController
{
    public function __construct()
    {
        $this->usrModel = new UserModel();
    }
    public function index()
    {
        helper(['form']);
        echo view('auth/v_register_form');
    }
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'          => 'required|min_length[3]|max_length[20]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
        if($this->validate($rules)){
            $data = [
                'user_name'     => $this->request->getVar('username'),
//                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                'user_password' => $this->request->getVar('password')
            ];
            $this->usrModel->save($data);
            return redirect()->to('/');
        }else{
            $data['validation'] = $this->validator;
            echo view('auth/v_register_form', $data);
        }

    }
}