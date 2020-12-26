<?php echo $header;?>
    <!-- All Code  -->

    
    <?php

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

     $totalCash=0;
    if($service)
    {
    foreach($service as $service)
    {
        $serviceCash=$service->cash;
    
        $totalCash=$totalCash+$serviceCash;
    }
}


$cashin=0;
$cashdue=0;
$cashexp=0;

$cashdue=$dailySellCash-$dailyExpenseTotal;

$cashin=$cashdue+$totalCash;



    ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
                <div class="daily-expense">
                    <h3>Expense</h3>
                    <h4><?php echo $dailyExpenseTotal;?></h4>
                </div>
			</div>
            <div class="col-lg-3">
                <div class="daily-sell">
                    <h3>Total Sell </h3>
                    <h4><?php echo $dailySellTotal;?></h4>
                </div>
			</div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="daily-cash">
                        <h3>Sell Cash</h3>
                        <h4><?php echo $dailySellCash;?></h4>
                    </div>
                </a>
			</div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="daily-due">
                        <h3>Sell Due</h3>
                        <h4><?php echo $dailySellDue;?></h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="daily-due">
                        <h3>Total Service</h3>
                        <h4><?php echo $totalCash;?></h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="daily-due">
                        <h3>Total Cash In</h3>
                        <h4><?php echo $cashin;?></h4>
                    </div>
                </a>
            </div>
            
		</div>
	</div>



	


<?php echo $footer;?>
