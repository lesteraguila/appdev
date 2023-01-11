<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class AppointmentController extends BaseController
{
    public function insertbooking()
    {
        $session = session()->get('loggedCustomer');

        $booking = new \App\Models\Booking();
        if($this->request->getPost())
        {
            $values = [
                'user_id' => $session,
                'firstname' => $this->request->getPost('firstname'),
                'lastname' => $this->request->getPost('lastname'),
                'number' => $this->request->getPost('number'),
                'datetime' => $this->request->getPost('datetime'),
                'treatment' => $this->request->getPost('treatment'),
                'status' => 'PENDING'
            ];
            $booking->insert($values);

            return redirect()->to('/dashboard')
            ->with('status', "Booking successfully!")
            ->with('status2', 'Please wait for your confirmation.');
        }
        return view('patient/appointment');
    }
}
