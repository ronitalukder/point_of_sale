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
						<table class="table table-bordered" id="example">
							<thead>
								<tr>
								<th>#</th>
                                <th>Item Name</th>
                                <th>Model</th>
                                <th>Sell Price</th>
                                <th>Item Qty</th>
                                <th>Total Price</th>
                                
                              
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            $total=0;
                            if($sellreturnview)
                                {
                                    $index=1;
                                    $totalprice=0;

                                foreach($sellreturnview as $value)
                                {

                                $itemid=$value->id;

                                $invoiceid=$value->invoiceId;

                                $itemname=$value->itemName;

                                $itemmodel=$value->itemModel;

                                $sellitemprice=$value->sellItemPrice;

                                $sellitemqty=$value->sellItemQty;

                                $totalprice=$sellitemqty*$sellitemprice;

                                $total=$total+$totalprice;
                                
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $itemname;?></td>
    
    
                                <td><?php echo $itemmodel;?></td>
                                <td><?php echo $sellitemprice;?></td>

                                <td><?php echo $sellitemqty;?></td>

                                <td><?php echo $totalprice;?></td>
                              
    
    
    
                                <td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateCategory<?php echo $itemid;?>">Return</button>
									</td>

                                        <!-- Start Add Category Modal -->

    <div class="modal modal-slow-time" id="UpdateCategory<?php echo $itemid;?>">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Sell Return Quantity</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php echo base_url('sell/returnquantity');?>" method="post">
                     <input type="hidden" class="form-control" value="<?php echo $itemid;?>" name="itemid" id="category">
                      <input type="hidden" class="form-control" value="<?php echo $invoiceid;?>"name="invoiceid" id="category">
                    <div class="form-group">
                        <label for="text">Quantity</label>
                        <input type="number" class="form-control" value="1" name="quantity" id="category">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
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

                                  


                                     
    
                              </tr>
                              <?php } 
                                  } ?>

							</tbody>
						</table>

                       <form action="<?php echo base_url('sell/updatesellreturn');?>" method="post">
                    
                      <input type="hidden" class="form-control" value="<?php echo $invoiceid;?>"name="invoiceid" id="category">
                    <div class="form-group">
                        <label for="text">Total</label>
                        <input type="text" class="form-control" value="<?php echo $total;?>" name="total" id="category">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form> 
					</div>
				</div>
			</div>
		</div>
	</div>





	


<?php echo $footer;?>
