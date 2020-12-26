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
						<table class="table table-bordered " id="example">
							<thead>
								<tr>
								<th scope="col">#</th>
                                <th scope="col">Purchase Item</th>
                                <th scope="col">Model</th>
                                <th scope="col">Purchase Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Date</th>
                                <th scope="col">Supply</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 

                           
							$i=1;
							$totalprice=0;
							$totalpurchase=0;
                                
                                
								foreach($item as $items){

                                   

                                    $purItem=$items->purItem;
                                    $model=$items->model;
                                  
                                    $purQty=$items->purQty;
                                  
									$purPrice=$items->purPrice;

									$purdate=$items->purdate;
									$supplyName=$items->supplyName;

									$totalprice=$purPrice*$purQty;

									$totalpurchase=$totalpurchase+$totalprice;
                           

                                 
                               
								?>
								<tr>
									<th scope="row"><?php echo $i++;?></th>
                                    
									<td><?php echo $purItem;?></td>
									<td><?php echo $model;?></td>
                              
                                    
                                    
                                 
                                    <td><?php echo $purPrice;?></td>

                                    <td><?php echo $purQty;?></td>

                                    <td><?php echo $totalprice;?></td>
                                    <td><?php echo $purdate;?></td>
                                    <td><?php echo $supplyName;?></td>

                            
                                    
                                  
								
								
								</tr>
								<?php } ?>
                               
							</tbody>
							<h4 class="pull-right">Total Purchase : <?php echo $totalpurchase;?></h4>

                            
						</table>

					
                     

                        
					</div>
				</div>
			</div>
		</div>
	</div>





    
<?php echo $footer;?>

