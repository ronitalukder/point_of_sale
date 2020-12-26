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
                                <th>Expennse User</th>
                                <th>Expennse Title</th>
                                <th>Expennse Date</th>
                                <th>Expennse Taka</th>
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($expense)
                                {
                                    $index=1;
                                foreach($expense as $value)
                                {
                                $expense_id=$value->id;
                                $expense_user=$value->name;
                                $expense_title=$value->expenseTitle;
                                $expense_date=$value->expenseDate;
                                $expense_taka=$value->expenseTaka;
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $expense_user;?></td>
    
    
                                <td><?php echo $expense_title;?></td>
    
                                <td><?php echo $expense_date;?></td>
    
                                <td><?php echo $expense_taka;?></td>
    
    
    
    
                                <td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateExpense<?php echo $expense_id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('expense/deleteExpense/'.$expense_id);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                  


                                  	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time fade" id="UpdateExpense<?php echo $expense_id;?>">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Expense</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
            <form action="<?php echo base_url('expense/updateExpense');?>"  method="post" enctype="multipart/form-data">

                            
                                                    

                <div class="row">

                <div class="col-md-12">
                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Expense</label>
                                    <select class="form-control" name="brandId" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($employee as $employees){
                                    $emId =$employees->id;
                                    $emName=$employees->name;
                                    ?>
                                <option value="<?php echo $emId;?>"><?php echo $emName;?></option>
                                <?php } ?>
                                    </select>
                            </div>

                </div>

                

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Expense Title</label>

                <input type="text"  class="form-control" value="<?php echo $expense_title;?>" name="expenseTitle" required="required" />

                </div>

                </div>

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Expense Date</label>

                    <?php

                    $date=date('Y-m-d');

                    ?>
                    <input type="date" value="<?php echo $expense_date;?>" class="form-control" name="expenseDate" required="required" />

                </div>

                </div>

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Expense Taka</label>

                    <input type="number" min="1" class="form-control" value="<?php echo $expense_taka;?>" name="expenseTaka" required="required" />

                </div>

                </div>





                </div>


                <button type="submit" class="btn btn-primary btn-sm fine">Update</button>


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



	<!-- Start Add Category Modal -->

	<div class="modal modal-slow-time fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Expense</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
            <form action="<?php echo base_url('expense/addExpense');?>"  method="post" enctype="multipart/form-data">

                            
                                                    

                <div class="row">

                <div class="col-md-12">
                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Expense</label>
                                    <select class="form-control" name="expenseUser" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($employee as $employees){
                                    $emId =$employees->id;
                                    $emName=$employees->name;
                                    ?>
                                <option value="<?php echo $emId;?>"><?php echo $emName;?></option>
                                <?php } ?>
                                    </select>
                            </div>

                </div>


                

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Expense Title</label>

                <input type="text"  class="form-control" name="expenseTitle" required="required" />

                </div>

                </div>

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Expense Date</label>

                    <?php

                    $date=date('Y-m-d');

                    ?>
                    <input type="date" value="<?php echo $date;?>" class="form-control" name="expenseDate" required="required" />

                </div>

                </div>

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Expense Taka</label>

                    <input type="number" min="1" class="form-control" name="expenseTaka" required="required" />

                </div>

                </div>





                </div>


                <button type="submit" class="btn btn-primary btn-sm fine">Save</button>


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
