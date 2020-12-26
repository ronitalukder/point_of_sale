<?php
class InvoiceModel extends CI_Model{
    function __construct() {
    parent::__construct();
}

// Category

function showInvoice()
	{
        $this->db->select('invoice.*,sellcustomer.customerMobile,sellcustomer.customerName,sitem.itemName,item.itemModel');
        $this->db->from('invoice');
        $this->db->join('sellcustomer', 'sellcustomer.invoiceId = invoice.id');
        $this->db->join('item', 'item.itemId = sellitem.sellItemId');
      
    $query = $this->db->get(); 
	return $query->result();
    }

    function invoiceCustomer($id){

        $this->db->select('*');
        $this->db->from('sellcustomer');
        $this->db->where('invoiceId',$id);
        $query = $this->db->get(); 
        return $query->result();
        
    }

     function todayinvoice($date){

        $this->db->select('invoice.*,customer.name,customer.mobile');
        $this->db->from('customerinvoice');
        $this->db->join('customer', 'customer.id = customerinvoice.customerId');
        $this->db->join('invoice', 'invoice.id = customerinvoice.invoiceId');
        $this->db->where('invoice.date', $date);
        $query = $this->db->get(); 
        return $query->result();

    }

    function monthinvoice(){

        $this->db->select('invoice.*,customer.name,customer.mobile');
        $this->db->from('customerinvoice');
        $this->db->join('customer', 'customer.id = customerinvoice.customerId');
        $this->db->join('invoice', 'invoice.id = customerinvoice.invoiceId');
        $query = $this->db->get(); 
        return $query->result();

    }

}