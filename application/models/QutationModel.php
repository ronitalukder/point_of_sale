<?php
class QutationModel extends CI_Model{
    function __construct() {
    parent::__construct();
}

// Category

function displayItem()
	{
           $this->db->select('item.*,brand.brandName');
    $this->db->from('item');
    $this->db->join('brand', 'brand.id = item.itemBrandId');
        $query = $this->db->get(); 
	    return $query->result();
    }
    

    function quickeQutation(){

        $this->db->select('*');
        $this->db->from('quickqutation');
        $query = $this->db->get(); 
        return $query->result();

    }


    function qutationCustomer(){

        $this->db->select('*');
        $this->db->from('qutationcustomer');
        $query = $this->db->get(); 
        return $query->result();

    }

    function qutationview($cusId){

        $this->db->select('*');
        $this->db->from('qutation');
        $this->db->join('qutationcustomer', 'qutationcustomer.id = qutation.customerId');
         $this->db->where('qutationcustomer.id',$cusId);
        $query = $this->db->get(); 
        return $query->result();

    }

}
