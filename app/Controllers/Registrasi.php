<?php

namespace App\Controllers;

use App\Models\RegistrasiModel;
use CodeIgniter\Controller;

class Registrasi extends Controller
{
    public function index()
    {
        $model = new RegistrasiModel();
        $data['registrasi'] = $model->orderBy('id', 'DESC')->findAll();
        return view('registrasi/index', $data);
    }

    public function create()
    {
        return view('registrasi/create');
    }

    public function store()
    {
        helper(['form', 'url']);
        $model = new RegistrasiModel();

        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_siswa'  => $this->request->getPost('nama_siswa'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'umur' => $this->request->getPost('umur'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'kelas' => $this->request->getPost('kelas'),
            'hobi' => $this->request->getPost('hobi'),
            'tinggi_badan' => $this->request->getPost('tinggi_badan'),
            'berat_badan' => $this->request->getPost('berat_badan'),
            'alasan_basket' => $this->request->getPost('alasan_basket'),
        ];

        $model->insert($data);
        return redirect()->to('/registrasi');
    }

    public function edit($id = null)
    {
        $model = new RegistrasiModel();
        $data['registrasi'] = $model->where('id', $id)->first();
        return view('registrasi/edit', $data);
    }

    public function update()
    {
        helper(['form', 'url']);
        $model = new RegistrasiModel();

        $id = $this->request->getPost('id');

        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_siswa'  => $this->request->getPost('nama_siswa'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'umur' => $this->request->getPost('umur'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'kelas' => $this->request->getPost('kelas'),
            'hobi' => $this->request->getPost('hobi'),
            'tinggi_badan' => $this->request->getPost('tinggi_badan'),
            'berat_badan' => $this->request->getPost('berat_badan'),
            'alasan_basket' => $this->request->getPost('alasan_basket'),
        ];

        $model->update($id, $data);
        return redirect()->to('/registrasi');
    }

    public function delete($id = null)
    {
        $model = new RegistrasiModel();
        $model->delete($id);
        return redirect()->to('/registrasi');
    }
}