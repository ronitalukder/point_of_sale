<?php echo $header;?>
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header border-primary">
                        <span><a href="<?php echo base_url('customer/profile/14');?>">Back</a></span>

                       
                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered" id="example2" >
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Item Name</th>
                                <th>Model</th>
                                <th>Sell Price</th>
                                <th>Qty</th>
                        
                               
                              
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($invoiceitem)
                                {
                                    $index=1;
                                foreach($invoiceitem as $value)
                                {
                                $id=$value->id;
                                $iname=$value->itemName;
                                $imodel=$value->itemModel;
                                $iqty=$value->sellItemQty;
                                $iprice=$value->sellItemPrice;
                           
                               
                                ?>
                                <tr>

                                <td><?php echo $index++;?></td>

                                <td><?php echo $iname;?></td>

                                <td><?php echo $imodel;?></td>

                                <td><?php echo $iprice;?></td>
    
                                <td><?php echo $iqty;?></td>
    
                            
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
