<?php echo $header;?>
		<!--============================= START CONTENT BODY PART ===================================-->
	
      

	<div class="container-fluid sellboard-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sellboard-heading">
                <h3>SellBoard</h3>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-lg-5">
		
				
					<div class="sellboard-search-item">
						<!-- <?php 
						$invoiceNoAdd=1;
						$iidAdd=1;
						foreach($invoice as $invoices){
							$iId=$invoices->id;
							$invoiceNo=$invoices->invoiceNo;
							
						}
						$invoiceNoAdd=$invoiceNo+$invoiceNoAdd;
						$iidAdd=$iidAdd+$iId
						?> -->

                           

						
					
				
				
						<table class="table table-bordered sellTable" id="example" >
					
							<thead>
								<tr>
								
								<th scope="col">Name</th>
                                
                                <th scope="col">Model</th>

                                <th scope="col">Brand</th>

                                <th scope="col">Qty</th>

                               
                               
								<th scope="col">Add</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 
                                $i=1;
								foreach($item as $items){

                                    $itemId=$items->itemId;
                                    $itemName=$items->itemName;
                                    $brandName=$items->brandName;
                                    $itemModel=$items->itemModel;
                                    $catName=$items->catName;
                                    $itemBuy=$items->itemBuyPrice;
                                    $itemQuantity=$items->itemQuantity;
                                    $itemCatId=$items->itemCatId;
                                    $itemBrandId=$items->itemBrandId;
                                    $itemSupplyId=$items->itemSupplyId;
                                    $itemDescription=$items->itemDescription;
								?>
								<tr>
									
									<td><?php echo $itemName;?></td>
                                 
                                    <td><?php echo $itemModel;?></td>

                                    <td><?php echo $brandName;?></td>

                                   <td> <?php echo $itemQuantity;?></td>

                                  
                                 
                                   
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#SellAddItem<?php echo $itemId;?>"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
									&nbsp &nbsp </td>
								
									<!-- Start Add Category Modal -->

                                    <div class="modal fade" id="SellAddItem<?php echo $itemId;?>">
                                        <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title btn-md"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp Add Cart Item</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('sell/sellItem');?>" method="post">
                                                <input type="hidden" class="form-control" value="<?php echo $iidAdd;?>" name="invoiceId">
                            
												<input type="hidden" class="form-control" value="<?php echo $itemId;?>" name="itemId">
                                                    <div class="row">
                                                       
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Price</label>
                                                                <input type="number" class="form-control" name="sellItemPrice">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Quantity</label>
                                                                <input type="number" class="form-control" value="1" name="sellItemQty">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="text">Item Warrenty</label>
<input type="text" class="form-control" value="<?php echo $itemDescription;?>" name="sellItemWarrenty">
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                        &nbsp &nbsp<button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </form> 

                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
	                                <!-- End Update Item Modal -->
								</tr>
								<?php } ?>
							</tbody>
						</table>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="sellboard-item-sell">
						<div class="sellboard-item-sell-heading">
						<?php 
						$invoiceNoAdd=1000;





                    if($invoice){
						foreach($invoice as $invoices){
							$iId=$invoices->id;
							$invoiceNo=$invoices->invoiceNo;
						}


                   if($invoiceNo<1000){
                        $invoiceNoAdd=1000;
                    }

                    else{
                        $invoiceNoAdd=1;
                    }


						$invoiceNoAdd=$invoiceNo+$invoiceNoAdd;
                    }
						?>
							<h3 class="invoice">Invoic No : #<?php echo $invoiceNoAdd;?></h3> 
							<h3 class="date"> Date : <?php date_default_timezone_set('Asia/Dhaka');
echo $sellDates = date('d.m.Y');?> </h3> 
							<h3 class="time">Time : <?php date_default_timezone_set('Asia/Dhaka');
echo $sellTime = date('h:i a', time());?></h3>
						</div>
                            <br/>
						

						<div class="sellboard-item-table">
								<table class="table table-bordered">
									<thead>
										<tr>
										
										<th scope="col">#</th>
                                        <th scope="col">Name</th>
										<th scope="col">S/N</th>
                                        <th scope="col">Warrenty</th>
										<th scope="col">Price</th>
										<th scope="col">Qty</th>
										<th scope="col">Total</th>
										<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
                                    $itemTotalPrice=0;
                                    $itemTotalSum=0;
                                    $i=1;

									foreach($invoiceItem as $invoiceItems){

									
                                        $updateId=$invoiceItems->id;
                                        $sellItemQty=$invoiceItems->sellItemQty;
                                        $itemName=$invoiceItems->itemName;
                                        $serial=$invoiceItems->serial;
                                        $warrenty=$invoiceItems->warrenty;
                                        $sellItemPrice=$invoiceItems->sellItemPrice;
                                        


                                        $itemTotalPrice=$sellItemPrice*$sellItemQty;

                                        $itemTotalSum=$itemTotalSum+$itemTotalPrice;


										

									?>
									
   
							
							<td><?php echo $i++;?></td>
                            <td><?php echo $itemName;?></td>
						
                            <form action="<?php echo base_url('sell/sellItemUpdate');?>" method="post">
                            <input type="hidden" value="<?php echo $updateId;?>"  name="updateId">
                            <td><input type="text"  class="form-control" value="<?php echo $serial;?>" style="border:none" name="serial"/></td>

                            <td><input type="text" class="form-control" value="<?php echo $warrenty;?>" style="border:none" name="warrenty"></td>

							<td><input type="text" class="form-control" value="<?php echo $sellItemPrice;?>" style="border:none" name="sellItemPrice"/></td>

							<td><input type="text" class="form-control" value="<?php echo $sellItemQty;?>" style="border:none" name="sellItemQty"></td>

							<td><?php echo $itemTotalPrice;?></td>

							<td>
                            <button type="submit" class="btn btn-primary pull-left btn-sm btn-size"><i class="fa fa-edit" aria-hidden="true"></i></button>
                            &nbsp  &nbsp<a href="<?php echo base_url('sell/sellItemDelete/'.$updateId);?> " ><button type="button" style="margin-top:-20px;" class="btn btn-danger btn-sm btn-size pull-right"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                            </td>

                            </form> 
														
																
							</tr>
									<?php } ?>
								
							</tbody>
							</table>



                            <form action="<?php echo base_url('sell/invoiceSave');?>" method="post">



                                <div class="row sellboard-customer-info">

                                    
                                     

                                            <div class="col-md-6">




                            <div class="form-group">
                                               <label for="text">Customer Name</label>                   
                            <input type="text" class="form-control customern" name="customerName"  >
                            </div>
                            <div class="form-group">
                                <label for="text">Customer Mobile</label>
                             
                                <input type="text" class="form-control customerm"  name="customerMobile" ">
                            </div>
                            <div class="form-group">
                                <label for="text">Customer Address</label>
                                                                
                                <input   type="text" class="form-control customera" name="customerAddress" >
                            </div>

                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                            <h5 class="total-invoice-taka">Total <input type="text" value="<?php echo $itemTotalSum;?>" name="invoiceTotal" class="invoiceTotal form-control" /></h5>
                            <h5 class="total-invoice-cash">Cash  <input type="text" name="invoiceCash" class="invoiceCash form-control"/></h5>
                            <h5 class="total-invoice-due">Due  <br/><input type="text" name="invoiceDue" class="invoiceDue form-control" /></h5>
                            
                         
                            <input type="hidden" class="form-control" value="<?php echo $invoiceNoAdd;?>" name="invoiceNo">
                            <input type="hidden" class="form-control" value="<?php echo $iidAdd;?>" name="invoiceId">

                                            <?php $sellDate = date('y-m-d');?>
                            <input type="hidden" class="form-control" value="<?php echo $sellDate;?>" name="invoiceDate">
                            <input type="hidden" class="form-control" value="<?php echo $sellTime;?>" name="invoiceTime">
                       

                            
                         
                            <input type="submit" class="btn btn-primary btn-sm pull-right" id="invoicePrint" value="Create Bill">
                             </div>
                            </div>
                            </div>
                            </form>

                                        <table class="table table-bordered" id="example2">
                                    <thead>
                                        <tr>
                                        
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Address</th>
                            
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $itemTotalPrice=0;
                                    $itemTotalSum=0;

                                    foreach($customer as $customers){

                                    
                                        $cid=$customers->id;
                                        $cname=$customers->name;
                                        $cmobile=$customers->mobile;
                                        $caddress=$customers->address;
                                        


                                        

                                    ?>
                                    
                                    <td id="cname"><?php echo $cname;?></td>
                                    <td id="cmobile"><?php echo $cmobile;?></td>
                                    <td id="caddress"><?php echo $caddress;?></td>
   
                            
                                
                                    <td><button class="btn btn-primary btn-size btn-customer">Add</button></td>
                          
                                     
                                                                
                            </tr>
                                    <?php } ?>
                                
                            </tbody>
                            </table>

						</div>
					    
                    </div>
                </div>
				
			</div>
		</div>
	</div>






    

		
		<!--============================= END CONTENT BODY PART ===================================-->

<?php echo $footer;?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
    
</script>


<script>

$(document).ready(function() {
// 	$('.dataTables_wrapper .dataTables_filter').addClass("dashboard-table");
//     var len=$('').lenth;

//     $(".sellTable").hide();
//     $('.dataTables_wrapper .dataTables_filter input').on('keyup',function(){
//      var len =$(this).val().length;
     

//      if(len>0){
//          $(".sellTable").show();
//      }
//      else{

         
//     $(".sellTable").hide();

//      }
// });

$('.dataTables_filter input').attr("placeholder", "Search Item Name Or Model");

$(".invoiceCash").keyup(function(){
    var due=$(this).val();
    var total=$(".invoiceTotal").val();
    var totaldue=parseInt(total)-parseInt(due);
    $(".invoiceDue").val(totaldue);
})

$("#customerName").keyup(function(){
    var customerCopy=$(this).val();
    $("#customerNameCopy").val(customerCopy);
})

$("#customerMobile").keyup(function(){
    var customerCopy=$(this).val();
    $("#customerMobileCopy").val(customerCopy);
})


$("#customerAddress").keyup(function(){
    var customerCopy=$(this).val();
    $("#customerAddressCopy").val(customerCopy);
})






  
});



$(document).ready(function() {
//     $("#invoicePrint").click(function(){

//         var w = window.open('sell/print','name','width=800,height=500');
// w.onload = w.print;
// w.focus();

//     });

 $('#example2').DataTable();

  $('.btn-customer').click(function(){
     var cn=$("#cname").text();
     var cm=$("#cmobile").text();
     var ca=$("#caddress").text();
    $(".customern").val(cn);
    $(".customerm").val(cm);
    $(".customera").val(ca);

   

  });

});
</script>






