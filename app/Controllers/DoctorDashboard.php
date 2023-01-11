<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use CodeIgniter\I18n\Time;

class DoctorDashboard extends BaseController
{
    public function patient()
    {    
        $date = new \App\Models\AuthModel();
        $data['users'] = $date->findAll();
        return view('doctor/patient',$data);
    }

    public function appointment()
    {
        $booking = new \App\Models\Booking();
        $data['users'] = $booking->getAll(); 
        
        $today = Time::today();
        $tomorrow = Time::tomorrow();
        $data_array = array('datetime >=' => $today, 'datetime <' => $tomorrow);
        $data['expired'] = $booking->where($data_array)->find();  
        

        return view('doctor/appointment', $data);
    }

    public function changestatus($id)
    {
        $booking = new \App\Models\Booking();
        $data = $booking->getby($id);
        $newStatus = ($data->status == 'PENDING') ? 'ACCEPTED' : 'PENDING';
        $option = [
            'status' => $newStatus,
        ];  
        $booking->update($id, $option);
        return redirect()->to('admin/appointment');
    }

    public function changedate($id)
    {
        $booking = new \App\Models\Booking();
        $data = $booking->getby($id);
        $status = [
            'datetime' => $this->request->getPost('datetime'),
        ];
        $booking->update($id, $status);
    }

    public function social()
    {
        return view('doctor/social-media');
    }
}
