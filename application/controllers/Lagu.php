<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lagu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lagu_model', 'lagumodel');
    }

    public function index()
    {
        $data['list_lagu'] = $this->lagumodel->get_list_lagu();

        $this->load->view('list', $data);
    }

    public function create()
    {
        // template/view halaman tambah lagu
        $this->load->view('create');
    }

    public function store()
    {
        // Tampung data dari form dalam asosiatif array
        $data = array(
            'judul' => $this->input->post('judul'),
            'album' => $this->input->post('album'),
            'band' => $this->input->post('band')
        );

        /**
         * input data ke dalam database
         * jika tidak ada error dan proses input berhasil
         * user akan diarahkan ke halaman list lagu
         * jika gagal user akan kembali ke halaman create
         */
        if ($this->lagumodel->create($data)) {
            redirect('lagu');
        } else {
            redirect('lagu/create');
        }
    }

    public function edit($id)
    {
        $data['lagu'] = $this->lagumodel->get_lagu_by_id($id);

        $this->load->view('edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'judul' => $this->input->post('judul'),
            'album' => $this->input->post('album'),
            'band' => $this->input->post('band')
        );

        /**
         * update data ke dalam database
         * jika tidak ada error dan proses update berhasil
         * user akan diarahkan ke halaman list lagu
         * jika gagal user akan kembali ke halaman update dengan id yang sama
         */
        if ($this->lagumodel->update($data, $id)) {
            redirect('lagu');
        } else {
            redirect('lagu/update/' . $id);
        }
    }

    public function delete($id)
    {
        $data['lagu'] = $this->lagumodel->get_lagu_by_id($id);

        $this->load->view('delete', $data);
    }

    public function destroy()
    {
        $id = $this->input->post('id');

        if ($this->lagumodel->delete($id)) {
            redirect('lagu');
        } else {
            redirect('lagu/delete/' . $id);
        }
    }
}
