<?php
class  Products extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

		$this->load->model('Product', 'pro');
	}


	// Category
		
	public function category()
	{
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$data['category']=$this->pro->displayCat();
		$this->load->view('products/category.php',$data);
	}

	public function addCategory(){
		$catName=$this->input->post('category');
		$data = array(
			'catName' =>$catName
		);
		$this->pro->addCat($data);
		redirect('products/category');
	}

	public function updateCategory(){
		$id=$this->input->post('id');
		$catName=$this->input->post('category');
		$data = array(
			'catName' =>$catName
		);
		$this->pro->updateCat($data,$id);
		redirect('products/category');
	}

	public function deleteCat($id){
		$this->db->where('id',$id);
		$this->db->delete('category');
		redirect('products/category','refresh');
	}


	// Brand 

	public function brand()
	{
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$data['brand']=$this->pro->displayBrand();
		$this->load->view('products/brand.php',$data);
	}

	public function addBrand(){
		$brandName=$this->input->post('brand');
		$data = array(
			'brandName' =>$brandName
		);
		$this->pro->addBrand($data);
		redirect('products/brand');
	}

	public function updateBrand(){
		$id=$this->input->post('id');
		$brandName=$this->input->post('brand');
		$data = array(
			'brandName' =>$brandName
		);
		$this->pro->updateBrand($data,$id);
		redirect('products/brand');
	}

	public function deleteBrand($id){
		$this->db->where('id',$id);
		$this->db->delete('brand');
		redirect('products/brand','refresh');
	}


	
	
		// Supply 
	
		public function supply()
		{
			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
			$data['supply']=$this->pro->displaySupply();
			$this->load->view('products/supply.php',$data);
		}
	
		public function addSupply(){
			$supplyName=$this->input->post('supplyName');
			$supplyAddress=$this->input->post('supplyAddress');
			$data = array(
				'supplyName' =>$supplyName,
				'supplyAddress' =>$supplyAddress,
			);
			$this->pro->addSupply($data);
			redirect('products/supply');
		}
	
		public function updateSupply(){
			$id=$this->input->post('id');
			$supplyName=$this->input->post('supplyName');
			$supplyAddress=$this->input->post('supplyAddress');
			$data = array(
				'supplyName' =>$supplyName,
				'supplyAddress' =>$supplyAddress
			);
			$this->pro->updateSupply($data,$id);
			redirect('products/supply');
		}
	
		public function deleteSupply($id){
			$this->db->where('id',$id);
			$this->db->delete('supply');
			redirect('products/supply','refresh');
		}

		
		// Item 
	
		public function item()
		{
			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
			$data['item']=$this->pro->displayItem();
			$data['category']=$this->pro->displayCat();
			$data['brands']=$this->pro->displayBrand();
			$data['supply']=$this->pro->displaySupply();
			$this->load->view('products/item.php',$data);
		}


		public function addItem(){
			$itemName=$this->input->post('itemName');
			$itemModel=$this->input->post('itemModel');
			$itemBuyPrice=$this->input->post('itemBuyPrice');
			$itemQuantity=$this->input->post('itemQuantity');
			$itemSellPrice=$this->input->post('itemSellPrice');
			$categoryId=$this->input->post('categoryId');
			$brandId=$this->input->post('brandId');
			$itemCondition=$this->input->post('itemCondition');
			$supplyId=$this->input->post('supplyId');
			$itemDescription=$this->input->post('itemDescription');
			$data = array(
				'itemName' =>$itemName,
				'itemModel' =>$itemModel,
				'itemBuyPrice' =>$itemBuyPrice,
				'itemSellPrice' =>$itemSellPrice,
				'itemQuantity' =>$itemQuantity,
				'itemCatId' =>$categoryId,
				'itemBrandId' =>$brandId,
				'itemSupplyId' =>$supplyId,
				'itemDescription' =>$itemDescription,
				'itemCondition' =>$itemCondition,
			);
			$this->pro->addItem($data);
			redirect(base_url()."products/item");
		}

		public function updateItem(){
			$itemId=$this->input->post('itemId');
			$itemName=$this->input->post('itemName');
			$itemModel=$this->input->post('itemModel');
			$itemBuyPrice=$this->input->post('itemBuyPrice');
			$itemSellPrice=$this->input->post('itemSellPrice');
			$itemQuantity=$this->input->post('itemQuantity');
			$categoryId=$this->input->post('categoryId');
			$brandId=$this->input->post('brandId');
			$supplyId=$this->input->post('supplyId');
			$itemCondition=$this->input->post('itemCondition');
			$itemDescription=$this->input->post('itemDescription');
			$data = array(
				'itemName' =>$itemName,
				'itemModel' =>$itemModel,
				'itemBuyPrice' =>$itemBuyPrice,
				'itemSellPrice' =>$itemSellPrice,
				'itemQuantity' =>$itemQuantity,
				'itemCatId' =>$categoryId,
				'itemBrandId' =>$brandId,
				'itemSupplyId' =>$supplyId,
				'itemDescription' =>$itemDescription,
				'itemCondition' =>$itemCondition,
			);
			$this->pro->updateItem($data,$itemId);
			
			redirect(base_url()."products/item");
		}

		public function deleteItem($id){
			$this->db->where('itemId',$id);
			$this->db->delete('item');
			
			redirect(base_url()."products/item");
		}

}
