<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card ">
					<div class="card-header border-primary">
						<span> Brand</span>
						<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#myModal">
  							<i class="fa fa-plus" aria-hidden="true"></i>&nbsp Add 
						</button>
					</div>
					<div class="card-body ">
						<table class="table table-bordered">
							<thead>
								<tr>
								<th scope="col">Index</th>
								<th scope="col">Brand Name</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach($brand as $brands){
								?>
								<tr>
									<th scope="row"><?php echo $brands->id;?></th>
									<td><?php echo $brands->brandName;?></td>
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateBrand<?php echo $brands->id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('products/deleteBrand/'.$brands->id);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
									<!-- Start Update Category Modal -->

									<div class="modal modal-slow-time" id="UpdateBrand<?php echo $brands->id;?>">
										<div class="modal-dialog">
											<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h5 class="modal-title btn-md"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp Update Brand</h5>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form action="<?php echo base_url('products/updateBrand');?>" method="post">
													<input type="hidden" name="id" class="form-control" value="<?php echo $brands->id;?>" id="id">
													<div class="form-group">
														<label for="text">Category Name</label>
														<input type="text" name="brand" class="form-control" value="<?php echo $brands->brandName;?>" id="catName">
													</div>
													<button type="submit" class="btn btn-primary">Update</button>
												</form> 
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>

											</div>
										</div>
									</div>
									<!-- End Update Category Modal -->
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
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Brnad</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('products/addBrand');?>" method="post">
					<div class="form-group">
						<label for="text">Brand Name</label>
						<input type="text" class="form-control" name="brand" id="category">
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
