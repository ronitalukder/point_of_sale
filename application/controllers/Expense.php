<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {


  public function __construct() 

  {

    parent::__construct();

    $this->load->model('EmployeeModel', 'emp');

  }

   public function index()

  {

   

    $this->db->select('expense.*,employee.name');
    $this->db->from('expense');
    $this->db->join('employee', 'employee.id = expense.expenseUser');
    $query = $this->db->get(); 

    $data['expense']=$query->result();



    $data['employee']=$this->emp->displayEmployee();


    $data['header']=$this->load->view('common/header','',true);

    $data['footer']=$this->load->view('common/footer','',true);

    $this->load->view('expense/expense',$data);

  }

  public function addExpense(){
      
			$expenseUser=$this->input->post('expenseUser');
			$expenseTitle=$this->input->post('expenseTitle');
			$expenseDate=$this->input->post('expenseDate');
			$expenseTaka=$this->input->post('expenseTaka');
	
			
			
			$data = array(
				'expenseTitle' =>$expenseTitle,
				'expenseDate' =>$expenseDate,
				'expenseUser' =>$expenseUser,
				'expenseTaka' =>$expenseTaka,
				
			);
			

			$this->db->insert('expense', $data);
			redirect(base_url()."expense");
  }

  
  public function updateExpense(){
      
    $expense_id=$this->input->post('expense_id');
    $expenseUser=$this->input->post('expenseUser');
    $expenseTitle=$this->input->post('expenseTitle');
    $expenseDate=$this->input->post('expenseDate');
    $expenseTaka=$this->input->post('expenseTaka');

    
    
    $data = array(
        'expenseTitle' =>$expenseTitle,
        'expenseDate' =>$expenseDate,
        'expenseUser' =>$expenseUser,
        'expenseTaka' =>$expenseTaka,
        
    );

    $this->db->where('id',$expense_id);
    $result=$this->db->update('expense',$data);
    redirect(base_url()."expense");
}

public function deleteExpense($id){
    $this->db->where('id',$id);
    $this->db->delete('expense');
    redirect(base_url()."expense");
}

}