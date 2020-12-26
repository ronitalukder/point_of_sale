<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Employee Daily Expense</span>
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
                               
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                            if($dayexpense)
                                {
                                    $index=1;
                                    $daytotal=0;
                                foreach($dayexpense as $value)
                                {
                                
                                $dexp=$value->expenseTaka;
                                $daytotal=$daytotal+$dexp;
                                }
                             
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $daytotal;?></td>
    
                               

                                     
    
                              </tr>
                              <?php 
                                  } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Emplyee Monthly Expense</span>
						<span><?php echo $date=date('d-m-y');?>
					</div>
					<div class="card-body ">
						<table class="table table-bordered">
							<thead>
								<tr>
								<th>#</th>
                                <th>Total</th>
                                
								</tr>
							</thead>
							<tbody>
                            <?php 
                           if($monthexpense)
                           {
                               $index=1;
                               $mtotal=0;
                           foreach($monthexpense as $value)
                           {
                           
                           $dexp=$value->expenseTaka;
                           $mtotal=$mtotal+$dexp;
                           }
                        
                          
                           ?>
                           <tr>

                           <td><?php echo $index++;?></td>

                           <td><?php echo $mtotal;?></td>

                          

                                

                         </tr>
                         <?php 
                             } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
     </div>
        

<?php echo $footer;?>
