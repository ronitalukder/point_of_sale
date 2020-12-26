<?php
class  Qutation extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

        $this->load->model('QutationModel', 'qutation');
    }
    
    public function index()
	{
		$data['qutation']=$this->qutation->quickeQutation();
		$data['item']=$this->qutation->displayItem();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('qutation/qutation.php',$data);
	}

	public function addrow(){
		$data = array(
				'itemName' =>'',
			
				 
			);
			
			$this->db->insert('quickqutation', $data);
			redirect(base_url()."qutation");
	}

	public function addqutation(){
		$updateId=$this->input->post('updateId');
		$itemName=$this->input->post('itemName');
		$itemSerial=$this->input->post('itemSerial');
		$itemWarrenty=$this->input->post('itemWarrenty');
		$itemPrice=$this->input->post('itemPrice');
		$itemQty=$this->input->post('itemQty');

		$data = array(

				'itemName' =>$itemName,
				'itemSerial' =>$itemSerial,
				'itemWarrenty' =>$itemWarrenty,
				'itemPrice' =>$itemPrice,
				'itemQty' =>$itemQty,
				
			);

		$this->db->where('id',$updateId);
    	$result=$this->db->update('quickqutation',$data);
    	redirect(base_url()."qutation");
	}

	public function addItem($id){

		   $this->db->select('*');
			$this->db->from('item');
			$this->db->where('itemId',$id);
			$query = $this->db->get(); 
			$data['item']=$query->result();

			foreach($data['item'] as $value)
			{
				$isellp=$value->itemSellPrice;
				$iname=$value->itemName;
				
			}

			$data = array(
                'itemPrice' =>$isellp,
                'itemName' =>$iname, 
                'itemQty' =>'1', 
            );
			
			$this->db->insert('quickqutation', $data);
			redirect(base_url()."qutation");

	}

	public function savqutation(){
		$customerName=$this->input->post('customerName');
		$customerMobile=$this->input->post('customerMobile');
		$customerAddress=$this->input->post('customerAddress');
		$qutationCat=$this->input->post('qutationCat');
		$qutationTotal=$this->input->post('qutationTotal');
		$customerPrice=$this->input->post('customerPrice');
		$qutationDate=$this->input->post('qutationDate');

		$data = array(

				'customerName' =>$customerName,
				'customerMobile' =>$customerMobile,
				'customerAddress' =>$customerAddress,
				'qutationCat' =>$qutationCat,
				'qutationTotal' =>$qutationTotal,
				'customerPrice' =>$customerPrice,
				'qutationDate' =>$qutationDate,
				
			);
		$this->db->insert('qutationcustomer', $data);

			$this->db->select('*');
			$this->db->from('qutationcustomer');
			$query = $this->db->get(); 
			$data['customer']=$query->result();

			foreach($data['customer'] as $value)
			{
				$cusId=$value->id;
				
			}

			$this->db->select('*');
			$this->db->from('quickqutation');
			$query = $this->db->get(); 
			$data['qutation']=$query->result();

			foreach($data['qutation'] as $value)
			{
				
                $itemN=$value->itemName;
                $itemS=$value->itemSerial;
                $itemW=$value->itemWarrenty;
                $itemP=$value->itemPrice;
                $itemQ=$value->itemQty;


			$data = array(

				'customerId' =>$cusId,
				'itemName' =>$itemN,
				'itemSerial' =>$itemS,
				'itemWarrenty' =>$itemW,
				'itemPrice' =>$itemP,
				'itemQty' =>$itemQ,
				
			);
			$this->db->insert('qutation', $data);

				
			}
				$this->db->empty_table('quickqutation');
				redirect(base_url()."qutation");
	}

	public function deletequtation($id){
		$this->db->where('id',$id);
		$this->db->delete('quickqutation');
		redirect(base_url()."qutation");

	}

	 public function showqutation()
	{
		$data['qutation']=$this->qutation->qutationCustomer();
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('qutation/showqutation.php',$data);
	}

	public function qutationview($cusId){
		$data['qutation']=$this->qutation->qutationview($cusId);
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('qutation/qutationview.php',$data);

	}

	public function qutationprint($cusId){
		$data['qutation']=$this->qutation->qutationview($cusId);
		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('qutation/qutationprint.php',$data);

	}






}
