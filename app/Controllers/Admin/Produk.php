<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function index()
    {
        $model = new ProdukModel();
        $data['products'] = $model->findAll();

        return view('admin/produk/index', $data);
    }

    public function create()
    {
        return view('admin/produk/tambah');
    }

    public function store()
    {
        $model = new ProdukModel();

        $data = [
            'kategori_id' => $this->request->getPost('kategori_id'),
            'nama'        => $this->request->getPost('nama'),
            'slug'        => url_title($this->request->getPost('nama'), '-', true),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'harga'       => $this->request->getPost('harga'),
            'stok'        => $this->request->getPost('stok'),
            'status'      => $this->request->getPost('status'),
        ];

        $model->save($data);

        return redirect()->to('/admin/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new ProdukModel();
        $data['product'] = $model->find($id);

        return view('admin/produk/edit', $data);
    }

    public function update($id)
    {
        $model = new ProdukModel();

        $data = [
            'kategori_id' => $this->request->getPost('kategori_id'),
            'nama'        => $this->request->getPost('nama'),
            'slug'        => url_title($this->request->getPost('nama'), '-', true),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'harga'       => $this->request->getPost('harga'),
            'stok'        => $this->request->getPost('stok'),
            'status'      => $this->request->getPost('status'),
        ];

        $model->update($id, $data);

        return redirect()->to('/admin/produk')->with('success', 'Produk berhasil diupdate!');
    }

    public function delete($id)
    {
        $model = new ProdukModel();
        $model->delete($id);

        return redirect()->to('/admin/produk')->with('success', 'Produk telah dihapus.');
    }
}
