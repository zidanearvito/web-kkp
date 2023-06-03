<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    function __construct()
    {
        $this->m_user = new UserModel();
        $this->validation = \Config\Services::validation();
    }

    public function login()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username harus diisi'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password harus diisi'
                    ]
                ]
            ];
            if (!$this->validate($rules)) {
                session()->setFlashdata("warning", $this->validation->getErrors());
                return redirect()->to('admin/login');
            } 

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $remember_me = $this->request->getVar('remember_me');

            $dataAkun = $this->m_user->getData($username);
            if (!password_verify($password, $dataAkun['password'])) {
                $err[] = "Akun yang anda masukkan tidak sesuai";
                session()->setFlashdata('username', $username);
                session()->setFlashdata('warning', $err);
                return redirect()->to("admin/login");
            }

            $akun = [
                'akun_username' => $dataAkun['username'],
                'akun_nama_lengkap' => $dataAkun['nama_lengkap'],
                'akun_email' => $dataAkun['email']
            ];
            session()->set($akun);
            return redirect()->to("admin/sukses");
        }
        return view("admin/login", $data);
    }

    function sukses()
    {
        return redirect()->to('admin/dashboard');
    }

    function logout()
    {
        session()->destroy();
        // if (session()->get('akun_username') != '') {
        //     session()->setFlashdata("success", "Anda berhasil logout");
        // }
        return redirect()->to('admin/login');
    }
}
