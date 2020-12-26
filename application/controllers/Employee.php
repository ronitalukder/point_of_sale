<?php
class  Employee extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

		$this->load->model('EmployeeModel', 'emp');
	}


	// Category
		
	public function create()
	{
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$data['employee']=$this->emp->displayEmployee();
		$this->load->view('employee/employee.php',$data);
	}

	
	
		// Supply 
	

	
		public function addEmployee(){
			$name=$this->input->post('name');
            $mobile=$this->input->post('mobile');
            $address=$this->input->post('address');
			$data = array(
				'name' =>$name,
                'mobile' =>$mobile,
                'address' =>$address,
			);
			$this->emp->addEmployee($data);
			redirect(base_url()."employee/create");
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

		public function employeeprofile($id){

			$day=date('Y-m-d');

			$this->db->select('*');
			$this->db->from('employee');
			$this->db->join('expense', 'expense.expenseUser =employee.id');
			$this->db->where('expense.expenseDate',$day);
			$query = $this->db->get(); 
			$data['dayexpense']=$query->result();


			// Monthly

			$yearmonth=date('Y-m');

			$this->db->select('*');
			$this->db->from('employee');
			$this->db->join('expense', 'expense.expenseUser =employee.id');
			$this->db->where("expense.expenseDate LIKE '$yearmonth%'");
			$query = $this->db->get(); 
			$data['monthexpense']=$query->result();



			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);

		$this->load->view('employee/employeeprofile.php',$data);

		}

		public function loan()
	{
		

		$this->db->select('loan.*,employee.name');
		$this->db->from('loan');
		$this->db->join('employee', 'employee.id = loan.employeeid');
		$query = $this->db->get(); 
		$data['loan']=$query->result();



		$this->db->select('*');
		$this->db->from('employee');
		$query = $this->db->get(); 
		$data['employee']=$query->result();

		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);


		$this->load->view('employee/loan.php',$data);
	}

	public function loanamount(){

		    $employeeid=$this->input->post('employeeid');
			$taka=$this->input->post('taka');
			$date=$this->input->post('date');
			$data = array(
				'employeeid' =>$employeeid,
				'taka' =>$taka,
				'date' =>$date
			);
			$this->db->insert('loan', $data);




			$this->db->select('*');
            $this->db->from('loancash');
            $this->db->where('employeeid',$employeeid);
            $query = $this->db->get(); 
            $checkcash= $query->result();

            if($checkcash==true){
                
                    $this->db->select('*');
                    $this->db->from('loancash');
                    $this->db->where('employeeid',$employeeid);
                    $query = $this->db->get(); 
                    $data['scash']=$query->result();

                    $stotal=0;
                    $scash=0;
                    $sdue=0;
                    foreach($data['scash'] as $value)
                    {
                        $total=$value->total;
                        $cash=$value->cash;
                        $due=$value->due;

                      
                    }

                    $stotal=$taka+$total;
                    // $scash=$cash+$invoiceCash;
                    // $sdue=$invoiceDue+$due;
                          

                    $data = array(
                        
                        'total' =>$stotal,
                        
                    );

                    $this->db->where('employeeid',$employeeid);

                    $this->db->update('loancash',$data);
                
            }

            else{

                
                $data = array(
                    'employeeid' =>$employeeid,
                    'total' =>$taka,
                    'due' =>$taka,
                   
                );

                $this->db->insert('loancash', $data);
                
			}
			

			redirect('employee/loan');

	}

	public function loanamountUpdate(){

		$id=$this->input->post('id');
		$employeeid=$this->input->post('employeeid');
		$taka=$this->input->post('taka');
		$date=$this->input->post('date');
		$data = array(
			'employeeid' =>$employeeid,
			'taka' =>$taka,
			'date' =>$date
		);

		$this->db->where('id',$id);

	$result=$this->db->update('loan',$data);
	
		redirect('employee/loan');

}

public function loanDelete($id){
	$this->db->where('id',$id);
	$this->db->delete('loan');
	redirect('employee/loan');
}

public function viewemployee(){

	

	$this->db->select('*');
	$this->db->from('employee');
	$query = $this->db->get(); 
	$data['employee']=$query->result();

	$data['header']=$this->load->view('common/header','',true);
	$data['footer']=$this->load->view('common/footer','',true);
	$this->load->view('employee/viewemployee.php',$data);

}


public function profile($id){

	$data['page']=1;
	 
	$this->db->select('*');
	$this->db->from('expense');
	$this->db->where('expenseUser',$id);
	$query = $this->db->get(); 
	$data['expense']=$query->result();

	$this->db->select('*');
	$this->db->from('loancash');
	$this->db->where('employeeid',$id);
	$query = $this->db->get(); 
	$data['loan']=$query->result();

	$this->db->select('*');
                $this->db->from('loanpayment');
                $this->db->where('employeeid',$id);
                $query = $this->db->get(); 
                $data['loanpayment']=$query->result();

	$data['header']=$this->load->view('common/header','',true);
	$data['footer']=$this->load->view('common/footer','',true);
	$this->load->view('employee/profile.php',$data);

}



function loanpayment(){
	// All Data variable recive

	$cash=$this->input->post('cashTaka');
	$employeeid=$this->input->post('employeeid');

	// show data from customercash/sellcash table match by id
	$this->db->select('*');
	$this->db->from('loancash');
	$this->db->where('employeeid',$employeeid);
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
	$this->db->where('employeeid',$employeeid);
	$this->db->update('loancash',$data);


	$date=date('Y-m-d');
	$data = array(
		'employeeid' =>$employeeid,
		'payment' =>$cash,
		'date' =>$date, 
		'total' =>$tabletotal,
		'cash' =>$ca,
		'due' =>$du
		 
		
	);
	
	$this->db->insert('loanpayment', $data);
	
	redirect(base_url()."employee/profile/".$employeeid);
}

public function showItem(){

	$itemshow=$this->input->post('itemshow');
	$id=$this->input->post('employeeid');
	if($itemshow==1){
		$data['page']=1;
			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);


			$this->db->select('*');
	$this->db->from('expense');
	$this->db->where('expenseUser',$id);
	$query = $this->db->get(); 
	$data['expense']=$query->result();
			
			$this->db->select('*');
			$this->db->from('loancash');
			$this->db->where('employeeid',$id);
			$query = $this->db->get(); 
			$data['loan']=$query->result();




			$this->db->select('*');
			$this->db->from('loanpayment');
			$this->db->where('employeeid',$id);
			$query = $this->db->get(); 
			$data['loanpayment']=$query->result();

			$this->load->view('employee/profile.php',$data);
	}

	if($itemshow==2){
		$data['page']=2;
		
		
			
				
			$this->db->select('*');
			$this->db->from('expense');
			$this->db->where('expenseUser',$id);
			$query = $this->db->get(); 
			$data['expense']=$query->result();
				
				$this->db->select('*');
				$this->db->from('loancash');
				$this->db->where('employeeid',$id);
				$query = $this->db->get(); 
				$data['loan']=$query->result();




			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);

			$this->load->view('employee/profile.php',$data);

	}



	


}



 }