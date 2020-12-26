<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Featured</span>
						<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#myModal">
  							<i class="fa fa-plus" aria-hidden="true"></i>&nbsp Add 
						</button>
					</div>
					<div class="card-body ">
						<table class="table table-bordered " id="example">
							<thead>
								<tr>
								<th scope="col">#</th>
								<th scope="col">Item Name</th>
                                <th scope="col">Item Model</th>
                                <th scope="col">Purchase</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Subtotal</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 

                            $totalPriceItem=0;
                            $totalPriceSum=0;
                            $i=1;
                                
                                
								foreach($item as $items){

                                    $itemId=$items->id;

                                    $itemName=$items->itemName;

                                    $itemModel=$items->model;
                                  
                                     $itemPrice=$items->itemPrice;
                                  
                                    $sell=$items->sell;

                                    $itemQty=$items->itemQty;

                                    $brandP=$items->brand;

                                    $catP=$items->category;

                                    $description=$items->description;

                                     $status=$items->status;

                           

                                    $totalPriceItem=$itemPrice*$itemQty;

                                    $totalPriceSum=$totalPriceSum+$totalPriceItem;
                               
								?>
								<tr>
									<th scope="row"><?php echo $i++;?></th>
                                    
									<td><?php echo $itemName;?></td>
                                    <td><?php echo $itemModel;?></td>
                              
                                    
                                    <td><?php echo $itemPrice;?></td>
                                 
                                    <td><?php echo $itemQty;?></td>

                                    <td><?php echo $totalPriceItem;?></td>
                                    
                                  
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateItem<?php echo $itemId;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('purchase/deleteItem/'.$itemId);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
									<!-- Start Add Category Modal -->

                                            <!-- Start Add Category Modal -->

                                    <div class="modal fade" id="UpdateItem<?php echo $itemId;?>">
                                        <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title btn-md"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp Update Item</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('purchase/updatePurchase');?>" method="post">
                                                <input type="hidden" class="form-control" value="<?php echo $itemId;?>" name="itemId">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Name</label>
                                                                <input type="text" class="form-control" value="<?php echo $itemName;?>" name="itemName">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="text">Item Model</label>
                                                                <input type="text" class="form-control" value="<?php echo $itemModel;?>" name="itemModel">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Buy Price</label>
                                                                <input type="text" class="form-control" value=" <?php echo $itemPrice;?>" name="itemBuyPrice">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Sell Price</label>
                                <input type="number" class="form-control" value="<?php echo $sell;?>" name="itemSellPrice">
                            </div>
                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Quantity</label>
                                                                <input type="number" class="form-control" value="<?php echo $itemQty;?>" name="itemQuantity">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Item Categorey</label>
                                                                <select class="form-control" name="categoryId" id="exampleFormControlSelect1">
                                                                <?php 
                                                                foreach($category as $cats){
                                                                    $cat =$cats->catName;
                                                                    $cat_id=$cats->id;
                                                                    ?>
                                                        
                                                                <option value="<?php echo $cat_id;?>" <?php if($cat_id=="$catP") echo 'selected="selected"'; ?> ><?php echo $cat;?></option>
                                                                <?php } ?>
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Item Brand</label>
                                                                    <select class="form-control" name="brandId" id="exampleFormControlSelect1">
                                                                    <?php 
                                                                foreach($brands as $brand){
                                                                    $brandName =$brand->brandName;
                                                                    $brand_id=$brand->id;
                                                                    ?>
                                                               <option value="<?php echo $brand_id;?>" <?php if($brand_id=="$brandP") echo 'selected="selected"'; ?> ><?php echo $brandName;?></option>
                                                                <?php } ?>
                                                                    </select>
                                                            </div>
                                                        </div>

                                                         
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">ItemCodition</label>
                                                                    <select class="form-control" name="itemCondition" id="exampleFormControlSelect1">
                                                                   
                                                              
                                                                <option value="1" <?php if(1=="$status") echo 'selected="selected"'; ?> >New</option>
                                                                <option value="0" <?php if(0=="$status") echo 'selected="selected"'; ?> >Damage</option>
                                                                <option value="2" <?php if(2=="$status") echo 'selected="selected"'; ?> >Recondition</option>
                                                              
                                                                    </select>
                                                            </div>
                                                        </div>
                                                       
                                                  
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="text">Item Warrenty</label>
                                                                <textarea rows="4" cols="4" type="text" class="form-control" name="itemDescription"><?php echo $description;?></textarea>
                                                            </div>
                                                        </div>
                                                        &nbsp &nbsp<button type="submit" class="btn btn-primary">Update</button>
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
                        <br/>

                        <form action="<?php echo base_url('purchase/savePurchase');?>" method="post">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Supply</label>
                                    <select class="form-control" name="supplyId" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($supply as $supplys){
                                    $supplyName =$supplys->supplyName;
                                    $supply_id=$supplys->id;
                                    ?>
                                <option value="<?php echo $supply_id;?>"><?php echo $supplyName;?></option>
                                <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Total Taka</label>
                            <input type="text" class="form-control invoiceTotal" value="<?php echo $totalPriceSum;?>" name="invoiceTotal"  >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Cash Taka</label>
                               <input type="text" name="invoiceCash" class="invoiceCash form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Due Taka</label>
                               <input type="text" name="invoiceDue" class="invoiceDue form-control"/>
                            </div>
                        </div>
                        </div>
                           
                            <?php 
                            $addInvoice=1;
                            $invoiceidAdd=1;
                            foreach($invoice as $invoices){
                                $invoiceid=$invoices->id;
                                $invoiceno=$invoices->purInvoiceNo;
                            }
                            $invoiceidAdd=$invoiceidAdd+$invoiceid;
                            $addInvoice=$addInvoice+$invoiceno;
                            ?>
                            <h5><input type="hidden" class="form-control" value="<?php echo $addInvoice;?>" name="invoiceNo"></h5>
                            <input type="hidden" class="form-control" value="<?php echo $invoiceidAdd;?>" name="invoiceId">
                            <button type="submit" class="btn btn-primary">Save</button>
                           </form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Start Add Category Modal -->

	<div class="modal fade" id="myModal">
		<div class="modal-dialog  modal-lg">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Suppply</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('purchase/addPurchase');?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Name</label>
                                <input type="text" class="form-control" name="itemName">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Model</label>
                                <input type="text" class="form-control" name="itemModel">
                            </div>
                        </div>
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Purchase Price</label>
                                <input type="number" class="form-control" name="itemPrice">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Sell Price</label>
                                <input type="number" class="form-control" name="itemSellPrice">
                            </div>
                        </div>
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Quantity</label>
                                <input type="number" class="form-control" name="itemQty">
                            </div>
                        </div>

                                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Item Categorey</label>
                                <select class="form-control" name="categoryId" id="exampleFormControlSelect1">
                                <?php 
                                foreach($category as $cats){
                                    $cat =$cats->catName;
                                    $cat_id=$cats->id;
                                    ?>
                                <option value="<?php echo $cat_id;?>"><?php echo $cat;?></option>
                                <?php } ?>
                                
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Item Brand</label>
                                    <select class="form-control" name="brandId" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($brands as $brand){
                                    $brandName =$brand->brandName;
                                    $brand_id=$brand->id;
                                    ?>
                                <option value="<?php echo $brand_id;?>"><?php echo $brandName;?></option>
                                <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Item Condition</label>
                                    <select class="form-control" name="itemCondition" id="exampleFormControlSelect1">
                                    
                                <option value="1">New</option>
                                <option value="0">Damage</option>
                                <option value="2">Recondtion</option>
                                
                                    </select>
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="text">Item Warrenty</label>
                                <textarea rows="4" cols="4" type="text" class="form-control" name="itemDescription"></textarea>
                            </div>
                        </div>
                        
                        
                         &nbsp &nbsp<button type="submit" class="btn btn-primary">Submit</button>
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

	<!-- End Add Category Modal -->

    
<?php echo $footer;?>

<<script>
$(document).ready(function() {
    $(".invoiceCash").keyup(function(){
    var due=$(this).val();
    var total=$(".invoiceTotal").val();
    var totaldue=parseInt(total)-parseInt(due);
    $(".invoiceDue").val(totaldue);
});
});
</script>
