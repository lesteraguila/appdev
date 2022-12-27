<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class DocAuthController extends BaseController
{
    public function index()
    {
        $doctorModel = new \App\Models\DoctorAuth(); 
        $validation = $this->validate([
            'username' => [
                'label' => 'username',
                'rules' => 'required|is_not_unique[doctor.username]'
            ],

            'password' => [
                'label' => 'password',
                'rules' => 'required|min_length[4]|is_not_unique[doctor.password]'
            ]
        ]);

        if(session()->has('loggedDoctor')){
            return redirect()->to('admin/dashboard');
        }
        
        if($this->request->getPost())
        {
            if(!$validation){
                return redirect()->to('admin/login')->withInput()->with('errors', $this->validator->getErrors());
            }
            else
            {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $userInfo = $doctorModel->where('username', $username)->first();
                session()->set('loggedDoctor', $username);
                return redirect()->to('admin/dashboard');
            }
        }
        return view('doctor/login');
    }

    public function logout()
    {
        if (session()->has('loggedDoctor')) {
            session()->remove('loggedDoctor');
            session()->stop('loggedDoctor');
            return redirect()->to('admin/login')->with('success', 'User successfully logged out');
        }
    }
}
