<?php
class  Service extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

        $this->load->model('ServiceModel', 'service');

        $this->load->model('CustomerModel', 'custom');
    }
    
    public function servicelist()
	{

        $this->db->select('*');
        $this->db->from('servicelist');
        $query = $this->db->get(); 
        $data['servicelist']= $query->result();


		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('service/servicelist.php',$data);
    }

    public function addServiceList(){
		$serviceName=$this->input->post('serviceName');
		$data = array(
			'serviceName' =>$serviceName
		);
       
        $this->db->insert('servicelist',$data);

		redirect(base_url()."service/servicelist");
    }

    public function updateServicelist(){
		$id=$this->input->post('id');
		$serviceName=$this->input->post('serviceName');
		$data = array(
			'serviceName' =>$serviceName
		);
        $this->db->where('id',$id);
        $result=$this->db->update('servicelist',$data);
		redirect(base_url()."service/servicelist");
    }
    
    public function addservice(){
        $data['service']=$this->service->showService();
        $data['servicelist']=$this->service->servicelistShow();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('service/service.php',$data);
    }

    public function serviceAdd(){
         $data['service']=$this->service->showService();
        $data['customer']=$this->custom->customerShow();
        $data['servicelist']=$this->service->servicelistShow();
        $data['header']=$this->load->view('common/header','',true);
        $data['footer']=$this->load->view('common/footer','',true);
        $this->load->view('service/addservice.php',$data);

    }

    public function insertService(){

        $customerName=$this->input->post('customerName');
        $customerMobile=$this->input->post('customerMobile');
        $customerAddress=$this->input->post('customerAddress');

        $productName=$this->input->post('productName');
      
        $productInfo=$this->input->post('productInfo');
        $receiveDate=$this->input->post('receiveDate');
        $problem=$this->input->post('problem');
        $category=$this->input->post('category');
        $deliveryDate=$this->input->post('deliveryDate');
          $total=$this->input->post('total');
        $cash=$this->input->post('cash');
        $due=$this->input->post('due');
        $status=$this->input->post('status');
        $invoice=$this->input->post('invoice');

        // Customer

        $this->db->select('*');
        $this->db->from('customer');
         $this->db->where('mobile',$customerMobile);
        $query = $this->db->get(); 
        $check=$query->result();


            if($check==true){

                $this->db->select('*');
            $this->db->from('customer');
            $this->db->where('mobile',$customerMobile);
            $query = $this->db->get(); 
             $data['cId']=$query->result();
            foreach($data['cId'] as $cIds){

                $cid=$cIds->id;
                $cusMobile=$cIds->mobile;
            }
        }



            else
            {
                $data = array(
                    'name' =>$customerName,
                    'mobile' =>$customerMobile,
                    'address' =>$customerAddress,  
                );
                $this->db->insert('customer', $data);

                $this->db->select('*');
                $this->db->from('customer');
                $this->db->where('mobile',$customerMobile);
                $query = $this->db->get(); 
                 $data['cId']=$query->result();
                foreach($data['cId'] as $cIds){

                    $cid=$cIds->id;
                    $cusMobile=$cIds->mobile;
                }
            }


        $data = array(
            'customerId' =>$cid,
            'productName' =>$productName,
            'productInfo' =>$productInfo,
            'receiveDate' =>$receiveDate,
            'problem' =>$problem,
            'category' =>$category,
            'deliveryDate' =>$deliveryDate,
            'total' =>$total,
            'cash' =>$cash,
            'due' =>$due,
            'status' =>$status,
            'invoice' =>$invoice,
            
            
        );
        
        $this->db->insert('service', $data);


        // $this->db->select('*');
        // $this->db->from('service');
        // $this->db->where('customerId',$cid);
        // $query = $this->db->get(); 
        // $data['service']= $query->result();

        // foreach($data['service'] as $services)
        // {  
        //     $custoId=$services->customerId;
        //     $serviceId=$services->id;
            
        // }

        $this->db->select('*');
        $this->db->from('servicecash');
        $this->db->where('customerId',$cid);
        $query = $this->db->get(); 
        $check= $query->result();

        if($check==false){

          $data = array(
            'customerId' =>$cid,
            'total' =>$total,
            'cash' =>$cash,
            'due' =>$due,  
            
        );
        
        $this->db->insert('servicecash', $data);
            
        }
        else{
                $ctotal=0;
                $ccash=0;
                $cdue=0;


              $this->db->select('*');
                    $this->db->from('servicecash');
                        $this->db->where('customerId',$cid);
                       $query = $this->db->get(); 
                          $data['cusCah']=$query->result();
                                foreach($data['cusCah'] as $cusCahs){

                                
                               
                                $cusTotal=$cusCahs->total;
                                $cusCash=$cusCahs->cash;
                                $cusDue=$cusCahs->due;
                                
                            
                            }

                                 

                         
                            $ctotal=$total+$cusTotal;
                            $ccash=$cash+$cusCash;
                            $cdue=$due+$cusDue;


                                $data = array(

                           
                                'total' =>$ctotal,
                                'cash' =>$ccash,
                                'due' =>$cdue,
                            );

                             $this->db->where('customerId',$cid);
                             $this->db->update('servicecash',$data);
                         }

                            redirect(base_url()."service/addservice");
                     }




    





     



    public function deleteService($id){
            
			$this->db->where('id',$id);
			$this->db->delete('service');
			redirect(base_url()."service/addservice");
    }

}