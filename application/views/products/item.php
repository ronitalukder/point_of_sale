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
								<th scope="col">Item Name</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Cat</th>
                                <th scope="col">Buy</th>
                                <th scope="col">Sell</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Warrenty</th>
                                <th scope="col">Condition</th>
                                <th scope="col">Total</th>
								<th scope="col">Action</th>
								
								</tr>
							</thead>
							<tbody>
                                <?php 
                                $i=1;
                                $totalPriceItem=0;
                                $totalPriceItemSum=0;
								foreach($item as $items){

                                    $itemId=$items->itemId;
                                    $itemName=$items->itemName;
                                    $brandName=$items->brandName;
                                    $itemModel=$items->itemModel;
                                    $catName=$items->catName;
                                    $itemBuy=$items->itemBuyPrice;
                                    $itemSell=$items->itemSellPrice;
                                    $itemQuantity=$items->itemQuantity;
                                    $itemCatId=$items->itemCatId;
                                    $itemBrandId=$items->itemBrandId;
                                    $itemSupplyId=$items->itemSupplyId;
                                    $itemDescription=$items->itemDescription;
                                    $itemCondition=$items->itemCondition;

                                    $totalPriceItem=$itemQuantity*$itemBuy;
                                    $totalPriceItemSum=$totalPriceItemSum+$totalPriceItem;
								?>
								<tr>
									<th scope="row"><?php echo $i++;?></th>
									<td><?php echo $itemName;?></td>
                                    <td><?php echo $brandName;?></td>
                                    <td><?php echo $itemModel;?></td>
                                    <td><?php echo $catName;?></td>
                                    <td><?php echo $itemBuy;?></td>
                                    <td><?php echo $itemSell;?></td>
                                    <td><?php echo $itemQuantity;?></td>
                                    <td><?php echo $itemDescription;?></td>
                                    
                                    <td>

                                    <?php 
                                    if($itemCondition==0){
                                        echo "Damage";

                                    }

                                    elseif($itemCondition==2){
                                        echo "Recondtion";
                                    }

                                    else{
                                        echo " New";
                                    }
                                    
                                    
                                    ?>
                                    </td>
                                    <td><?php echo $totalPriceItem;?></td>
									<td><button class="btn  btn-primary btn-sm btn-size" data-toggle="modal" data-target="#UpdateItem<?php echo $itemId;?>"><i class="fa fa-edit" aria-hidden="true"></i></button>
									&nbsp<a href="<?php echo base_url('products/deleteItem/'.$itemId);?>"><button class="btn  btn-sm btn-danger del btn-size"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
								
									<!-- Start Add Category Modal -->

                                    <div class="modal fade" id="UpdateItem<?php echo $itemId;?>">
                                        <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title btn-md"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp Update Item</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('products/updateItem');?>" method="post">
                                                <input type="hidden" class="form-control" value="<?php echo $itemId;?>" name="itemId">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Name</label>
                                                                <input type="text" class="form-control" value="<?php echo $itemName;?>" name="itemName">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="text">Item Model</label>
                                                                <input type="text" class="form-control" value="<?php echo $itemModel;?>" name="itemModel">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Buy Price</label>
                                                                <input type="text" class="form-control" value=" <?php echo $itemBuy;?>" name="itemBuyPrice">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="text">Item Sell Price</label>
                                                            <input type="number" value="<?php echo $itemSell;?>" class="form-control" name="itemSellPrice">
                                                        </div>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Quantity</label>
                                                                <input type="number" class="form-control" value="<?php echo $itemQuantity;?>" name="itemQuantity">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Item Categorey</label>
                                                                <select class="form-control" name="categoryId" id="exampleFormControlSelect1">
                                                                <?php 
                                                                foreach($category as $cats){
                                                                    $cat =$cats->catName;
                                                                    $cat_id=$cats->id;
                                                                    ?>
                                                        
                                                                <option value="<?php echo $cat_id;?>" <?php if($cat_id=="$itemCatId") echo 'selected="selected"'; ?> ><?php echo $cat;?></option>
                                                                <?php } ?>
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Item Brand</label>
                                                                    <select class="form-control" name="brandId" id="exampleFormControlSelect1">
                                                                    <?php 
                                                                foreach($brands as $brand){
                                                                    $brandName =$brand->brandName;
                                                                    $brand_id=$brand->id;
                                                                    ?>
                                                               <option value="<?php echo $brand_id;?>" <?php if($brand_id=="$itemBrandId") echo 'selected="selected"'; ?> ><?php echo $brandName;?></option>
                                                                <?php } ?>
                                                                    </select>
                                                            </div>
                                                        </div>

                                                         
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">ItemCodition</label>
                                                                    <select class="form-control" name="itemCondition" id="exampleFormControlSelect1">
                                                                   
                                                              
                                                                <option value="1" <?php if(1=="$itemCondition") echo 'selected="selected"'; ?> >New</option>
                                                                <option value="0" <?php if(0=="$itemCondition") echo 'selected="selected"'; ?> >Damage</option>
                                                                <option value="2" <?php if(2=="$itemCondition") echo 'selected="selected"'; ?> >Recondition</option>
                                                              
                                                                    </select>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Supply</label>
                                                                    <select class="form-control" name="supplyId" id="exampleFormControlSelect1">
                                                                    <?php 
                                                                foreach($supply as $supplys){
                                                                    $supplyName =$supplys->supplyName;
                                                                    $supply_id=$supplys->id;
                                                                    ?>
                                                                <option value="<?php echo $supply_id;?>" <?php if($supply_id=="$itemSupplyId") echo 'selected="selected"'; ?> ><?php echo $supplyName;?></option>
                                                                <?php } ?>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text">Item Warrenty</label>
                                                                <input type="text" class="form-control" value="<?php echo $itemDescription;?>" name="itemDescription"></
                                                            </div>
                                                        </div>
                                                        &nbsp &nbsp<button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form> 

                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
	                                <!-- End Update Item Modal -->
								</tr>
								<?php } ?>
							</tbody>
                            <h5 style="text-align:right;"><?php echo $totalPriceItemSum;?></h5>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Start Add Category Modal -->

	<div class="modal fade" id="myModal">
		<div class="modal-dialog  modal-lg">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title btn-md"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Add Suppply</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url('products/addItem');?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Name</label>
                                <input type="text" class="form-control" name="itemName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="text">Item Model</label>
                                <input type="text" class="form-control" name="itemModel">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Purchase Price</label>
                                <input type="number" class="form-control" name="itemBuyPrice">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Sell Price</label>
                                <input type="number" class="form-control" name="itemSellPrice">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Quantity</label>
                                <input type="number" class="form-control" name="itemQuantity">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Item Categorey</label>
                                <select class="form-control" name="categoryId" id="exampleFormControlSelect1">
                                <?php 
                                foreach($category as $cats){
                                    $cat =$cats->catName;
                                    $cat_id=$cats->id;
                                    ?>
                                <option value="<?php echo $cat_id;?>"><?php echo $cat;?></option>
                                <?php } ?>
                                
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Item Brand</label>
                                    <select class="form-control" name="brandId" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($brands as $brand){
                                    $brandName =$brand->brandName;
                                    $brand_id=$brand->id;
                                    ?>
                                <option value="<?php echo $brand_id;?>"><?php echo $brandName;?></option>
                                <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Item Condition</label>
                                    <select class="form-control" name="itemCondition" id="exampleFormControlSelect1">
                                    
                                <option value="1">New</option>
                                <option value="0">Damage</option>
                                <option value="2">Recondtion</option>
                                
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Supply</label>
                                    <select class="form-control" name="supplyId" id="exampleFormControlSelect1">
                                    <?php 
                                foreach($supply as $supplys){
                                    $supplyName =$supplys->supplyName;
                                    $supply_id=$supplys->id;
                                    ?>
                                <option value="<?php echo $supply_id;?>"><?php echo $supplyName;?></option>
                                <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text">Item Warrenty</label>
                                <input type="text" class="form-control" name="itemDescription"/>
                            </div>
                        </div>
                         &nbsp &nbsp<button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
