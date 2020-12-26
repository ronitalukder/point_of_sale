<?php
class  History extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

        $this->load->model('HistoryModel', 'his');
    }
    
    public function daily()
	{

        $day=date('Y-m-d');

        $this->db->select('*');
        $this->db->from('expense');
        $this->db->where('expenseDate',$day);
        $query = $this->db->get(); 
        $data['dailyExpense']= $query->result();

        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->where('date',$day);
        $query = $this->db->get(); 
        $data['dailySell']= $query->result();

        
     

		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('history/dailyhistory.php',$data);
    }

    public function monthly()
	{

        $month=date('m');

        $this->db->select('*');
        $this->db->from('expense');
       
        $this->db->where('month(expenseDate)',$month);
        $query = $this->db->get(); 
        $data['dailyExpense']= $query->result();

        $this->db->select('*');
        $this->db->from('invoice');
    

        $this->db->where('month(date)',$month);
        
        $query = $this->db->get(); 
        $data['dailySell']= $query->result();


        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('month(deliveryDate)',$month);
        $this->db->where('status','2');
        $query = $this->db->get(); 
        $data['service']= $query->result();

		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('history/monthlyhistory.php',$data);
    }

    
}
