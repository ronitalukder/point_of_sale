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
								<th scope="col">Name</th>
                                <th scope="col">Amout</th>
                                <th scope="col">Amout</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 
                                $i=1;
								foreach($loan as $value){

                                    $id=$value->id;
                             
                                    $employeeid=$value->employeeid;
                                    $name=$value->name;
                                    $taka=$value->taka;
                                    $date=$value->date;
								?>
								<tr>
									
									<td><?php echo $i++;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $taka;?></td>
                                    <td><?php echo $date;?></td>
									<td><button class="btn  btn-primary btn-sm btn-size" data-toggle="modal" data-target="#loan<?php echo $id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp <a href="<?php echo base_url('employee/loanDelete/'.$id);?>"><button class="btn  btn-sm btn-danger del btn-size"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
									

                                    

	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time fade" id="loan<?php echo $id;?>">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Update Loan Amount</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('employee/loanamountUpdate');?>" method="post">

                <input type="hidden" class="form-control" value="<?php echo $id;?>" name="id" id="category">
					<div class="form-group">
						<label for="text">Loan Amount</label>
						
						<input type="text" class="form-control" value="<?php echo $taka;?>" name="taka" id="category">
					</div>

                    <div class="form-group">

                    <label for="division">Loan Date</label>

                    <?php

                    $date=date('Y-m-d');

                    ?>
                    <input type="date" value="<?php echo $date;?>" class="form-control" name="date" required="required" />

                </div>

                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loan Owner Name</label>
                                    <select class="form-control" name="employeeid" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($employee as $employees){
                                    $emId =$employees->id;
                                    $emName=$employees->name;
                                    ?>
                           
                                <option value="<?php echo $emId;?>" <?php if($emId=="$employeeid") echo 'selected="selected"'; ?> ><?php echo $emName;?></option>
                                <?php } ?>
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



	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Loan Amount</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('employee/loanamount');?>" method="post">
					<div class="form-group">
						<label for="text">Loan Amount</label>
						
						<input type="text" class="form-control" name="taka" id="category">
					</div>

                    <div class="form-group">

                    <label for="division">Loan Date</label>

                    <?php

                    $date=date('Y-m-d');

                    ?>
                    <input type="date" value="<?php echo $date;?>" class="form-control" name="date" required="required" />

                </div>

                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loan Owner Name</label>
                                    <select class="form-control" name="employeeid" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($employee as $employees){
                                    $emId =$employees->id;
                                    $emName=$employees->name;
                                    ?>
                                <option value="<?php echo $emId;?>"><?php echo $emName;?></option>
                                <?php } ?>
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



	


<?php echo $footer;?>
