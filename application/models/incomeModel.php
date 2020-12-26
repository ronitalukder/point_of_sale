<?php
class incomeModel extends CI_Model{
    function __construct() {
    parent::__construct();
}

// Category

function incomelist()
	{
        $this->db->select('*');
        $this->db->from('incomelist');
        $query = $this->db->get(); 
	    return $query->result();
    }

   
    function showIncome(){
        $this->db->select('income.*,incomelist.incomeName');
        $this->db->from('income');
        $this->db->join('incomelist', 'incomelist.id = income.incomeId');
      
        $query = $this->db->get(); 
        return $query->result();
    }
    
}