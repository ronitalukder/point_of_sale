<?php echo $header;?>
		<!--============================= START CONTENT BODY PART ===================================-->
	
      

	<div class="container-fluid sellboard-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sellboard-heading">
                <h3>QUTATION</h3>
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
                                    $itemBuy=$items->itemBuyPrice;
                                    $itemSell=$items->itemSellPrice;
                                  
                                   
								?>
								<tr>
									
									<td><?php echo $itemName;?></td>
                                 
                                    <td><?php echo $itemModel;?></td>

                                    <td><?php echo $brandName;?></td>

                                

                                
									<td><a href="<?php echo base_url('qutation/addItem/'.$itemId);?>"><button class="btn  btn-primary btn-sm" ><i class="fa fa-plus" aria-hidden="true"></i></button></a>
									&nbsp &nbsp </td>
								
									
								</tr>
								<?php } ?>
							</tbody>
						</table>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="sellboard-item-sell">
						<div class="sellboard-item-sell-heading">
				
						  <h3 class="time"><a href="<?php echo base_url('qutation/addrow');?>"><button class="btn btn-primary btn-size">Add Row</button></a></h3>
						
							<h3 class="date"> Date : <?php date_default_timezone_set('Asia/Dhaka');
echo $sellDates = date('d.m.Y');?> </h3> 
							
						</div>
                            <br/>
						

						<div class="sellboard-item-table">
								<table class="table table-bordered">
									<thead>
										<tr>
										
										<th scope="col">Product Name</th>
										<th scope="col">S/N</th>
										<th scope="col">Warrenty</th>
										<th scope="col">U Price</th>
										<th scope="col">Qty</th>
                                        <th scope="col">Total</th>
										<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
                                    $itemTotalPrice=0;
                                    $qutationTotal=0;
                                  

									foreach($qutation as $value){

									
                                        $updateId=$value->id;
                                        $itemN=$value->itemName;
                                        $itemS=$value->itemSerial;
                                        $itemW=$value->itemWarrenty;
                                        $itemP=$value->itemPrice;
                                        $itemQ=$value->itemQty;

                                        $itemTotalPrice=$itemQ*$itemP;

                                        $qutationTotal=$qutationTotal+$itemTotalPrice;
                                        
									?>
									
   
							
							 <tr>
                            <form action="<?php echo base_url('qutation/addqutation');?>" method="post">

                                <input type="hidden" value="<?php echo $updateId;?>" style="border:none" name="updateId">
                               
                            <td><input type="text" value="<?php echo $itemN;?>" style="border:none" name="itemName"></td>
                         
                            <td><input type="text" value="<?php echo $itemS;?>" style="border:none" name="itemSerial"></td>

							<td><input class="form-control" type="text" value="<?php echo $itemW;?>" style="border:none" name="itemWarrenty"></td>

                            <td><input class="form-control" type="text" value="<?php echo $itemP;?>" style="border:none" name="itemPrice"></td>

                            <td><input class="form-control" type="text" value="<?php echo $itemQ;?>" style="border:none" name="itemQty"></td>

							<td><?php echo $itemTotalPrice;?></td>
							<td><button type="submit" class="btn btn-primary btn-sm  btn-size"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                <a href="<?php echo base_url('qutation/deletequtation/'.$updateId);?>"><button type="button" class="btn btn-danger btn-sm btn-size del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                            </td>


                             </form>
                              </tr>
														
																
							
									<?php } ?>
								
							</tbody>
							</table>



                            <form action="<?php echo base_url('qutation/savqutation');?>" method="post">



                                <div class="row sellboard-customer-info">

                                    
                                     

                                            <div class="col-md-6">



                            <div class="form-group">
                                               <label for="text">Qutation Category</label>
                                               <select class="form-control" name="qutationCat" id="exampleFormControlSelect1">
                                    
                                <option value="1">Pc</option>
                                <option value="2">Camera</option>
                              
                                
                                    </select>
                            </div>
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
                            <h5 class="total-invoice-taka ">Total <input type="text"  value="<?php echo $qutationTotal;?>" name="qutationTotal" class="invoiceTotal form-control pull-right" /></h5>
                            <h5 class="total-invoice-cash">Customer Price  <input type="text" name="customerPrice" class="invoiceCash form-control"/></h5>
                          
                         
               

                                            <?php $date = date('y-m-d');?>
                            <input type="hidden" class="form-control" value="<?php echo $date;?>" name="qutationDate">
                        
                       

                            </br>
                         
                            <input type="submit" class="btn btn-primary btn-sm pull-right" id="invoicePrint" value="Create Qutation">
                             </div>
                            </div>
                            </div>
                            </form>

                            

						</div>
					    
                    </div>
                </div>
				
			</div>
		</div>
	</div>






    

		
		<!--============================= END CONTENT BODY PART ===================================-->


        <!--==================================================================-->
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

// $(".invoiceCash").keyup(function(){
//     var due=$(this).val();
//     var total=$(".invoiceTotal").val();
//     var totaldue=parseInt(total)-parseInt(due);
//     $(".invoiceDue").val(totaldue);
// })

// $("#customerName").keyup(function(){
//     var customerCopy=$(this).val();
//     $("#customerNameCopy").val(customerCopy);
// })

// $("#customerMobile").keyup(function(){
//     var customerCopy=$(this).val();
//     $("#customerMobileCopy").val(customerCopy);
// })


// $("#customerAddress").keyup(function(){
//     var customerCopy=$(this).val();
//     $("#customerAddressCopy").val(customerCopy);
// })






  
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




