<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index()
    {   
        return view('patient/index');
        //$myTime = Time::today('Asia/Manila');
        //$myTime = new Time('now');

        // $today = Time::today();
        // $tomorrow = Time::tomorrow();
        // $data_array = array('datetime >=' => $today, 'datetime <' => $tomorrow);
        // $data = $date->where($data_array)->find();
    }

    public function fetch(){
        $date = new \App\Models\Booking();
        $data = $date->findAll();
        return $this->response->setJSON($data);
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
