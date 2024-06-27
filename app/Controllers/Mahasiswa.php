<?php

namespace App\Controllers;

use App\Models\Modelmahasiswa;

class Mahasiswa extends BaseController
{
    public function index()
    {
        return view('Mahasiswa/v_Tampildata');
    }

    public function ambildata()
    {
        if ($this->request->isAJAX()) {
            $mhs = new Modelmahasiswa();
            $data = [
                'tampildata' => $mhs->findAll()
            ];
            $msg = [
                'data' => view('Mahasiswa/datamahasiswa', $data) // Tambahkan $ sebelum data
            ];
            echo json_encode($msg);
        } else {
            exit('maaf tidak dapat diproses');
        }
    }

    public function formtambah()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('Mahasiswa/modeltambah')
            ];
            echo json_encode($msg);
        } else {
            exit('maaf tidak dapat diproses');
        }
    }

    public function simpandata()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nim' => [
                    'label' => 'NIM',
                    'rules' => 'required|is_unique[mahasiswa046.nim046]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                        'is_unique' => '{field} Tidak Boleh Ada Yang Sama,silahkan coba yang lain',
                    ]
                ],
                'nama' => [
                    'label' => 'NAMA',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'tmplahir' => [
                    'label' => 'Tempat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'tgllahir' => [
                    'label' => 'Tanggal lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'jenkel' => [
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],

            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nim' => $validation->getError('nim'),
                        'nama' => $validation->getError('nama'),
                        'tmplahir' => $validation->getError('tmplahir'),
                        'tgllahir' => $validation->getError('tgllahir'),
                        'jenkel' => $validation->getError('jenkel'),
                    ]
                ];
                echo json_encode($msg);
            } else {
                //tambahkan logika untuk menyimpan data di sini
                $simpandata = [
                    'nim046' => $this->request->getPost('nim'),
                    'nama046' => $this->request->getPost('nama'),
                    'tmplahir046' => $this->request->getPost('tmplahir'),
                    'tgllahir046' => $this->request->getPost('tgllahir'),
                    'jenkel046' => $this->request->getPost('jenkel'),
                ];
                $mhs = new Modelmahasiswa;
                $mhs->insert($simpandata);

                $msg = [
                    'success' => 'Data mahasiswa berhasil disimpan'
                ];
                echo json_encode($msg);
            }
        } else {
            exit('maaf tidak dapat diproses');
        }
    }

    public function formedit()
    {
        if ($this->request->isAJAX()) {
            $id_mahasiswa046 = $this->request->getVar('id_mahasiswa046');

            $mhs = new Modelmahasiswa;
            $row = $mhs->find($id_mahasiswa046);
            $data = [
                    // sebelah kanan field pada tabel mahasiswa
                    'id_mahasiswa046' => $row['id_mahasiswa046'],
                    'nim046' => $row['nim046'],
                    'nama046' => $row['nama046'],
                    'tmplahir046' => $row['tmplahir046'],
                    'tgllahir046' => $row['tgllahir046'],
                    'jenkel046'  => $row['jenkel046'],
            ];
            $msg = [
                'sukses' => view('mahasiswa/modaledit', $data)
            ];

            echo json_encode($msg);
        }
    }

        public function updatedata()
    {
        if ($this->request->isAJAX()) {
            // jika benar/valid
            $simpandata = [
                'nim046' => $this->request->getPost('nim'),
                'nama046' => $this->request->getPost('nama'),
                'tmplahir046' => $this->request->getPost('tmplahir'),
                'tgllahir046' => $this->request->getPost('tgllahir'),
                'jenkel046' => $this->request->getPost('jenkel'),
            ];

            $mhs = new Modelmahasiswa;
            $id_mahasiswa046 = $this->request->getVar('id_mahasiswa046');
            $mhs->update($id_mahasiswa046, $simpandata);

            $msg = [
                'sukses' => 'Data Mahasiswa Berhasil di Update !!'
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat di proses');
        }
    }


    public function hapus()
    {
        if ($this->request->isAJAX()) {
            // jika benar/valid
           

           
            $id_mahasiswa046 = $this->request->getVar('id_mahasiswa046');
            $mhs = new Modelmahasiswa;
            $mhs->delete($id_mahasiswa046);

            $msg = [
                'sukses' => 'Data Mahasiswa Berhasil di Hapus !!'
            ];
            echo json_encode($msg);
       
        }
    }


}
