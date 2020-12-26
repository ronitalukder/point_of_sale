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
                                <th>Customer Name </th>
                                <th>Mobile</th>
                                <th>Address</th>
                               
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($customer)
                                {
                                    $index=1;
                                foreach($customer as $value)
                                {
                                $id=$value->id;
                                $name=$value->name;
                               
                                $mobile=$value->mobile;
                                $address=$value->address;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $name;?></td>
    
                                <td><?php echo $mobile;?></td>
    
                                <td><?php echo $address;?></td>

                                <td><a href="<?php echo base_url('customer/profile/'.$id);?>"><button class="btn  btn-sm btn-primary btn-size">profile</button></a>
								</td>
                                  


        	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time fade" id="customercash<?php echo $id;?>">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Customer Cash</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
                <form action="<?php echo base_url('customer/addCustomerCash');?>" method="post">

                <input type="hidden" class="form-control" value="<?php echo  $id;?>" name="id" id="category">
                <input type="hidden" class="form-control" value="<?php echo  $customerId;?>" name="customerId" id="category">
					<div class="form-group">
						<label for="text">Cash</label>
						<input type="text" class="form-control"  name="cashTaka" id="category">
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
					</div>
				</div>
			</div>
		</div>
	</div>





	


<?php echo $footer;?>
