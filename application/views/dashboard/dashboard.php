<?php echo $header;?>
    <?php

    // Start Daily Service
    $serviceAllTotal=0;
    $serviceAllCash=0;
    $serviceAllDue=0;
    $allduetotalamount=0;
    $dailycashnow=0;
    $totalamount=0;
    $totaldue=0;
    if($service)
        {
        foreach($service as $value)
        {
            $servicetotal=$value->total;
            $servicecash=$value->cash;
            $servicedue=$value->due;

            // all sum

            $serviceAllTotal=$serviceAllTotal+$servicetotal;
            $serviceAllCash=$serviceAllCash+$servicecash;
            $serviceAllDue=$serviceAllDue+$servicedue;
        }
    } 

    // End Daily Service

    // Start Sell,Cash , Due Code 
     $dailySellTotal=0;
     $dailySellCash=0;
     $dailySellDue=0;
     if($dailySell)
         {
         foreach($dailySell as $dailySellValue)
         {
             $sellTotal=$dailySellValue->invoiceTotal;
             $sellCash=$dailySellValue->invoiceCash;
             $sellDue=$dailySellValue->invoiceDue;

            
             $dailySellTotal=$dailySellTotal+$sellTotal;
             $dailySellCash=$dailySellCash+$sellCash;
             $dailySellDue=$dailySellDue+$sellDue;
         }
     }

    //  End Sell , Cash , Due Code

     // Start Expense Code   
    $dailyExpenseTotal=0;
    if($dailyExpense)
        {
        foreach($dailyExpense as $dailyExpenseValue)
        {
            $expenseTaka=$dailyExpenseValue->expenseTaka;
            $dailyExpenseTotal=$dailyExpenseTotal+$expenseTaka;
        }
    } 
    // Start Expense Code 



     // Start Expense Code   
     $sellcollectionTotal=0;
     if($dailycollection)
         {
         foreach($dailycollection as $value)
         {
             $collection=$value->collection;
             $sellcollectionTotal=$sellcollectionTotal+$collection;
         }
     } 
     // Start Expense Code 



     
     // Start Expense Code   
     $paymentcollectionTotal=0;
     if($paymentcollection)
         {
         foreach($paymentcollection as $value)
         {
             $payment=$value->payment;
             $paymentcollectionTotal=$paymentcollectionTotal+$payment;
         }
     } 
     // Start Expense Code 








    // calculation cash

    $totalamount=$serviceAllTotal+$dailySellTotal;
    $totaldue=$dailySellDue+$serviceAllDue;
    $allduetotalamount=$totalamount-$totaldue;
    $dailycashnow=$allduetotalamount-$dailyExpenseTotal;
    ?>
	<div class="container-fluid">
		<!--========================== START DAILY WIDGET- =========================-->
        <div class="row widget2-row">
            <div class="col-lg-12">
                <h2 class="dateshow">Daily &nbsp <?php echo $date=date('d-m-y');?></h2>
            </div>
            
            <div class="col-lg-2 col-md-6 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-one">
                        <h4 class="title">Total Service</h4>
                        <br/>
                        <span class="total"><?php echo $serviceAllTotal;?> Tk</span>
                      
                       
                    </div>
                </a>
            </div>

            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-two">
                        <h4 class="title">Service Cash</h4>
                        <br/>
                        <span class="total"><?php echo $serviceAllCash;?> Tk</span>
                      
                        
                    </div>
                </a>
            </div>   
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-three">
                        <h4 class="title">Service Due</h4>
                        <br/>
                        <span class="total"><?php echo $serviceAllDue;?> Tk</span>
                     
                        
                    </div>
                </a>
            </div>   
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">total sell</h4>
                        <br/>
                        <span class="total"><?php echo $dailySellTotal;?> Tk</span>
                      
                        
                    </div>
                </a>
            </div>
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Sell Cash</h4>
                        <br/>
                        <span class="total"><?php echo $dailySellCash;?> Tk</span>
                      
                        
                    </div>
                </a>
            </div>    
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Sell Due</h4>
                        <br/>
                        <span class="total"><?php echo $dailySellDue;?> Tk</span>
                      
                        
                    </div>
                </a>
            </div>    
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">total Profit</h4>
                        <br/>
                        <span class="total"><?php echo $profit;?></span>
                      
                        
                    </div>
                </a>
            </div>    
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">total expense</h4>
                        <br/>
                        <span class="total"><?php echo $dailyExpenseTotal;?> Tk</span>
                        
                        
                    </div>
                </a>
            </div>  


            
            <div class="col-lg-2  widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Sell Collection</h4>
                        <br/>
                        <span class="total"><?php echo $sellcollectionTotal;?> Tk</span>
                      
                        
                    </div>
                </a>
            </div>  


                
            <div class="col-lg-2  widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Payment Supplier </h4>
                        <br/>
                        <span class="total"><?php echo $paymentcollectionTotal;?> Tk</span>
                       
                        
                    </div>
                </a>
            </div>      
    
            <div class="col-lg-2  widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Cash Now</h4>
                        <br/>
                        <span class="total"><?php echo $dailycashnow;?> Tk</span>
                       
                        
                    </div>
                </a>
            </div>            
        </div>
        <!--========================== END WIDGET-1 ===========================-->


        <?php

    // Start Daily Service
    $serviceAllTotal=0;
    $serviceAllCash=0;
    $serviceAllDue=0;
    $allduetotalamount=0;
    $dailycashnow=0;
    $totalamount=0;
    $totaldue=0;
    if($mservice)
        {
        foreach($mservice as $value)
        {
            $servicetotal=$value->total;
            $servicecash=$value->cash;
            $servicedue=$value->due;

            // all sum

            $serviceAllTotal=$serviceAllTotal+$servicetotal;
            $serviceAllCash=$serviceAllCash+$servicecash;
            $serviceAllDue=$serviceAllDue+$servicedue;
        }
    } 

    // End Daily Service

    // Start Sell,Cash , Due Code 
     $dailySellTotal=0;
     $dailySellCash=0;
     $dailySellDue=0;
     if($mdailySell)
         {
         foreach($mdailySell as $dailySellValue)
         {
             $sellTotal=$dailySellValue->invoiceTotal;
             $sellCash=$dailySellValue->invoiceCash;
             $sellDue=$dailySellValue->invoiceDue;

            
             $dailySellTotal=$dailySellTotal+$sellTotal;
             $dailySellCash=$dailySellCash+$sellCash;
             $dailySellDue=$dailySellDue+$sellDue;
         }
     }

    //  End Sell , Cash , Due Code

     // Start Expense Code   
    $dailyExpenseTotal=0;
    if($mdailyExpense)
        {
        foreach($mdailyExpense as $dailyExpenseValue)
        {
            $expenseTaka=$dailyExpenseValue->expenseTaka;
            $dailyExpenseTotal=$dailyExpenseTotal+$expenseTaka;
        }
    } 
    // Start Expense Code 


    // calculation cash

    $totalamount=$serviceAllTotal+$dailySellTotal;
    $totaldue=$dailySellDue+$serviceAllDue;
    $allduetotalamount=$totalamount-$totaldue;
    $dailycashnow=$allduetotalamount-$dailyExpenseTotal;
    ?>



        <!--========================== START monthly WIDGET-2 =========================-->
        <div class="row widget2-row">

            <div class="col-lg-12">
                <h2 class="dateshow">Monthly &nbsp <?php echo $date=date('M-y');?></h2>
            </div>
            
            <div class="col-lg-2 col-md-6 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-one">
                        <h4 class="title">Total Service</h4>
                        <br/>
                        <span class="total"><?php echo $serviceAllTotal;?> Tk</span>
                      
                       
                    </div>
                </a>
            </div>

            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-two">
                        <h4 class="title">Service Cash</h4>
                        <br/>
                        <span class="total"><?php echo $serviceAllCash;?> Tk</span>
                       
                        
                    </div>
                </a>
            </div>   
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-three">
                        <h4 class="title">Service Due</h4>
                        <br/>
                        <span class="total"><?php echo $serviceAllDue;?> Tk</span>
                       
                        
                    </div>
                </a>
            </div>   
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">total sell</h4>
                        <br/>
                        <span class="total"><?php echo $dailySellTotal;?> Tk</span>
                     
                        
                    </div>
                </a>
            </div>
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Sell Cash</h4>
                        <br/>
                        <span class="total"><?php echo $dailySellCash;?> Tk</span>
                       
                        
                    </div>
                </a>
            </div>    
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Sell Due</h4>
                        <br/>
                        <span class="total"><?php echo $dailySellDue;?> Tk</span>
                       
                        
                    </div>
                </a>
            </div>    
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">total Profit</h4>
                        <br/>
                        <span class="total"><?php echo $mprofit;?></span>
                       
                        
                    </div>
                </a>
            </div>    
            <div class="col-lg-2 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">total expense</h4>
                        <br/>
                        <span class="total"><?php echo $dailyExpenseTotal;?> Tk</span>
                      
                        
                    </div>
                </a>
            </div>  

            <div class="col-lg-4 widget2-item">
                <a href="#">
                    <div class="widget2-item-content widget2-item-content-four">
                        <h4 class="title">Cash Now</h4>
                        <br/>
                        <span class="total"><?php echo $dailycashnow;?> Tk</span>
                       
                    </div>
                </a>
            </div>            
        </div>
        <!--========================== END WIDGET-2 ===========================-->
	</div>

<?php echo $footer;?>



