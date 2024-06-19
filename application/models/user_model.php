<?php

class User_model extends CI_Model
{
    function insertUser($data)
    {
        $this->db->insert('tbl_employee_data',$data);
        if ($this->db->affected_rows() <= 0){
            return true;
        }
        else{
            return false;
        }
    }

    function getUser()
    {
        $query = $this->db->get('tbl_employee_data');
        return $query->result_array();
    }
}