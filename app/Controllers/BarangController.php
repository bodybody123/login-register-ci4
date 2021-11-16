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
        return view('barang/index');
    }

    public function getBarang()
    {
        $data = [
            'barang' => $this->barang->findAll()
        ];

        return view('barang/index', $data);
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

    // public function update()
    // {
    //     $validate = $this->barang->save
    // }

    public function delete($id)
    {
        $this->barang->delete($id);

        session()->setFlashdata('msg', 'data berhasil dihapus');
        return redirect()->to('http://localhost:8080/dashboard');
    }
}
