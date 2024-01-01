<?php
defined("BASEPATH") or exit('No direct scrip access allowed');

class guru_model extends CI_model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function update_data($data, $table)
    {
        $this->db->where('id_guru', $data['id_guru']);
        $this->db->update($table, $data);
    }
}
