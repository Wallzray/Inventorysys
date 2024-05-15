<?php require "header.php";
$db= mysqli_connect('localhost', 'root', '', 'rpims_db');
     $date_from= date($_POST['date_from']);
     $date_to= date($_POST['date_to']);
     $salesum= $db->query("SELECT SUM(sales_amount) FROM sales_info where sales_date between '$date_from' and '$date_to';");
     while($row= mysqli_fetch_array($salesum)){
        $totalsales= round($row[0]);
     }

     $purchasesum= $db->query("SELECT SUM(purchase_amount) FROM purchase_info where purchase_date between '$date_from' and '$date_to';");
     while($row1= mysqli_fetch_array($purchasesum)){
        $totalpurchases= round($row1[0]);
     }
     $profit= $totalsales- $totalpurchases;
     if($profit< 0){
        $comment= "LOSS";
     }
     else{
        $comment="PROFIT";
     }
    ?>
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#" >Account</a></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Account</a>
					<a href="accounting.php"
					   class="list-group-item active">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Profit-Loss</a>
		
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-blue">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title"> Profit-Loss</h3>
					</div>

					<div class="panel-body">

						
						
						<div class="box-body">
						<div class="row">

							<form action="profitModel.php" method="post">	
								<div class="col-sm-4">
								<label for="date_from">From Date <small><i>(Choose Date)</i></small></label>
									<input type="date" class="form-control _datepicker" placeholder="Insert Date" name="date_from">
								</div>

								<div class="col-sm-4">
									<label for="date_to">As of Date <small><i>(Choose Date)</i></small></label>
									<input type="date" class="form-control _datepicker" placeholder="Insert Date" name="date_to">
								</div>
								
							</div>

							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="button" class="pull-left btn btn-primary" name="search_report">Search</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-12" >
				<div class="rounded-0 panel panel-default" >
					<div class="panel-heading rounded-0">
						
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
				<thead>
                <tr>
                    <th style="text-align: center;">As at(Date)</th>
                    <th style="text-align: center;">Total Purchase<br></th>
                    <th style="text-align: center;">Total Sales<br></th>
                    <th style="text-align: center;">Revenue<br></th>
                    <th style="text-align: center;">Comment<br></th>

                    </tr>
                </thead>
				<tbody>
				<div class="row">
                    <td style="text-align: center;"><?php echo $date_to;?></td>
                    <td style="text-align: center;"><?php echo $totalpurchases;?></td>
                    <td style="text-align: center;"><?php echo $totalsales;?></td>
                    <td style="text-align: center;"><?php echo $profit;?></td>
                    <td style="text-align: center;"><?php echo $comment;?></td>
							
				</tbody>
				</table>
					</div>

				</div>
			</div>
		</div> 
	</div> 
</section>

<?php include "footer.php";?>