<?php
class  Sell extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

        $this->load->model('Product', 'pro');
        $this->load->model('SellItem', 'sitem');
    }
    
    public function index()
	{
		$data['customer']=$this->pro->displayCustomer();
		$data['item']=$this->pro->displayItem();
		$data['invoice']=$this->sitem->displayInvoice();
		$data['invoiceItem']=$this->sitem->displaySellitemFirst();
		$data['invoiceItem']=$this->sitem->displaySellitem();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('sell/sellboard.php',$data);
	}

		public function sellItem(){

         $sellItemId=$this->input->post('itemId');
           $sellItemQty=$this->input->post('sellItemQty');

            $this->db->select('*');
            $this->db->from('item');
            $this->db->where('itemId',$sellItemId);
            $query = $this->db->get(); 
            $data['ite']= $query->result();
            $itemCal=0;

            foreach($data['ite'] as $items){

                $itemQ=$items->itemQuantity;
                
            }
            echo $itemCal=$itemQ-$sellItemQty;

            $data = array(

				'itemQuantity' =>$itemCal,
			
            );
            
            $this->db->where('itemId',$sellItemId);
            $this->db->update('item',$data);

            

			$sellItemId=$this->input->post('itemId');
			$sellItemPrice=$this->input->post('sellItemPrice');
			$sellItemQty=$this->input->post('sellItemQty');
			$sellItemWarrenty=$this->input->post('sellItemWarrenty');
			$invoiceId=$this->input->post('invoiceId');
			
			
			$data = array(
				'sellItemId' =>$sellItemId,
				'sellItemPrice' =>$sellItemPrice,
				'sellItemQty' =>$sellItemQty,
				'warrenty' =>$sellItemWarrenty,
			
				
			);
			$this->sitem->addSellItem($data);

			// redirect(base_url()."sell/displaySellItem/".$invoiceId);
			redirect(base_url()."sell");
		}

		function displaySellItem(){

			$invoiceId=$this->uri->segment(3);
			$data['item']=$this->pro->displayItem();
		$data['invoice']=$this->sitem->displayInvoice();
	
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('sell/sellboard.php',$data);

		}

		function sellItemUpdate(){

			
			$updateId=$this->input->post('updateId');
			$sellItemPrice=$this->input->post('sellItemPrice');
			$sellItemQty=$this->input->post('sellItemQty');
			$serial=$this->input->post('serial');
			$warrenty=$this->input->post('warrenty');

			$data = array(
			
				'sellItemPrice' =>$sellItemPrice,
				'sellItemQty' =>$sellItemQty,
				'warrenty' =>$warrenty,
				'serial' =>$serial,
				
				
			);
			$this->sitem->invoiceUpdate($data,$updateId);
			redirect(base_url()."sell");
		

			
		}

		public function sellItemDelete($id){
		$this->db->where('id',$id);
		$this->db->delete('sellquike');
		redirect(base_url()."sell");
	}


		function invoiceSave()
		{

			// Recive All Input Data

			$invoiceTotal=$this->input->post('invoiceTotal');
			$invoiceCash=$this->input->post('invoiceCash');
			$invoiceDue=$this->input->post('invoiceDue');
			$invoiceNo=$this->input->post('invoiceNo');
			$invoiceDate=$this->input->post('invoiceDate');
			$invoiceTime=$this->input->post('invoiceTime');
			$customerName=$this->input->post('customerName');
			$customerMobile=$this->input->post('customerMobile');
			$customerAddress=$this->input->post('customerAddress');

			// Insert data in invoice table

			$data = array(
				'invoiceNo' =>$invoiceNo,
				'invoiceTotal' =>$invoiceTotal,
				'invoiceCash' =>$invoiceCash,
				'invoiceDue' =>$invoiceDue,
				'date' =>$invoiceDate,
				'time' =>$invoiceTime,
			);
			$this->db->insert('invoice', $data);


			// Invoice Id Show for insert with data in sellitem table

			$this->db->select('*');
		    $this->db->from('invoice');
		    $query = $this->db->get(); 
		  	$data['sellInvoiceShow']= $query->result(); 
			foreach($data['sellInvoiceShow'] as $sellInvoiceShows)
			{
				$invoiceIds=$sellInvoiceShows->id;
			}


			// Temporary sellquike Table all Data insert in sellitem table

			$this->db->select('*');
		    $this->db->from('sellquike');
		    $query = $this->db->get(); 
		    $data['sellItem']=$query->result();
			foreach($data['sellItem'] as $sellitems)
			{
				$siId=$sellitems->sellItemId;
				$siQty=$sellitems->sellItemQty;
				$siPrice=$sellitems->sellItemPrice;
				$serial=$sellitems->serial;
				$warrenty=$sellitems->warrenty;
				
				// Data Insert in sellitem table from sellquike table

				$data = array(
					'sellItemId' =>$siId,
					'sellItemPrice' =>$siPrice,
					'sellItemQty' =>$siQty,
					'serial' =>$serial,
					'warrenty' =>$warrenty,
					'invoiceId' =>$invoiceIds,
				);
				$this->db->insert('sellitem', $data);
			}


			// Customer  Check By Mobile Number

			$this->db->select('*');
            $this->db->from('customer');
            $this->db->where('mobile',$customerMobile);
            $query = $this->db->get(); 
            $check= $query->result();

            // if match mobile number then show id and mobile number
			if($check==true)
			{
				$this->db->select('*');
	            $this->db->from('customer');
	            $this->db->where('mobile',$customerMobile);
	            $query = $this->db->get(); 
	            $data['cId']=$query->result();
	            foreach($data['cId'] as $cIds)
	            {
					$cid=$cIds->id;
				}
			}

			// if not match mobile number then insert data in customer table

			else
			{
				$data = array(
					'name' =>$customerName,
					'mobile' =>$customerMobile,
					'address' =>$customerAddress,
				);
			 	$this->db->insert('customer', $data);

			 	// After insert data id show from customer table

				$this->db->select('*');
	            $this->db->from('customer');
	            $this->db->where('mobile',$customerMobile);
	            $query = $this->db->get(); 
	            $data['cId']=$query->result();
	            foreach($data['cId'] as $cIds)
	            {
					$cid=$cIds->id;
				}

			}

			// Data insert in customerInvoice table with invoiceId and customerId

			$data = array(
					'invoiceId' =>$invoiceIds,
					'customerId' =>$cid,	
				);
			 	$this->db->insert('customerInvoice', $data);

			// match customerId in customercash table

			$this->db->select('*');
		    $this->db->from('customercash');
		    $this->db->where('customerId',$cid);
		    $query = $this->db->get(); 
		    $cashCheck=$query->result();

		    // if not match customerId then data insert in customercash

            if($check==false)
            {
			 	$data = array(
				'customerId' =>$cid,
				'total' =>$invoiceTotal,
				'cash' =>$invoiceCash,
				'due' =>$invoiceDue,
				);
				$this->db->insert('customercash', $data);								
			}

			// if match customerId then data update in customercash

			else
			{
			 	$ctotal=0;
			 	$ccash=0;
			 	$cdue=0;

			  	$this->db->select('*');
				$this->db->from('customercash');
				$this->db->where('customerId',$cid);
				$query = $this->db->get(); 
				$data['cusCah']=$query->result();
				foreach($data['cusCah'] as $cusCahs)
				{			
					$cusTotal=$cusCahs->total;
					$cusCash=$cusCahs->cash;
					$cusDue=$cusCahs->due;
				}

				$ctotal=$invoiceTotal+$cusTotal;
				$ccash=$invoiceCash+$cusCash;
				$cdue=$invoiceDue+$cusDue;

				$data = array(
					'total' =>$ctotal,
					'cash' =>$ccash,
					'due' =>$cdue,
				);
				$this->db->where('customerId',$cid);
				$this->db->update('customercash',$data);
			}
			
			// all data insert then sellquike table all delete 
			$this->db->empty_table('sellquike');

			// last invoice customer id$this->db->select('*');
	            $this->db->from('customerinvoice');
	            $query = $this->db->get(); 
	            $data['cId']=$query->result();
	            foreach($data['cId'] as $cIds)
	            {
					$cid=$cIds->customerId;
				}
			redirect(base_url()."sell/invoiceCreate/".$cid);
		}

		function invoiceCreate($cid)
		{

			$this->db->select('*');
		    $this->db->from('customerinvoice');
		    $this->db->where('customerId',$cid);
		    $query = $this->db->get(); 
		  	$data['invoice']= $query->result(); 
			foreach($data['invoice'] as $value)
			{
				$iId=$value->invoiceId;
			}

			$data['invoiceitem']=$this->sitem->invoiceItemLast($iId);
			
			
			$this->db->select('*');
		    $this->db->from('customer');
		    $this->db->where('id',$cid);
		    $query = $this->db->get(); 
		  	$data['customer']= $query->result(); 

			

			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
			$this->load->view('sell/printsell.php',$data);

		}


		function invoiceprint($inId)
		{

			$this->db->select('*');
		    $this->db->from('customerinvoice');
		    $this->db->where('invoiceId',$inId);
		    $query = $this->db->get(); 
		  	$data['invoice']= $query->result(); 
			foreach($data['invoice'] as $value)
			{
				$cusId=$value->customerId;
			}

				
			$this->db->select('*');
		    $this->db->from('customer');
		    $this->db->where('id',$cusId);
		    $query = $this->db->get(); 
		  	$data['customer']= $query->result(); 

			

			$data['invoiceitem']=$this->sitem->invoiceItemLast($inId);

			

			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
			$this->load->view('sell/invoiceprint.php',$data);

		}



		public function viewinvoice($id){

			$this->db->select('sellitem.*,item.itemName,itemModel,invoice.invoiceNo');
			$this->db->from('invoice');
			$this->db->join('sellitem', 'sellitem.invoiceId = invoice.id');
			$this->db->join('item', 'item.itemId= sellitem.sellItemId');
		    $this->db->where('invoice.id',$id);
		    $query = $this->db->get(); 
			$data['sellreturnview']= $query->result(); 

			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
			$this->load->view('sell/sellreturnview.php',$data);

		}

		function returnquantity()
		{

			// Recive All Input Data

		
			$invoiceid=$this->input->post('invoiceid');
			$itemid=$this->input->post('itemid');
			$quantity=$this->input->post('quantity');

			// Insert data in invoice table

			$data = array(
				'invoiceid' =>$invoiceid,
				'itemid' =>$itemid,
				'quantity' =>$quantity,
				
			);
			$this->db->insert('sellreturn', $data);

			$this->db->select('*');
			$this->db->from('sellitem');
		    $this->db->where('id',$itemid);
		    $query = $this->db->get(); 
			$data['qty']= $query->result();

			$totalqty=0;

			foreach ($data['qty'] as $value) {

				$qtys=$value->sellItemQty;

				
			}

			$totalqty=$qtys-$quantity;

			$data = array(
				'sellItemQty' =>$totalqty,

				
			);
			$this->db->where('id', $itemid);
			$this->db->update('sellitem',$data);
			redirect(base_url()."sell/viewinvoice/".$invoiceid);




}


	







}
