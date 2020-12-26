<?php
class  Income extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

        $this->load->model('IncomeModel', 'income');
    }
    
    public function createIncome()
	{

        $data['incomelist']=$this->income->incomelist();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('income/incomelist.php',$data);
    }

    public function addIcome(){

        $data['income']=$this->income->showIncome();
        $data['incomelist']=$this->income->incomelist();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('income/income.php',$data);

    }

    public function insertIncome(){

        $incomeId=$this->input->post('incomeId');
			$incomeTitle=$this->input->post('incomeTitle');
			$incomeDate=$this->input->post('incomeDate');
			$incomeTaka=$this->input->post('incomeTaka');
	
			
			
			$data = array(
				'incomeId' =>$incomeId,
				'incomeTitle' =>$incomeTitle,
				'incomeDate' =>$incomeDate,
				'incomeTaka' =>$incomeTaka,
				
			);
			

			$this->db->insert('income', $data);
			redirect(base_url()."income/addIcome");

    }

    public function deleteIcome($id){

    
			$this->db->where('id',$id);
			$this->db->delete('income');
			redirect(base_url()."income/addIcome");
	
    }
}
