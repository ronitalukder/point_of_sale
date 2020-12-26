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
						<table class="table table-bordered">
							<thead>
								<tr>
								<th scope="col">Index</th>
								<th scope="col">IncomeType</th>
                                
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 
                                $i=1;
								foreach($incomelist as $incomelists){

                                    $id=$incomelists->id;
                                    $name=$incomelists->incomeName;
                                    
								?>
								<tr>
									
									<td><?php echo $i++;?></td>
                                    <td><?php echo $name;?></td>
                                  
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateSupply<?php echo $id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('products/deleteCat/'.$id);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Suppply</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('employee/addEmployee');?>" method="post">
					<div class="form-group">
						<label for="text">Employee Name</label>
						<input type="text" class="form-control" name="name" id="category">
					</div>
                    <div class="form-group">
						<label for="text">Employee Mobile</label>
						<input type="text" class="form-control" name="mobile" id="category">
					</div>
                    <div class="form-group">
						<label for="text">Employee Address</label>
						<input type="text" class="form-control" name="address" id="category">
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



	


<?php echo $footer;?>
