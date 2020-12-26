<?php
class PurchaseModel extends CI_Model{
    function __construct() {
    parent::__construct();
}



// Item

function displayItem(){
    $this->db->select('*');
    $this->db->from('purquick');
    $query = $this->db->get(); 
	return $query->result();
}

function addItem($data){
    $this->db->insert('purquick', $data);
}

function updateItem($data,$itemId){
    $this->db->where('id',$itemId);
    $result=$this->db->update('purquick',$data);
}

function deleteItem(){

}

function displayInvoice()
	{
        $this->db->select('*');
        $this->db->from('purinvoice');
        $query = $this->db->get(); 
	    return $query->result();
    }

    function displaySupply()
	{
        $this->db->select('*');
        $this->db->from('supply');
        $query = $this->db->get(); 
	    return $query->result();
    }
    
    function savePurchase($data){
        $this->db->insert('purinvoice', $data);
    }

    function displayPurchase(){
        $this->db->select('purinvoice.*,supply.supplyName');
        $this->db->from('purinvoice');
        $this->db->join('supply', 'supply.id = purinvoice.purInvoiceSupply');
        $query = $this->db->get(); 
        return $query->result();
    }

    function displayPurchaseItem(){

        $this->db->select('purchase.*,supply.supplyName');
        $this->db->from('purchase');
        $this->db->join('purinvoice', 'purinvoice.id = purchase.purInvoiceId');
        $this->db->join('supply', 'supply.id = purinvoice.purInvoiceSupply');
        $query = $this->db->get(); 
        return $query->result();

    }
    
    




}
?>