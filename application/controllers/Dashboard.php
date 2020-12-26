<?php
class Dashboard extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

		$this->load->model('Product', 'pro');
		$this->load->model('Dashboards', 'dash');
		// $this->db->where('month(deliveryDate)',$month);
		
	}
		
	public function index()
	{
		$day=date('Y-m-d');
		// $day='2019-07-16';

		// Daily Total Service

		    $this->db->select('*');
        $this->db->from('service');
        $this->db->where('deliveryDate',$day);
        $this->db->where('status','2');
        $query = $this->db->get(); 
        $data['service']= $query->result();


        // Daily Total Sell 

         $this->db->select('*');
        $this->db->from('invoice');
        $this->db->where('date',$day);
        $query = $this->db->get(); 
        $data['dailySell']= $query->result();


        // Daily Total Sell Profit
        $this->db->select('*');
	    $this->db->from('invoice');
	    $this->db->join('sellitem', 'sellitem.invoiceId = invoice.id');
	    $this->db->join('item', 'item.itemId = sellitem.sellItemId');
	    $this->db->where('invoice.date',$day);
	    $query = $this->db->get(); 
	    $data['item']=$query->result();
	    	$buyitemtotalprice=0;
	    	$sellitemtotalprice=0;
	    	$sellprofit=0;
	    	$totalprofit=0;
	     foreach($data['item'] as $value){

                $itemname=$value->itemName;

               $itembuyprice=$value->itemBuyPrice;

                $sellitemqty=$value->sellItemQty;

                $buyitemtotalprice=$itembuyprice*$sellitemqty;

                $sellitemprice=$value->sellItemPrice;

               $sellitemqty=$value->sellItemQty;

                $sellitemtotalprice=$sellitemqty*$sellitemprice;

               $sellprofit=$sellitemtotalprice-$buyitemtotalprice;


                 $totalprofit=$totalprofit+$sellprofit;


                
            }

            $data['profit']=$totalprofit;


         // daily Expense
        $this->db->select('*');
        $this->db->from('expense');
        $this->db->where('expenseDate',$day);
        $query = $this->db->get(); 
        $data['dailyExpense']= $query->result();


        
         // daily Sell collection
         $this->db->select('*');
         $this->db->from('sellcollection');
         $this->db->where('date',$day);
         $query = $this->db->get(); 
         $data['dailycollection']= $query->result();



          // daily Sell collection
          $this->db->select('*');
          $this->db->from('paymentcollection');
          $this->db->where('date',$day);
          $query = $this->db->get(); 
          $data['paymentcollection']= $query->result();






        // Monthly Calculation


        	$month=date('m');
        	$yearmonth=date('Y-m');

		// monthly Total Service

		$this->db->select('*');
        $this->db->from('service');
         $this->db->where('month(deliveryDate)',$month);
        $this->db->where('status','2');
        $query = $this->db->get(); 
        $data['mservice']= $query->result();


        // monthly Total Sell 

         $this->db->select('*');
        $this->db->from('invoice');
       $this->db->where('month(date)',$month);
        $query = $this->db->get(); 
        $data['mdailySell']= $query->result();


        // Daily Total Sell Profit
        $this->db->select('*');
	    $this->db->from('invoice');
	    $this->db->join('sellitem', 'sellitem.invoiceId = invoice.id');
	    $this->db->join('item', 'item.itemId = sellitem.sellItemId');
	    $this->db->where("invoice.date LIKE '$yearmonth%'");
	     // $this->db->where('invoice.month(date)',$month);
	    $query = $this->db->get(); 
	    $data['item']=$query->result();
	    	$buyitemtotalprice=0;
	    	$sellitemtotalprice=0;
	    	$sellprofit=0;
	    	$totalprofit=0;
	     foreach($data['item'] as $value){

                $itemname=$value->itemName;

               $itembuyprice=$value->itemBuyPrice;

                $sellitemqty=$value->sellItemQty;

                $buyitemtotalprice=$itembuyprice*$sellitemqty;

                $sellitemprice=$value->sellItemPrice;

               $sellitemqty=$value->sellItemQty;

                $sellitemtotalprice=$sellitemqty*$sellitemprice;

               $sellprofit=$sellitemtotalprice-$buyitemtotalprice;


                 $totalprofit=$totalprofit+$sellprofit;


                
            }

            $data['mprofit']=$totalprofit;


         // daily Expense
        $this->db->select('*');
        $this->db->from('expense');
        $this->db->where('month(expenseDate)',$month);
        $query = $this->db->get(); 
        $data['mdailyExpense']= $query->result();



		$data['header']=$this->load->view('common/header','',true);
		$data['footer']=$this->load->view('common/footer','',true);
		$this->load->view('dashboard/dashboard.php',$data);
	}
}
