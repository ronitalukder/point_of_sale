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
                                <th>Income Type</th>
                                <th>Income Title</th>
                                <th>Income Taka</th>
                                <th>Income Date</th>
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($income)
                                {
                                    $index=1;
                                foreach($income as $incomes)
                                {
                                $incomeId=$incomes->id;
                                $incomeName=$incomes->incomeName;
                                $incomeDate=$incomes->incomeDate;
                                $incomeTaka=$incomes->incomeTaka;
                                $incomeTitle=$incomes->incomeTitle;
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $incomeName;?></td>
    
    
                                <td><?php echo $incomeTitle;?></td>
    
                                <td><?php echo $incomeTaka;?></td>
    
                                <td><?php echo $incomeDate;?></td>
    
    
    
    
                                <td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateExpense<?php echo $incomeId;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('income/deleteIcome/'.$incomeId);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                  


    
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
            <form action="<?php echo base_url('income/insertIncome');?>"  method="post" enctype="multipart/form-data">

                            
                                                    

                <div class="row">

                <div class="col-md-12">
                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Income Name</label>
                                    <select class="form-control" name="incomeId" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($incomelist as $incomelists){
                                    $incomeId =$incomelists->id;
                                    $incomeName=$incomelists->incomeName;
                                    ?>
                                <option value="<?php echo $incomeId;?>"><?php echo $incomeName;?></option>
                                <?php } ?>
                                    </select>
                            </div>

                </div>


                

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Service Title</label>

                <input type="text"  class="form-control" name="incomeTitle" required="required" />

                </div>

                </div>

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Service Date</label>

                    <?php

                    $date=date('Y-m-d');

                    ?>
                    <input type="date" value="<?php echo $date;?>" class="form-control" name="incomeDate" required="required" />

                </div>

                </div>

                <div class="col-md-12">

                <div class="form-group">

                    <label for="division">Service Taka</label>

                    <input type="number" min="1" class="form-control" name="incomeTaka" required="required" />

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
