<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class AuthController extends BaseController
{
    public function index()
    {

        $data['title'] = 'Login';

        $authModel = new \App\Models\AuthModel();

        $validation = $this->validate([
            'email' => [
                'label' => 'email',
                'rules' => 'required|valid_email|is_not_unique[customer.email]',
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required|min_length[4]'
            ],
        ]);

        if ($this->request->getPost()) {

            if (!$validation) {
                return redirect()->to('auth/login')->withInput()->with('errors', $this->validator->getErrors());
                return view('/patient/login', $data);
            } else {

                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $userInfo = $authModel->where('email', $email)->first();
                $checkPassword = Hash::checkPassword($password, $userInfo->password);

                if (!$checkPassword) {
                    return redirect()->to('/auth/login')->withInput()->with('error', 'Password entered is incorrect');
                } else {
                    $customerId = $userInfo->id;
                    session()->set('loggedCustomer', $customerId);
                    return redirect()->to('/dashboard');
                }
            }
        }

        return view('/patient/login', $data);
    }


    public function register()
    {
        $data['title'] = 'Register';

        if ($this->request->getPost()) {

            $authModel = new \App\Models\AuthModel();
            $getRule = $authModel->getRule('register');
            $authModel->setValidationRules($getRule);

            $values = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'repassword' => $this->request->getPost('repassword'),
            ];

            if ($authModel->insert($values)) {
                $lastRegisterCustomer = $authModel->insertID();

                $auth = new \App\Models\AuthModel();
                $auth->inserUserId($lastRegisterCustomer);
               
                session()->set('loggedCustomer', $lastRegisterCustomer);
                return redirect()->to('/dashboard')->with('success', 'You are successfully registered.');
            } else {
                return redirect()->to('/auth/register')->withInput()->with('errors', $authModel->errors());
            }
        }
        
        return view('/patient/register', $data);
    }


    public function logout()
    {
        if (session()->has('loggedCustomer')) {
            session()->remove('loggedCustomer');
            session()->stop('loggedCustomer');
            return redirect()->to('/auth/login')->with('success', 'User successfully logged out');
        }
    }



    public function recovery()
    {
        $authModel = new \App\Models\AuthModel();
        $data['title'] = 'Recovery';

        $validation = $this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email|is_not_unique[customer.email]',
            ],
        ]);

        if ($this->request->getPost()) {

            if (!$validation) {
                return redirect()->to('/auth/recovery-password')->withInput()->with('errors', $this->validator->getErrors());
            } else {

                $emailUser = $this->request->getPost('email', FILTER_SANITIZE_EMAIL);
                $startDate = time();
                $token = random_string('alnum', 20);
                $authtoken = password_hash($token, PASSWORD_DEFAULT);
                $message = ' ' . base_url() . '/auth/recovery-password/' . $authtoken . ' '; // token

                if (Settings('email_status') == 0) { 
                    $sendMail =  SendMailPhpMailer(Settings('phpmailer_username'), Settings('phpmailer_username'),$emailUser,$emailUser,'Dr. Orense Dental Clinic',$message);
                } else {
                    $sendMail = SendMail(Settings('phpmailer_username'), Settings('phpmailer_username'), $emailUser, $emailUser, 'Dr. Orense Dental Clinic', $message);
                }

                if (!$sendMail) {
                    session()->setFlashdata('error', 'There was ann error sending recovery link to your email.');
                    return redirect()->to(current_url());
                }

                $data = [
                    'recovery_hash' => $authtoken,
                    'recovery_expires' => date('Y-m-d H:i:s', strtotime('+1 day', $startDate)),
                ];

                $userInfo = $authModel->where('email', $emailUser)->first();
                if($sendMail && $authModel->update($userInfo->id, $data)){
                    session()->setFlashdata('success', 'Recovery link has been sent successfuly');
                    return redirect()->to(current_url());
                } else {
                    session()->setFlashdata('error', 'There was ann error sending recovery link to your email.');
                }
            }
        }

        return view('/patient/password-recovery', $data);
    }


    public function recoveryKey()
    {

        $request = \Config\Services::request();
        $url = explode("auth/recovery-password/", $request->getUri()->getPath());
        $keyGet = $url[1];

        $authModel = new \App\Models\AuthModel();
        $userInfo = $authModel->where('recovery_hash', $keyGet)->first();

        $data['title'] = 'recovery key';

        if (!$userInfo) {
            return redirect()->to('auth/login')->withInput()->with('error', 'Unauthorized access to password recovery');
        }
        if (date('Y-m-d H:i:s', time()) > $userInfo->recovery_expires) {
            return redirect()->to('auth/login')->withInput()->with('error', 'Expired token for recovering password');
        } else {

            $validation = $this->validate([
                'password' => [
                    'label' => 'password',
                    'rules' => 'required|min_length[4]'
                ],
                'repassword' => [
                    'label' => 'confirm password',
                    'rules' => 'required|min_length[4]|matches[password]',
                ],
            ]);


            if ($this->request->getPost()) {

                if (!$validation) {
                    return redirect()->to(current_url())->withInput()->with('errors', $this->validator->getErrors());
                } else {

                    $password = $this->request->getPost('password');
                    $repassword = $this->request->getPost('repassword');

                    $userInfo->password = $repassword;
                    $userInfo->recovery_hash = NULL;
                    $userInfo->recovery_expires = NULL;

                    if ($authModel->update($userInfo->id, $userInfo)) {
                        return redirect()->to('auth/login')->withInput()->with('success', 'The password was successfully changed');
                    } else {
                        session()->setFlashdata('error', 'There was an error changing your passwod');
                    }
                    return redirect()->to(current_url())->withInput();
                }
            }

            return view('/patient/password-key', $data);
        }

        return view('/patient/password-key', $data);
    }
}
