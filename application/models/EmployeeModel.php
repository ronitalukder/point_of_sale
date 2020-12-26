<?php
class EmployeeModel extends CI_Model{
    function __construct() {
    parent::__construct();
}



// Item

function displayEmployee(){
    $this->db->select('*');
    $this->db->from('employee');
    $query = $this->db->get(); 
	return $query->result();
}

          
function addEmployee($data){
    $this->db->insert('employee', $data);
}


}