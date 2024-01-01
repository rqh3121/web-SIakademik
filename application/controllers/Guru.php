<?php
defined("BASEPATH") or exit('No direct scrip access allowed');
class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("guru_model");
    }
    public function index()
    {
        $data['title'] = 'Guru';
        $data['guru'] = $this->guru_model->get_data('tbl_guru')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('guru', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Guru';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_guru');
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_guru' => $this->input->post('nama_guru'),
                'mata_pelajaran' => $this->input->post('mata_pelajaran'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
            );
            $this->guru_model->insert_data('tbl_guru', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span></button></div>');
            redirect('guru');
        }
    }
    public function edit($id_guru)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_guru' => $id_guru,
                'nama_guru' => $this->input->post('nama_guru'),
                'mata_pelajaran' => $this->input->post('mata_pelajaran'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
            );
            $this->guru_model->update_data($data, 'tbl_guru');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           Data Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span></button></div>');
            redirect('guru');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('no_telp', 'No Guru', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }
}
