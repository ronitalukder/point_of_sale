<?php
class  Purchase extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('PurchaseModel', 'pur');
        $this->load->model('Product', 'pro');
	}



		
		// Item 
	
		public function itemPurchase()
		{
			$data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
            $data['item']=$this->pur->displayItem();
            $data['invoice']=$this->pur->displayInvoice();
            $data['supply']=$this->pur->displaySupply();
            $data['category']=$this->pro->displayCat();
            $data['brands']=$this->pro->displayBrand();
            $this->load->view('purchase/purchase.php',$data);
            
		}


		public function addPurchase(){
			$itemName=$this->input->post('itemName');
            $itemModel=$this->input->post('itemModel');
			$itemPrice=$this->input->post('itemPrice');
            $itemSellPrice=$this->input->post('itemSellPrice');
			$itemQty=$this->input->post('itemQty');
            $categoryId=$this->input->post('categoryId');
            $brandId=$this->input->post('brandId');
            $itemCondition=$this->input->post('itemCondition');
            $itemDescription=$this->input->post('itemDescription');
			
			$data = array(
				'itemName' =>$itemName,
                'model' =>$itemModel,
				'itemPrice' =>$itemPrice,
                'sell' =>$itemSellPrice,
				'itemQty' =>$itemQty,
                'category' =>$categoryId,
                'brand' =>$brandId,
                'status' =>$itemCondition,
                'description' =>$itemDescription,
               
				
			);
			$this->pur->addItem($data);
			redirect(base_url()."purchase/itemPurchase");
        }
        
        public function updatePurchase(){
            $itemId=$this->input->post('itemId');
            $itemName=$this->input->post('itemName');
            $itemModel=$this->input->post('itemModel');
            $itemPrice=$this->input->post('itemBuyPrice');
            $itemSellPrice=$this->input->post('itemSellPrice');
            $itemQty=$this->input->post('itemQuantity');
            $categoryId=$this->input->post('categoryId');
            $brandId=$this->input->post('brandId');
            $itemCondition=$this->input->post('itemCondition');
            $itemDescription=$this->input->post('itemDescription');
			
			$data = array(
				'itemName' =>$itemName,
                'model' =>$itemModel,
                'itemPrice' =>$itemPrice,
                'sell' =>$itemSellPrice,
                'itemQty' =>$itemQty,
                'category' =>$categoryId,
                'brand' =>$brandId,
                'status' =>$itemCondition,
                'description' =>$itemDescription,
			);
			$this->pur->updateItem($data,$itemId);
			redirect(base_url()."purchase/itemPurchase");
        }
        
        public function deleteItem($id){
            $this->db->where('id',$id);
            $this->db->delete('purquick');
            redirect('purchase/itemPurchase','refresh');
        }

        
		public function savePurchase(){
			$supplyId=$this->input->post('supplyId');
			$invoiceTotal=$this->input->post('invoiceTotal');
            $invoiceCash=$this->input->post('invoiceCash');
            $invoiceDue=$this->input->post('invoiceDue');
            $invoiceNo=$this->input->post('invoiceNo');
            $invoiceId=$this->input->post('invoiceId');
            date_default_timezone_set('Asia/Dhaka');
            $invoiceDate = date('y-m-d');
        
            
			
			$data = array(
				'purInvoiceNo' =>$invoiceNo,
                'purInvoiceSupply' =>$supplyId,
                'purInvoiceTotal' =>$invoiceTotal,
                'purInvoiceCash' =>$invoiceCash,
                'purInvoiceDue' =>$invoiceDue,
                'purInvoiceDate' =>$invoiceDate,
                
				
            );
            
            $this->pur->savePurchase($data);


            // Check Id and Update cash and insert


            $this->db->select('*');
            $this->db->from('supplycash');
            $this->db->where('supplyid',$supplyId);
            $query = $this->db->get(); 
            $checkcash= $query->result();

            if($checkcash==true){
                
                    $this->db->select('*');
                    $this->db->from('supplycash');
                    $this->db->where('supplyid',$supplyId);
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

                    echo $stotal=$invoiceTotal+$total;
                    echo $scash=$cash+$invoiceCash;
                    echo $sdue=$invoiceDue+$due;
                          

                    $data = array(
                        
                        'total' =>$stotal,
                        'cash' =>$scash,
                        'due' =>$sdue,
                    );

                    $this->db->where('supplyid',$supplyId);

                    $this->db->update('supplycash',$data);
                
            }

            else{

                
                $data = array(
                    'supplyid' =>$supplyId,
                    'total' =>$invoiceTotal,
                    'cash' =>$invoiceCash,
                    'due' =>$invoiceDue,
                );

                $this->db->insert('supplycash', $data);
                
            }




                $this->db->select('*');
                $this->db->from('purquick');
                $query = $this->db->get(); 
                $data['purItem']= $query->result();

             foreach($data['purItem'] as $purItems){

                 $itemM=$purItems->model;
                 $itemN=$purItems->itemName;
                 $itemQtys=$purItems->itemQty;
                 $ibuy=$purItems->itemPrice;
                 $isell=$purItems->sell;
                 $icat=$purItems->category;
                 $ibrand=$purItems->brand;
                 $istatus=$purItems->status;
                 $idescription=$purItems->description;

                 $this->db->select('*');
                 $this->db->from('item');
                 $this->db->where('itemModel',$itemM);
                 $query = $this->db->get(); 
                 $check= $query->result();

                if($check==false)
                {
                   
                    $data = array(
                        'itemName' =>$itemN,
                        'itemModel' =>$itemM,
                        'itemBuyPrice' =>$ibuy,
                        'itemSellPrice' =>$isell,
                        'itemQuantity' =>$itemQtys,
                        'itemCatId' =>$icat,
                        'itemBrandId' =>$ibrand,
                        'itemDescription' =>$idescription,
                        'itemCondition' =>$istatus,
                        'itemSupplyId' =>$supplyId,
                    );
                    $this->db->insert('item', $data);
                  
                }

                else
                {

                    $itemqtytotal=0;

                    $this->db->select('*');
                    $this->db->from('item');
                    $this->db->where('itemModel',$itemM);
                    $query = $this->db->get(); 
                    $data['itemF']=$query->result();
                    foreach($data['itemF'] as $itemFs)
                    {
                        $iqty=$itemFs->itemQuantity;
                        $itemIds=$itemFs->itemId;
                              
                    }

                    $itemqtytotal=$itemQtys+$iqty;
                    $data = array(
                        'itemBuyPrice' =>$ibuy,
                        'itemSellPrice' =>$isell,
                        'itemQuantity' =>$itemqtytotal,
                    );

                    $this->db->where('itemId',$itemIds);
                    $this->db->update('item',$data);
                }
            }

        


            $itemCal=0;

            $purdate=date('Y-m-d');
            $invoiceId=$this->input->post('invoiceId');

             $this->db->select('*');
            $this->db->from('purquick');
            $query = $this->db->get(); 
            $data['pItem']= $query->result();

            foreach($data['pItem'] as $pItems){

                $itemName=$pItems->itemName;
                $model=$pItems->model;
                $itemQty=$pItems->itemQty;
                $itemPrice=$pItems->itemPrice;
                
			$data = array(
				'purItem' =>$itemName,
                'model' =>$model,
                'purQty' =>$itemQty,
                'purPrice' =>$itemPrice,
                'purInvoiceId' =>$invoiceId,
                'purdate' =>$purdate,
               
            );

            $this->db->insert('purchase', $data);

        }
                
            

            $this->db->empty_table('purquick'); 

            
			redirect(base_url()."purchase/itemPurchase");
        

    }


        public function itemShow(){

            $data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
            $data['item']=$this->pur->displayPurchaseItem();
            $this->load->view('purchase/showitem.php',$data);


        }


        public function showPurchase(){
            $data['header']=$this->load->view('common/header','',true);
			$data['footer']=$this->load->view('common/footer','',true);
            $data['purchase']=$this->pur->displayPurchase();
            $this->load->view('purchase/showpurchase.php',$data);
            

        }

		

}
