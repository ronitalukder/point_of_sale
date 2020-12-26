<?php echo $header;?>
<div class="container-fluid print">
            <div class="row">
                <div class="col-lg-12">
                    <div class="print-logo">
                     <h3><img src="<?php echo base_url();?>/template/assets/img/logo2.png"><span>IQRA IT SOLUTION</span></h3>
                    </div>
                </div>
            </div>
            <div class="row print-address">
                <div class="col-lg-6">
                    <div class="customer-info">
                    <h2>Customer Information</h2>
                     <h4>Name    : Mokbule Hussain</h4>
                     <h4>Mobile  : 01752830296 </h4>
                     <h4>Address : Sylhet </h4>
                    </div>
                </div>
                <div class="col-lg-6">
                     <div class="shop-info">
                         <h2>Shop Information</h2>
                         <h4>Name    : Mokbul Hussain</h4>
                         <h4>Mobile  : 01752830296 </h4>
                         <h4>Address : Sylhet </h4>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 print-table">
                        
                    <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                        
                                        <th scope="col">Index</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Warrenty</th>
                                        <th scope="col">U Price</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Total</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    $itemTotalPrice=0;
                                    $total=0;
                                    $index=1;
                                  

                                    foreach($invoice as $value){

                                    
                                      
                                       
                                        
                                        $invoiceId=$value->invoiceId;
                                        $itemN=$value->itemName;
                                        $serial=$value->serial;
                                        $warrenty=$value->warrenty;
                                        $qty=$value->sellItemQty;
                                        $price=$value->sellItemPrice;

                                         $intotal=$value->invoiceTotal;
                                        $incash=$value->invoiceCash;
                                        $indue=$value->invoiceDue;
                                        $indate=$value->date;

                                        $itemTotalPrice=$qty*$price;
                                        


                                       
                                        
                                    ?>
                                    <tr>
                                       <td><?php echo $index++;?></td>
                                        <td><?php echo $itemN;?></td>
                                        <td><?php echo $serial;?></td>
                                        <td><?php echo $warrenty;?></td>
                                        <td><?php echo $price;?></td>
                                        <td><?php echo $qty;?></td>
                                        <td><?php echo $itemTotalPrice;?></td>
                                    

                                
                     
                              </tr>
                                                        
                                                                
                            
                                    <?php } ?>


                                
                            </tbody>

                            </table>
                            <h3 class="qutationTotal">Total Amount : <?php echo $intotal;?></h3>
                             <h3 class="qutationTotal">Cash : <?php echo $incash;?></h3>
                             <h3 class="qutationTotal">Due : <?php echo $indue;?></h3>
                             <h5>Date : <?php echo $indate;?></h5>

                              <h4 class="print-btn pull-right"><button class="btn btn-primary btn-md" id="invoicePrint">Print</button></h4>

                               <input type="hidden" value="<?php echo $invoiceId;?>" id="inId"/>


                </div>
            </div>
        </div>
<?php echo $footer;?>