<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        $this->load->library('form_validation');
    }

    // halaman index
    public function index()
    {
        $data['title'] = 'Data Page';

        // load library
        $this->load->library('pagination');

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;

        // initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->Data_model->getData($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('data/index', $data);
        $this->load->view('templates/footer');
    }

    // halaman tambah
    public function tambah()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[peoples.email]', [
            'is_unique' => 'Email has been added, replace the others.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Tambah Data';
            $this->load->view('templates/header', $data);
            $this->load->view('data/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('data');
        }
    }

    public function hapus($id)
    {
        $this->Data_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('data');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data';

        $data['peoples'] = $this->Data_model->getDataById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('data/detail', $data);
        $this->load->view('templates/footer');
    }

    // halaman ubah
    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data';
        $data['peoples'] = $this->Data_model->getDataById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Ubah Data';
            $this->load->view('templates/header', $data);
            $this->load->view('data/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->ubahData($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('data');
        }
    }
}
