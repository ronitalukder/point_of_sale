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
								<th scope="col">Supply</th>
                                <th scope="col">Total</th>
                                <th scope="col">Cash</th>
                                <th scope="col">Due</th>
								<th scope="col">Date</th>
								
								<th scope="col">Invoice</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 

                           
                            $i=1;
                                
                                
								foreach($purchase as $items){

                                    $purInvoiceId=$items->id;

                                    $purInvoiceTotal=$items->purInvoiceTotal;
                                  
                                    $purInvoiceCash=$items->purInvoiceCash;
                                  
									$purInvoiceDue=$items->purInvoiceDue;

									$purInvoiceDate=$items->purInvoiceDate;

									$supplyName=$items->supplyName;

									$purInvoiceNo=$items->purInvoiceNo;

                           

                                 
                               
								?>
								<tr>
									<th scope="row"><?php echo $i++;?></th>

									<td><?php echo $supplyName;?></td>
                                    
									<td><?php echo $purInvoiceTotal;?></td>
                              
                                    
                                    <td><?php echo $purInvoiceCash;?></td>
                                 
                                    <td><?php echo $purInvoiceDue;?></td>

                                    <td><?php echo $purInvoiceDate;?></td>

								

									<td><?php echo $purInvoiceNo;?></td>
                                    
                                  
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateItem<?php echo $purInvoiceId;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('purchase/deleteItem/'.$purInvoiceId);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
								
								</tr>
								<?php } ?>
                               
							</tbody>

                            
						</table>
                     

                        
					</div>
				</div>
			</div>
		</div>
	</div>





    
<?php echo $footer;?>

