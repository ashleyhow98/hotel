<?php

class Employer_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_employers()
    {
        $query = $this->db->from('employer')->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
            // $row->customer_id
            // $row->customer_username
            // $data[0]->customer_id
        }
        if(count($data))
            return $data;
        return false;
    } 

    function addEmployer($employer_id, $username)
    {
        $data = array('employer_username' => $username);
        $this->db->insert('employer', $data);
        return $this->db->affected_rows();
    } 

    function deleteEmployer($employer_id)
    {
        $this->db->delete('employer', array('employer_id' => $employer_id));
        return $this->db->affected_rows();
    }

    function editEmployer($employer_id, $username)
    {
        $data = array('employer_username' => $username);

        $this->db->where('employer_id', $employer_id);
        $this->db->update('employer', $data); 
    }

    function getEmployer($employer_id)
    {
        $query = $this->db->get_where('employer', array('employer_id' => $employer_id));
        return $query->result();
    }
}
