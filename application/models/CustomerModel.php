<?php
class CustomerModel extends CI_Model{
    function __construct() {
    parent::__construct();
}



// Item

function displayCustomder(){
    $this->db->select('*');
    $this->db->from('customer');
    $query = $this->db->get(); 
	return $query->result();
}

          
function addCustomers($data){
    $this->db->insert('customer', $data);
}

function updateCustomers($data,$id){
    $this->db->where('id',$id);
    $result=$this->db->update('customer',$data);
}

function customerShow(){

    $this->db->select('*');
    $this->db->from('customer'); 
    $query = $this->db->get(); 
	return $query->result();

}

 function sellcash($id){

        $this->db->select('*');
        $this->db->from('customercash');
        $this->db->where('customerId',$id);
        $query = $this->db->get(); 
        return $query->result();
    }

    function servicecash($id){

        $this->db->select('*');
        $this->db->from('servicecash');
        $this->db->where('customerId',$id);
        $query = $this->db->get(); 
        return $query->result();
    }

    function sellcollection($id){
        $this->db->select('*');
        $this->db->from('sellcollection');
        $this->db->where('customerId',$id);
        $query = $this->db->get(); 
        return $query->result();

    }



    function sellinvoice($id){

    $this->db->select('invoice.*');
    $this->db->from('customerinvoice');
    $this->db->join('customer', 'customer.id = customerinvoice.customerId');
    $this->db->join('invoice', 'invoice.id = customerinvoice.invoiceId');
     $this->db->where('customer.id',$id);
    $query = $this->db->get(); 
    return $query->result();

    }



    function invoiceitem($id){
        $this->db->select('sellitem.*,item.itemName,item.itemModel');
    $this->db->from('invoice');
    $this->db->join('sellitem', 'sellitem.invoiceId = invoice.id');
    $this->db->join('item', 'item.itemId = sellitem.sellItemId');
     $this->db->where('invoice.id',$id);
    $query = $this->db->get(); 
    return $query->result();

    }

function servicecollection($id){
     $this->db->select('*');
        $this->db->from('servicecollection');
        $this->db->where('customerId',$id);
        $query = $this->db->get(); 
        return $query->result();

}

function serviceinvoice($id){
      $this->db->select('*');
        $this->db->from('service');
        $this->db->where('customerId',$id);
        $query = $this->db->get(); 
        return $query->result();


}

function viewwarrenty(){
     $this->db->select('*');
        $this->db->from('warrenty');
       
        $query = $this->db->get(); 
        return $query->result();

}


}