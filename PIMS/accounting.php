<?php require "header.php";
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
					<a href="#" class="list-group-item active main-color-bg">
					<img src="assets/icons/briefcase-fill.svg"> Account</a>
					<a href="accounting.php"
					   class="list-group-item">
					   <img src="assets/icons/plus-slash-minus.svg"> Profit-Loss</a>
		
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-blue">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title"> Profit-Loss</h3>
					</div>

					<div class="panel-body">

						
						
					<div class="box-body">
					<form action="profitModel.php" method="post">	
						<div class="row">
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
								<button type="submit" class="pull-left btn btn-primary" name="search_report">Search </button>
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

							
				</tbody>
				</table>
					</div>

				</div>
			</div>
		</div> 
	</div> 
</section>

<?php include "footer.php";?>