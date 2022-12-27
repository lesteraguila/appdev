<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        return view('patient/index');
        
    }

    public function privacy()
    {
        return view('patient/privacy');
    }

    public function about()
    {
        return view('patient/about');
    }

    public function ddashboard()
    {
        return view('doctor/doctor-dashboard');
    }

    public function slider() {
        $authModel = new \App\Models\AuthModel();
        $loggedUserId = session()->get('loggedCustomer');
        $userInfo['data'] = $authModel->where('id', $loggedUserId)->find();
        
        //print_r($userInfo->photo);
        return view('patient/profile-slider', $userInfo);
    }
}
