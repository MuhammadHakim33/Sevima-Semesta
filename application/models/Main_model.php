<?php

class Main_model extends CI_Model 
{
    public function get_data($table, $where = NULL)
    {
        $query = $this->db->get_where($table, $where);
        return $query->result_array();
    }
}