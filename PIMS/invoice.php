<?php include "header.php";
    include "salesModel.php";
?>
<style>
    .container{
        margin-top: 10px;
    }
</style>
<section id="main">
    <div class="container">

        <div class="row">
             <div class="col-md-3">
                <div class="list-group">
                    <a href="inventory.php" class="list-group-item main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inventory</a>
                        <a href="staffdash.php" class="list-group-item"> <!--what change does 'active' bring?-->
                        <span class="fa fa-capsules" aria-hidden="true"></span> Medicine Sale</a>
                        <a href="debtor.php" class="list-group-item">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Debtors</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="rounded-0 panel panel-blue">
                <div class="panel-heading rounded-0 main-color-bg">
                    <h3 class="panel-title">Sale Invoice</h3>
                </div>
                </div>
           <div class="panel-body">
           <div class="box-body">
           <table class="table table-striped table-bordered table-hover">
        		<thead>
                <tr>
                    <th style="text-align: center;">Medicine</th>
                    <th style="text-align: center;">Sold Qty</th>
                    <th style="text-align: center;">Unit Selling Price</th>
                    <th style="text-align: center;">Total Amount</th>
                    <th style="text-align: center;">Amount Paid</th>
                    <th style="text-align: center;">Amount Due</th>
                    <th style="text-align: center;">Expiry</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style='text-align: center;'><?php echo $medname;?></td>
                    <td style='text-align: center;'><?php echo $quantity_sold; ?></td>
                    <td style='text-align: center;'><?php echo $unit_price; ?></td>
                    <td style='text-align: center;'><?php echo $bill; ?></td>
                    <td style='text-align: center;'><?php echo $sales_paid; ?></td>
                    <td style='text-align: center;'><?php echo $sales_due; ?></td>
                    <td style='text-align: center;'><?php echo $expirydate; ?></td>
                </tr>
                </tbody>
         </table>  
     
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<?php include "footer.php";?>