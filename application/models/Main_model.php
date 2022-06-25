<?php

class Main_model extends CI_Model 
{
    public function get_data($table, $where = NULL)
    {
        $query = $this->db->get_where($table, $where);
        return $query->result_array();
    }

    public function update_data($table, $input, $where) 
    {
        $this->db->where($where);
        $this->db->update($table, $input);
    }
}