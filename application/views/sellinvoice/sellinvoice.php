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
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Invoice</th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                                <th>Date</th>
                                <th>Time</th>
                              
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($invoice)
                                {
                                    $index=1;
                                foreach($invoice as $value)
                                {
                                $invoiceId=$value->id;
                                $customerName=$value->name;
                                $customerMobile=$value->mobile;
                                $invoiceNo=$value->invoiceNo;
                                $invoiceTotal=$value->invoiceTotal;
                                $invoiceCash=$value->invoiceCash;
                                $invoiceDue=$value->invoiceDue;
                                $invoiceDate=$value->date;
                                $invoiceTime=$value->time;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $customerName;?></td>
    
    
                                <td><?php echo $customerMobile;?></td>
                                <td><?php echo $invoiceNo;?></td>
                                <td><?php echo $invoiceTotal;?></td>
                                <td><?php echo $invoiceCash;?></td>
                                <td><?php echo $invoiceDue;?></td>
                                <td><?php echo $invoiceDate;?></td>
                                <td><?php echo $invoiceTime;?></td>
    
    
    
    
                                <td><a href="<?php echo base_url('#');?>"><button class="btn  btn-primary btn-sm btn-size" title="Edit Customer"><i class="fa fa-edit"></i></button></a>
									&nbsp <a href="<?php echo base_url('invoice/viewinvoice/'.$invoiceId);?>"><button class="btn  btn-sm btn-primary btn-size"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                                  


                                     
    
                              </tr>
                              <?php } 
                                  } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>





	


<?php echo $footer;?>
