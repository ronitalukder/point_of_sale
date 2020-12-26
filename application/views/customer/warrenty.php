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
                               
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Product</th>
                                <th>Company</th>
                                <th>ReciveDate</th>
                                <th>Problem</th>
                                 <th>Information</th>
                                <th>Status</th>
                              
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php
                            
                            $invoiceAdd=1;
                            if($warrenty)
                                {
                                    $index=1;
                                 
                                foreach($warrenty as $value)
                                {
                                $id=$value->id;
                             
                                $cname=$value->customerName;
                                $cmobile=$value->customerMobile;
                                $productName=$value->productName;
                                $companyname=$value->companyname;
                                $receiveDate=$value->recivedate;
                               
                                $problem=$value->problem;
                                $productinfo=$value->productinfo;
                                $status=$value->status;
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                               
    
                                <td><?php echo $cname;?></td>
                                <td><?php echo $cmobile;?></td>
                                <td><?php echo $productName;?></td>
                                <td><?php echo $companyname;?></td>
    
                                <td><?php echo $receiveDate;?></td>

                                <td><?php echo $problem;?></td>

                                <td><?php echo $productinfo;?></td>


                                <td>
                                   <?php
                                   if($status==0){

                                       echo "pendding";
                                   }
                                  
                                   else{
                                       echo "complete";
                                   }
                                   ?>
                                
                                </td>
                                
                                <td><button class="btn  btn-primary btn-sm btn-size" data-toggle="modal" data-target="#UpdateExpense<?php echo $id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp<a href="<?php echo base_url('service/deleteService/'.$id);?>"><button class="btn  btn-sm btn-danger del btn-size"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                
                              </tr>

                            <?php }
                          } ?>
                             
							</tbody>
                            
						</table>
					</div>
				</div>
		
		</div>
	</div>



  <!-- Start Add Category Modal -->

  <div class="modal modal-slow-time fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Warrenty</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

         <form action="<?php echo base_url('customer/addwarrenty');?>"  method="post" enctype="multipart/form-data">

                            
                                                    

                <div class="row">
                <div class="col-md-6">

                <div class="form-group">

                    <label for="division">Customer Name</label>

                <input type="text"  class="form-control customern" name="customerName" />

                </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="division">Customer Mobile</label>

                    <input type="text"  class="form-control customerm" name="customerMobile" />

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="division">Product Name</label>

                    <input type="text"  class="form-control" name="productName"  />

                    </div>

                </div>

                <div class="col-md-6">

                <div class="form-group">

                    <label for="division">Company Name</label>

                <input type="text"  class="form-control" name="companyname"  />

                </div>

                </div>

                

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="division">Problem Title</label>

                      

                    <textarea type="text" cols="4" rows="2" class="form-control"  name="problem"></textarea>

                    </div>

                    </div>

                    <div class="col-md-12">

<div class="form-group">

    <label for="division">Product Info</label>

  

<textarea type="text" cols="4" rows="2" class="form-control"  name="productInfo"></textarea>

</div>

</div>

                     
                
                <div class="col-md-6">

<div class="form-group">

    <label for="division">Recive Date</label>

    
    <?php $date=date('Y-m-d');?>

<input type="date"  class="form-control" value="<?php echo $date;?>" name="receivedate"  />

</div>

</div>

              




                
                     
                <div class="col-md-6">
                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                   
                                <option value="0">pendding</option>
                                <option value="1">Complete</option>
                           
                                
                               
                                    </select>
                            </div>

                </div>


                <div class="col-md-6">

       

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




<script type="text/javascript">

    $(document).ready(function() {

    $("#cash").keyup(function(){
    var due=$(this).val();
    var total=$("#total").val();
    var totaldue=parseInt(total)-parseInt(due);
    $("#due").val(totaldue);
});
    })
</script>
