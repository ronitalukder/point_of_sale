<?php
class SellItem extends CI_Model{
    function __construct() {
    parent::__construct();
}

// Category

function displayInvoice()
	{
        $this->db->select('*');
        $this->db->from('invoice');
        $query = $this->db->get(); 
	    return $query->result();
    }
    

    function displaySellitemFirst(){

        $this->db->select('*');
        $this->db->from('sellquike');
        $query = $this->db->get(); 
        return $query->result();

    }


function addSellItem($data){
    $this->db->insert('sellquike', $data);
}

function displaySellitem(){
    $this->db->select('sellquike.*,item.itemName,item.itemModel');
    $this->db->from('sellquike');
    $this->db->join('item', 'item.itemId = sellquike.sellItemId');
    $query = $this->db->get(); 
	return $query->result();

}

function invoiceUpdate($data,$id){
    $this->db->where('id',$id);
    $result=$this->db->update('sellquike',$data);
}

function sellItem(){

    $this->db->select('*');
    $this->db->from('sellquike');
    $query = $this->db->get(); 
    return $query->result();

}

function sellItemAdd($data){
    $this->db->insert('sellitem', $data);
}

function sellInvoiceAdd($data){
    $this->db->insert('invoice', $data);
}

function sellInvoiceCustomerAdd($data){
    $this->db->insert('customer', $data);
}

function sellInvoiceDis(){

    $this->db->select('*');
    $this->db->from('invoice');
    $query = $this->db->get(); 
    return $query->result();

}

function customerLast(){


    $this->db->select('*');
    $this->db->from('customer');
    $query = $this->db->get(); 
    return $query->result();

}

function checkCustomercash($cusId){

    $this->db->select('*');
    $this->db->from('customercash');
    $this->db->where('customerId',$cusId);
    $query = $this->db->get(); 
    return $query->result();

}


function invoiceItemLast($iId){
    $this->db->select('*');
    $this->db->from('customerinvoice');
    $this->db->join('invoice', 'invoice.id = customerinvoice.invoiceId');
    $this->db->join('sellitem', 'sellitem.invoiceId = invoice.id');
    $this->db->join('item', 'item.itemId = sellitem.sellItemId');
    $this->db->where('customerinvoice.invoiceId',$iId);
    $query = $this->db->get(); 
    return $query->result();

}





}
