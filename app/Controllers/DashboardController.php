<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class DashboardController extends BaseController
{

    public function index()
    {
        $booking = new \App\Models\Booking();
        $data['users'] =  $booking->getDataSolo();
        return view('/patient/patient-dashboard', $data);
    }


    public function changePassword()
    {

        $data['title'] = 'Change Password';

        $authModel = new \App\Models\AuthModel();
        $loggedUserId = session()->get('loggedCustomer');
        $userInfo['data'] = $authModel->where('id', $loggedUserId)->find();

        $validation = $this->validate([
            'password' => [
                'label' => 'password',
                'rules' => 'required|min_length[4]',
            ],
            'newpassword' => [
                'label' => 'new password',
                'rules' => 'required|min_length[4]|differs[password]'
            ],
            'renewpassword' => [
                'label' => 'confirm password',
                'rules' => 'required|min_length[4]|matches[newpassword]|differs[password]',
            ],
        ]);


        if ($this->request->getPost()) {

            if (!$validation) {

                return redirect()->to('/dashboard/change-password')->withInput()->with('errors', $this->validator->getErrors());
            } else {

                $password = $this->request->getPost('password');
                $newpassword = $this->request->getPost('newpassword');
                $renewpassword = $this->request->getPost('renewpassword');

                $loggedUserId = session()->get('loggedCustomer');
                $userInfo = $authModel->find($loggedUserId);
                $checkPassword = Hash::checkPassword($password, $userInfo->password);

                if ($checkPassword) {

                    $userInfo->password = $newpassword;

                    if ($authModel->update($userInfo->id, $userInfo)) {
                        session()->setFlashdata('success', 'The password has been successfully changed.');
                    } else {
                        session()->setFlashdata('error', 'There was an error in changing your password');
                    }
                    return redirect()->to('/dashboard/change-password')->withInput();
                } else {
                    session()->setFlashdata('error', 'The current password entered incorrectly');
                    return redirect()->to('/dashboard/change-password')->withInput();
                }
            }
        }

        return view('patient/change-password', $data);
    }

    public function changePhoto()
    {
        $session = session();
        $authModel = new \App\Models\AuthModel();
        $auth = new \App\Models\UserInformation();

        $loggedUserId = session()->get('loggedCustomer');
        $userInfo = $authModel->find($loggedUserId);
        $data['info'] = $auth->where('user_id', $loggedUserId)->find();
        
        $data['title'] = 'Altered photoo';
        $data['photo'] = $userInfo->photo;
        $data['name'] = $userInfo->name;

        if ($this->request->getPost()) {

            $file = $this->request->getFile("photo");

            $validationRules = [
                'photo' => [
                    'label' => 'change photo',
                    'rules' => 'uploaded[photo]'
                        . '|is_image[photo]'
                        . '|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                        . '|max_size[photo,9000]'
                        . '|max_dims[photo,7680,4320]',
                ],
            ];
    
            $values = [
                'firstname' => $this->request->getPost('firstname'), 
                'lastname' => $this->request->getPost('lastname'), 
                'birthday' => $this->request->getPost('birthday'), 
                'bloodtype' => $this->request->getPost('bloodtype'), 
                'number' => $this->request->getPost('number'), 
                'address' => $this->request->getPost('address'), 
                'city' => $this->request->getPost('city'), 
                'state' => $this->request->getPost('state'), 
                'zipcode' => $this->request->getPost('zipcode'), 
                'country' => $this->request->getPost('country')
            ];

            $auth->where('user_id', $loggedUserId)->set($values)->update();
            
            if (!$this->validate($validationRules)) {
                return redirect()->to('/dashboard/profile');
            } else {

                $photo = $file->getName();
                $newNamePhoto = $file->getRandomName();

                if ($file->move("uploads", $newNamePhoto)) {

                    $data = [
                        'name' => $this->request->getPost('name'),
                        'photo' => "uploads/" . $newNamePhoto,
                    ];

                    if (!is_null($userInfo->photo)) {
                        $deletePhoto = ltrim($userInfo->photo, '/');
                        unlink($deletePhoto);
                    }

                    if ($authModel->update($userInfo->id, $data)) {                       
                        $session->setFlashdata("success", "Profile information updated succesfuly");
                    } else {
                        $session->setFlashdata("error", "Profile information failed to update.");
                    }
                    return redirect()->to('/dashboard/profile');
                }
            }
            return view('/patient/profile', $data);
        }
        return view('/patient/profile', $data);
    }


    public function changeData()
    {

        $authModel = new \App\Models\AuthModel();

        $getRule = $authModel->getRule('changeData');
        $authModel->setValidationRules($getRule);

        $loggedUserId = session()->get('loggedCustomer');
        $userInfo = $authModel->find($loggedUserId);

        $data['title'] = 'Alterar dados';
        $data['name'] = $userInfo->name;
        $data['email'] = $userInfo->email; 

        if ($this->request->getPost()) {

            $values = [
                'name' => $this->request->getPost('name'),
            ];

            if ($authModel->update($userInfo->id, $values)) {
                return redirect()->to('/dashboard/change-data')->with('success', 'Data successfully updated');
            } else {
                return redirect()->to('/dashboard/change-data')->withInput()->with('errors', $authModel->errors());
            }
        }

        return view('/dashboard/changeData', $data);
    }

    public function changeSettings()
    {
        $settingsModel = new \App\Models\SettingsModel();

        if ($this->request->getPost()) {

            $settingsModel->updatePost($this->request->getPost());
        }
        return view('doctor/settings');
    }

}
