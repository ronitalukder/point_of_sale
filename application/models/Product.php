<?php
class Product extends CI_Model{
    function __construct() {
    parent::__construct();
}

// Category

function displayCat()
	{
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get(); 
	    return $query->result();
	}

    function displayCustomer(){
         $this->db->select('*');
        $this->db->from('customer');
        $query = $this->db->get(); 
        return $query->result();

    }

function addCat($data){
    $this->db->insert('category', $data);
}

function updateCat($data,$id){
    $this->db->where('id',$id);
    $result=$this->db->update('category',$data);
}


// Brand

function displayBrand()
	{
        $this->db->select('*');
        $this->db->from('brand');
        $query = $this->db->get(); 
	    return $query->result();
	}

function addBrand($data){
    $this->db->insert('brand', $data);
}

function updateBrand($data,$id){
    $this->db->where('id',$id);
    $result=$this->db->update('brand',$data);
}


// Brand

function displaySupply()
	{
        $this->db->select('*');
        $this->db->from('supply');
        $query = $this->db->get(); 
	    return $query->result();
	}

function addSupply($data){
    $this->db->insert('supply', $data);
}

function updateSupply($data,$id){
    $this->db->where('id',$id);
    $result=$this->db->update('supply',$data);
}


// Item

function displayItem(){
    $this->db->select('item.*,brand.brandName,category.catName');
    $this->db->from('item');
    $this->db->join('brand', 'brand.id = item.itemBrandId');
    $this->db->join('category', 'category.id = item.itemCatId');
    $query = $this->db->get(); 
	return $query->result();
}

function addItem($data){
    $this->db->insert('item', $data);
}

function updateItem($data,$id){
    $this->db->where('itemId',$id);
    $result=$this->db->update('item',$data);
}




}
?>