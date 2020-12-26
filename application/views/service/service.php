<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Featured</span>
						<a href="<?php echo base_url('service/serviceAdd');?>"><button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#myModal">
  							<i class="fa fa-plus" aria-hidden="true"></i>&nbsp Add 
						</button></a>
					</div>
					<div class="card-body ">
						<table class="table table-bordered" id="example">
							<thead>
								<tr>
								<th>#</th>
                               
                                <th>Cutomer Name</th>
                                <th>Mobile</th>
                                <th>Product</th>
                                <th>Recive Date</th>
                                <th>Delivery Date</th>
                                 <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                                <th>Status</th>
                                <th>Invoice</th>
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php
                            
                            $invoiceAdd=1;
                            if($service)
                                {
                                    $index=1;
                                 
                                foreach($service as $value)
                                {
                                $id=$value->id;
                             
                                $cname=$value->name;
                                $cmobile=$value->mobile;
                                $productName=$value->productName;
                                $receiveDate=$value->receiveDate;
                                $deliveryDate=$value->deliveryDate;
                                $total=$value->total;
                                $cash=$value->cash;
                                $status=$value->status;
                                $invoice=$value->invoice;
                                $due=$value->due;
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                               
    
                                <td><?php echo $cname;?></td>
                                <td><?php echo $cmobile;?></td>
                                <td><?php echo $productName;?></td>
    
                                <td><?php echo $receiveDate;?></td>

                                <td><?php echo $deliveryDate;?></td>

                                <td><?php echo $total;?></td>

                                <td><?php echo $cash;?></td>

                                <td><?php echo $due;?></td>

                                <td>
                                   <?php
                                   if($status==0){

                                       echo "pendding";
                                   }
                                   elseif($status==1){
                                       echo "running";
                                   }
                                   elseif($status==2){
                                       echo "complete";
                                   }
                                   else{
                                       echo "return";
                                   }
                                   ?>
                                
                                </td>
                                <td><?php echo $invoice;?></td>
                                <td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateExpense<?php echo $id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('service/deleteService/'.$id);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                
                              </tr>
                              <?php } 

                              $invoiceAdd=$invoice+$invoiceAdd;
                                  } ?>

							</tbody>
						</table>
					</div>
				</div>
		
		</div>
	</div>




	


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
