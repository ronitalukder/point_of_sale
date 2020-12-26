<?php
class ServiceModel extends CI_Model{
    function __construct() {
    parent::__construct();
}

      
        function showService(){
    $this->db->select('service.*,customer.name,customer.mobile');
    $this->db->from('service');
    $this->db->join('customer', 'customer.id = service.customerId');
   
    $query = $this->db->get(); 
	return $query->result();
}

function servicelistShow(){
    $this->db->select('*');
    $this->db->from('servicelist');
    $query = $this->db->get(); 
    return $query->result();

}


    
}