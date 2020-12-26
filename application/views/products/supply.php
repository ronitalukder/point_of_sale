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
								<th scope="col">Supply Name</th>
                                <th scope="col">Supply Address</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach($supply as $supplys){

                                    $sid=$supplys->id;
                                    $sName=$supplys->supplyName;
                                    $sAddress=$supplys->supplyAddress;
								?>
								<tr>
									<th scope="row"><?php echo $sid;?></th>
									<td><?php echo $sName;?></td>
                                    <td><?php echo $sAddress;?></td>
									<td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateSupply<?php echo $sid;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('products/deleteCat/'.$sid);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
									<!-- Start Update Category Modal -->

									<div class="modal modal-slow-time" id="UpdateSupply<?php echo $sid;?>">
										<div class="modal-dialog">
											<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h5 class="modal-title btn-md"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp Update Supply</h5>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form action="<?php echo base_url('products/updateSupply');?>" method="post">
													<input type="hidden" name="id" class="form-control" value="<?php echo $sid;?>" id="id">
													<div class="form-group">
														<label for="text">Supply Name</label>
														<input type="text" name="supplyName" class="form-control" value="<?php echo $sName;?>" id="catName">
													</div>
                                                    <div class="form-group">
                                                        <label for="text">Supply Address</label>
                                                        <textarea rows="4" cols="4" type="text" class="form-control" name="supplyAddress"><?php echo $sAddress;?></textarea>
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
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Suppply</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('products/addSupply');?>" method="post">
					<div class="form-group">
						<label for="text">Supply Name</label>
						<input type="text" class="form-control" name="supplyName" id="category">
					</div>
                    <div class="form-group">
						<label for="text">Supply Address</label>
						<textarea rows="4" cols="4" type="text" class="form-control" name="supplyAddress"></textarea>
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
