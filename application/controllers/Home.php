<?php

class Home extends CI_Controller {

    // halaman Home
    public function index()
    {
        $data['title'] = 'Home Page';
        $this->load->view('templates/header',$data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    // halaman About
    public function about()
    {
        $data['title'] ='About Page';
        $this->load->view('templates/header',$data);
        $this->load->view('home/about');
        $this->load->view('templates/footer');
    }

    // halaman Portfolio
    public function portfolio()
    {
        $data['title'] = 'Portfolio Page';
        $this->load->view('templates/header', $data);
        $this->load->view('home/portfolio');
        $this->load->view('templates/footer');
    }
}