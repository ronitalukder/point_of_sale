<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Cutomer Sell Cash</span>
						<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#myModal">
  							<i class="fa fa-plus" aria-hidden="true"></i>&nbsp Add 
						</button>
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
                            if($sellcash)
                                {
                                    $index=1;
                                foreach($sellcash as $value)
                                {
                                $sellId=$value->id;
                                $sellCustomerId=$value->customerId;
                                $total=$value->total;
                                $cash=$value->cash;
                                $due=$value->due;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $total;?></td>
    
                                <td><?php echo $cash;?></td>
    
                                <td><?php echo $due;?></td>

                <td><button data-toggle="modal" data-target="#sellcollection" class="btn  btn-sm btn-primary btn-size">Collection</button>
								</td>
                                  

                                     
    
                              </tr>
                              <?php } 
                                  } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Customer Service Cash</span>
						<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#myModal">
  							<i class="fa fa-plus" aria-hidden="true"></i>&nbsp Add 
						</button>
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
                            if($servicecash)
                                {
                                    $index=1;
                                foreach($servicecash as $value)
                                {
                                $serviceId=$value->id;
                                $serviceCustomerId=$value->customerId;
                                $total=$value->total;
                                $cash=$value->cash;
                                $due=$value->due;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $total;?></td>
    
                                <td><?php echo $cash;?></td>
    
                                <td><?php echo $due;?></td>

                                <td><button data-toggle="modal" data-target="#servicecollection" class="btn  btn-sm btn-primary btn-size">Collection</button>
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
                <form action="<?php echo base_url('customer/showItem');?>" method="post">

               
                <input type="hidden" class="form-control" value="<?php echo  $sellCustomerId;?>" name="customerId" id="category">
                    <div class="form-group">

                        <select class="form-control" name="itemshow" id="exampleFormControlSelect1">
                        <label for="text">Select Show Option</label>
                        <option value="1">All Sell Collection</option>
                        <option value="2">All Sell Invoice</option>
                        <option value="3">All Service Collection</option>
                        <option value="4">All Service Invoice</option>
                        >
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
                        <span>Cutomer Sell Collection</span>
                       
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
                                <th>Invoice</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                                <th>Time</th>
                                <th>Action</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($sellinvoice)
                                {
                                    $index=1;
                                foreach($sellinvoice as $value)
                                {
                                $id=$value->id;
                                $invoice=$value->invoiceNo;
                                $date=$value->date;
                                $total=$value->invoiceTotal;
                                $due=$value->invoiceDue;
                                $cash=$value->invoiceCash;
                                $time=$value->time;
                            
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $invoice;?></td>

                                <td><?php echo $date;?></td>

                                <td><?php echo $total;?></td>

                                <td><?php echo $cash;?></td>

                                <td><?php echo $due;?></td>

                                <td><?php echo $time;?></td>

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
                <h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Customer Sell Collection</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php echo base_url('customer/sellCollection');?>" method="post">

                <input type="hidden" class="form-control" value="<?php echo  $sellId;?>" name="sellId" id="category">
                <input type="hidden" class="form-control" value="<?php echo  $sellCustomerId;?>" name="sellCustomerId" id="category">
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
