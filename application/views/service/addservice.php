<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
            <div class="col-lg-6">
          
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
                                <th>Address</th>
                               
                                <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                            $invoiceAdd=1;
                            if($customer)
                                {
                                    $index=1;
                                 
                                foreach($customer as $value)
                                {
                                
                             
                                $cname=$value->name;
                                $cmobile=$value->mobile;
                                $caddress=$value->address;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                            
                                <td id="cname"><?php echo $cname;?></td>
                                    <td id="cmobile"><?php echo $cmobile;?></td>
                                    <td id="caddress"><?php echo $caddress;?></td>
                   

                                
                      
                                <td><button class="btn  btn-primary btn-sm btn-customer">Add</button>
                                    </td>
                                
                              </tr>
                              <?php } 

                          
                                  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
			<div class="col-lg-5">
                 <div class="card ">
                    <div class="card-header border-primary">
                        <span>Featured</span>
                        <a href="<?php echo base_url('service/serviceAdd');?>"><button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp Add 
                        </button></a>
                    </div>
                    <div class="card-body ">
                <form action="<?php echo base_url('service/insertService');?>"  method="post" enctype="multipart/form-data">

                            
                                                    

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

                        <label for="division">Customer Address</label>

                    <input type="text"  class="form-control customera" name="customerAddress" />

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="division">Product Name</label>

                    <input type="text"  class="form-control" name="productName"  />

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
                                    <label for="exampleFormControlSelect1">Service Category</label>
                                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($servicelist as $servicelists){
                                    $sid   =$servicelists->id;
                                    $serviceNames =$servicelists->serviceName;
                                    ?>
                                <option value="<?php echo $sid;?>"><?php echo $serviceNames;?></option>
                                <?php } ?>
                                    </select>
                            </div>

                </div>

                <div class="col-md-6">

<div class="form-group">

    <label for="division">Recive Date</label>

    
    <?php $date=date('Y-m-d');?>

<input type="date"  class="form-control" value="<?php echo $date;?>" name="receiveDate"  />

</div>

</div>

              

                    <div class="col-md-6">

<div class="form-group">

    <label for="division">Delivery Date</label>

   

<input type="date"  class="form-control"  name="deliveryDate"  />

</div>

</div>



<div class="col-md-6">

<div class="form-group">

    <label for="division">Total</label>

<input type="text"  class="form-control" name="total" id="total" />

</div>

</div>





<div class="col-md-6">

<div class="form-group">

    <label for="division">Cash</label>

<input type="text"  class="form-control" name="cash" id="cash" />

</div>

</div>

                

                <div class="col-md-6">

                <div class="form-group">

                    <label for="division">Due</label>

                <input type="text"  class="form-control" name="due" id="due" />

                </div>

                </div>

                
                     
                <div class="col-md-6">
                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                   
                                <option value="0">pendding</option>
                                <option value="1">Running</option>
                                <option value="2">Complete</option>
                                <option value="3">Return</option>
                               
                                    </select>
                            </div>

                </div>


                <div class="col-md-6">

                <div class="form-group">

                    <label for="division">Invoice</label>
                    <?php 
                     $invoiceAdd=1;
                            if($service)
                                {
                                    $index=1;
                                 
                                foreach($service as $value)
                                {
                                
                                $invoice=$value->invoice;
                            }
                               $invoiceAdd=$invoice+$invoiceAdd;
                        }
                             
                                ?>

                    <?php if($invoiceAdd<300){
                        $invoiceAdd=3000;
                    }

                    else{
                        $invoiceAdd;
                    }
                    ?>

                <input type="text"  class="form-control" value="<?php echo $invoiceAdd;?>" name="invoice" required="required" />

                </div>

                </div>

                


                


       



                </div>


                <button type="submit" class="btn btn-primary btn-sm fine">Save</button>


                </form>
            </div>
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



    $('.btn-customer').click(function(){
     var cn=$("#cname").text();
     var cm=$("#cmobile").text();
     var ca=$("#caddress").text();
    $(".customern").val(cn);
    $(".customerm").val(cm);
    $(".customera").val(ca);

    
  });
    })
</script>
