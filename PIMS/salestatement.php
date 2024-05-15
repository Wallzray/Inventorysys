<?php require "header.php";
	  require "salesModel.php";
?>

<!-- /.Breadcrumb -->
<section> 
    <div class="container">
    <ol class="breadcrumb">
			<li><a href="#">Sales Report</a></li>
		</ol>
	</div>
</section>

<section class="container">

		<div class="row">
			<div class="col-md-3">
                		<div class="list-group">
					<a href="#" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sales</a>
                    <a href="sales.php" class="list-group-item inactive">
						<span class="fa fa-capsules" aria-hidden="true"></span>Sales Statement</a>
				</div>
			</div>
			<div class="col-md-9">		
                <div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title">Sales Report</h3>
					</div>

			
			<div class="col-md-12" style="min: width 750px;">
				<div class="rounded-0 panel panel-default" >
					<div class="panel-heading rounded-0">
							<h3 class="panel-title">Sell Statement</h3>
					</div>
					<div class="panel-body" >
                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Medicine Name</th>
                        <th>Generic Name</th>
                        <th>Quantity</th>
                        <th>Bill</th>
                        <th>Amount Paid</th>
                        <th>Amount Due</th>
                        <th>Customer Name</th>
                        <th>Telephone</th>
                      </thead>
                      <?php 
					  foreach($salesout as $sales){?>
                      <tr>
                      <td> <?php echo $sales['sales_id']; ?></td>
                      <td> <?php echo $sales['sales_date']; ?></td>
                      <td> <?php echo $sales['medicine_name']; ?></td>
                      <td> <?php echo $sales['generic_name']; ?></td>
                      <td> <?php echo $sales['qty']; ?></td>
                      <td> <?php echo $sales['total_amount']; ?></td>
                      <td> <?php echo $sales['sales_paid']; ?></td>
                      <td> <?php echo $sales['sales_due']; ?></td>
                      <td> <?php echo $sales['customer_name']; ?></td>
                      <td> <?php echo $sales['customer_mobile']; ?></td>
                      </tr>
						<?php };?>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div> 
</section>