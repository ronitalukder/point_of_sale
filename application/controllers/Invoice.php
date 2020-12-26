<?php
class  Invoice extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

        
        $this->load->model('InvoiceModel', 'sellin');
    }
    
    public function todayinvoice()
	{ 

        $date=date('Y-m-d');

        $data['invoice']=$this->sellin->todayinvoice($date);
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
        $this->load->view('sellinvoice/sellinvoice.php',$data);
        
      
    }

        
    public function monthinvoice()
	{

        $data['invoice']=$this->sellin->monthinvoice();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
        $this->load->view('sellinvoice/sellinvoice.php',$data);
        
      
    }

    public function updateInvoice($id){

        $invoiceId=$id;
        $data['invoiceCustomer']=$this->sellin->invoiceCustomer($invoiceId);
        // $data['invoice']=$this->sellin->invoiceItem($invoiceId);
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('sellinvoice/editInvoiceCustomer.php',$data);

        

    }

    
    public function viewinvoice($id){

        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->join('sellitem', 'sellitem.invoiceId = invoice.id');
        $this->db->join('item', 'item.itemId = sellitem.sellItemId');
        $this->db->where('invoice.id',$id);
        $query = $this->db->get(); 
        $data['invoice']= $query->result(); 

        $data['header']=$this->load->view('common/header','',true);
        $data['footer']=$this->load->view('common/footer','',true);
        $this->load->view('sellinvoice/invoiceview.php',$data);

    }
    
}
