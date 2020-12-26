<?php
class Dashboards extends CI_Model{
    function __construct() {
    parent::__construct();
}

function displayInvoice()
	{
        $this->db->select('*');
        $this->db->from('invoice');
        $query = $this->db->get(); 
	    return $query->result();
	}



}