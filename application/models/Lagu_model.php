<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lagu_model extends CI_Model
{
    public function get_list_lagu()
    {
        $lagu = $this->db->get('lagu');
        return $lagu->result();
    }

    public function create($data)
    {
        return $this->db->insert('lagu', $data);
    }

    public function get_lagu_by_id($id)
    {
        $this->db->where('id', $id);
        $lagu = $this->db->get('lagu');
        return $lagu->row();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('lagu', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('lagu');
    }
}
