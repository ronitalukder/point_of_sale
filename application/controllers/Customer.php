<?php
class  Customer extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

		$this->load->model('CustomerModel', 'custom');
	}


	// Category
		
	public function index()
	{
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$data['customer']=$this->custom->displayCustomder();
		$this->load->view('customer/addcustomer.php',$data);
	}

	
	
		// Supply 
	

	
		public function addCustomer(){
			$name=$this->input->post('name');
            $mobile=$this->input->post('mobile');
            $address=$this->input->post('address');
			$data = array(
				'name' =>$name,
                'mobile' =>$mobile,
                'address' =>$address,
			);
			$this->custom->addCustomers($data);
			redirect(base_url()."customer/addcustomer");
        }
        
      
		public function updateCustomer(){
			echo $id=$this->input->post('id');
			echo $name=$this->input->post('name');
            echo $mobile=$this->input->post('mobile');
            echo $address=$this->input->post('address');
			$data = array(
				'name' =>$name,
                'mobile' =>$mobile,
                'address'=>$address,
			);
			$this->custom->updateCustomers($data,$id);
            redirect(base_url()."customer");
		}
	
		public function deleteSupply($id){
			$this->db->where('id',$id);
			$this->db->delete('supply');
			redirect('products/supply','refresh');
		}
		
		public function viewcustomer(){

		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$data['customer']=$this->custom->customerShow();
		$this->load->view('customer/viewcustomer.php',$data);

		}

		public function sellCollection()
		{
			// All Data variable recive
			$id=$this->input->post('sellId');
			$cash=$this->input->post('cashTaka');
			$customerId=$this->input->post('sellCustomerId');

			// show data from customercash/sellcash table match by id
			$this->db->select('*');
			$this->db->from('customercash');
			$this->db->where('id',$id);
			$query = $this->db->get(); 
			$data['cashdata']=$query->result();

			foreach($data['cashdata'] as $cashs)
			{
				$tabletotal=$cashs->total;
				$tablecash=$cashs->cash;
			}

			$ca=0;
			$ca=$tablecash+$cash;
			$du=0;
			$du=$tabletotal-$ca;

			$data = array(
                'cash' =>$ca,
                'due' =>$du, 
            );
            $this->db->where('id',$id);
			$this->db->update('customercash',$data);


			$date=date('Y-m-d');
			$data = array(
				'customerId' =>$customerId,
				'collection' =>$cash,
				'date' =>$date, 
				'total' =>$tabletotal,
				'cash' =>$ca,
				'due' =>$du
				 
				
			);
			
			$this->db->insert('sellcollection', $data);
			
			redirect(base_url()."customer/profile/".$customerId);
		}



		public function serviceCollection()
		{
			// All Data variable recive
			$id=$this->input->post('serviceId');
			$cash=$this->input->post('cashTaka');
			$customerId=$this->input->post('serviceCustomerId');

			// show data from customercash/sellcash table match by id
			$this->db->select('*');
			$this->db->from('servicecash');
			$this->db->where('id',$id);
			$query = $this->db->get(); 
			$data['cashdata']=$query->result();

			foreach($data['cashdata'] as $cashs)
			{
				$tabletotal=$cashs->total;
				$tablecash=$cashs->cash;
			}

			$ca=0;
			$ca=$tablecash+$cash;
			$du=0;
			$du=$tabletotal-$ca;

			$data = array(
                'cash' =>$ca,
                'due' =>$du, 
            );
            $this->db->where('id',$id);
			$this->db->update('servicecash',$data);


			$date=date('Y-m-d');
			$data = array(
				'customerId' =>$customerId,
				'collection' =>$cash,
				'date' =>$date, 
				'total' =>$tabletotal,
				'cash' =>$ca,
				'due' =>$du
				 
				
			);
			
			$this->db->insert('servicecollection', $data);
			
			// redirect(base_url()."customer/profile/".$customerId);
		}

		public function profile($id){

			$data['page']=1;

		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$data['sellcash']=$this->custom->sellcash($id);
		$data['servicecash']=$this->custom->servicecash($id);
		$data['collection']=$this->custom->sellcollection($id);
		$this->load->view('customer/profile.php',$data);

		}

		public function showItem(){

			$itemshow=$this->input->post('itemshow');
			$id=$this->input->post('customerId');
			if($itemshow==1){
				$data['page']=1;
					$data['header']=$this->load->view('common/header','',true);
					$data['footer']=$this->load->view('common/footer','',true);
					$data['sellcash']=$this->custom->sellcash($id);
					$data['servicecash']=$this->custom->servicecash($id);
					$data['collection']=$this->custom->sellcollection($id);
					$this->load->view('customer/profile.php',$data);
			}

			if($itemshow==2){
				$data['page']=2;
					$data['header']=$this->load->view('common/header','',true);
					$data['footer']=$this->load->view('common/footer','',true);
					$data['sellcash']=$this->custom->sellcash($id);
					$data['servicecash']=$this->custom->servicecash($id);

					$data['sellinvoice']=$this->custom->sellinvoice($id);

					$this->load->view('customer/profile.php',$data);

			}

			if($itemshow==3){
				$data['page']=3;
					$data['header']=$this->load->view('common/header','',true);
					$data['footer']=$this->load->view('common/footer','',true);
					$data['sellcash']=$this->custom->sellcash($id);
					$data['servicecash']=$this->custom->servicecash($id);
					$data['collection']=$this->custom->servicecollection($id);
					$this->load->view('customer/profile.php',$data);
			}

				if($itemshow==4){

					$data['page']=4;
					$data['header']=$this->load->view('common/header','',true);
					$data['footer']=$this->load->view('common/footer','',true);
					$data['sellcash']=$this->custom->sellcash($id);
					$data['servicecash']=$this->custom->servicecash($id);

					$data['serviceinvoice']=$this->custom->serviceinvoice($id);

					$this->load->view('customer/profile.php',$data);

			}


			


		}


		public function invoiceItem($id){

				$data['header']=$this->load->view('common/header','',true);
				$data['footer']=$this->load->view('common/footer','',true);

				$data['invoiceitem']=$this->custom->invoiceitem($id);

				$this->load->view('customer/invoiceItem.php',$data);

		}


		public function warrenty(){

				$data['header']=$this->load->view('common/header','',true);
				$data['footer']=$this->load->view('common/footer','',true);

				$data['warrenty']=$this->custom->viewwarrenty();

				$this->load->view('customer/warrenty.php',$data);

		}


	
		public function addwarrenty(){
			$customerName=$this->input->post('customerName');
            $customerMobile=$this->input->post('customerMobile');
            $productName=$this->input->post('productName');
            $companyname=$this->input->post('companyname');
            $problem=$this->input->post('problem');
            $productinfo=$this->input->post('productInfo');
            $receivedate=$this->input->post('receivedate');
            $status=$this->input->post('status');
			$data = array(
				'customerName' =>$customerName,
                'customerMobile' =>$customerMobile,
                'productName' =>$productName,
                'companyname' =>$companyname,
                'productinfo' =>$productinfo,
                'recivedate' =>$receivedate,
                'problem' =>$problem,
                'status' =>$status,
			);
			$this->db->insert('warrenty', $data);
			redirect(base_url()."customer/warrenty");
		}

		public function customeramount(){
			$this->db->select('*');
			$this->db->from('customercash');
			$this->db->join('customer', 'customer.id = customercash.customerId');
		    $query = $this->db->get(); 
			$data['amount']= $query->result(); 
				$data['header']=$this->load->view('common/header','',true);
				$data['footer']=$this->load->view('common/footer','',true);


		$this->load->view('customer/amount.php',$data);

		}




		

		public function collection(){

		// $data['header']=$this->load->view('common/header','',true);
		// $data['footer']=$this->load->view('common/footer','',true);
		// $data['customer']=$this->custom->displayCustomder();
		// $this->load->view('customer/collection.php',$data);

		// }

		// public function addcollection(){
		// 	$id=$this->input->post('id');
		// 	$cash=$this->input->post('amount');
		// 	$type=$this->input->post('type');

		// 	if($type=1){
		// 					// show data from customercash/sellcash table match by id
		// 	$this->db->select('*');
		// 	$this->db->from('customercash');
		// 	$this->db->where('id',$id);
		// 	$query = $this->db->get(); 
		// 	$data['cashdata']=$query->result();

		// 	foreach($data['cashdata'] as $cashs)
		// 	{
		// 		$tabletotal=$cashs->total;
		// 		$tablecash=$cashs->cash;
		// 	}

		// 	$ca=0;
		// 	$ca=$tablecash+$cash;
		// 	$du=0;
		// 	$du=$tabletotal-$ca;

		// 	$data = array(
        //         'cash' =>$ca,
        //         'due' =>$du, 
        //     );
        //     $this->db->where('id',$id);
		// 	$this->db->update('customercash',$data);


		// 	$date=date('Y-m-d');
		// 	$data = array(
		// 		'customerId' =>$customerId,
		// 		'collection' =>$cash,
		// 		'date' =>$date, 
		// 		'total' =>$tabletotal,
		// 		'cash' =>$ca,
		// 		'due' =>$du
				 
				
		// 	);
			
		// 	$this->db->insert('sellcollection', $data);
		// 	}

		// 	redirect(base_url()."customer/collection");
	
		}

    }