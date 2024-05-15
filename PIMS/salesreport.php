<?php require "header.php";
      $db= mysqli_connect('localhost', 'root', '', 'rpims_db');
    $date_from= date($_POST['date_from']);
    $date_to= date($_POST['date_to']);
    $salestat= $db->query("SELECT * FROM sales_info where sales_date between '$date_from' and '$date_to'");
    $sales= $db->query("SELECT SUM(sales_paid) FROM sales_info where sales_date between '$date_from' and '$date_to'");
    
    while($row= mysqli_fetch_row($sales)){
        $totalsales= round($row[0]);
    }
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
					<a href="#" class="list-group-item main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sales</a>
                    <a href="sales.php" class="list-group-item active">
						<span class="fa fa-capsules" aria-hidden="true"></span>Sales Statement</a>
				</div>
			</div>
			<div class="col-md-9">		
                <div class="rounded-0 panel panel-blue">
					<div class="panel-heading rounded-0 main-color-bg">
                    <h3 class="panel-title">Sell Report</h3>
                    <h5>Total sales: <?php echo $totalsales; ?></h5>
					</div>
                </div>
            </div>
			<div class="col-md-12" style="min: width 750px;">
				<div class="rounded-0 panel panel-default" >
					<div class="panel-body" >
                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Medicine Name</th>
                        <th>Generic Name</th>
                        <th>Quantity</th>
                        <th>Amount Paid</th>
                        <th>Amount Due</th>
                        <th>Telephone</th>
                      </thead>
                      <?php 
					  foreach($salestat as $stat){?>
                      <tr>
                      <td> <?php echo $stat['sales_id']; ?></td>
                      <td> <?php echo $stat['sales_date']; ?></td>
                      <td> <?php echo $stat['medicine_name']; ?></td>
                      <td> <?php echo $stat['generic_name']; ?></td>
                      <td> <?php echo $stat['qty']; ?></td>
                      <td> <?php echo $stat['sales_paid']; ?></td>
                      <td> <?php echo $stat['sales_due']; ?></td>
                      <td> <?php echo $stat['customer_mobile']; ?></td>
                      </tr>
						<?php session_abort(); };?>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div> 
</section>