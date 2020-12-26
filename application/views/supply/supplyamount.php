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
                                <th>Supplier </th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Due</th>
                               
                           
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($supplyamount)
                                {
                                    $index=1;
                                foreach($supplyamount as $value)
                                {
                                $id=$value->id;
                                $name=$value->supplyName;
                                $total=$value->total;
                                $cash=$value->cash;
                                $due=$value->due;
                            
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $name;?></td>
    
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
	</div>





	


<?php echo $footer;?>
