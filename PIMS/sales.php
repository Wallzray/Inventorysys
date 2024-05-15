<?php require "header.php";
	  require "salesModel.php";
?>

<!-- /.Breadcrumb -->
<section> 
    <div class="container">
    <ol class="breadcrumb">
			<li><a href="#">Sales</a></li>
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
                <div class="rounded-0 panel panel-blue">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title">Sales</h3>
					</div>

					<div class="panel-body">
						<div class="box-body">
                        <form method="post" action= "salesreport.php"> 
							<div class="row">
								<div class="col-sm-6" >
									<label for="date_from">Date From</label>
									<input type="date" class="form-control datepicker" placeholder="Insert Date" name="date_from" autocomplete="off">
								</div>
								<div class="col-sm-6">
									<label for="date_to">Date To</label>
									<input type="date" class="form-control  datepicker" placeholder="Insert Date" name="date_to" autocomplete="off">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="submit" class="pull-left btn btn-primary" name= "search">Search</button>
								</div>
							</div>
                        </form>
						</div>

					</div>
				</div>
			</div>
			
			<div class="col-md-12" style="width 750px;">
				<div class="rounded-0 panel panel-default" >
					<div class="panel-heading rounded-0">
							<h3 class="panel-title">Sell Statement</h3>
					</div>
					<div class="panel-body" >
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Medicine Name</th>
                        <th>Generic Name</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                        <th>Amount Paid</th>
                        <th>Amount Due</th>
                      </thead>
                      <?php 
					  foreach($salesout as $sales){?>
                      <tr>
                      <td> <?php echo $sales['sales_id']; ?></td>
                      <td> <?php echo $sales['sales_date']; ?></td>
                      <td> <?php echo $sales['medicine_name']; ?></td>
                      <td> <?php echo $sales['generic_name']; ?></td>
                      <td> <?php echo $sales['qty']; ?></td>
                      <td> <?php echo $sales['sales_amount']; ?></td>
                      <td> <?php echo $sales['sales_paid']; ?></td>
                      <td> <?php echo $sales['sales_due']; ?></td>
                      </tr>
						<?php };?>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div> 
</section>

<?php include "footer.php";?>