<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\View\Table;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->usrModel = new UserModel();
    }
    public function index()
    {
        helper(['form']);
        echo view('auth/v_login_form');
    }

    public function auth()
    {
        $session = session();
        $username = $this->request->getPost('username_field');
        $password = $this->request->getPost('password_field');
        //$data = $this->usrModel->where('user_name', $username)->first();
        $data = $this->usrModel->getData($username);
        if($data){
            $pass = $data['user_password'];
            if ($password == $pass)
                $verify_pass = true;
            else
                $verify_pass = false;

            //$verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/mahasiswa');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/auth');
            }
        }else{
            $session->setFlashdata('msg', 'User not Found');
            return redirect()->to('/auth');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth');
    }
}