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
								<th scope="col">Index</th>
								<th scope="col">Name</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Address</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 
                                $i=1;
								foreach($customer as $customers){

                                    $id=$customers->id;
                                    $name=$customers->name;
                                    $mobile=$customers->mobile;
                                    $address=$customers->address
								?>
								<tr>
									
									<td><?php echo $i++;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $mobile;?></td>
                                    <td><?php echo $address;?></td>
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateCustomer<?php echo $id;?>">Collection</button>
									</td>
                                
                                    
	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time" id="UpdateCustomer<?php echo $id;?>">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Customer</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
                <form action="<?php echo base_url('customer/addcollection');?>" method="post">

                <input type="hidden" class="form-control" value="<?php echo  $id;?>" name="id" id="category">
					<div class="form-group">
						<label for="text">Customer Name</label>
						<input type="text" class="form-control" value="<?php echo  $name;?>" name="name" id="category">
					</div>
                   

                    <div class="form-group">
						<label for="text">Amount</label>
						<input type="text" class="form-control"  name="amount">
					</div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Collection Type</label>
                        <select class="form-control" name="type" id="exampleFormControlSelect1">
                            <option value="1">Sell Cash</option>
                            <option value="2">Service Cash</option>
                        </select>
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
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>




	


<?php echo $footer;?>
