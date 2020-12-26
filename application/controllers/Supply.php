<?php
class  Supply extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

		$this->load->model('CustomerModel', 'custom');
    }
    
    public function viewsupply(){

        $this->db->select('*');
        $this->db->from('supply'); 
        $query = $this->db->get(); 
        $data['supply']=$query->result();

		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		
		$this->load->view('supply/viewsupply.php',$data);

        }
        
        public function profile($id){

				$data['page']=1;
				 
                $this->db->select('*');
                $this->db->from('supplycash');
                $this->db->where('supplyId',$id);
                $query = $this->db->get(); 
                $data['supplycash']=$query->result();

                $this->db->select('*');
                $this->db->from('paymentcollection');
                $this->db->where('supplyid',$id);
                $query = $this->db->get(); 
                $data['supplypayment']=$query->result();

                $data['header']=$this->load->view('common/header','',true);
                $data['footer']=$this->load->view('common/footer','',true);
                $this->load->view('supply/profile.php',$data);

        }
        

        function paymentcollection(){
            // All Data variable recive
	
			$cash=$this->input->post('cashTaka');
			$supplyid=$this->input->post('supplyid');

			// show data from customercash/sellcash table match by id
			$this->db->select('*');
			$this->db->from('supplycash');
			$this->db->where('supplyid',$supplyid);
			$query = $this->db->get(); 
			$data['cashdata']=$query->result();

			foreach($data['cashdata'] as $cashs)
			{
				echo $tabletotal=$cashs->total;
				echo $tablecash=$cashs->cash;
			}

			$ca=0;
			$ca=$tablecash+$cash;
			$du=0;
			$du=$tabletotal-$ca;

			$data = array(
                'cash' =>$ca,
                'due' =>$du, 
            );
            $this->db->where('supplyid',$supplyid);
			$this->db->update('supplycash',$data);


			$date=date('Y-m-d');
			$data = array(
				'supplyid' =>$supplyid,
				'payment' =>$cash,
				'date' =>$date, 
				'total' =>$tabletotal,
				'cash' =>$ca,
				'due' =>$du
				 
				
			);
			
			$this->db->insert('paymentcollection', $data);
			
			redirect(base_url()."supply/profile/".$supplyid);
        }

        public function showItem(){

			$itemshow=$this->input->post('itemshow');
			$id=$this->input->post('supplyid');
			if($itemshow==1){
				$data['page']=1;
					$data['header']=$this->load->view('common/header','',true);
                    $data['footer']=$this->load->view('common/footer','',true);
                    
                    $this->db->select('*');
                    $this->db->from('supplycash');
                    $this->db->where('supplyId',$id);
                    $query = $this->db->get(); 
                    $data['supplycash']=$query->result();
    
                    $this->db->select('*');
                    $this->db->from('paymentcollection');
                    $this->db->where('supplyid',$id);
                    $query = $this->db->get(); 
                    $data['supplypayment']=$query->result();

					$this->load->view('supply/profile.php',$data);
			}

			if($itemshow==2){
                $data['page']=2;
                
				
                    
                    $this->db->select('*');
                    $this->db->from('supplycash');
                    $this->db->where('supplyId',$id);
                    $query = $this->db->get(); 
                    $data['supplycash']=$query->result();

                    $this->db->select('*');
                    $this->db->from('purinvoice');
                    $this->db->where('purInvoiceSupply',$id);
                    $query = $this->db->get(); 
                    $data['supplypurchase']=$query->result();

                    $data['header']=$this->load->view('common/header','',true);
					$data['footer']=$this->load->view('common/footer','',true);

					$this->load->view('supply/profile.php',$data);

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



		public function supplyamount(){

			$this->db->select('*');
			$this->db->from('supplycash');
			$this->db->join('supply', 'supply.id = supplycash.supplyid');
			$query = $this->db->get(); 
			$data['supplyamount']=$query->result();

			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);

			$this->load->view('supply/supplyamount.php',$data);

		}


		 
		public function viewsupplyinvoice($id){

			$this->db->select('*');
			$this->db->from('purinvoice');
			$this->db->join('purchase', 'purchase.purInvoiceId = purinvoice.id');
			$this->db->where('purinvoice.id',$id);
			$query = $this->db->get(); 
			$data['purchase']= $query->result(); 
	
			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
			$this->load->view('supply/viewsupplyinvoice.php',$data);
	
		}

}