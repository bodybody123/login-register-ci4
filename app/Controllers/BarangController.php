<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    private $barang;

    public function __construct()
    {
        $this->barang =  new BarangModel();
    }

    public function index()
    {
        $data = [
            'barang' => $this->getBarang()
        ];

        return view('barang/index', $data);
    }

    public function getBarang()
    {
        return $this->barang->findAll();
    }
    
    public function getBarangById($id)
    {
        return $this->barang->find($id);
    }


    public function detail($id)
    {
        $data = [
            'detail' => $this->getBarangById($id)
        ];

        return view('barang/detail', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function save()
    {
        $validate = $this->barang->save([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kondisi' => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana')
        ]);

        if($validate) {
            session()->setFlashdata('msg', 'data berhasil ditambahkan');

            return redirect()->to('http://localhost:8080/dashboard');
        }
    }

    public function edit($id)
    {
        $data = [
            'barang' => $this->getBarangById($id),
        ];

        return view('/barang/edit', $data);
    }

    public function update()
    {
        $validate = $this->barang->save([
            'id_barang' => $this->request->getVar('id_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kondisi' => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana')
        ]);

        if($validate)
        {
            session()->setFlashdata('msg', 'data berhasil diubah');
            
            return redirect()->to('http://localhost:8080/dashboard/'. $this->request->getVar('id_barang').'/detail');
        }
    }

    public function delete($id)
    {
        $this->barang->delete($id);

        session()->setFlashdata('msg', 'data berhasil dihapus');
        return redirect()->to('http://localhost:8080/dashboard');
    }
}
