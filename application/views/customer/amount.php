<?php echo $header;?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card ">
					<div class="card-header border-primary">
						<span>Featured</span>
						
					</div>
					<div class="card-body ">
						<table class="table table-bordered">
							<thead>
								<tr>
								<th scope="col">Index</th>
								<th scope="col">Name</th>
                                <th scope="col">Total</th>
                                <th scope="col">Cash</th>
								<th scope="col">Due</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 
                                $i=1;
								foreach($amount as $value){

                                    $due=$value->due;
                                    $name=$value->name;
                                    $cash=$value->cash;
                                    $total=$value->total
								?>
								<tr>
									
									<td><?php echo $i++;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $total;?></td>
                                    <td><?php echo $cash;?></td>
                                    <td><?php echo $due;?></td>
									

								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>





	


<?php echo $footer;?>
