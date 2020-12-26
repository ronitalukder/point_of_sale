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
                                <th>Address</th>
                                <th>Category</th>
                                <th>Qutation Price</th>
                                 <th>Customer Price</th>
                                 <th>Date</th>
                              
                                <th>Action</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php
                            
                        
                            if($qutation)
                                {
                                    $index=1;
                                 
                                foreach($qutation as $value)
                                {

                                $id=$value->id;

                                $customerId=$value->id;
                             
                                $cname=$value->customerName;
                                $cmobile=$value->customerMobile;
                                $caddress=$value->customerAddress;
                                $cat=$value->qutationCat;
                                $qtotal=$value->qutationTotal;
                                $cprice=$value->customerPrice;
                                $qdate=$value->qutationDate;
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                               
    
                                <td><?php echo $cname;?></td>
                                <td><?php echo $cmobile;?></td>
                                <td><?php echo $caddress;?></td>
    
                                <td>

                                  <?php 
                                  if($cat==1){
                                    echo "PC";
                                  }
                                  else{
                                    echo "CCTV";
                                  }

                                ?>
                                  
                                </td>

                                <td><?php echo $qtotal;?></td>

                                <td><?php echo $cprice;?></td>

                                <td><?php echo $qdate;?></td>

                             
                               
                                <td><button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#UpdateExpense<?php echo $id;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp &nbsp <a href="<?php echo base_url('service/deleteService/'.$id);?>"><button class="btn  btn-sm btn-danger del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>&nbsp <a href="<?php echo base_url('qutation/qutationview/'.$customerId);?>"><button id="invoicePrint" class="btn  btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                                
                              </tr>
                              <?php } 

                                  } ?>

							</tbody>
						</table>
					</div>
				</div>
		
		</div>
	</div>




	


<?php echo $footer;?>





<script type="text/javascript">
    
// $(document).ready(function() {
//     $("#invoicePrint").click(function(){

//         var w = window.open('../qutationview/','name','width=800,height=500');
// w.onload = w.print;
// w.focus();

//     });


// });


</script>
