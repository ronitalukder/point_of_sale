<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Expense</span>
						
					</div>
					<div class="card-body ">
						<table class="table table-bordered">
							<thead>
								<tr>
								
                                <th>Total</th>
                              
								
								</tr>
							</thead>
							<tbody>
                            <tr>
                            <?php 
                            if($expense)
                                {
                                    $index=1;
                                    $expensetotal=0;
                                foreach($expense as $value)
                                {
                                // $sellId=$value->id;
                                $employeeid=$value->expenseUser;
                                $total=$value->expenseTaka;

                                $expensetotal=$expensetotal+$total;
                           
                               
                                ?>
                               

                               
                             
    
                         
                                  

                                     
    
                             
                              <?php } ?>
                                 <td><?php echo $expensetotal;?></td>
                                 </tr>
                                 <?php  } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>

            <div class="col-lg-6">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Loan</span>
					
					</div>
					<div class="card-body ">
						<table class="table table-bordered">
							<thead>
								<tr>
								<th>#</th>
                                <th>Total</th>
                                
                                <th>Cash</th>
                                <th>Due</th>
                                <th>Action</th>
                               
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($loan)
                                {
                                    $totalloan =0;
                                    $index=1;
                                foreach($loan as $value)
                                {
                                // $sellId=$value->id;
                                $employeeid=$value->employeeid;
                                $total=$value->total;
                                $cash=$value->cash;
                                $due=$value->due;

                         
                               
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $total;?></td>
                                <td><?php echo $cash;?></td>
                                <td><?php echo $due;?></td>
    
                              

                <td><button data-toggle="modal" data-target="#sellcollection" class="btn  btn-sm btn-primary btn-size">Payment</button>
								</td>
                                  

                                     
    
                              </tr>
                              <?php } 
                                  } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

        <div class="row">

            <div class="col-md-12">
                 <br/>
                <form action="<?php echo base_url('employee/showItem');?>" method="post">

               
                <input type="hidden" class="form-control" value="<?php echo  $employeeid;?>" name="employeeid" id="category">
                    <div class="form-group">

                        <select class="form-control" name="itemshow" id="exampleFormControlSelect1">
                        <label for="text">Select Show Option</label>
                        <option value="1">All Payment</option>
                        <option value="2">All Expense</option>
                       
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                   
                   
                    
                </form> 
            </div>
        </div>

        <!-- All Collection / sell/ invoince -->

        <?php
        if($page==1){?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header border-primary">
                        <span>Supply Payment</span>
                       
                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered" id="example2" >
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Payment</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($loanpayment)
                                {
                                    $index=1;
                                foreach($loanpayment as $value)
                                {
                                $collId=$value->id;
                                $payment=$value->payment;
                                $date=$value->date;
                                $total=$value->total;
                                $cash=$value->cash;
                                $due=$value->due;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $payment;?></td>

                                <td><?php echo $date;?></td>

                                <td><?php echo $total;?></td>
    
                                <td><?php echo $cash;?></td>
    
                                <td><?php echo $due;?></td>

         
                                  

                                     
    
                              </tr>
                              <?php } 
                                  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        </div>

    <?php } ?>

     <?php
        if($page==2){?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header border-primary">
                        <span>Cutomer Sell Invoice</span>
                       
                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered" id="example2" >
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Expense Title</th>
                                <th>Expense Date</th>
                                <th>Expense Taka</th>
                          
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($expense)
                                {
                                    $index=1;
                                foreach($expense as $value)
                                {
                                $id=$value->id;
                                $etitle=$value->expenseTitle;
                                $edate=$value->expenseDate;
                                $etaka=$value->expenseTaka;
                              
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $etitle;?></td>

                                <td><?php echo $edate;?></td>

                                <td><?php echo $etaka;?></td>

                         
                                     
    
                              </tr>
                              <?php } 
                                  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        </div>

    <?php } ?>


     <?php
        if($page==3){?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header border-primary">
                        <span>Cutomer Service Collection</span>
                       
                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered" id="example2" >
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Collection</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($collection)
                                {
                                    $index=1;
                                foreach($collection as $value)
                                {
                                $collId=$value->id;
                                $collection=$value->collection;
                                $date=$value->date;
                                $total=$value->total;
                                $cash=$value->cash;
                                $due=$value->due;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $collection;?></td>

                                <td><?php echo $date;?></td>

                                <td><?php echo $total;?></td>
    
                                <td><?php echo $cash;?></td>
    
                                <td><?php echo $due;?></td>

         
                                  

                                     
    
                              </tr>
                              <?php } 
                                  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        </div>

    <?php } ?>


       <?php
        if($page==4){?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header border-primary">
                        <span>Cutomer Service Invoice</span>
                       
                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered" id="example2" >
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Recive Date</th>
                                <th>Delivery Date</th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                                <th>Action</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($serviceinvoice)
                                {
                                    $index=1;
                                foreach($serviceinvoice as $value)
                                {
                                $id=$value->id;
                                $pName=$value->productName;
                                $rdate=$value->receiveDate;
                                $dtotal=$value->deliveryDate;
                                $total=$value->total;
                                $due=$value->due;
                                $cash=$value->cash;
                                
                            
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $pName;?></td>

                                <td><?php echo $rdate;?></td>

                                <td><?php echo $dtotal;?></td>

                                <td><?php echo $total;?></td>

                                <td><?php echo $cash;?></td>

                                <td><?php echo $due;?></td>


                                <td><a href="<?php echo base_url('customer/invoiceItem/'.$id);?>"><button class="btn  btn-sm btn-danger">Show Invoice</button></a></td>


                                  

                                     
    
                              </tr>
                              <?php } 
                                  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        </div>

    <?php } ?>



	</div>







            <!-- Start Add Category Modal -->

    <div class="modal modal-slow-time fade" id="sellcollection">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Loan Payment</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php echo base_url('employee/loanpayment');?>" method="post">

 
                <input type="hidden" class="form-control" value="<?php echo  $employeeid;?>" name="employeeid" id="category">
                    <div class="form-group">
                        <label for="text">Payment Taka</label>
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





            <!-- Start Add Category Modal -->

    <div class="modal modal-slow-time fade" id="servicecollection">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Customer Service Collection</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php echo base_url('customer/serviceCollection');?>" method="post">

                <input type="hidden" class="form-control" value="<?php echo  $serviceId;?>" name="serviceId" id="category">
                <input type="hidden" class="form-control" value="<?php echo  $serviceCustomerId;?>" name="serviceCustomerId" id="category">
                    <div class="form-group">
                        <label for="text">Service Cash</label>
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
                                     





	


<?php echo $footer;?>
