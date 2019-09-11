<?php

class Data_model extends CI_model
{

    public function getAllData()
    {
        return $query = $this->db->get('peoples')->result_array();
    }


    public function tambahData()
    {

        $data = [
            'name' => $this->input->post('name', true),
            'address' => $this->input->post('address', true),
            'email' => $this->input->post('email', true),
        ];

        $this->db->insert('peoples', $data);
    }

    public function hapusData($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('peoples');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('peoples', ['id' => $id])->row_array();
    }

    public function ubahData($id)
    {

        $data = [
            'name' => $this->input->post('name', true),
            'address' => $this->input->post('address', true),
            'email' => $this->input->post('email', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('peoples', $data);
    }

    public function getData($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('email', $keyword);
        }
        $this->db->order_by('id', 'DESC');
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function countAllData()
    {
        return $this->db->get('peoples')->num_rows();
    }
}
