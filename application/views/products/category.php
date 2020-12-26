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
								<th scope="col">Category Name</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach($category as $cat){
								?>
								<tr>
									<th scope="row"><?php echo $cat->id;?></th>
									<td><?php echo $cat->catName;?></td>
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateCategory<?php echo $cat->id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('products/deleteCat/'.$cat->id);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
									<!-- Start Update Category Modal -->

									<div class="modal modal-slow-time" id="UpdateCategory<?php echo $cat->id;?>">
										<div class="modal-dialog">
											<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h5 class="modal-title btn-md"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp Update Category</h5>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form action="<?php echo base_url('products/updateCategory');?>" method="post">
													<input type="hidden" name="id" class="form-control" value="<?php echo $cat->id;?>" id="id">
													<div class="form-group">
														<label for="text">Category Name</label>
														<input type="text" name="category" class="form-control" value="<?php echo $cat->catName;?>" id="catName">
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
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Category</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('products/addCategory');?>" method="post">
					<div class="form-group">
						<label for="text">Category Name</label>
						<input type="text" class="form-control" name="category" id="category">
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
